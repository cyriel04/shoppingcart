@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
@if(Session::has('success'))
<div class="row">
  <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset3">
    <div id="charge-message" class="alert alert-success">
      {{ Session::get('success') }}
    </div>
  </div>
</div>
@endif
@foreach($products->chunk(3) as $productChunk)
<div class="row">
	@foreach($productChunk as $product)
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{ $product -> imagePath }}" alt="HAHA" style="height:150px" class="img-responsive">
      <div class="caption">
        <h3>{{ $product -> title }}</h3>
        <p class="desc">{{ $product -> desc }}</p>
        <div class="clearfix">
        <div class="ui center labeled input">
        <div class="ui label">Php</div>
        <div class="pull-left"><h3>{{ $product -> price }}</h3></div>
        </div>
        <a href="{{ route('product.addToCart', ['id' => $product-> id]) }}" class="ui green large button pull-right" role="button">Add to Cart</a>
        </div>

        </div>
      </div>
    </div>
    @endforeach
</div>
@endforeach

@endsection






@section('js')

@endsection
			

