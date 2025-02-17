@extends('website.master')
@section('content')
		<!-- Banner Section -->
		<section class="inner-banner">
			@isset($category)
			<div class="image-layer" style="background-image: url('{{ asset("assets/images/resources/categories/$category->bg_image") }}');">
		@else
			<div class="image-layer" style="background-image: url('{{ asset("assets/images/resources/categories/Atabad_Lake.webp") }}');">
		@endisset

			</div>
			<div class="auto-container">
				<div class="content-box">
					<h1>Tour Packages</h1>
					<div class="bread-crumb">
						<ul class="clearfix">
							<li><a href="{{ route('home') }}">Home</a></li>
							<li class="current">Tour Packages</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--End Banner Section -->

		<!--Packages Section-->
		<section class="packages-three">

			<div class="auto-container">
				<div class="packages">

					<div class="filter-row">
						<div class="clearfix">

							<div class="filters clearfix+">


							</div>
						</div>
					</div>
					<br/>
						<br/>
						<br/>
					<div class="row clearfix">
                        @if(isset($trips) && count($trips) > 0 )
						@foreach($trips as $trip)
							<div class="package-block col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="image-box">
										<div class="image">
											<a href="{{ route('trip_details', $trip->title_slug) }}">
												<img src="{{ asset('assets/images/resources/destinations/'.$trip->trip_image) }}" height="422" width="282" alt="{{ $trip->location }}">
											</a>
										</div>
									</div>
									<div class="lower-box">
										<div class="location">{{$trip->category->name}}</div>
										<h5><a href="{{ route('trip_details', $trip->title_slug) }}">{{ $trip->trip_title }}</a></h5>
										<div class="info clearfix">
											<div class="duration">
												<i class="fa-solid fa-clock"></i> {{ $trip->trip_duration }} Days {{ $trip->trip_duration -1 }} Nights
											</div>
										</div>
										<div class="bottom-box clearfix">
											<div class="rating">
												<!-- Add your rating and reviews here -->
											</div>
											<p class="price">Start from &ensp;<span class="amount">${{ $trip->trip_price }}</span></p>
										</div>
									</div>
								</div>
							</div><!-- .package-block -->
						@endforeach
                        @else
                            <div class="package-block col-lg-4 col-md-6 col-sm-12">

                            <h3>No Tour Packages Added Yet</h3>
                            </div>
                        @endif
					</div>


				</div>
			</div>
		</section>



		@endsection
