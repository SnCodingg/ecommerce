@extends('master')
@section('content')
<div class="container mt-3 mb-3">
    <div class="row">
      <div class="col-md-6">
        <img src="{{$details['gallery']}}" class="detail-img" />
      </div>
      <div class="col-md-6 mt-4">
        <a href="/">Go Back</a>
        <h3>Name : {{$details['name']}}</h3>
        <p>Description : {{$details['description']}}</p>
        <p>Category : {{$details['category']}}</p>
        <p>Price : {{$details['price']}}</p>
        <br><br>
        <form action="/add_to_cart" method="post">
          @csrf
          <input type="hidden" name="product_id" value="{{$details['id']}}">
          <button class="btn btn-primary">Add to Cart</button>
        </form>
        <br><br>
        <button class="btn btn-success">Buy Now</button>
        
      </div>
</div>
</div>
@endsection