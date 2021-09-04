<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::where(['added_by'=>'seller','user_id'=>auth('seller')->user()->id])->orderBy('id','DESC')->get();
        return view('seller.product.index',compact('products'));
    }

    public function productStatus(Request $request){
        if($request->mode=='true'){
            DB::table('products')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('products')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Successfully updated status','status'=>true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth('seller')->user()->is_verified){
            return view('seller.product.create');
        }
        else{
            return back()->with('error','You need verified your account');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'string|required',
            'summary'=>'string|required',
            'description'=>'string|nullable',
            'additional_info'=>'string|nullable',
            'return_cancellation'=>'string|nullable',
            'stock'=>'nullable|numeric',
            'price'=>'nullable|numeric',
            'discount'=>'nullable|numeric',
            'photo'=>'required',
            'size_guide'=>'nullable',
            'cat_id'=>'required|exists:categories,id',
            'child_cat_id'=>'nullable|exists:categories,id',
            'size'=>'nullable',
            'conditions'=>'nullable',
            'status'=>'nullable|in:active,inactive',
        ]);

        $data=$request->all();

        $slug=Str::slug($request->input('title'));
        $slug_count=Product::where('slug',$slug)->count();
        if($slug_count>0){
            $slug = $slug.'-'.Str::random(4);
        }
        $data['slug']=$slug;

        $data['added_by']='seller';
        $data['user_id']=auth('seller')->user()->id;


        $data['offer_price']=($request->price-(($request->price*$request->discount)/100));

//        return $data;
        $status=Product::create($data);
        if($status){
            return redirect()->route('seller-product.index')->with('success','Product successfully created');
        }
        else{
            return back()->with('error','Something went wrong!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
        $productattr=ProductAttribute::where('product_id',$id)->orderBy('id','DESC')->get();
        if($product){
            return view('backend.product.product-attribute',compact(['product','productattr']));
        }
        else{
            return back()->with('error','Product not found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        if($product){
            return view('seller.product.edit',compact(['product']));
        }
        else{
            return back()->with('error','Category not found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::find($id);
        if($product){
            $this->validate($request,[
                'title'=>'string|required',
                'summary'=>'string|required',
                'description'=>'string|nullable',
                'additional_info'=>'string|nullable',
                'return_cancellation'=>'string|nullable',
                'stock'=>'nullable|numeric',
                'price'=>'nullable|numeric',
                'discount'=>'nullable|numeric',
                'photo'=>'required',
                'size_guide'=>'nullable',
                'cat_id'=>'required|exists:categories,id',
                'child_cat_id'=>'nullable|exists:categories,id',
                'size'=>'nullable',
                'conditions'=>'nullable',
                'status'=>'nullable|in:active,inactive',
            ]);

            $data=$request->all();

            $data['offer_price']=($request->price-(($request->price*$request->discount)/100));

//            return $data;
            $status=$product->fill($data)->save();
            if($status){
                return redirect()->route('seller-product.index')->with('success','Product successfully updated');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('error','Product not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        if($product){
            $status=$product->delete();
            if($status){
                return redirect()->route('seller-product.index')->with('success','Product successfully deleted');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('error','Data not found');
        }
    }

    public function addProductAttributeDelete($id)
    {
        $productattr=ProductAttribute::find($id);
        if($productattr){
            $status=$productattr->delete();
            if($status){
                return redirect()->back()->with('success','Product attribute successfully deleted');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('error','Data not found');
        }
    }

    public function addProductAttribute(Request $request,$id){

        $data= $request->all();

        foreach($data['original_price'] as $key=>$val){
            if(!empty($val)){
                $attribute=new ProductAttribute;
                $attribute['original_price']=$val;
                $attribute['offer_price']=$data['offer_price'][$key];
                $attribute['stock']=$data['stock'][$key];
                $attribute['product_id']=$id;
                $attribute['size']=$data['size'][$key];
                $attribute->save();

            }
        }
        return redirect()->back()->with('success','Product attribute successfully added');
    }

    public function filterPriceWithSize(Request $request,$id){
        $productAttr=ProductAttribute::where(['product_id'=>$id,'size'=>$request->size])->first();
        return response()->json(['status'=>true,'msg'=>'Success','data'=>$productAttr]);
    }
}
