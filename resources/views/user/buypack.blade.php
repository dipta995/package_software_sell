@extends('layouts.master')
@section('content')
<section id="contact-us" class="contact-us section-bg">
	<div class="container">
		<div class="row">

			<div class="title text-center wow fadeIn" data-wow-duration="500ms">
				<h2>{{ $pack->pack_name }} Pack <span class="color"> Buy</span></h2>
				<div class="border"></div>
			</div>
			<!-- /section title -->

			<!-- Contact Details -->
			<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
				<h3>{{ $pack->pack_name }} Details</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
				<div class="contact-details">
					@php
                        echo $pack->details;
                    @endphp
				</div>
			</div>
			<!-- / End Contact Details -->

			<!-- Contact Form -->
			<div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
				<form id="contact-form" method="post" action="{{ url('/buy_pack') }}" role="form">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
@csrf
					<div class="form-group">
						<input type="text" placeholder="Company Name" class="form-control" name="company_name" id="name">
					</div>

					<div class="form-group">
						<input type="email" placeholder="Company Email" class="form-control" name="company_email" id="email">
					</div>

					<div class="form-group">
						<input type="text" placeholder="Company Hotline Number" class="form-control" name="company_hotline" id="subject">
					</div>
                    <div class="form-group">
						<input type="text" value="{{ time() }}" class="form-control" name="sleep_no" id="subject">
                        <input type="hidden" value="{{ $pack->id }}" name="pack_id">

					</div>
                    <div class="form-group">
						<input type="text" readonly placeholder="You Will Get your domain name soon" class="form-control"  id="subject">
					</div>

					<div class="form-group">
						<textarea rows="6" placeholder="Company Location" class="form-control" name="company_location" id="message"></textarea>
					</div>

					{{-- <div id="mail-success" class="success">
						Thank you. The Mailman is on His Way :)
					</div>

					<div id="mail-fail" class="error">
						Sorry, don't know what happened. Try later :(
					</div> --}}

					<div id="cf-submit">
						<input type="submit" name="ordercreate" id="contact-submit" class="btn btn-transparent" value="Submit">
					</div>

				</form>
			</div>
			<!-- ./End Contact Form -->

		</div> <!-- end row -->
	</div> <!-- end container -->



</section> <!-- end section -->




@stop
