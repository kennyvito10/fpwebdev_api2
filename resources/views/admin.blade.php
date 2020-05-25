
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ url('styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ url('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ url('styles/contact.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('styles/contact_responsive.css') }}">
</head>




	<!-- Contact -->
	
	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-8 contact_col">
					<div class="get_in_touch">
						<div class="section_title">Admin Sign In</div>
						<div class="contact_form_container">
						@if(session()->has('message'))
                    					{{ session()->get('message') }}
                						@endif
						{{ Form::open(array('action' => 'signinController@admin')) }}
						@csrf

								<div class="row">
									<div class="col-xl-6">
										<!-- Email -->
										
										<label for="contact_name">Admin</label>
										<input type="text" name="adminuser" id="email" class="contact_input" required="required">
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Password -->
										<label for="contact_last_name">Password*</label>
										<input type="password" name="pw" id="password" class="contact_input" required="required">
									</div>
								</div>

								<button class="button contact_button"><span>Sign In</span></button>
							</form>
						</div>
					</div>
				</div>

				
			</div>
			<div class="row map_row">
				<div class="col">


				</div>
			</div>
		</div>
	</div>
	

	
	
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
