<div class="navbar navbar-dark bg-dark box-shadow">
    <nav class="nav__shoppingbasket__right">
            <i class="fas fa-shopping-cart" style="color: white"></i>
        <a href="{{route('product.reduceOneItem')}}">
        <b><i class="minus">-</i></b>
        </a>
            <h4 class="nav__amount__products"><span class="badge badge-success">Amount {{ Session::has('shoppingbasket')
            ? Session::get('shoppingbasket')->totalQuantity : 0 }}</span></h4>
        <h4 class="nav__amount__products"><span class="badge badge-success">Price in total {{ Session::has('shoppingbasket')
            ? Session::get('shoppingbasket')->priceInTotal : 0 }}</span></h4>
        <a href="{{route('product.removeAllProducts')}}">
            <span type="submit" class="badge badge-danger">Remove products</span >
        </a>

    </nav>
</div>