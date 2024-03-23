@extends('master')
@section('content')
<div class="container mt-3 mb-3">
    <div class="row">
        <h5 class="mt-5">Result for Products</h5>
        <div class="col-md-4">
           Filter
        </div>
        <div class="col-md-8">
            <div class="trending-wrapper">
                @foreach ($query as $item)
                <div class="trending-item">
                    <a href="detail/{{$item['id']}}">
                        <img src="{{$item['gallery']}}" class="d-block w-20 trending-img" alt="...">
                    <div class="">
                      <h5>{{$item['name']}}</h5>
                      <p>{{$item['description']}}</p>
                    </div>
                    </a>
                  </div>
                @endforeach
            </div>
        </div>
          
</div>
</div>
@endsection