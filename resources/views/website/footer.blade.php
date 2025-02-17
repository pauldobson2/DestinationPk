<!--Subscribe Section-->
<div class="subscribe-section">
    <div class="auto-container">
        <div class="outer-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="bg-grad-left">
                <img src="{{ asset('assets/images/background/bg-gradient-13.png') }}" alt="" title="">
            </div>
            <div class="bg-grad-right">
                <img src="{{ asset('assets/images/background/bg-gradient-14.png') }}" alt="" title="">
            </div>
            <div class="content-box">
                <div class="bg-layer" style="background-image: url({{ asset('assets/images/resources/featured/1700330060_Atabad_Lake.webp') }});">
                </div>
                <div class="row clearfix">
                    <div class="text-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="title-box">
                                <div class="subtitle">Let’s Explore the World</div>
                                <h2>Get Special Offers in Your Inbox</h2>
                            </div>
                        </div>
                    </div>
                    <div class="form-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="form-box subscribe-form">
                                <form id="newsletterForm">
                                    @csrf
                                    <div class="form-group">
                                        <div class="field-inner">
                                            <input type="email" name="email" value="" placeholder="Submit your email" required>
                                        </div>
                                        <button type="submit" class="theme-btn">
                                            <i class="icon fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                    <div id="subscribeMessage" style="display: none;"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Main Footer-->
<footer class="main-footer">
    <div class="upper-section">
        <div class="auto-container">
            <div class="content-box">
                <div class="row clearfix">
                    <div class="footer-column col-xl-5 col-lg-4 col-md-7 col-sm-12">
                        <div class="footer-widget about-widget">
                            <div class="footer-logo">
                                <a href="{{ route('home') }}" title="Destination Pakistan Logo">
                                    <img src="{{ asset('assets/images/Logo.svg') }}" height="160" width="250" alt="Destination Pakistan Logo">
                                </a>
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
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                        <div class="row clearfix">
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h3>Top Destination</h3>
                                    <div class="links">
                                        <ul>
                                            <li><a href="{{ route('trips_list', 'Fairy Meadows') }}">Fairy Meadows</a></li>
                                            <li><a href="{{ route('trips_list', 'Hunza') }}">Hunza</a></li>
                                            <li><a href="{{ route('trips_list', 'Skardu') }}">Skardu</a></li>
                                            <li><a href="{{ route('trips_list', 'Chitral') }}">Chitral</a></li>
                                            <li><a href="{{ route('trips_list', 'Islamabad') }}">Islamabad</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h3>Useful Links</h3>
                                    <div class="links">
                                        <ul>
                                            <li><a href="{{ route('about_us') }}">About Us</a></li>
                                            <li><a href="{{ route('about_us') }}">Company Profile</a></li>
                                            <li><a href="{{ route('contact_us') }}">Support</a></li>
                                            <li><a href="{{ route('contact_us') }}">Career</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="f-bottom">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="copyright" style="color: white">All rights reserved <strong>Destination Pakistan</strong> &copy; {{ date('Y') }}
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html">
    <span class="icon"><img src="{{ asset('assets/images/icons/arrow-up.svg') }}" alt="" title="Go To Top"></span>
</div>

<script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/appear.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/validate.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-script.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script>
    document.getElementById('newsletterForm').addEventListener('submit', function(event) {
        event.preventDefault();
        let formData = new FormData(this);

        fetch('{{ route('subscribe.newsletter') }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            const messageContainer = document.getElementById('subscribeMessage');
            messageContainer.style.display = 'block';
            messageContainer.textContent = data.message;
        })
        .catch(error => console.error('Error:', error));
    });
</script>
