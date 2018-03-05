@extends ('layouts/master')
@section('content')
    <section class="text-center">
    <h1 class="jumbotron-heading">Wonderful beers</h1>
        <p class="lead text-muted">Buy beer and get drunk</p>
    <p class="lead text-muted">Free loyality cards for everyone!</p>
    </section>
    @foreach ($products as $product)
        <div class="row justify-content-center align-items-center">
            <div class="product__container card-deck mb-3 text-center">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal"></h4>
                        <input type="hidden" name="name" value="">
                    </div>
                    <div class="card-body">
                        <img src="{{$product->image}}" width="200px" height="200px" \>
                        <h1 class="card-title pricing-card-title">
                            <small>£{{$product->price}}</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                        </ul>
                        <a href="{{route('product.addProduct',['id'=> $product->id])}}">
                            <button type="submit" class="btn btn-lg btn-success">Add to cart
                            </button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
@endsection
