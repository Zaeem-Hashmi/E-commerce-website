@include('master');
@include('header');

<div class="container">
    <h1>
        {{Session::get('user')->name}} Orders
    </h1>
    <div class="row">
        @foreach ($product as $item)
        <div class="col-md-3 my-4">
            <div class="container border p-3">
                <img src="{{$item->image}}" alt="" width="100%" height="200px">
                <p>Name : {{$item->name}}</p>
                <p>Delivery Status : {{$item->status}}</p>
                <p>Address : {{$item->address}}</p>
                <p>Payment Status : {{$item->payment_status}}</p>
                <p>Payment Method : {{$item->payment_method}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include('footer');