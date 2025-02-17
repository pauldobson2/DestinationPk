@extends('website.master')
@section('content')
		<!-- Banner Section -->
		<section class="inner-banner">
			<div class="image-layer" style="background-image: url(assets/images/resources/featured/Ratti_Gali_Lake.webp);">
			</div>
			<div class="auto-container">
				<div class="content-box">
					<h1>Contact</h1>
					<div class="bread-crumb">
						<ul class="clearfix">
							<li><a href="{{ route('home') }}" title="Destination Pakistan">Home</a></li>
							<li class="current">Contact</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--End Banner Section -->

        <!--Contact Section-->
        <section class="contact-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Info Col-->
                    <div class="info-col col-lg-4 col-md-12 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="info">
                                <ul>
                                    <li class="location">
                                        <i class="icon fa fa-map-marker-alt"></i>
                                        <h5>Location</h5>
                                        <div class="travilo-text">412-E Johar Town Lahore, Pakistan</div>
                                    </li>
                                    <li class="phone">
                                        <i class="icon fa-solid fa-phone"></i>
                                        <h5>Phone</h5>
                                        <div class="travilo-text"><a href="tel:+923494096697">+92 349 409 6697</a></div>
                                        <div class="travilo-text"><a href="tel:+923091018431">+92 309 101 8431</a></div>
                                    </li>
                                    <li class="email">
                                        <i class="icon fa fa-envelope"></i>
                                        <h5>Email</h5>
                                        <div class="travilo-text"><a href="mailto:admin@destinationpk.com">admin@destinationpk.com</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Form Col-->
                    <div class="form-col col-lg-8 col-md-12 col-sm-12">
                        <div class="inner wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <h3>Send Us A Message</h3>
                            <div class="form-box site-form">
                                <div class="alert alert-success d-none" id="successMessage">Your email has been successfully sent! Our team will get in touch with you shortly.</div>
                                <div class="alert alert-danger d-none" id="errorMessage">Sorry! Something went wrong while sending your email. Please try again later.</div>
                                 <form method="post" action="" id="contact-form">
                                    @csrf
                                    <div class="row clearfix">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Your name" required>
                                            </div>
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Your email" required>
                                            </div>
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- Other form fields... -->
                                        <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <textarea name="message" placeholder="Start writing your message here" required>{{ old('message') }}</textarea>
                                            </div>
                                            @error('message')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <button disabled type="submit" class="theme-btn btn-style-one"><span>Submit Query</span></button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </section>
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#contact-form').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                $.ajax({
                    url: '{{ route("send_contact_email") }}',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#successMessage').removeClass('d-none').text(response.success);
                        $('#errorMessage').addClass('d-none');
                        $('#contact-form')[0].reset(); // Reset the form
                    },
                    error: function(xhr) {
                        if (xhr.responseJSON && xhr.responseJSON.error) {
                            $('#errorMessage').removeClass('d-none').text(xhr.responseJSON.error);
                        } else {
                            $('#errorMessage').removeClass('d-none').text('Sorry! Something went wrong while sending your email. Please try again later.');
                        }
                        $('#successMessage').addClass('d-none');
                    }
                });
            });
        });
    </script>
@endpush
@endsection
