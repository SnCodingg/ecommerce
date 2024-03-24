@extends('master')
@section('content')

<div class="container mt-5 mb-5">
  <div class="row">
    
    <table class="table">
        <tbody>
          <tr>
            <td>Price</td>
            <td>{{$price}} Rupees</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>0</td>
          </tr>
          <tr>
            <td>Deleivery</td>
            <td>100</td>
          </tr>
          <tr>
            <td><b>Total Amount</b></td>
            <td><b>{{$price + 100}}</b></td>
          </tr>
        </tbody>
      </table>

      <div class="col-md-4">
        <form method="POST" action="orderplace">
            @csrf
            <div class="mb-3">
                <textarea placeholder="enter yoyr address"  name="address" class="form-control" > </textarea>
            </div>
            <div class="mb-3">
                <label for=""><b>Payment Method</b></label><br><br>
                <p><input type="radio"  value="cash" name="payment"> <span>Online Payment</span>  </p>
                <p><input type="radio"  value="cash"  name="payment"> <span>EMI Payment</span>  </p>
                <p><input type="radio" value="cash"  name="payment"> <span>Payment on Delivery</span>  </p>
            </div>
            <button type="submit" class="btn btn-primary">Order Now</button>
          </form>
      </div>
  </div>
</div>
@endsection