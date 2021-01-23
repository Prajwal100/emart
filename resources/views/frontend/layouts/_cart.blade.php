
    <table class="table">
    <thead class="thead-bg">
    <tr>
        <th class="product">Product</th>
        <th class="price">Price</th>
        <th class="quantity">Quantity</th>
        <th class="total">Total</th>
        <th class="remove">Close</th>
    </tr>
    </thead>

            <tbody>
            @if(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->count()>0)

                @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $item)
            <tr class="row-{{$item->rowId}}">
                <td class="product d-flex">
                    <div class="product-img">
                        <img src="{{$item->model->photo}}" alt="product">
                    </div>
                    <div class="product-content media-body">
                        <h4 class="product-title">{{$item->title}}</h4>
                        <p class="text">{{$item->model->summary}}</p>
                    </div>
                </td>
                <td class="price">
                    <div class="product-Price">
                        <span>${{number_format($item->model->offer_price,2)}} <del>${{$item->model->price,2}}</del></span>
                    </div>
                </td>
                <td class="quantity">
                    <div class="product-quantity d-flex justify-content-center" id="quantity">
                        <button type="button" id="sub" class="sub">-</button>
                        <input type="text" id="1" value="0" />
                        <button type="button" id="add" class="add">+</button>
                    </div>
                </td>
                <td class="total">
                    <div class="product-Price">
                        <span>$190.00</span>
                    </div>
                </td>
                <td class="remove">
                    <div class="product-remove">
                        <a href="javascript:void(0);" data-id="{{$item->rowId}}" class="cart_delete"><i class="lni lni-close"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
            @else
                <tr>
                    <td colspan="5">Cart is empty</td>
                </tr>
            @endif
            </tbody>

</table>

