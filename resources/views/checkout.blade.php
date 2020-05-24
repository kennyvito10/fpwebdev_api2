@extends('layout/dashboard')

@section('container')
<head>

<link rel="stylesheet" type="text/css" href="styles/checkout.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
</head>

	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/cart.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="{{url('/')}}">Home</a></li>
										<li>Checkout</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Checkout -->
	
	<div class="checkout">
		<div class="container">
			<div class="row">

			<div class="col-lg-6">
					<div class="order checkout_section">
						<div class="section_title">Your order</div>
						<div class="section_subtitle">Order details</div>

						<!-- Order details -->
						<div class="order_list_container">
							<div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
								<div class="order_list_title">Product</div>
								<div class="order_list_value ml-auto">Total</div>
							</div>
							<ul class="order_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Cocktail Yellow dress</div>
									<div class="order_list_value ml-auto">$59.90</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Subtotal</div>
									<div class="order_list_value ml-auto">$59.90</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Shipping</div>
									<div class="order_list_value ml-auto">Free</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Total</div>
									<div class="order_list_value ml-auto">$59.90</div>
								</li>
							</ul>
						</div>
				</div>
			</div>

			<div class="col-lg-6">
					<div class="order checkout_section">
						<div class="section_title">Payment Method</div>
						

						<!-- Payment Options -->
						<div class="payment">
							<div class="payment_options">
								<label class="payment_option clearfix">Transfer to Virtual Account
									<input type="radio" name="radio">
									<span class="checkmark"></span>
								</label>
								<label class="payment_option clearfix">Cash on Delivery
									<input type="radio" name="radio">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>

						<!-- Order Text -->
						<div class="order_text">*Payments are only in BCA Virtual Account or Cash On Delivery</div>
						<div class="button order_button"><a href="#">Place Order</a></div>
					</div>
				</div>				
			</div>
		</div>
	</div>



@endsection