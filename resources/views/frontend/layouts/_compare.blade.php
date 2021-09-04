@if(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->count() <=0)
    <p class="text-center">You don't have any items in compare list</p>
@else
    <table class="table table-bordered mb-0">
    <tbody>
        <tr>
            <td class="com-title">Product Image</td>
            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $item)
                @php
                    $photo=explode(',',$item->model->photo);
                @endphp
            <td class="com-pro-img">
                <a href="{{route('product.detail',$item->model->slug)}}"><img src="{{asset($photo[0])}}" alt=""></a>
            </td>
            @endforeach
        </tr>
        <tr>
            <td class="com-title">Product Name</td>
            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $item)
                <td><a href="{{route('product.detail',$item->model->slug)}}">{{$item->name}}</a></td>
            @endforeach
        </tr>
        <tr>
            <td class="com-title">Rating</td>
            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $item)

            <td>

                <div class="rating">
                    @for($i=0; $i<5; $i++)
                        @if(round($item->model->reviews->avg('rate'))>$i)
                            <i class="fa fa-star" aria-hidden="true"></i>
                        @else
                            <i class="far fa-star" aria-hidden="true"></i>
                        @endif
                    @endfor
                </div>
            </td>
            @endforeach
        </tr>
        <tr>
            <td class="com-title">Price</td>
            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $item)
                <td>{{Helper::currency_converter($item->price)}}</td>
            @endforeach
        </tr>
        <tr>
            <td class="com-title">Description</td>
            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $item)
                <td>{!! nl2br($item->model->summary) !!}
                </td>
            @endforeach
        </tr>
        <tr>
            <td class="com-title">Category</td>
            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $item)
                <td>{{$item->model->category['title']}}</td>
            @endforeach
        </tr>
        <tr>
            <td class="com-title">Brand</td>
            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $item)
                <td>{{$item->model->brand['title']}}</td>
            @endforeach
        </tr>
        <tr>
            <td class="com-title">Availability</td>
            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $item)
                @if($item->model->stock>0)
                    <td class="instock">Instock</td>
                @else
                    <td class="outofstock">Out Of Stock</td>
                @endif
            @endforeach
        </tr>
        <tr>
            <td class="com-title"></td>
            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->content() as $item)
                <td class="action">
                        <a href="javascript:;" data-id="{{$item->rowId}}" class="mb-1 compare_addTocart move-to-cart"><i class="icofont-shopping-cart"></i></a>
                        <a href="javascript:;" data-id="{{$item->rowId}}" class="mb-1 compare_addWishlist move-to-wishlist"><i class="icofont-heart"></i></a>
                        <a href="javascript:;" data-id="{{$item->rowId}}" class="mb-1 remove_from_compare delete-compare"><i class="icofont-close"></i></a>
                </td>
            @endforeach

        </tr>
    </tbody>
</table>
@endif

