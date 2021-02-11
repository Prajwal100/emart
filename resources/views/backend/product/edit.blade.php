@extends('backend.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Edit Product</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Products</li>
                            <li class="breadcrumb-item active">Edit Product</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <form action="{{route('product.update',$product->id)}}" method="post">
                                @csrf
                                @method('patch')
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Title" name="title" value="{{$product->title}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Summary <span class="text-danger">*</span></label>
                                            <textarea id="summary" class="form-control" placeholder="Some text..." name="summary" >{{$product->summary}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea id="description" class="form-control description" placeholder="Write some text..." name="description">{{$product->description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Stock <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" placeholder="Stock" name="stock" value="{{$product->stock}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Price <span class="text-danger">*</span></label>
                                            <input type="number" step="any" class="form-control" placeholder="Price" name="price" value="{{$product->price}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Discount</label>
                                            <input type="number" min="0" max="100" step="any" class="form-control" placeholder="Discount" name="discount" value="{{$product->discount}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Photo</label>
                                            <div class="input-group">
                                           <span class="input-group-btn">
                                             <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                               <i class="fa fa-picture-o"></i> Choose
                                             </a>
                                           </span>
                                                <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$product->photo}}">
                                            </div>
                                            <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Size Guide</label>
                                            <div class="input-group">
                                           <span class="input-group-btn">
                                             <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                                               <i class="fa fa-picture-o"></i> Choose
                                             </a>
                                           </span>
                                                <input id="thumbnail1" class="form-control" type="text" name="size_guide" value="{{$product->size_guide}}">
                                            </div>
                                            <div id="holder1" style="margin-top:15px;max-height:100px;"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label for="">Brands</label>
                                        <select name="brand_id" class="form-control show-tick">
                                            <option value="">-- Brands --</option>
                                            @foreach(\App\Models\Brand::get() as $brand)
                                                <option value="{{$brand->id}}" {{$brand->id==$product->brand_id? 'selected' : ''}}>{{$brand->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label for="">Category</label>
                                        <select id="cat_id" name="cat_id" class="form-control show-tick">
                                            <option value="">-- Category --</option>
                                            @foreach(\App\Models\Category::where('is_parent',1)->get() as $cat)
                                                <option value="{{$cat->id}}" {{$cat->id==$product->cat_id? 'selected' : ''}}>{{$cat->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 d-none" id="child_cat_div">
                                        <label for="">Child Category</label>
                                        <select id="chil_cat_id" name="child_cat_id" class="form-control show-tick">
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label for="">Size</label>
                                        <select name="size" class="form-control show-tick">
                                            <option value="">-- Size --</option>
                                            <option value="S" {{$product->size=='S' ? 'selected' : ''}}>Small</option>
                                            <option value="M" {{$product->size == 'M' ? 'selected' : ''}} >Medium</option>
                                            <option value="L" {{$product->size == 'L' ? 'selected' : ''}} >Large</option>
                                            <option value="XL" {{$product->size == 'XL' ? 'selected' : ''}} >Extra Large</option>
                                        </select>
                                    </div> <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label for="">Condition</label>
                                        <select name="conditions" class="form-control show-tick">
                                            <option value="">-- Conditions --</option>
                                            <option value="new" {{$product->conditions=='new' ? 'selected' : ''}}>New</option>
                                            <option value="popular" {{$product->conditions == 'popular' ? 'selected' : ''}} >Popular</option>
                                            <option value="winter" {{$product->conditions == 'winter' ? 'selected' : ''}} >Winter</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label for="">Vendors</label>
                                        <select name="vendor_id" class="form-control show-tick">
                                            <option value="">-- Vendors --</option>
                                            @foreach(\App\Models\User::where('role','vendor')->get() as $vendor)
                                                <option value="{{$vendor->id}}" {{$vendor->id==$product->vendor_id? 'selected' : ''}}>{{$vendor->full_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Additional Information</label>
                                            <textarea id="description" class="form-control description" placeholder="Write some text..." name="additional_info">{{$product->additional_info}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Return & Cancellation</label>
                                            <textarea id="description" class="form-control description" placeholder="Write some text..." name="return_cancellation">{{$product->return_cancellation}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-sm-12">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control show-tick">
                                            <option value="">-- Status --</option>
                                            <option value="active" {{$product->status=='active' ? 'selected' : ''}}>Active</option>
                                            <option value="inactive" {{$product->status == 'inactive' ? 'selected' : ''}} >Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection

@section('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm,#lfm1').filemanager('image');
    </script>

    <script>
        $(document).ready(function() {
            $('.description').summernote();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#summary').summernote();
        });
    </script>
    <script>

        var child_cat_id={{$product->child_cat_id}};
        $('#cat_id').change(function(){
            var cat_id=$(this).val();

            if(cat_id !=null){
                $.ajax({
                    url:"/admin/category/"+cat_id+"/child",
                    type:"POST",
                    data:{
                        _token:"{{csrf_token()}}",
                        cat_id:cat_id,
                    } ,
                    success:function(response){
                        var html_option="<option value=''>--- Child Category---</option>";
                        if(response.status){
                            $('#child_cat_div').removeClass('d-none');
                            $.each(response.data,function(id,title){
                                html_option +="<option value='"+id+"' "+(child_cat_id==id ? 'selected' : '')+">"+title+"</option>"
                            });
                        }
                        else{
                            $('#child_cat_div').addClass('d-none');
                        }
                        $('#chil_cat_id').html(html_option);
                    }
                });
            }
        });

        if(child_cat_id !=null){
            $('#cat_id').change();
        }
    </script>
@endsection
