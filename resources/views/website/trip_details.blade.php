@extends('website.master')
@section('content')
    <style>
        /* Change the button text color to green on hover */
        .btn-style-one:hover {
            color: green;
        }
    </style>
<!-- Banner Section -->
<div class="tour-single-banner">
	<div class="image-layer" style="background-image: url({{ asset('assets/images/resources/featured/' . $trip_details->trip_image) }});">
	</div>
	<div class="auto-container">
		<div class="content-box">
			<div class="content clearfix">
				<div class="t-type">
					<div class="icon"><img src="{{ asset('assets/images/icons/t-icon-2.png') }}" alt=""></div>
					Tour Type <br><strong>{{$trip_details->category->name}}</strong>
				</div>

			</div>
		</div>
	</div>
</div>
<!--End Banner Section -->

<!--Default Single Container-->
<div class="dsp-container tour-single">
	<div class="auto-container">
		<div class="row clearfix">

			<!--Content Side-->
			<div class="content-side col-xl-8 col-lg-12 col-md-12 col-sm-12">
				<div class="content-inner">

					<div class="sp-header">
						<div class="loc-rat clearfix">
							<div class="location">Pakistan</div>
							<div class="rating"><a href="#" class="theme-btn"></a></div>

						</div>
						<h1>{{$trip_details->trip_title}}</h1>
                        @if($mediaGalleries !== null && $mediaGalleries->isNotEmpty() && !empty($mediaGalleries))
                        <div id="tripDetailsCarousel" class="carousel slide trip-details-carousel" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach($mediaGalleries as $index => $media)
                                    <li data-target="#tripDetailsCarousel" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach($trip_details->mediaGalleries as $index => $media)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <img class="carousel-img d-block w-100" src="{{ asset('assets/images/resources/destinations/gallery/' . $media->image_path) }}" alt="Slide {{ $index + 1 }}">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#tripDetailsCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#tripDetailsCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        @endif
						<div class="info clearfix">
							<div class="duration"><i class="fa-solid fa-clock"></i> {{$trip_details->trip_duration}} Days {{$trip_details->trip_duration - 1}} Nights</div>
						</div>
					</div>

					<div class="upper-content mb-5 pb-4">
						<div class="text-content mb-2">
                            <h2 class="ao-tour-block__heading ao-tour-block__heading--no-margin-bottom" data-cy="tdp-itinerary--heading">
                                Tour Details</h2>
							{!!$trip_details->trip_description!!}
						</div>
                        <div class="text-content pt-4 d-flex justify-content-between align-items-center flex-wrap" style="margin-bottom: 10px;">
                            <h2 class="ao-tour-block__heading ao-tour-block__heading--no-margin-bottom" data-cy="tdp-itinerary--heading">
                                Trip Route</h2>

                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#destinations"
                                    data-title="{{$trip_details->trip_title}}" data-price="{{$trip_details->trip_price}}" data-destinations="{{$trip_destinations}}">
                                View Destinations </button>

                            <div id="map"></div>

                        </div>
					</div>

                    {{-- ITINERARY New Design starts--}}
                    <div class="ao-tour-block js-ao-tour-block js-ao-tour-itinerary ao-tour-itinerary itn" data-block-type="Itinerary" data-expand-text="Expand All" data-hide-text="Hide All">
                        <div class="anchor-scroll anchor-scroll--itn"></div>
                        <div class="ao-tour-itinerary__heading-wrapper">
                            <h2 class="ao-tour-block__heading ao-tour-block__heading--no-margin-bottom" data-cy="tdp-itinerary--heading">
                                Itinerary
                            </h2>
                        </div>
{{--                        <div class="aa-tour-itinerary__text" itemprop="description">--}}
{{--                            {!!$trip_details->trip_description!!}--}}
{{--                        </div>--}}
                        <div class="ex-wrapper">
                            <div class="ex ex--full-width" data-cy="tdp-itinerary--expand-or-hide-all" onclick="toggleExpandCollapse()">
                                Expand All
                            </div>
                        </div>
                        <ol class="ao-tour-itinerary--first">
                            <li class="js-ao-scout-accordion ao-scout-accordion ao-tour-itinerary__item--first initiated active ao-scout-accordion--collapsed js-ao-scout-accordion--collapsed js-ao-tour-itinerary__list "
                                data-block-name="Included" data-category-name="Tour Detail">
                                <div class="">
                                    <div class="js-ao-scout-accordion__content-top ao-scout-accordion__content-top">
                                        <div class="js-ao-scout-accordion__title ao-scout-accordion__title" onclick="toggleAccordion('.introduction')">
                                            Introduction
                                            <div class="js-ao-scout-accordion__arrow ao-scout-accordion__arrow"></div>
                                        </div>
                                    </div>
                                    <div class="introduction ao-scout-accordion__bottom">
                                        <div class="ao-scout-accordion__content js-ao-scout-accordion__bottom-content ao-scout-accordion__bottom-content">
                                            <div class="i ao-tour-itinerary__content-wrapper">
                                                {!!$trip_details->trip_overview!!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                        <ol class="js-ao-tour-itinerary__list">
                            @if(isset($trip_details->itineraries) && count($trip_details->itineraries) > 0)
                                @foreach($trip_details->itineraries as $index => $itinerary)
                                    <li class="js-ao-scout-accordion ao-scout-accordion ao-scout-accordion--collapsed js-ao-scout-accordion--collapsed ao-tour-itinerary__item" data-category-name="Tour Detail">
                                        <div class="ao-scout-accordion__content_list">
                                            <div class="js-ao-scout-accordion__content-top ao-scout-accordion__content-top">
                                                <div class="js-ao-scout-accordion__title ao-scout-accordion__title">
                                                    <span>Day {{ $index + 1 }} <span class="details"> {{ $itinerary->title }}</span></span>
                                                    <div class="js-ao-scout-accordion__arrow ao-scout-accordion__arrow" onclick="toggleAccordion('.day{{ $index + 1 }}')"></div>
                                                </div>
                                            </div>
                                            <div class="day{{ $index + 1 }} js-ao-scout-accordion__bottom ao-scout-accordion__bottom" style="width: 100%; max-height: 0; overflow: hidden; transition: all 0.4s ease-out;">
                                                <div class="ao-scout-accordion__content js-ao-scout-accordion__bottom-content ao-scout-accordion__bottom-content">
                                                    <div class="i ao-tour-itinerary__content-wrapper">
                                                        @if(!empty($itinerary->image))
                                                            <div class="im">
                                                                <div style="background-image: url({{ asset('assets/images/resources/destinations/' . $itinerary->image) }});" data-id="0" class="l show"></div>
                                                            </div>
                                                        @endif
                                                        {!!$itinerary->detail!!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ol>
                    </div>

                    {{-- ITINERARY New Design ends--}}

                    {{-- NEW INCLUDED/ NOT INCLUDED ACCORDION STARTS --}}
                    <!-- Included -->
                    <div class="ao-tour-block js-ao-tour-block inc ao-tour-included js-ao-tour-included" id="tour-what-is-included"
                         data-block-type="What's included" data-cy="tdp-whats-included">
                        <div class="anchor-scroll anchor-scroll--inc"></div>
                        <h2 class="ao-tour-block__heading" data-cy="tdp-whats-included--heading">
                            What's Included
                        </h2>
                        <div class="js-ao-tour-included__toggle-all ao-tour-included__toggle-all"
                             data-cy="tdp-whats-included--expand-all-hide-all">
                            Expand All
                        </div>
                        <ul class="js-ao-tour-included__included ao-tour-included__included"
                            data-cy="tdp-whats-included--items" data-expand-text="Expand All" data-hide-text="Hide All">
                            <li class="js-ao-scout-accordion ao-scout-accordion ao-scout-accordion--collapsed js-ao-scout-accordion--collapsed ao-tour-included__accordion ao-tour-included__accordion-included"
                                data-block-name="Included"
                                data-category-name="Tour Detail">
                                <div class="ao-scout-accordion__content">
                                    <div class="js-ao-scout-accordion__content-top ao-scout-accordion__content-top">
                                        <div class="js-ao-scout-accordion__title ao-scout-accordion__title">
                                            <span class="ao-common-accordion__title-text"
                                                  data-cy="tdp-whats-included--included">Durartion</span>
                                            <div class="js-ao-scout-accordion__arrow ao-scout-accordion__arrow"></div>
                                        </div>
                                    </div>
                                    <div class="js-ao-scout-accordion__bottom ao-scout-accordion__bottom">
                                        <div class="ao-scout-accordion__content js-ao-scout-accordion__bottom-content ao-scout-accordion__bottom-content">
                                            <div class="js-ao-tour-included__included-item"
                                                 data-cy="tdp-whats-included--expanded-item">
                                                <div class="duration">
                                                    <i class="fa-solid fa-clock"></i>
                                                    {{$trip_details->trip_duration}} Days {{$trip_details->trip_duration - 1}} Nights
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="js-ao-scout-accordion ao-scout-accordion ao-scout-accordion--collapsed js-ao-scout-accordion--collapsed ao-tour-included__accordion ao-tour-included__accordion-included"
                                data-block-name="Included"
                                data-category-name="Tour Detail">
                                <div class="ao-scout-accordion__content">
                                    <div class="js-ao-scout-accordion__content-top ao-scout-accordion__content-top">
                                        <div class="js-ao-scout-accordion__title ao-scout-accordion__title">
                                            <span class="ao-common-accordion__title-text"
                                                  data-cy="tdp-whats-included--included">Language</span>
                                            <div class="js-ao-scout-accordion__arrow ao-scout-accordion__arrow"></div>
                                        </div>
                                    </div>
                                    <div class="js-ao-scout-accordion__bottom ao-scout-accordion__bottom">
                                        <div class="ao-scout-accordion__content js-ao-scout-accordion__bottom-content ao-scout-accordion__bottom-content">
                                            <div class="js-ao-tour-included__included-item"
                                                 data-cy="tdp-whats-included--expanded-item">
                                                <p>ENGLISH</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="js-ao-scout-accordion ao-scout-accordion ao-scout-accordion--collapsed js-ao-scout-accordion--collapsed ao-tour-included__accordion ao-tour-included__accordion-included"
                                data-block-name="Included"
                                data-category-name="Tour Detail">
                                <div class="ao-scout-accordion__content">
                                    <div class="js-ao-scout-accordion__content-top ao-scout-accordion__content-top">
                                        <div class="js-ao-scout-accordion__title ao-scout-accordion__title">
                                            <span class="ao-common-accordion__title-text"
                                                  data-cy="tdp-whats-included--included">Includes</span>
                                            <div class="js-ao-scout-accordion__arrow ao-scout-accordion__arrow"></div>
                                        </div>
                                    </div>
                                    <div class="js-ao-scout-accordion__bottom ao-scout-accordion__bottom">
                                        <div class="ao-scout-accordion__content js-ao-scout-accordion__bottom-content ao-scout-accordion__bottom-content">
                                            <div class="js-ao-tour-included__included-item"
                                                 data-cy="tdp-whats-included--expanded-item">
                                                {!! $trip_details->trip_includes !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="js-ao-scout-accordion ao-scout-accordion ao-scout-accordion--collapsed js-ao-scout-accordion--collapsed ao-tour-included__accordion ao-tour-included__accordion-not-included"
                                data-block-name="Not Included"
                                data-category-name="Tour Detail">
                                <div class="ao-scout-accordion__content">
                                    <div class="js-ao-scout-accordion__content-top ao-scout-accordion__content-top">
                                        <div class="js-ao-scout-accordion__title ao-scout-accordion__title">
                                            <span class="ao-common-accordion__title-text"
                                                  data-cy="tdp-whats-included--no-included">Not Included</span>
                                            <div class="js-ao-scout-accordion__arrow ao-scout-accordion__arrow"></div>
                                        </div>
                                    </div>
                                    <div class="js-ao-scout-accordion__bottom ao-scout-accordion__bottom">
                                        <div class="ao-scout-accordion__content js-ao-scout-accordion__bottom-content ao-scout-accordion__bottom-content">
                                            <div class="js-ao-tour-included__not-included-item">
                                                {!! $trip_details->trip_excludes !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <hr>
                    </div>
                    {{-- NEW INCLUDED/ NOT INCLUDED ACCORDION ENDS --}}


					<div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-2 mb-2">
						<button type="submit" class="theme-btn btn-style-one" onclick="openWhatsApp()">
							<span>Book Now</span>
						</button>
					</div>
                    @if($mediaGalleries !== null && $mediaGalleries->isNotEmpty() && !empty($mediaGalleries))
					<div class="t-gallery pt-4 mt-4">
						<h3>Media Gallery</h3>
						<div class="images">
							<ul class="clearfix">
								@foreach($mediaGalleries as $media)
									<li>
										<div class="image">
											<a href="{{ asset('assets/images/resources/destinations/gallery/' . $media->image_path) }}" class="lightbox-image" data-fancybox="SbGallery">
												<img src="{{ asset('assets/images/resources/destinations/gallery/' . $media->image_path) }}" alt="">
											</a>
										</div>
									</li>
								@endforeach
							</ul>

						</div>
					</div>
                    @endif
                    {{-- SCHEDULE DATA START--}}
                    <!-- First -->
                    <div class="ao-tour-availability__filters">
                        <div class="ao-tour-availability__filters-title" data-cy="tdp-availability--select-a-departure-month"> Select a departure month </div>
                        <ul class="ao-tour-availability__filters-button-container" data-cy="tdp-availability--departure-months">
                            <li data-val="0" style="cursor: pointer;" class="ao-tour-availability__filters-button js-ao-tour-availability__filters-button ao-tour-availability__filters-button--active  filter-button"> Upcoming departures </li>
                            @if(isset($trip_details->schedules) && count($trip_details->schedules) > 0)
                                @foreach($trip_details->schedules as $index => $schedule)
                            <li data-val="{{date('m',strtotime($schedule->month)).'-'.$schedule->year}}" style="cursor: pointer;" class="ao-tour-availability__filters-button js-ao-tour-availability__filters-button filter-button" data-month-name="{{$schedule->month.' '.$schedule->year}}" data-cy="tdp-availability--month"> {{$schedule->month.' '.$schedule->year}} </li>
                                @endforeach
                            @endif
                        </ul>
                        <div class="am-tour-availability__select-container ao-tour-availability__select--departure js-ao-tour-availability__select--departure">
                            <div class="am-tour-availability__select-title"> Select The Travel Month </div>
                            <select class="js-aa-dropdown aa-dropdown aa-dropdown--xl" data-cy="tdp-availability--select-departure-month">
                                <option value="0" selected="">Upcoming departures</option>
                                @if(isset($trip_details->schedules) && count($trip_details->schedules) > 0)
                                    @foreach($trip_details->schedules as $index => $schedule)
                                <option value="{{date('m',strtotime($schedule->month)).'-'.$schedule->year}}">{{$schedule->month.' '.$schedule->year}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <!-- Second -->
                    <div class="js-ao-tour-availability__departures ao-tour-availability__departures">
                        <div class="ao-tour-availability__variants-title js-ao-tour-availability__variants-title aa-heading-h4" data-cy="tdp-availability--upcoming-departures-section"> Upcoming departures </div>
                        <ul class="ao-tour-availability__variants-container js-ao-tour-availability__variants-container">
                            @if(isset($trip_details->schedules) && count($trip_details->schedules) > 0)
                                @foreach($trip_details->schedules as $index => $schedule)
                            <li style="padding: 20px; border-radius: 10px; color: black;" class="am-tour-availability__variant js-am-tour-availability__variant" data-cy="tdp-availability--card">
                                <div class="am-tour-availability__variant-date-start"> {{date('l',strtotime($schedule->start_date))}} <div class="am-tour-availability__variant-bold-text" data-cy="tdp-availability--date-from" style="font-weight: bold;"> {{date('d M, Y',strtotime($schedule->start_date))}} </div>
                                </div>
                                <div class="am-tour-availability__variant-date-arrow-wrapper" style="text-align: center; margin: 10px 0;">
                                    <div class="am-tour-availability__variant-date-arrow" style="width: 0; height: 0; border-left: 10px solid transparent; border-right: 10px solid transparent; border-top: 10px solid white;"></div>
                                </div>
                                <div class="am-tour-availability__variant-date-finish"> {{date('l',strtotime($schedule->end_date))}} <div class="am-tour-availability__variant-bold-text am-tour-availability__variant-bold-text--text-align-right" data-cy="tdp-availability--date-to" style="font-weight: bold; text-align: right;"> {{date('d M, Y',strtotime($schedule->end_date))}} </div>
                                </div>
                                <div class="am-tour-availability__language" style="display: flex; align-items: center; margin-top: 10px;">
                                    <span class="globe-icon" style="margin-right: 5px;">🌐</span> English
                                </div>
                                <div class="am-tour-availability__variant-price-container" style="margin-top: 10px;">
                                    <div class="am-tour-availability__variant-bold-text" data-cy="tdp-availability--price" style="font-weight: bold; font-size: 1.2em;"> $ {{$schedule->price}} </div>
                                </div>
                                <div class="am-tour-availability__variant-cta-container" style="margin-top: 10px;background-color:transparent">
                                    <button class="aa-btn aa-btn--primary aa-btn--xs am-tour-availability__variant-cta
             js-am-tour-availability__variant-cta--book js-ah-hidden-link btn-style-one" type="button" style="background-color:#009045; border-color:#009045" onclick="openWhatsApp()" onmouseover="this.style.color='black';" onmouseout="this.style.color='white';"> Confirm Dates </button>
                                </div>
                            </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    {{-- SCHEDULE DATA END--}}
                </div>
			</div>

			<!--Sidebar Side-->
			<div class="sidebar-side col-xl-4 col-lg-8 col-md-12 col-sm-12">
				<div class="sidebar-inner">
					<!--Widget-->
					<div class="dsp-widget t-book-widget alt-margin">
						<div class="inner-box">
							<div class="t-book-header">
								<span class="st-txt">Start <br>From</span>
								<span class="amount">${{$trip_details->trip_price}}</span>
								<span class="qty">/ Per Person</span>
							</div>

						</div>
					</div>

					<!--Widget-->
					<div class="dsp-widget get-help-widget">
						<div class="inner">
							<h6>Get Help</h6>
							<h3>Need Help to Book?</h3>
							<p class="travilo-text">Our dedicated team of travel experts is here to assist you
								every step of the
								way, ensuring a seamless and unforgettable journey.</p>
							<div class="call-to">
								<a href="tel:+923494096697"><i class="icon fa-solid fa-phone"></i> Call Us <span class="nmbr">+92 349 409 6697</span></a>
							</div>
                            <div class="call-to mt-2 p-2">
                                <button type="button" class="btn btn-style-one" data-toggle="modal" data-target="#emailSubscription">
                                    Download Brouchure
                                </button>
                            </div>
						</div>
					</div>
                    {{-- INQUIRY FORM STARTS--}}
                    <!--Widget-->
                    <div class="dsp-widget similar-widget">
                        <div class="inner">
                            <h3>ENQUIRY?</h3>
                            <div class="form-box site-form">
                                <!-- Display success message -->
{{--                                @if(session('success'))--}}
{{--                                    <div class="bg-green-200 border-green-400 text-green-700 px-4 py-2 rounded-md mb-4">--}}
{{--                                        {{ session('success') }}--}}
{{--                                    </div>--}}
{{--                                @endif--}}

{{--                                <!-- Display validation errors -->--}}
{{--                                @if ($errors->any())--}}
{{--                                    <div class="bg-red-200 border-red-400 text-red-700 px-4 py-2 rounded-md mb-4">--}}
{{--                                        <ul>--}}
{{--                                            @foreach ($errors->all() as $error)--}}
{{--                                                <li>{{ $error }}</li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                @endif--}}
                                <div class="alert alert-success d-none" id="successMessage">Your email has been successfully sent! Our team will get in touch with you shortly.</div>
                                <div class="alert alert-danger d-none" id="errorMessage">Sorry! Something went wrong while sending your email. Please try again later.</div>

                                <form id="inquiry-form">
                                    @csrf
                                    <div class="row clearfix">
                                        <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="name" value="" placeholder="Your name" required="">
                                            </div>
                                            <br>
                                            <div class="field-inner">
                                                <input type="email" name="email" value="" placeholder="Your email" required="">
                                            </div>
                                            <br>
                                            <div class="field-inner">
                                                <textarea name="message" placeholder="Start writing your enquiry here" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <button type="submit" class="theme-btn btn-style-one"><span>Submit Query</span></button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    {{-- INQUIRY FORM ENDS--}}
                    <!--Widget-->
                    {{-- GOOGLE MAP STARTS--}}
					<!--Widget-->
{{--					<div class="dsp-widget similar-widget">--}}
{{--						<div class="inner">--}}
{{--							<h3>Trip Route</h3>--}}
{{--                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#destinations"--}}
{{--                                data-title="{{$trip_details->trip_title}}" data-price="{{$trip_details->trip_price}}" data-destinations="{{$trip_destinations}}">--}}
{{--                                View Destinations </button>--}}
{{--                            <div id="map"></div>--}}
{{--						</div>--}}
{{--					</div>--}}
                    {{-- GOOGLE MAP ENDS--}}
					<!--Widget-->
					<div class="dsp-widget similar-widget">
						<div class="inner">
							<h3>You might also like</h3>
							<!--Logo-->
							<div class="posts">

								@foreach ($similar_trips as $similar_trip)
									<div class="post">
										<div class="image">
											<a href="{{ route('trip_details', $similar_trip->title_slug) }}">
												<img src="{{ asset('assets/images/resources/destinations/' . $similar_trip->trip_image) }}" alt="{{ $similar_trip->location }}">
											</a>
										</div>
										<h6><a href="{{ route('trip_details', $similar_trip->title_slug) }}">{{ $similar_trip->trip_title }}</a></h6>
										<div class="price">Starts from <span class="amount">${{ $similar_trip->trip_price }}</span></div>
									</div>
								@endforeach



							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>

    @if($related_trips !== null && $related_trips->isNotEmpty() && !empty($related_trips))
    <!--Similar Section-->
    <div class="similar-section">
        <div class="auto-container">
            <div class="title-box">
                <h2><span>Similar Tours Like This</span></h2>
            </div>
            <div class="carousel-box">
                <div class="packages-carousel">
                    <!--Block-->


                    @foreach($related_trips as $trip)
                        <div class="package-block">
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








                </div>
            </div>
        </div>
    </div>
    @endif
<!-- Destinations Modal -->
<div class="modal fade" id="destinations" tabindex="-1" role="dialog" aria-labelledby="destinationsLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; top: 10px; right: 10px; background: transparent; border: none;">
                    <span aria-hidden="true" style="font-size: 2rem;">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <div class="ao-common-map-popup__content-info ao-common-map-popup__content-info--tour-v1">
                    <div class="container" >

                        <div class="row">
                            <div class="col-md-12 col-lg-6" style="padding: 20px; background-color: #f8f9fa; height: 100%;">
                                <div id ="map_popup_map" style="width: 100%;  min-height: 500px;"></div>
                            </div>
                            <div class="col-md-12 col-lg-6" style="padding: 10px; height: 100%;">
                                <!-- Content for the right part -->
                                <div class="ao-common-map-popup__content-info-details-row ao-common-map-popup__content-info-details-row--tour-v1">
                                    <div class="ao-common-map-popup__content-info-details-tour ao-common-map-popup__content-info-details-tour--tour-v1 aa-text-h4">
                                        <a id="destination_title" class="js-ao-common-map-popup__content-info-details-tour-link ao-common-map-popup__content-info-details-tour-link" data-cy="tdp-map-popup--tour-title-link" ></a>
                                    </div>
                                    <div class="ao-tour-above-fold__price-from mt-2"> From </div>
                                    <div class="ao-tour-above-fold__main-price">
                                        <span class="ao-tour-above-fold__short-currency"> US </span>
                                        <span class="ao-tour-above-fold__currency">$</span>
                                        <span id="destination_price" class="ao-tour-above-fold__price" data-cy="tdp-above-fold--price-block-price"></span>
                                    </div>
                                </div>
                                <div class="mt-2 ao-common-map-popup__content-info-details-destinations-title ao-common-map-popup__content-info-details-destinations-title--tour-v1 aa-text-h4"
                                     style="margin-left:1%; padding-bottom: 0px;"
                                     data-cy="tdp-map-popup--destinations-heading">Destinations</div>
                                <div class="ao-common-map-popup__content-info-details-scrollable-wrapper"
                                     style="max-height: 900px; overflow-y: auto;">
                                    <div class="ao-common-map-popup__content-info-details-destinations ao-common-map-popup__content-info-details-destinations--tour-v1">
                                        <ul id="map-popup--destinations-list" class="ao-common-map-popup__content-info-details-destinations-list" data-cy="tdp-map-popup--destinations-list"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- MODAL ENDS--}}

<!-- EMAIL SUBSCRIPTION Modal STARTS -->
<div class="modal fade" id="emailSubscription" tabindex="-1" role="dialog" aria-labelledby="emailSubscriptionLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="emailSubscriptionLabel">Get Brochure</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; top: 10px; right: 10px; background: transparent; border: none;">
                        <span aria-hidden="true" style="font-size: 2rem;">&times;</span>
                        <span class="sr-only">Close</span>
                </button>
            </div>
            <form id="get_brouchure">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <input type="hidden" name="slug" value="{{$trip_details->title_slug}}">
                </div>
                <div class="modal-footer">
                        <button type="submit" class="btn btn-style-one">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- EMAIL SUBSCRIPTION Modal ENDS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    let modalMap;
    let modalMapAnimatedMarker;

    function initModalMap() {
        // Initial map setup
        modalMap = new google.maps.Map(document.getElementById('map_popup_map'), {
            center: { lat: 33.6844, lng: 73.0479 }, // Centered on Islamabad
            zoom: 6
        });
    }

    $(document).on('show.bs.modal', '#destinations', function (event) {
        var link = $(event.relatedTarget); // Button that triggered the modal

        // Retrieve data from data attributes
        var destination_title = link.data('title');
        var destination_price = link.data('price');
        var destination = link.data('destinations');

        var modal = $(this);
        modal.find('#destination_title').text(destination_title);
        modal.find('#destination_price').text(destination_price);

        // Clear previous destinations list
        modal.find('#map-popup--destinations-list').empty();

        // Append new destinations
        $.each(destination, function(index, value) {
            modal.find('#map-popup--destinations-list').append('<li class="ao-common-map-popup__content-info-details-destinations-list-element ao-common-map-popup__content-info-details-destinations-list-element--tour-v1 js-destinations-list-element">' + value.name + '</li>');
        });

        // Initialize the map
        if (!modalMap) {
            initModalMap();
        }

        // Update the map with new destinations
        const tripCoordinates = destination.map(dest => {
            return {
                lat: parseFloat(dest.latitude),
                lng: parseFloat(dest.longitude),
                name: dest.name || 'Unknown' // Use 'Unknown' if name is missing
            };
        });

        const tripPath = new google.maps.Polyline({
            path: tripCoordinates,
            geodesic: true,
            strokeColor: '#0390fc', // Blue color for the line
            strokeOpacity: 1.0,
            strokeWeight: 4
        });

        tripPath.setMap(modalMap);

        // Custom icon for markers (bold bullet points)
        const bulletIcon = {
            path: google.maps.SymbolPath.CIRCLE,
            scale: 8,
            fillColor: '#0390fc', // Blue color for the bullet points
            fillOpacity: 1,
            strokeColor: '#FFFFFF',
            strokeWeight: 2
        };

        const modalMapMarkers = tripCoordinates.map((destination, i) => {
            const infoWindow = new google.maps.InfoWindow({
                content: `Stop ${i + 1}: ${destination.name}`
            });

            // Example: Create a marker for each stop
            const modalMapMarker = new google.maps.Marker({
                position: { lat: destination.lat, lng: destination.lng },
                map: modalMap,
                icon: bulletIcon,
                title: destination.name // Set modalMapMarker title to stop name
            });

            // Show info window when modalMapMarker is clicked
            modalMapMarker.addListener('click', () => {
                infoWindow.open(modalMap, modalMapMarker);
            });

            return modalMapMarker;
        });

        // Animation for the moving dot
        const modalAnimateDot = {
            path: google.maps.SymbolPath.CIRCLE,
            scale: 6,
            fillColor: '#00FF00', // Green color for the moving dot
            fillOpacity: 1,
            strokeColor: '#FFFFFF',
            strokeWeight: 2
        };

        modalMapAnimatedMarker = new google.maps.Marker({
            map: modalMap,
            icon: modalAnimateDot,
            position: tripCoordinates[0]
        });

        modalMapAnimateDot(tripCoordinates);
    });

    function modalMapAnimateDot(tripCoordinates) {
        let index = 0;
        let fraction = 0;

        function modalMapMoveMarker() {
            if (index < tripCoordinates.length - 1) {
                const lat1 = tripCoordinates[index].lat;
                const lng1 = tripCoordinates[index].lng;
                const lat2 = tripCoordinates[index + 1].lat;
                const lng2 = tripCoordinates[index + 1].lng;

                const lat = lat1 + (lat2 - lat1) * fraction;
                const lng = lng1 + (lng2 - lng1) * fraction;

                modalMapAnimatedMarker.setPosition({ lat, lng });

                fraction += 0.01; // Adjust speed of animation

                if (fraction >= 1) {
                    index++;
                    fraction = 0;
                }

                setTimeout(modalMapMoveMarker, 50); // Move every 50 milliseconds for smooth animation
            }
        }

        modalMapMoveMarker();
    }
</script>

<script>
    document.querySelectorAll(".js-ao-tour-availability__filters-button").forEach(button => {
        button.addEventListener("click", () => {
            const selectedValue = button.getAttribute("data-val");
            if (selectedValue == "0") {
                const variants = document.querySelectorAll(".am-tour-availability__variant");

                variants.forEach(variant => {
                    variant.style.display = "flex"; // Show all variants
                });
            } else {
                const selectedMonth = selectedValue;
                const selectedMonthNumber = parseInt(selectedMonth.split('-')[0]);
                const selectedYear = parseInt(selectedMonth.split('-')[1]);
                console.log(selectedMonthNumber,selectedMonth)
                // Calculate next month and year
                let nextMonthNumber = selectedMonthNumber + 1;
                let nextMonthYear = selectedYear;
                if (nextMonthNumber > 12) {
                    nextMonthNumber = 1;
                    nextMonthYear += 1;
                }

                const variants = document.querySelectorAll(".am-tour-availability__variant");

                // Create an object to map month names to their corresponding numbers
                const monthMap = {
                    'Jan,': 1, 'Feb,': 2, 'Mar,': 3, 'Apr,': 4, 'May,': 5, 'Jun,': 6,
                    'Jul,': 7, 'Aug,': 8, 'Sep,': 9, 'Oct,': 10, 'Nov,': 11, 'Dec,': 12
                };

                variants.forEach(variant => {
                    const variantDateElement = variant.querySelector("[data-cy='tdp-availability--date-from']");
                    if (variantDateElement) {
                        const variantDate = variantDateElement.textContent.trim(); // Extract date from variant
                        const variantMonthName = variantDate.split(' ')[1]; // Extract month name from variant date
                        const variantYear = parseInt(variantDate.split(' ')[2]); // Extract year from variant date
                        const variantMonthNumber = monthMap[variantMonthName];
                        // Check if the variant month matches the selected month or the next month
                        if (
                            (variantMonthNumber === selectedMonthNumber && variantYear === selectedYear)
                        ) {
                            variant.style.display = "flex"; // Show the variant
                        } else {
                            variant.style.display = "none"; // Hide the variant
                        }
                    }
                });
            }

            // Remove active class from all buttons
            document.querySelectorAll(".js-ao-tour-availability__filters-button").forEach(btn => {
                btn.classList.remove("ao-tour-availability__filters-button--active");
            });

            // Add active class to clicked button
            button.classList.add("ao-tour-availability__filters-button--active");
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#inquiry-form').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            $.ajax({
                url: '{{ route("send_contact_email") }}',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    $('#successMessage').removeClass('d-none').text(response.success);
                    $('#errorMessage').addClass('d-none');
                    $('#inquiry-form')[0].reset(); // Reset the form
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

        $('#get_brouchure').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            $.ajax({
                url: '{{ route('trip_brochure') }}',
                method: 'POST',
                data: $(this).serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response.slug);
                    $('#get_brouchure')[0].reset(); // Reset the form

                    // Close the modal (adjust the selector to match your modal)
                    $('#emailSubscription').modal('hide');

                    // Trigger the download of the PDF

                    var url2 = '{{ url('/trip_brouchure_download') }}/' + response.slug;
                    var $a2 = $('<a />', {
                        'href': url2,
                        'text': "click",
                        'target': "_blank"
                    }).hide().appendTo("body")[0].click();



                    // Remove the temporary anchor element after download starts
                    setTimeout(function() {
                        $a2.remove();
                    }, 1000);

                    // Trigger the download of the PDF

                    {{--var url = '{{ url('/download_pdf') }}/' + response.slug;--}}
                    {{--var $a = $('<a />', {--}}
                    {{--    'href': url,--}}
                    {{--    'text': "click",--}}
                    {{--    'target': "_blank"--}}
                    {{--}).hide().appendTo("body")[0].click();--}}

                },
                error: function(xhr) {
                    console.log('some error');
                }
            });
        });

    });
</script>
<script>
    function openWhatsApp() {
        // Replace the phone number with your desired number
        // var phoneNumber = '923344554500';
        var phoneNumber = '923091018431';

        // Replace the default message with your desired message
        var defaultMessage = 'Hello, I need to book this trip.';

        // Get the current URL
        var currentUrl = window.location.href;

        // Construct the WhatsApp URL with phone number, default text message, and current URL
        var whatsappUrl = 'https://api.whatsapp.com/send?phone=' + phoneNumber + '&text=' + encodeURIComponent(defaultMessage + ' ' + currentUrl);

        // Open the URL in a new window or tab
        window.open(whatsappUrl, '_blank');
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR-KEY&loading=async&callback=initMap" async defer></script>
<script>
    let map;
    let animatedMarker;
    let routeIndex = 0;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 33.6844, lng: 73.0479 }, // Centered on Islamabad
            zoom: 6
        });

        // Fetch trip destinations from the backend
        const tripDestinations = {!! json_encode($trip_destinations) !!};

        // Transform trip destinations into an array of latitudes and longitudes
        const tripCoordinates = tripDestinations.map(destination => {
            return {
                lat: parseFloat(destination.latitude),
                lng: parseFloat(destination.longitude),
                name: destination.name || 'Unknown' // Use 'Unknown' if name is missing
            };
        });
        const tripPath = new google.maps.Polyline({
            path: tripCoordinates,
            geodesic: true,
            strokeColor: '#0390fc', // Blue color for the line
            strokeOpacity: 1.0,
            strokeWeight: 4
        });

        tripPath.setMap(map);

        // Custom icon for markers (bold bullet points)
        const bulletIcon = {
            path: google.maps.SymbolPath.CIRCLE,
            scale: 8,
            fillColor: '#0390fc', // Blue color for the bullet points
            fillOpacity: 1,
            strokeColor: '#FFFFFF',
            strokeWeight: 2
        };

        const markers = tripCoordinates.map((destination, i) => {
            const infoWindow = new google.maps.InfoWindow({
                content: `Stop ${i + 1}: ${destination.name}`
            });

            // Example: Create a marker for each stop
            const marker = new google.maps.Marker({
                position: { lat: destination.lat, lng: destination.lng },
                map: map,
                icon: bulletIcon,
                title: destination.name // Set marker title to stop name
            });

            // Show info window when marker is clicked
            marker.addListener('click', () => {
                infoWindow.open(map, marker);
            });

            return marker;
        });

        // Animation for the moving dot
        const animatedDot = {
            path: google.maps.SymbolPath.CIRCLE,
            scale: 6,
            fillColor: '#00FF00', // Green color for the moving dot
            fillOpacity: 1,
            strokeColor: '#FFFFFF',
            strokeWeight: 2
        };

        animatedMarker = new google.maps.Marker({
            map: map,
            icon: animatedDot,
            position: tripCoordinates[0]
        });

        animateDot(tripCoordinates);
    }

    function animateDot(tripCoordinates) {
        let index = 0;
        let fraction = 0;

        function moveMarker() {
            if (index < tripCoordinates.length - 1) {
                const lat1 = tripCoordinates[index].lat;
                const lng1 = tripCoordinates[index].lng;
                const lat2 = tripCoordinates[index + 1].lat;
                const lng2 = tripCoordinates[index + 1].lng;

                const lat = lat1 + (lat2 - lat1) * fraction;
                const lng = lng1 + (lng2 - lng1) * fraction;

                animatedMarker.setPosition({ lat, lng });

                fraction += 0.01; // Adjust speed of animation

                if (fraction >= 1) {
                    index++;
                    fraction = 0;
                }

                setTimeout(moveMarker, 50); // Move every 50 milliseconds for smooth animation
            }
        }

        moveMarker();
    }
</script>
<script>
    // Itinerary
    function toggleExpandCollapse() {
        var olElements = document.querySelectorAll('.js-ao-tour-itinerary__list > li');
        var expandCollapseButton = document.querySelector('[data-cy="tdp-itinerary--expand-or-hide-all"]');
        var allArrows = document.querySelectorAll('.ao-scout-accordion__arrow');

        if (expandCollapseButton.textContent === 'Expand All') {
            olElements.forEach(function(olElement) {
                olElement.classList.remove('ao-scout-accordion--collapsed');
                var accordionBottom = olElement.querySelector('.ao-scout-accordion__bottom');
                accordionBottom.style.maxHeight = 'none';
                olElement.querySelector('.ao-scout-accordion__arrow').classList.add('upward');
            });
            expandCollapseButton.textContent = 'Hide All';
        } else {
            olElements.forEach(function(olElement) {
                olElement.classList.add('ao-scout-accordion--collapsed');
                var accordionBottom = olElement.querySelector('.ao-scout-accordion__bottom');
                accordionBottom.style.maxHeight = '0';
                olElement.querySelector('.ao-scout-accordion__arrow').classList.remove('upward');
            });
            expandCollapseButton.textContent = 'Expand All';
        }
    }
    var currentOpenAccordion = null;
    function toggleAccordion(selector) {
        var newAccordionContent = document.querySelector(selector);
        if (!newAccordionContent) {
            console.error("Accordion content not found for selector:", selector);
            return;
        }
        var newAccordionArrow = newAccordionContent.parentElement.querySelector(".ao-scout-accordion__arrow");
        if (!newAccordionArrow) {
            console.error("Accordion arrow not found for selector:", selector);
            return;
        }
        if (currentOpenAccordion && currentOpenAccordion !== newAccordionContent) {
            var currentAccordionArrow = currentOpenAccordion.parentElement.querySelector(".ao-scout-accordion__arrow");
            currentOpenAccordion.style.maxHeight = "0";
            currentAccordionArrow.classList.remove("upward");
        }
        if (
            newAccordionContent.style.maxHeight === "0px" ||
            newAccordionContent.style.maxHeight === ""
        ) {
            newAccordionContent.style.maxHeight = newAccordionContent.scrollHeight + "px";
            newAccordionArrow.classList.add("upward");
            currentOpenAccordion = newAccordionContent;
        } else {
            newAccordionContent.style.maxHeight = "0";
            newAccordionArrow.classList.remove("upward");
            currentOpenAccordion = null;
        }
    }


    // Included
    // Expand All

    // Expansion and Collapse for All Accordions
    function expandAll() {
        const accordions = document.querySelectorAll(
            ".ao-scout-accordion__content"
        );

        accordions.forEach((accordion) => {
            accordion.classList.add("active");
        });

        const expandAllBtn = document.querySelector(
            ".js-ao-tour-included__toggle-all"
        );
        if (expandAllBtn) {
            expandAllBtn.textContent = "Hide All";
            expandAllBtn.removeEventListener("click", expandAll);
            expandAllBtn.addEventListener("click", collapseAll);
        }
    }

    function collapseAll() {
        const accordions = document.querySelectorAll(
            ".ao-scout-accordion__content"
        );

        accordions.forEach((accordion) => {
            accordion.classList.remove("active");
        });

        const expandAllBtn = document.querySelector(
            ".js-ao-tour-included__toggle-all"
        );
        if (expandAllBtn) {
            expandAllBtn.textContent = "Expand All";
            expandAllBtn.removeEventListener("click", collapseAll);
            expandAllBtn.addEventListener("click", expandAll);
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        const expandAllBtn = document.querySelector(
            ".js-ao-tour-included__toggle-all"
        );

        if (expandAllBtn) {
            expandAllBtn.addEventListener("click", expandAll);
        }
    });

    // Accordions
    function toggleAccordionInclude() {
        const accordions = document.querySelectorAll(
            ".ao-scout-accordion__content"
        );

        accordions.forEach((accordion) => {
            accordion.addEventListener("click", function () {
                if (this.classList.contains("active")) {
                    this.classList.remove("active");
                } else {
                    closeAllAccordions();
                    this.classList.add("active");
                }
            });
        });
    }
    function closeAllAccordions() {
        const accordions = document.querySelectorAll(
            ".ao-scout-accordion__content"
        );

        accordions.forEach((accordion) => {
            accordion.classList.remove("active");
        });
    }

    document.addEventListener("DOMContentLoaded", function () {
        toggleAccordionInclude();
    });
</script>
<script>
    $('#carouselExampleIndicators').on('slid.bs.carousel', function () {
        var currentIndex = $('div.carousel-item.active').index();
        var totalItems = $('.carousel-item').length;
        if (currentIndex === totalItems - 1) {
            $(this).carousel(0);
        }
    });
</script>
<style>
    #map {
        height: 400px; /* Adjust height as needed */
        width: 100%; /* Full width within the widget */
        margin: 0 auto;
    }
    .sidebar-side {
        overflow: visible; /* Ensure the overflow is visible */
    }
    .dsp-widget.similar-widget .inner {
        overflow: visible; /* Ensure the overflow is visible */
    }
</style>
<script>
    document.querySelector(".js-aa-dropdown").addEventListener("change", (event) => {
        const selectedValue = event.target.value;
        if (selectedValue == "0") {
            const variants = document.querySelectorAll(".am-tour-availability__variant");
            variants.forEach(variant => {
                variant.style.display = "flex"; // Show all variants
            });
        } else {
            const selectedMonth = selectedValue;
            const selectedMonthNumber = parseInt(selectedMonth.split('-')[0]);
            const selectedYear = parseInt(selectedMonth.split('-')[1]);
            console.log(selectedMonthNumber, selectedMonth);

            const variants = document.querySelectorAll(".am-tour-availability__variant");

            // Create an object to map month names to their corresponding numbers
            const monthMap = {
                'Jan,': 1, 'Feb,': 2, 'Mar,': 3, 'Apr,': 4, 'May,': 5, 'Jun,': 6,
                'Jul,': 7, 'Aug,': 8, 'Sep,': 9, 'Oct,': 10, 'Nov,': 11, 'Dec,': 12
            };

            variants.forEach(variant => {
                const variantDateElement = variant.querySelector("[data-cy='tdp-availability--date-from']");
                if (variantDateElement) {
                    const variantDate = variantDateElement.textContent.trim(); // Extract date from variant
                    const variantMonthName = variantDate.split(' ')[1]; // Extract month name from variant date
                    const variantYear = parseInt(variantDate.split(' ')[2]); // Extract year from variant date
                    const variantMonthNumber = monthMap[variantMonthName];
                    // Check if the variant month matches the selected month
                    if (variantMonthNumber === selectedMonthNumber && variantYear === selectedYear) {
                        variant.style.display = "flex"; // Show the variant
                    } else {
                        variant.style.display = "none"; // Hide the variant
                    }
                }
            });
        }

        // Remove active class from all buttons
        document.querySelectorAll(".js-ao-tour-availability__filters-button").forEach(btn => {
            btn.classList.remove("ao-tour-availability__filters-button--active");
        });

        // Add active class to the selected option
        event.target.querySelector(`option[value="${selectedValue}"]`).classList.add("ao-tour-availability__filters-button--active");
    });
</script>
@endsection
