<x-app-layout>
    <!-- Breadcrumb area Start -->
    <div class="breadcrumb-area bg--white-6 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Contact Us</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="current"><span>Contact Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner">
            <div class="container">
                <div class="row pt--75 pt-md--50 pt-sm--30 pb--80 pb-md--60 pb-sm--35">
                    <div class="col-md-7 mb-sm--30">
                        <h2 class="heading-secondary mb--50 mb-md--35 mb-sm--20">Get in touch</h2>

                        <!-- Contact form Start Here -->
                        <form class="form" action="https://htmldemo.net/airi/airi/mail.php" id="contact-form">
                            <div class="form__group mb--20">
                                <input type="text" id="contact_name" name="contact_name" class="form__input form__input--2" placeholder="Your name*">
                            </div>
                            <div class="form__group mb--20">
                                <input type="email" id="contact_email" name="contact_email" class="form__input form__input--2" placeholder="Email Address*">
                            </div>
                            <div class="form__group mb--20">
                                <input type="text" id="contact_phone" name="contact_phone" class="form__input form__input--2" placeholder="Your Phone*">
                            </div>
                            <div class="form__group mb--20">
                                <textarea class="form__input form__input--textarea" id="contact_message" name="contact_message" placeholder="Message*"></textarea>
                            </div>
                            <div class="form__group">
                                <button type="submit" class="btn btn-submit btn-style-1">Send</button>
                            </div>
                            <div class="form__output"></div>
                        </form>
                        <!-- Contact form end Here -->

                    </div>
                    <div class="col-md-5 col-xl-4 offset-xl-1">
                        <h2 class="heading-secondary mb--50 mb-md--35 mb-sm--20">Contact info</h2>

                        <!-- Contact info widget start here -->
                        <div class="contact-info-widget mb--45 mb-sm--35">
                            <div class="contact-info">
                                <h3>Postal Address</h3>
                                <p>PO Box 16122 Collins Street West <br> Victoria 8007 Australia</p>
                            </div>
                        </div>
                        <!-- Contact info widget end here -->

                        <!-- Contact info widget start here -->
                        <div class="contact-info-widget mb--45 mb-sm--35">
                            <div class="contact-info">
                                <h3>Airi HQ</h3>
                                <p>Postal Address <br> PO Box 16122 Collins Street West <br> Victoria 8007 Australia
                                </p>
                            </div>
                        </div>
                        <!-- Contact info widget end here -->

                        <!-- Contact info widget start here -->
                        <div class="contact-info-widget two-column-list sm-one-column mb--45 mb-sm--35">
                            <div class="contact-info mb-sm--35">
                                <h3>Business Phone</h3>
                                <a href="#">+61 3 8376 6284</a>
                            </div>
                            <div class="contact-info">
                                <h3>Say Hello</h3>
                                <a href="mailto:demo@example.com">demo@example.com</a>
                            </div>
                        </div>
                        <!-- Contact info widget end here -->
                        <!-- Social Icons Start Here -->
                        <ul class="social body-color">
                            <li class="social__item">
                                <a href="https://twitter.com/" class="social__link">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://plus.google.com/" class="social__link">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://facebook.com/" class="social__link">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://youtube.com/" class="social__link">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://instagram.com/" class="social__link">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- Social Icons End Here -->
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div id="google-map">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->
</x-app-layout>