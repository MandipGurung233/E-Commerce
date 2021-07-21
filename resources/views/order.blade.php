@extends('main')
@section("content")
@if ($errors->any())
    <div class="alert alert-danger">
            <strong>Sorry!</strong> There were some problems with your input.<br><br>
            <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
            </ul>
    </div>
@endif
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">

            <tbody>
              <tr>
                <td>Amount</td>
                <td>$ {{ $total }}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>$ {{ $total + 10}}</td>
              </tr>
              
            </tbody>
          </table>
          <div>
            <form action="/ordered" method="POST">
                @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method:</label> <br><br>
                  <input type="radio" value = "cash" name="payment"><span>Online Payment</span> <br><br>
                  <input type="radio" value = "cash" name="payment"><span>EMI payment</span><br><br>
                  <input type="radio" value = "cash" name="payment"><span>Payment on delivery</span><br><br>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
            </form>
          </div>
    </div>
</div>
@endsection