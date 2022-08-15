@include('master');
@include('header');

<div class="container">
    <h1>
        {{Session::get('user')->name}} Cart
    </h1>
    <a href="/orderNow" class="btn btn-outline-success">orderNow</a>
    <div class="row">
        @foreach ($product as $item)
        <div class="col-md-3 my-4">
            <div class="container border p-3">
                <img src="{{$item->image}}" alt="" width="100%" height="200px">
                <p>{{$item->name}}||{{$item->price}}$ <a href="/remove/{{$item->cart_id}}" class="btn btn-warning">Remove</a></p>
            </div>
        </div>
        @endforeach
    </div>
    <a href="/orderNow" class="btn btn-outline-success">orderNow</a>
</div>

@include('footer');