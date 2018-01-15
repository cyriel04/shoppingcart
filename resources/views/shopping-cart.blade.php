@extends('layouts.app')

@section('title')
    Shopping Cart
@endsection

@section('content')

	@if(Session::has('cart'))
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<ul class="list-group">
					@foreach($products as $product)						
					<li class="list-group-item">
							<span class="badge">{{ $product['qty'] }}</span>
							<strong>{{ $product['item']['title'] }}</strong>
							<span class="label label-success">{{ $product['price'] }}</span>
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li><a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">Reduce by 1</a></li>
									<li><a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">Reduce All</a></li>
								</ul>
							</div>
						</li>
					@endforeach
				</ul>
			</div>
		</div>


		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<strong>Total: {{ $totalPrice }}</strong>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
			</div>
		</div>
	@else
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<h2>No items in Cart</h2>
			</div>
		</div>

	@endif


@endsection



@section('js')
<script>

$(function() {
    var $form = $('#checkout-form');
    $form.submit(function(event) {
        $('#charge-error').addClass('hidden');

        // Disable the submit button to prevent repeated clicks:
        $form.find('.submit').prop('disabled', true);

        // Request a token from Stripe:
        Stripe.card.createToken($form, stripeResponseHandler);

        // Prevent the form from being submitted:
        return false;
    });

    function stripeResponseHandler(status, response) {
        if(response.error) {
            $('#charge-error').removeClass('hidden');
            $('#charge-error').text(response.error.message);
            $form.find('button').prop('disabled', false);
        } else {
            var token = response.id;
            $form.append($('<input type="hidden" name="stripeToken">').val(token));

            // submits the form
            $form.get(0).submit();
        }
    };
});

</script>
@endsection