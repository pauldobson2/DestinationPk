<!DOCTYPE html>
<html lang="en">
@include('website.header')
<!-- Include the CSS for page breaks -->
<style>
    /* Apply to multiple element types */
    div, ul, section, p, h1, h2, h3, h4, h5, h6, table, li, span {
        page-break-inside: avoid;
        break-inside: avoid;
    }

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
    .ao-tour-itinerary__item--first:after {
        top: 21px;
    }
    .ao-tour-itinerary__item:after {
        top: 27px;
    }
    .ao-tour-included__accordion:before {
    content: "";
    position: absolute;
    left: 0;
    width: 24px;
    height: 24px;
    top: 22px;
    background-size: 24px;
    background-position: 50%;
    background-repeat: no-repeat;
}
    .ao-common-map-popup__content-info-details-destinations-list-element:after {
        position: absolute;
        content: "";
        width: 16px;
        height: 16px;
        left: 0;
        top: 5px;
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #fff;
        background-image: url(data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0.5 0.43 20 20'%3E%3Cpath fill='%23409CD1' d='M10.5 20.43c-5.51 0-10-4.49-10-10s4.49-10 10-10 10 4.49 10 10-4.49 10-10 10zm0-15c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5z'/%3E%3Cpath fill='%23FFF' d='M10.5 5.43c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5z'/%3E%3C/svg%3E);
    }
    a:hover,
    a:focus,
    a:visited,
    a:active,
    button:active,
    button:focus {
        text-decoration: none;
        outline: none;
      color: #28a162;
    }
</style>
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
                        <a href="{{ route('home') }}" title="Destination Pakistan">
                            <img src="{{ asset('assets/images/Logo.svg') }}" alt="Destination Pakistan Logo" title="Destination Pakistan Logo">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<div class="page-wrapper">
    <div class="dsp-container tour-single" style="margin-top:5%">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="trip-header">
                <div class="content-side col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="content-inner">

                    <div class="sp-header">
                        <div class="loc-rat clearfix">
                            <div class="location">Pakistan</div>
                            <div class="rating"><a href="#" class="theme-btn"></a></div>

                        </div>
                        <h3>{{$trip_details->trip_title}}</h3>
                        <div style="padding-bottom: 15px; font-size: 17px">  Tour Type :  <strong>{{$trip_details->category->name}}</strong></div>
                        @if(!empty($trip_details->mediaGalleries))
                        <div id="tripDetailsCarousel" class="carousel slide trip-details-carousel" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($trip_details->mediaGalleries as $index => $media)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <img class="carousel-img d-block w-100" src="{{ asset('assets/images/resources/destinations/gallery/' . $media->image_path) }}" alt="Slide {{ $index + 1 }}">
                                    </div>
                                    @break
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <div class="info clearfix">
                            <div class="duration"><i class="fa-solid fa-clock"></i> {{$trip_details->trip_duration}} Days {{$trip_details->trip_duration - 1}} Nights</div>
                        </div>
                        <div class="text-center mt-2">
                            @if(!empty($google_map))
                                <img src="{{ asset('public/images/maps/' . $google_map) }}" alt="Trip Map">                                    @else
                                <p>Failed to load map image.</p>
                            @endif
                        </div>
                    </div>
                    <div class="upper-content mb-4">
                        <div class="text-content">
                        <h3>Tour Details</h3>
                            {!!$trip_details->trip_description!!}
                        </div>
                    </div>
                    <div class="ao-tour-block js-ao-tour-block js-ao-tour-itinerary ao-tour-itinerary itn mt-2" data-block-type="Itinerary" data-expand-text="Expand All" data-hide-text="Hide All">
                        <div class="anchor-scroll anchor-scroll--itn"></div>
                        <div class="ao-tour-itinerary__heading-wrapper">
                            <h3 class="ao-tour-block__heading ao-tour-block__heading--no-margin-bottom" data-cy="tdp-itinerary--heading">
                                Itinerary
                            </h3>
                        </div>
{{--                        <div class="aa-tour-itinerary__text" itemprop="description">--}}
{{--                            {!!$trip_details->trip_overview!!}--}}
{{--                        </div>--}}
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
                        <h3 class="ao-tour-block__heading" data-cy="tdp-whats-included--heading">
                            What's Included
                        </h3>
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
                        <hr>
                    </div>

                    <div class="js-ao-tour-availability__departures ao-tour-availability__departures">
                        <div class="ao-tour-availability__variants-title js-ao-tour-availability__variants-title aa-heading-h4"
                             data-cy="tdp-availability--upcoming-departures-section"> Schedules </div>
                        <ul class="ao-tour-availability__variants-container js-ao-tour-availability__variants-container">
                            @if(isset($trip_details->schedules) && count($trip_details->schedules) > 0)
                                @foreach($trip_details->schedules as $index => $schedule)
                                    <li style="padding: 20px; border-radius: 10px; color: black; background-color:#d3d3d3;" class="am-tour-availability__variant js-am-tour-availability__variant" data-cy="tdp-availability--card">
                                        <div class="am-tour-availability__variant-date-start"> {{date('l',strtotime($schedule->start_date))}} <div class="am-tour-availability__variant-bold-text" data-cy="tdp-availability--date-from" style="font-weight: bold;"> {{date('d M, Y',strtotime($schedule->start_date))}} </div>
                                        </div>
                                        <div class="am-tour-availability__variant-date-arrow-wrapper" style="text-align: center; margin: 10px 0;">
{{--                                                    <div class="am-tour-availability__variant-date-arrow" style="width: 0; height: 0; border-left: 10px solid transparent; border-right: 10px solid transparent; border-top: 10px solid white;"></div>--}}
                                        </div>
                                        <div class="am-tour-availability__variant-date-finish"> {{date('l',strtotime($schedule->end_date))}} <div class="am-tour-availability__variant-bold-text am-tour-availability__variant-bold-text--text-align-right" data-cy="tdp-availability--date-to" style="font-weight: bold; text-align: right;"> {{date('d M, Y',strtotime($schedule->end_date))}} </div>
                                        </div>
                                        <div class="am-tour-availability__variant-price-container" style="display: flex; align-items: center; margin-top: 10px;">
                                            <span class="globe-icon" style="margin-right: 5px;">🌐</span> English
                                        </div>
                                        <div class="am-tour-availability__variant-price-container" style="display: flex; align-items: center; margin-top: 10px;">
                                            <div class="am-tour-availability__variant-bold-text" data-cy="tdp-availability--price" style="font-weight: bold; font-size: 1.2em;"> $ {{$schedule->price}} </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>

                </div>
            </div>
            </div>
            <!--Sidebar Side-->
            <div class="trip-details">
            <div class="sidebar-side col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sidebar-inner">
{{--                    <div class="dsp-widget similar-widget">--}}
{{--                        <div class="inner">--}}
{{--                            <h3>Trip Route</h3>--}}
{{--                            @if(!empty($google_map))--}}
{{--                                <img src="{{ asset('public/images/maps/' . $google_map) }}" alt="Trip Map">                                    @else--}}
{{--                                <p>Failed to load map image.</p>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    @if($trip_destinations)
                    <div style="display: block; padding: 10px 10px; border: 1px solid rgba(0,0,0,0.15); border-radius: 10px;">
                        <div class="inner">
                            <div class="" style="width: 100%;">
                                <div class="ao-common-map-popup__content-info-details-destinations-title ao-common-map-popup__content-info-details-destinations-title--tour-v1 aa-text-h4"
                                     data-cy="tdp-map-popup--destinations-heading"
                                     style="padding:20px"
                                >Destinations</div>
                                <div class="ao-common-map-popup__content-info-details-scrollable-wrapper"
                                     style="margin-top:3%;  max-height: 900px; overflow-y: auto;">
                                    <div class="ao-common-map-popup__content-info-details-destinations" style="height: 100% !important;">
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
                                            <img src="{{ asset('assets/images/Logo.svg') }}" height="160" width="250" alt="Destination Pakistan Logo">
                                        </div>
                                        <div class="footer-info">
                                            <ul class="info">
                                                <li class="address">
                                                    <a href="#"><i class="icon fa fa-map-marker-alt" style="font-size: 15px;"></i> 412-E Johar Town Lahore, Pakistan</a>
                                                </li>
                                                <li class="phone">
                                                    <a href="tel:+923494096697">
                                                        <i class="icon fa-solid fa-phone" style="font-size: 15px;"></i> +92 349 409 6697
                                                    </a>
                                                    <span style="margin: 0 10px;">|</span>
                                                    <a href="tel:+923091018431">
                                                        <i class="icon fa-solid fa-phone" style="font-size: 15px;"></i> +92 309 101 8431
                                                    </a>
                                                </li>
                                                <li class="email">
                                                    <a href="mailto:admin@destinationpk.com">
                                                        <i class="icon fa fa-envelope" style="font-size: 15px;"></i> admin@destinationpk.com
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="social-links clearfix">
                                                <li>
                                                    <a href="https://www.facebook.com/destinationispakistan" class="facebook" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>

                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/destinationpak" class="twitter" target="_blank" rel="noopener noreferrer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20" fill="white">
                                                            <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                            <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                                                        </svg>
                                                    </a>
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
</body>
<script>
   window.onload = function() {
        // Empty specified elements
        const emptyElements = [
            '.testimonials-section',
            '.bg-layer',
            '.subscribe-section',
            '.f-bottom',
            '.links'
        ];
        emptyElements.forEach(selector => {
       const elements = document.querySelectorAll(selector);
       elements.forEach(element => element.remove());
   });

       var element = document.body; // Change this if you want to select a specific element
       element.style.pageBreakAfter = 'always';
       var opt = {
           margin: [0.25, 0.25, 0.25, 0.25],
           filename: 'trip_Brochure.pdf',
           image: { type: 'jpeg', quality: 0.98 },
           html2canvas: { scale: 2, useCORS: true },
           jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
       };
       html2pdf().from(element).set(opt).save().then(() => { window.close(); });
    };
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

<script src="{{ asset('assets/js/lib/html2pdf.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/html2canvas.min.js') }}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script> --}}

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script> --}}
</html>
