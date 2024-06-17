</main>
</div>
<footer class="py-16  text-sm text-black dark:text-white/70">
    <div id="footer">
        <!-- Main -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <img class="footer-logo" src="/images/thumbnail_image001-removebg-preview.png" alt="">
                    <br><br>
                    <p>Established on April 1st, 1973, under the Housing Act cap 226, the National Housing Corporation boasts over five decades of dedicated service. As a government-owned entity, our headquarters are conveniently located on Country Road in St. Michael, with multiple depots spread across urban and rural Barbados to better serve our tenants. </p>
                </div>

                <div class="col-md-4 col-sm-6 ">
                    <h4>Helpful Links</h4>
                    <ul class="footer-links">

                        <li><a class="{{ Request::is('/') ? 'current' : '' }}" href="/">Home</a>
                        </li>

                        <li><a class="{{ Request::is('projects') ? 'current' : '' }}" href="/projects">Projects</a>
                        <li><a class="{{ Request::is('our-services') ? 'current' : '' }}" href="/our-services">Our Services</a>
                        <li><a class="{{ Request::is('about-us') ? 'current' : '' }}" href="/about-us">About Us</a>
                            {{--<ul>--}}
                                {{--<li><a class="{{ Request::is('mission-and-vision') ? 'current' : '' }}" href="mission-and-vision">Mission & Vision</a></li>--}}
                                {{--<li><a class="{{ Request::is('commercial-endeavors') ? 'current' : '' }}" href="commercial-endeavors">Commercial Endeavors</a></li>--}}
                            {{--</ul>--}}
                        </li>
                        <li><a class="{{ Request::is('contact') ? 'current' : '' }}" href="contact">Contact Us</a></li>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-3  col-sm-12">
                    <h4>Contact Us</h4>
                    <div class="text-widget">
                        <span>“The Garden” Country Roade</span> <br>
                        Phone: <span>1-246-536-5300</span><br>
                        E-Mail:<span> <a href="#">NHC.CustomerService@barbados.gov.bb</a> </span><br>
                    </div>

                    <ul class="social-icons margin-top-20">
                        <li><a class="facebook" href="https://www.facebook.com/Nhcbarbados"><i class="icon-facebook"></i></a></li>
                        {{--<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>--}}
                        {{--<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>--}}
                        {{--<li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>--}}
                    </ul>

                </div>

            </div>

            <!-- Copyright -->
            <div class="row">
                <div class="col-md-12">
                    <div class="copyrights"><p>NHC &copy; {{ date('Y') }} All Rights Reserved.</p>  </div>
                </div>
            </div>

        </div>

    </div>

</footer>
</div>
</div>
</div>
</body>



</html>
		<!-- Scripts
================================================== -->
		<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{ asset('scripts/jquery-3.6.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/jquery-migrate-3.3.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/chosen.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/rangeSlider.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/sticky-kit.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/masonry.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/mmenu.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/tooltips.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('scripts/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('scripts/fancybox.umd.js') }}"></script>


<script type="text/javascript" src="{{ asset('scripts/custom.js') }}"></script>
