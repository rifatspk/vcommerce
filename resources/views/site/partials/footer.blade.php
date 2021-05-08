<!--footer area start-->
<div class="brand_newsletter_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand_container owl-carousel">
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('frontend')}}/img/brand/brand.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('frontend')}}/img/brand/brand1.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('frontend')}}/img/brand/brand2.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('frontend')}}/img/brand/brand3.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('frontend')}}/img/brand/brand4.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('frontend')}}/img/brand/brand5.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a href="#"><img src="{{asset('frontend')}}/img/brand/brand1.png" alt=""></a>
                    </div>
                </div>
                <div class="newsletter_inner">
                    <div class="newsletter_content">
                        <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                    </div>
                    <div class="newsletter_form">
                        <form action="#">
                            <input placeholder="Email..." type="text">
                            <button type="submit"><i class="zmdi zmdi-mail-send"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer_widgets">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="widgets_container contact_us">
                        @if (config('settings.site_logo') != null)
                        <a href="{{ url('/') }}"><img src="{{ asset('storage/'.config('settings.site_logo')) }}"
                                alt="Logo"></a>
                        @endif
                        <div class="footer_contact">
                            <ul>
                                <li><i class="zmdi zmdi-home"></i><span>Addresss:</span>
                                    {{config('settings.location')}}</li>
                                <li><i class="zmdi zmdi-phone-setting"></i><span>Phone:</span><a
                                        href="tel:(+1) 866-540-3229">{{config('settings.phone')}}</a> </li>
                                <li><i class="zmdi zmdi-email"></i><span>Email:</span>
                                    {{config('settings.email_address')}}</li>
                            </ul>
                        </div>
                        <div class="social_icone">
                            <ul>
                                <li class="share"><a href="#" title="rss"><i class="fa fa-share-alt"></i></a>
                                    <div class="social_title">
                                        <p>Subscribe</p>
                                        <h3>Rss Feed</h3>
                                    </div>
                                </li>
                                <li class="twitter"><a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
                                    <div class="social_title">
                                        <p>Follow Us</p>
                                        <h3>Twitter</h3>
                                    </div>
                                </li>
                                <li class="facebook"><a href="#" title="facebook"><i class="fa fa-facebook"></i></a>
                                    <div class="social_title">
                                        <p>Find Us</p>
                                        <h3>Facebook</h3>
                                    </div>
                                </li>
                                <li class="google_plus"><a href="#" title="google"><i class="fa fa-google-plus"></i></a>
                                    <div class="social_title">
                                        <p>Find Us</p>
                                        <h3>Google+</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="widgets_container widget_menu">
                                <h3>CUSTOMER SERVICE</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">Shipping & Returns</a></li>
                                        <li><a href="#"> Secure Shopping</a></li>
                                        <li><a href="#">International Shipping</a></li>
                                        <li><a href="#"> Affiliates</a></li>
                                        <li><a href="contact.html"> Contact</a></li>
                                        <li><a href="#"> Travel</a></li>
                                        <li><a href="#">ecommerce</a></li>
                                        <li><a href="#"> Creative</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="widgets_container widget_menu">
                                <h3>Information</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="#">Delivery infomation</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#"> Travel</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                        <li><a href="#">Conditions</a></li>
                                        <li><a href="#"> Frequently Questions</a></li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="widgets_container">
                        <h3>Latest Posts</h3>
                        <div class="Latest_Posts_wrapper">
                            <div class="single_Latest_Posts">
                                <div class="Latest_Posts_thumb">
                                    <a href="blog-details.html"><img src="{{asset('frontend')}}/img/category/post1.jpg"
                                            alt=""></a>
                                </div>
                                <div class="Latest_Posts_content">
                                    <h3><a href="blog-details.html">Blog image post</a></h3>
                                    <span><i class="zmdi zmdi-card-sd"></i> 10 Mar, 2019</span>
                                </div>
                            </div>
                            <div class="single_Latest_Posts">
                                <div class="Latest_Posts_thumb">
                                    <a href="blog-details.html"><img src="{{asset('frontend')}}/img/category/post2.jpg"
                                            alt=""></a>
                                </div>
                                <div class="Latest_Posts_content">
                                    <h3><a href="blog-details.html">Post with Gallery</a></h3>
                                    <span><i class="zmdi zmdi-card-sd"></i> 10 Mar, 2019</span>
                                </div>
                            </div>
                            <div class="single_Latest_Posts">
                                <div class="Latest_Posts_thumb">
                                    <a href="blog-details.html"><img src="{{asset('frontend')}}/img/category/post3.jpg"
                                            alt=""></a>
                                </div>
                                <div class="Latest_Posts_content">
                                    <h3><a href="blog-details.html">Post with Audio</a></h3>
                                    <span><i class="zmdi zmdi-card-sd"></i> 10 Mar, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer_tag">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer_tag_container">
                        <div class="footer_tag_menu">
                            <h3>Furniture :</h3>
                            <ul>
                                <li><a href="#">bedroom</a></li>
                                <li><a href="#">Livingroom</a></li>
                                <li><a href="#">badroom</a></li>
                                <li><a href="#">Sofa</a></li>
                                <li><a href="#">Chair</a></li>
                                <li><a href="#">Bed</a></li>
                                <li><a href="#">Desk</a></li>
                            </ul>
                        </div>
                        <div class="footer_tag_menu">
                            <h3>Electronic :</h3>
                            <ul>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">TV</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Mobile</a></li>
                                <li><a href="#">Tablet</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="copyright_area">
                        <p>Copyright &copy; 2019 <a href="#"> pallas </a> All Right Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="footer_payment text-right">
                        <p><img src="{{asset('frontend')}}/img/icon/payment.png" alt=""></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>