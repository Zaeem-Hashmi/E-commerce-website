@include('master')
@include('header')

<div class="container">
    <div class="row pt-5">
        <div class="col-md-6">
            <img src="{{$product->image}}" alt="" width="100%" height="500px">
        </div>
        <div class="col-md-6">
            <div class="container">
                <a href="/">Go back</a>
                <h1>
                    {{$product->name}}
                </h1>
                <p>
                   " {{$product->description}}  "
                </p>
                <h1>
                    Category
                </h1>
                <p>
                    {{$product->category}}
                </p>
                <h1>
                    Price
                </h1>
                <p>
                    {{$product->price}} $
                </p>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="number" hidden value="{{$product->id}}" name="product_id">
                    <button type="submit" class="btn btn-primary">
                        Add to Cart
                    </button>
                </form>
                <form action="" method="POST">
                    @csrf
                    <input type="number" hidden value="{{$product->id}}" name="product_id">
                    <button type="submit" class="btn btn-primary">
                        Buy Now
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('footer')