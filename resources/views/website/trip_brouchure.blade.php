<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
{{--    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">--}}

    <!-- Stylesheets -->
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/css/lib/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/css/lib/fontawesome/css/brands.css" rel="stylesheet">
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/css/lib/fontawesome/css/solid.css" rel="stylesheet">
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/css/lib/simple-line-icons/css/simple-line-icons.min.css" rel="stylesheet">
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/css/lib/flaticon/css/flaticon.min.css" rel="stylesheet">
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/css/lib/animate.min.css" rel="stylesheet">
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/css/lib/slick.min.css" rel="stylesheet">
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/css/lib/swiper.min.css" rel="stylesheet">
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/css/lib/jquery-ui.min.css" rel="stylesheet">
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/css/lib/jquery.fancybox.min.css" rel="stylesheet">
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/css/custom-animate.css" rel="stylesheet">
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/css/responsive.css" rel="stylesheet">
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/icon/icon-connect.css" rel="stylesheet">
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/brochureStyling/style.css" rel="stylesheet">
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/brochureStyling/custom.css" rel="stylesheet">
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/css/sections/variables.css" rel="stylesheet">
    <link href="file:///E:/Abacus%20Multimedia/DestinationPk/assets/css/sections/global-settings.css" rel="stylesheet">
    <style>
        .ao-scout-accordion__bottom {
            width: 100%;
            max-height: none; /* Ensure there is no height restriction */
            overflow: visible; /* Ensure content is not hidden */
            transition: none; /* Remove transition effects */
        }

        .ao-scout-accordion--collapsed .ao-scout-accordion__bottom {
            display: block; /* Ensure the content is displayed */
        }

        .js-ao-scout-accordion__bottom-content {
            display: block; /* Ensure the content inside is displayed */
        }

        .ao-scout-accordion__arrow {
            display: none; /* Hide the arrow if it's not needed */
        }
    </style>
</head>
<body>
<header class="main-header">
    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <!-- Main Box -->
            <div class="main-box clearfix">
                <!-- Logo -->
                <div class="logo-box">
                    <div class="logo">
                        <a title="Destination Pakistan">
                            <img src="E:/Abacus%20Multimedia/DestinationPk/assets/images/logo.PNG" alt="Destination Pakistan Logo" title="Destination Pakistan Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<br><br>
<div class="page-wrapper">
    <div class="dsp-container tour-single" style="margin-top:5%">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="trip-header">
                    <div class="sp-header">
                        <h1>{{$trip_details->trip_title}}</h1>
                        <div style="padding-bottom: 15px; font-size: 17px">  Tour Type  : <strong>{{$trip_details->category->name}}</strong></div>

                        <div class="info clearfix">
                            <div class="duration"><i class="fa-solid fa-clock"></i> {{$trip_details->trip_duration}} Days {{$trip_details->trip_duration - 1}} Nights</div>
                        </div>

                        <div id="tripDetailsCarousel" class="carousel slide trip-details-carousel" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($trip_details->mediaGalleries as $index => $media)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <img class="carousel-img d-block w-100" src="E:/Abacus%20Multimedia/DestinationPk/assets/images/resources/destinations/gallery/{{$media->image_path}}" alt="Slide {{ $index + 1 }}">
                                    </div>
                                    @break
                                @endforeach
                            </div>
                        </div>

                        <div class="text-content">
                            <h3>Tour Details</h3>
                            {!!$trip_details->trip_description!!}
                            <br>

                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="content-inner">
                        <div class="upper-content mb-0">
                            <div class="trip-details">
                                <div class="dsp-widget similar-widget">
                                    <div class="inner">
                                        <h3>Trip Route</h3>
                                        @if(!empty($google_map))
                                            <img src="E:/Abacus%20Multimedia/DestinationPk/public/images/maps/{{ $google_map }}" alt="Trip Map">
                                        @else
                                            <p>Failed to load map image.</p>
                                        @endif
                                    </div>
                                </div>
                                @if($trip_destinations)
                                    <div style="display: block; padding: 10px 10px; border: 1px solid rgba(0,0,0,0.15); border-radius: 10px;">
                                        <div class="inner">
                                            <div class="" style="width: 100%;">
                                                <div class="ao-common-map-popup__content-info-details-destinations-title ao-common-map-popup__content-info-details-destinations-title--tour-v1 aa-text-h4"
                                                     data-cy="tdp-map-popup--destinations-heading"
                                                     style="padding:20px">Destinations</div>
                                                <div class="ao-common-map-popup__content-info-details-scrollable-wrapper"
                                                     style="margin-top:3%;  max-height: 900px; overflow-y: auto;">
                                                    <div class="ao-common-map-popup__content-info-details-destinations ao-common-map-popup__content-info-details-destinations--tour-v1">
                                                        <ul id="map-popup--destinations-list" class="ao-common-map-popup__content-info-details-destinations-list" data-cy="tdp-map-popup--destinations-list">
                                                            @foreach($trip_destinations as $trip_destination)
                                                                <li class="ao-common-map-popup__content-info-details-destinations-list-element ao-common-map-popup__content-info-details-destinations-list-element--tour-v1 js-destinations-list-element"> {{$trip_destination->name}} </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>

                        </div>

                        <div class="ao-tour-block js-ao-tour-block js-ao-tour-itinerary ao-tour-itinerary itn" data-block-type="Itinerary" data-expand-text="Expand All" data-hide-text="Hide All">
                            <div class="anchor-scroll anchor-scroll--itn"></div>
                            <div class="ao-tour-itinerary__heading-wrapper">
                                <h2 class="ao-tour-block__heading ao-tour-block__heading--no-margin-bottom" data-cy="tdp-itinerary--heading">
                                    Itinerary
                                </h2>
                            </div>
                            <div class="aa-tour-itinerary__text" itemprop="description">
                                {!!$trip_details->trip_overview!!}
                            </div>
                            <ol class="ao-tour-itinerary--first">
                                <li class="js-ao-scout-accordion ao-scout-accordion ao-tour-itinerary__item--first initiated active ao-scout-accordion--collapsed js-ao-scout-accordion--collapsed js-ao-tour-itinerary__list " data-block-name="Included" data-category-name="Tour Detail">
                                    <div class="">
                                        <div class="js-ao-scout-accordion__content-top ao-scout-accordion__content-top">
                                            <div class="js-ao-scout-accordion__title ao-scout-accordion__title">
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
                                                        <div class="js-ao-scout-accordion__arrow ao-scout-accordion__arrow"></div>
                                                    </div>
                                                </div>
                                                <div class="day{{ $index + 1 }} js-ao-scout-accordion__bottom ao-scout-accordion__bottom">
                                                    <div class="ao-scout-accordion__content js-ao-scout-accordion__bottom-content ao-scout-accordion__bottom-content">
                                                        <div class="i ao-tour-itinerary__content-wrapper">
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
                        <div class="ao-tour-block js-ao-tour-block inc ao-tour-included js-ao-tour-included" id="tour-what-is-included" data-block-type="What's included" data-cy="tdp-whats-included">
                            <div class="anchor-scroll anchor-scroll--inc"></div>
                            <h2 class="ao-tour-block__heading" data-cy="tdp-whats-included--heading">
                                What's Included
                            </h2>
                            <ul class="js-ao-tour-included__included ao-tour-included__included" data-cy="tdp-whats-included--items" data-expand-text="Expand All" data-hide-text="Hide All">
                                <li class="js-ao-scout-accordion ao-scout-accordion ao-scout-accordion--collapsed js-ao-scout-accordion--collapsed ao-tour-included__accordion ao-tour-included__accordion-included" data-block-name="Included" data-category-name="Tour Detail">
                                    <div class="ao-scout-accordion__content">
                                        <div class="js-ao-scout-accordion__content-top ao-scout-accordion__content-top">
                                            <div class="js-ao-scout-accordion__title ao-scout-accordion__title">
                                                <span class="ao-common-accordion__title-text" data-cy="tdp-whats-included--included">Durartion</span>
                                            </div>
                                        </div>
                                        <div class="js-ao-scout-accordion__bottom ao-scout-accordion__bottom">
                                            <div class="ao-scout-accordion__content js-ao-scout-accordion__bottom-content ao-scout-accordion__bottom-content">
                                                <div class="js-ao-tour-included__included-item" data-cy="tdp-whats-included--expanded-item">
                                                    <div class="duration">
                                                        <i class="fa-solid fa-clock"></i>
                                                        {{$trip_details->trip_duration}} Days {{$trip_details->trip_duration - 1}} Nights
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="js-ao-scout-accordion ao-scout-accordion ao-scout-accordion--collapsed js-ao-scout-accordion--collapsed ao-tour-included__accordion ao-tour-included__accordion-included" data-block-name="Included" data-category-name="Tour Detail">
                                    <div class="ao-scout-accordion__content">
                                        <div class="js-ao-scout-accordion__content-top ao-scout-accordion__content-top">
                                            <div class="js-ao-scout-accordion__title ao-scout-accordion__title">
                                                <span class="ao-common-accordion__title-text" data-cy="tdp-whats-included--included">Language</span>
                                                <div class="js-ao-scout-accordion__arrow ao-scout-accordion__arrow"></div>
                                            </div>
                                        </div>
                                        <div class="js-ao-scout-accordion__bottom ao-scout-accordion__bottom">
                                            <div class="ao-scout-accordion__content js-ao-scout-accordion__bottom-content ao-scout-accordion__bottom-content">
                                                <div class="js-ao-tour-included__included-item" data-cy="tdp-whats-included--expanded-item">
                                                    <p>ENGLISH</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="js-ao-scout-accordion ao-scout-accordion ao-scout-accordion--collapsed js-ao-scout-accordion--collapsed ao-tour-included__accordion ao-tour-included__accordion-included" data-block-name="Included" data-category-name="Tour Detail">
                                    <div class="ao-scout-accordion__content">
                                        <div class="js-ao-scout-accordion__content-top ao-scout-accordion__content-top">
                                            <div class="js-ao-scout-accordion__title ao-scout-accordion__title">
                                                <span class="ao-common-accordion__title-text" data-cy="tdp-whats-included--included">Includes</span>
                                                <div class="js-ao-scout-accordion__arrow ao-scout-accordion__arrow"></div>
                                            </div>
                                        </div>
                                        <div class="js-ao-scout-accordion__bottom ao-scout-accordion__bottom">
                                            <div class="ao-scout-accordion__content js-ao-scout-accordion__bottom-content ao-scout-accordion__bottom-content">
                                                <div class="js-ao-tour-included__included-item" data-cy="tdp-whats-included--expanded-item">
                                                    {!! $trip_details->trip_includes !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="js-ao-scout-accordion ao-scout-accordion ao-scout-accordion--collapsed js-ao-scout-accordion--collapsed ao-tour-included__accordion ao-tour-included__accordion-not-included" data-block-name="Not Included" data-category-name="Tour Detail">
                                    <div class="ao-scout-accordion__content">
                                        <div class="js-ao-scout-accordion__content-top ao-scout-accordion__content-top">
                                            <div class="js-ao-scout-accordion__title ao-scout-accordion__title">
                                                <span class="ao-common-accordion__title-text" data-cy="tdp-whats-included--no-included">Not Included</span>
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
                        </div>

                        <div class="js-ao-tour-availability__departures ao-tour-availability__departures">
                            <div class="ao-tour-availability__variants-title js-ao-tour-availability__variants-title aa-heading-h4"
                                 data-cy="tdp-availability--upcoming-departures-section"> Schedules </div>
                            <div class="ao-tour-availability__variants-container js-ao-tour-availability__variants-container">
                                @if(isset($trip_details->schedules) && count($trip_details->schedules) > 0)
                                    @foreach($trip_details->schedules as $index => $schedule)
                                        <div class="flex items-center" style="padding: 20px; border-radius: 10px; color: black;" class="am-tour-availability__variant js-am-tour-availability__variant" data-cy="tdp-availability--card">
                                            <div class="am-tour-availability__variant-date-start">
                                                {{date('l',strtotime($schedule->start_date))}}
                                                <div class="am-tour-availability__variant-bold-text" data-cy="tdp-availability--date-from" style="font-weight: bold;">
                                                    {{date('d M, Y',strtotime($schedule->start_date))}}
                                                </div>
                                            </div>
                                            <div class="am-tour-availability__variant-date-start">
                                                {{date('l',strtotime($schedule->end_date))}}
                                                <div class="am-tour-availability__variant-bold-text" data-cy="tdp-availability--date-to" style="font-weight: bold; text-align: right;">
                                                    {{date('d M, Y',strtotime($schedule->end_date))}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="main-footer">
        <div class="auto-container">
            <div class="content-box">
                <div class="row clearfix">
                    <div class="footer-column col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="footer-widget about-widget">
                            <div class="footer-logo">
                                <img src="E:/Abacus%20Multimedia/DestinationPk/assets/images/logo.PNG" height="160" width="250" alt="Destination Pakistan Logo">
                            </div>
                            <div class="footer-info">
                                <ul class="info">
                                    <li class="address">
                                        <a><i class="icon fa-solid fa-map-marker-alt" style="font-size: 15px;"></i> 412-E Johar Town Lahore, Pakistan</a>
                                    </li>
                                    <li class="phone">
                                        <a >
                                            <i class="icon fa-solid fa-phone" style="font-size: 15px;"></i> +92 349 409 6697
                                        </a>
                                        <span style="margin: 0 10px;">|</span>
                                        <a >
                                            <i class="icon fa-solid fa-phone" style="font-size: 15px;"></i> +92 309 101 8431
                                        </a>
                                    </li>
                                    <li class="email">
                                        <a >
                                            <i class="icon fa-solid fa-envelope" style="font-size: 15px;"></i> admin@destinationpk.com
                                        </a>
                                    </li>
                                </ul>
                                <ul class="social-links">
                                    <li>
                                        <a href="https://www.facebook.com/destinationispakistan" class="facebook" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/destinationpak" class="twitter" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="http://www.youtube.com/@destinationpakistan92" class="youtube" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
