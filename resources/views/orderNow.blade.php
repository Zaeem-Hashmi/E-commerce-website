@include('master')
@include('header')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <table class="table text-center my-5" border="1px">
                <tr>
                    <td>
                        Amount
                    </td>
                    <td>
                        {{$total}}
                    </td>
                </tr>
                <tr>
                    <td>
                        TAX
                    </td>
                    <td>
                        $0
                    </td>
                </tr>
                <tr>
                    <td>
                        Delivery
                    </td>
                    <td>
                        $10
                    </td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>
                        ${{$total+10}}
                    </td>
                </tr>
            </table>
            <form action="/orderPlace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="address" placeholder="Enter Your Address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="payment" class="fw-bolder fs-3">Payment Method</label><br>
                    <input type="radio" value="Online" name="payment"><span>Online Payment</span> <br><br>
                    <input type="radio" value="Emi method" name="payment"><span>Emi Payment</span><br><br>
                    <input type="radio" value="COD" name="payment"><span>Cash On Deliver</span><br><br>
                </div>
                <button type="submit" class="btn btn-secondary">orderNow</button>
            </form>
        </div>
    </div>
</div>

@include('footer')