@extends('layouts.master')

{{--<div class="portfolio_filter">--}}
{{--    <div class="outter">--}}
{{--        <div class="inner">--}}
{{--            <ul>--}}
{{--                <li><a class="select-cat" data-filter="*" href="#">All Works<span></span></a></li>--}}
{{--                <li><a data-filter=".photo" href="#">Photography<span></span></a></li>--}}
{{--                <li><a data-filter=".brandings" href="#">Brandings<span></span></a></li>--}}
{{--                <li><a data-filter=".digital" href="#">Digital<span></span></a></li>--}}
{{--            </ul>   </div>--}}
{{--    </div>--}}
</div>

<div id="main" class="site-main">

    <!-- HOME SECTION
    ================================================== -->
    <section id="hero" class="pt-page page-layout hero agency">
        <div class="outter">
            <div class="inner text-center">
                <div class="down-link no-border">
                    <a href="#/about" class="section-down-arrow ">
                        <svg class="nectar-scroll-icon" viewBox="0 0 30 45" enable-background="new 0 0 30 45">
                            <path class="nectar-scroll-icon-path" fill="none" stroke="#ffffff" stroke-width="2" stroke-miterlimit="10" d="M15,1.118c12.352,0,13.967,12.88,13.967,12.88v18.76  c0,0-1.514,11.204-13.967,11.204S0.931,32.966,0.931,32.966V14.05C0.931,14.05,2.648,1.118,15,1.118z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="video-wrapper d-none d-lg-block">
            <video loop="" muted="" autoplay>
                <source src="{{asset('images/videos/slider-full.webm')}}" type="video/webm">
                <source src="{{asset('images/videos/slider-full.mp4')}}" type="video/mp4">
            </video>
            <div class="gif" style="background:url('{{asset('images/videos/slider.gif')}}) no-repeat center center fixed"></div>
        </div>
        <div class="video-wrapper d-none d-md-block d-lg-none">
            <video loop="" muted="" autoplay>
                <source src="{{asset('images/videos/slider-720.webm')}}" type="video/webm">
                <source src="{{asset('images/videos/slider-720.mp4')}}" type="video/mp4">
            </video>
            <div class="gif" style="background:url('{{asset('images/videos/slider.gif')}}) no-repeat center center fixed"></div>
        </div>
        <div class="video-wrapper d-md-none">
            <video loop="" muted="" autoplay>
                <source src="{{asset('images/videos/slider-mobile.webm')}}" type="video/webm">
                <source src="{{asset('images/videos/slider-mobile.mp4')}}" type="video/mp4">
            </video>
            <div class="gif" style="background:url('{{asset('images/videos/slider.gif')}}) no-repeat center center fixed"></div>
        </div>

    </section>

    <!-- ABOUT SECTION
    ================================================== -->
    <section id="about" class="pt-page page-layout">
        <div class="section-out">
            <div class="inclusive">
                <!-- page title -->
                <div class="page-caption">
                    <h1 class="page-title"><span class="gradient-text">Over</span><br><span class="white-text-title">ons</span></h1>
                    <h2 class="page-subtitle" >Je droom website met coderslab.nl</h2>
                </div>
                <!-- Who we are -->

                <div class="row split-content">
                    <div class="col-lg-4">
                        <h2 class="little-title">Wie wij zijn?</h2>
                    </div>
                    <div class="col-lg-7 second">
                        <p>Coderslab.nl is hét full service internetbureau voor professionele websites en digitale oplossingen. Wij helpen ambitieuze organisaties om meer online succes te behalen. Dat doen we met slimme online oplossingen, eerlijk advies, en een persoonlijke samenwerking. Zoek jij een betrouwbare partner? Dan zijn wij je team!</p>
                    </div>
                </div>
                            <!-- Call to action -->
                <a href="#/contact" class="cta text-center">
                    <div class="got-project">Got a project?</div>
                    <div class="lets"><span>Let's</span> talk.</div>
                </a>

                @include('partials.footer')

            </div> <!-- inclusive end -->
        </div>
    </section>

    <!-- PORTFOLIO SECTION
    ================================================== -->
    <section id="portfolio" class="pt-page page-layout">
        <div class="section-out">
            <div class="inclusive">
                <!-- page title -->
                <div class="page-caption">
                    <h1 class="page-title">Our<br><span>Portfolio</span></h1>
                    <h2 class="page-subtitle">We manufacture a hard copy of your dreams and stories.</h2>

                    <div class="filter-icon" data-tip="Show filters">
                        <div id="backpage">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="45px" height="45px" viewBox="0 0 80 80" xml:space="preserve">
                <circle class="circle-action is-inner" cx="40" cy="40" r="36" />
                                <circle class="circle-action is-outer" cx="40" cy="40" r="36" />
            </svg>
                            <i class="fa fa-sort"></i>
                        </div>
                    </div>

                </div>
                <div class="row masonry clearfix">
                    <!-- a work -->
                    <a href="work-1.html" class="col-xl-6 col-md-6 grid-item brandings"  data-type="ajax-load">
                        <figure class="portfolio-item">
                            <div class="image">
                                <img src="images/works/work-1/01.jpg"/>
                            </div>
                            <figcaption>
                                <div class="item-cat-mask">
                                    <span>Brandings </span>
                                    <span>Viev Project </span>
                                </div>
                                <h3 class="title">Hoho 2020!</h3>
                                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486" height="16.412" viewBox="0 0 14.486 18.412">
                                    <path d="M7.073,26.241h0L0,19.172l1.414-1.415,4.829,4.829V8h2V22.586l4.829-4.829,1.415,1.415-7.241,7.24Z" transform="translate(0 -8)"></path>
                                </svg>
                            </figcaption>
                        </figure>
                    </a>
                    <!-- a work -->
                    <a href="work-2.html" class="col-xl-6 col-md-6 grid-item digital white"  data-type="ajax-load">
                        <figure class="portfolio-item">
                            <div class="image">
                                <img src="images/works/work-2/01.jpg"/>
                            </div>
                            <figcaption>
                                <div class="item-cat-mask">
                                    <span> Digital </span>
                                    <span>Viev Project </span>
                                </div>
                                <h3 class="title">Play Tennis</h3>
                                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486" height="16.412" viewBox="0 0 14.486 18.412">
                                    <path d="M7.073,26.241h0L0,19.172l1.414-1.415,4.829,4.829V8h2V22.586l4.829-4.829,1.415,1.415-7.241,7.24Z" transform="translate(0 -8)"></path>
                                </svg>
                            </figcaption>
                        </figure>
                    </a>
                    <!-- a work -->
                    <a href="work-3.html" class="col-xl-3 col-md-3 grid-item photo white"  data-type="ajax-load">
                        <figure class="portfolio-item">
                            <div class="image">
                                <img src="images/works/work-3/01.jpg"/>
                            </div>
                            <figcaption>
                                <div class="item-cat-mask">
                                    <span>Photography</span>
                                    <span>Viev Project </span>
                                </div>
                                <h3 class="title">Bikers clothing</h3>
                                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486" height="16.412" viewBox="0 0 14.486 18.412">
                                    <path d="M7.073,26.241h0L0,19.172l1.414-1.415,4.829,4.829V8h2V22.586l4.829-4.829,1.415,1.415-7.241,7.24Z" transform="translate(0 -8)"></path>
                                </svg>
                            </figcaption>
                        </figure>
                    </a>
                    <!-- a work -->
                    <a href="work-4.html" class="col-xl-3 col-md-3 grid-item digital white"  data-type="ajax-load">
                        <figure class="portfolio-item">
                            <div class="image">
                                <img src="images/works/work-4/01.jpg"/>
                            </div>
                            <figcaption>
                                <div class="item-cat-mask">
                                    <span>Digital </span>
                                    <span>Viev Project </span>
                                </div>
                                <h3 class="title">Laila Men</h3>
                                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486" height="16.412" viewBox="0 0 14.486 18.412">
                                    <path d="M7.073,26.241h0L0,19.172l1.414-1.415,4.829,4.829V8h2V22.586l4.829-4.829,1.415,1.415-7.241,7.24Z" transform="translate(0 -8)"></path>
                                </svg>
                            </figcaption>
                        </figure>
                    </a>
                    <!-- a work -->
                    <a href="work-5.html" class="col-xl-6 col-md-6 grid-item photo"  data-type="ajax-load">
                        <figure class="portfolio-item">
                            <div class="image">
                                <img src="images/works/work-5/01.jpg"/>
                            </div>
                            <figcaption>
                                <div class="item-cat-mask">
                                    <span>Photography</span>
                                    <span>Viev Project </span>
                                </div>
                                <h3 class="title">Simone Braman</h3>
                                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486" height="16.412" viewBox="0 0 14.486 18.412">
                                    <path d="M7.073,26.241h0L0,19.172l1.414-1.415,4.829,4.829V8h2V22.586l4.829-4.829,1.415,1.415-7.241,7.24Z" transform="translate(0 -8)"></path>
                                </svg>
                            </figcaption>
                        </figure>
                    </a>
                    <!-- a work -->
                    <a href="work-6.html" class="col-xl-6 col-md-6 grid-item brandings"  data-type="ajax-load">
                        <figure class="portfolio-item">
                            <div class="image">
                                <img src="images/works/work-6/01.jpg"/>
                            </div>
                            <figcaption>
                                <div class="item-cat-mask">
                                    <span>Brandings</span>
                                    <span>Viev Project </span>
                                </div>
                                <h3 class="title">Late Summer</h3>
                                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486" height="16.412" viewBox="0 0 14.486 18.412">
                                    <path d="M7.073,26.241h0L0,19.172l1.414-1.415,4.829,4.829V8h2V22.586l4.829-4.829,1.415,1.415-7.241,7.24Z" transform="translate(0 -8)"></path>
                                </svg>
                            </figcaption>
                        </figure>
                    </a>
                    <!-- a work -->
                    <a href="work-7.html" class="col-xl-3 col-md-3 grid-item digital"  data-type="ajax-load">
                        <figure class="portfolio-item">
                            <div class="image">
                                <img src="images/works/work-7/01.jpg"/>
                            </div>
                            <figcaption>
                                <div class="item-cat-mask">
                                    <span>Digital</span>
                                    <span>Viev Project </span>
                                </div>
                                <h3 class="title">The bungalow</h3>
                                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486" height="16.412" viewBox="0 0 14.486 18.412">
                                    <path d="M7.073,26.241h0L0,19.172l1.414-1.415,4.829,4.829V8h2V22.586l4.829-4.829,1.415,1.415-7.241,7.24Z" transform="translate(0 -8)"></path>
                                </svg>
                            </figcaption>
                        </figure>
                    </a>
                    <!-- a work -->
                    <a href="work-8.html" class="col-xl-3 col-md-3 grid-item digital white"  data-type="ajax-load">
                        <figure class="portfolio-item">
                            <div class="image">
                                <img src="images/works/work-8/01.jpg"/>
                            </div>
                            <figcaption>
                                <div class="item-cat-mask">
                                    <span>Digital </span>
                                    <span>Viev Project </span>
                                </div>
                                <h3 class="title">Little Jaqcues</h3>
                                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486" height="16.412" viewBox="0 0 14.486 18.412">
                                    <path d="M7.073,26.241h0L0,19.172l1.414-1.415,4.829,4.829V8h2V22.586l4.829-4.829,1.415,1.415-7.241,7.24Z" transform="translate(0 -8)"></path>
                                </svg>
                            </figcaption>
                        </figure>
                    </a>

                </div> <!-- row masonry end -->

                <!-- Call to action -->
                <a href="#/contact" class="cta text-center">
                    <div class="got-project">Got a project?</div>
                    <div class="lets"><span>Let's</span> talk.</div>
                </a>

                @include('partials.footer')
            </div>
        </div>
    </section>

    <!-- OFFERS SECTION
    ================================================== -->
    <section id="offers" class="pt-page page-layout">
        <div class="section-out">
            <div class="inclusive">
            <!-- page title -->
            <div class="page-caption">
                <h1 class="page-title"><span class="gradient-text">Onze</span><br><span class="white-text-title">Diensten</span></h1>
                <h2 class="page-subtitle">Je droom website met coderslab.nl</h2>
            </div>
            <div class="row masonry">

                <!-- a news -->
                <div class="col-xl-6 grid-item">
                    <div class="news">
                        <div class="news-content">
                            <div class="inner">
                                <a href="#" data-type="ajax-load">
                                    <h2 class="title">Website Pro.</h2>
                                </a>
                                <p>WordPress sites of ontwikkeling op maat. We zorgen voor mooi design, snelle laadtijd en SEO optimalisatie in één.</p>
                                <a href="#" data-type="ajax-load" class="read d-none d-md-block">Read More <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486"
                                                                                                                height="16.412" viewBox="0 0 14.486 18.412">
                                        <path d="M7.073,26.241h0L0,19.172l1.414-1.415,4.829,4.829V8h2V22.586l4.829-4.829,1.415,1.415-7.241,7.24Z"
                                              transform="translate(0 -8)"></path>
                                    </svg></a>
                            </div>
                        </div>
                        <div class="image"  style="background-image:url('{{asset('images/news-1.jpg')}}');">
                        </div>
                    </div>
                </div>
                <!-- a news -->
                <div class="col-xl-6 grid-item">
                    <div class="news">
                        <div class="news-content">
                            <div class="inner">
                                <a href="#" data-type="ajax-load">
                                    <h2 class="title">E-commerce.</h2>
                                </a>
                                <p>We bouwen complete gebruiksvriendelijke webshops waar klanten eenvoudig jouw producten kunnen bestellen.</p>
                                <a href="#" data-type="ajax-load" class="read d-none d-md-block">Read More <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486"
                                                                                                                height="16.412" viewBox="0 0 14.486 18.412">
                                        <path d="M7.073,26.241h0L0,19.172l1.414-1.415,4.829,4.829V8h2V22.586l4.829-4.829,1.415,1.415-7.241,7.24Z"
                                              transform="translate(0 -8)"></path>
                                    </svg></a>
                            </div>
                        </div>
                        <div class="image"  style="background-image:url('{{asset('images/news-1.jpg')}}');">
                        </div>
                    </div>
                </div>
                <!-- a news -->
                <div class="col-xl-6 grid-item">
                    <div class="news">
                        <div class="news-content">
                            <div class="inner">
                                <a href="#" data-type="ajax-load">
                                    <h2 class="title">SEO Teksten</h2>
                                </a>
                                <p>Onze websites zijn technische hoogstandjes die ervoor zorgen dat jouw klanten je goed kunnen vinden via Google.
                                </p>
                                <a href="#" data-type="ajax-load" class="read d-none d-md-block">Read More <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486"
                                                                                                                height="16.412" viewBox="0 0 14.486 18.412">
                                        <path d="M7.073,26.241h0L0,19.172l1.414-1.415,4.829,4.829V8h2V22.586l4.829-4.829,1.415,1.415-7.241,7.24Z"
                                              transform="translate(0 -8)"></path>
                                    </svg></a>
                            </div>
                        </div>
                        <div class="image"  style="background-image:url('{{asset('images/news-1.jpg')}}');">
                        </div>
                    </div>
                </div>
                <!-- a news -->
                <div class="col-xl-6 grid-item">
                    <div class="news">
                        <div class="news-content">
                            <div class="inner">
                                <a href="#" data-type="ajax-load">
                                    <h2 class="title">Onderhoud</h2>
                                </a>
                                <p>Met website onderhoud blijft je website veilig en up-to-date. We onderhouden je website pro-actief en problemen lossen we direct altijd zeer snel op.
                                </p>
                                <a href="#" data-type="ajax-load" class="read d-none d-md-block">Read More <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486"
                                                                                                                height="16.412" viewBox="0 0 14.486 18.412">
                                        <path d="M7.073,26.241h0L0,19.172l1.414-1.415,4.829,4.829V8h2V22.586l4.829-4.829,1.415,1.415-7.241,7.24Z"
                                              transform="translate(0 -8)"></path>
                                    </svg></a>
                            </div>
                        </div>
                        <div class="image"  style="background-image:url('{{asset('images/news-1.jpg')}}');">
                        </div>
                    </div>
                </div>
                <!-- a news -->
                <div class="col-xl-6 grid-item">
                    <div class="news">
                        <div class="news-content">
                            <div class="inner">
                                <a href="#" data-type="ajax-load">
                                    <h2 class="title">Google Ads</h2>
                                </a>
                                <p>Google Ads (voorheen Google Adwords) biedt de mogelijkheid om zichtbaar te zijn in de resultaten wanneer jouw doelgroep op zoek is naar jouw product of dienst.
                                </p>
                                <a href="#" data-type="ajax-load" class="read d-none d-md-block">Read More <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486"
                                                                                                                height="16.412" viewBox="0 0 14.486 18.412">
                                        <path d="M7.073,26.241h0L0,19.172l1.414-1.415,4.829,4.829V8h2V22.586l4.829-4.829,1.415,1.415-7.241,7.24Z"
                                              transform="translate(0 -8)"></path>
                                    </svg></a>
                            </div>
                        </div>
                        <div class="image"  style="background-image:url('{{asset('images/news-1.jpg')}}');">
                        </div>
                    </div>
                </div>
                <!-- a news -->
                <div class="col-xl-6 grid-item">
                    <div class="news">
                        <div class="news-content">
                            <div class="inner">
                                <a href="#" data-type="ajax-load">
                                    <h2 class="title">Hosting</h2>
                                </a>
                                <p>Wij leggen domeinnamen voor je vast, koppelen deze aan schijfruimte (denk aan een harde schijf in de cloud) en plaatsen je website op deze ruimte.
                                </p>
                                <a href="#" data-type="ajax-load" class="read d-none d-md-block">Read More <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486"
                                                                                                                height="16.412" viewBox="0 0 14.486 18.412">
                                        <path d="M7.073,26.241h0L0,19.172l1.414-1.415,4.829,4.829V8h2V22.586l4.829-4.829,1.415,1.415-7.241,7.24Z"
                                              transform="translate(0 -8)"></path>
                                    </svg></a>
                            </div>
                        </div>
                        <div class="image"  style="background-image:url('{{asset('images/news-1.jpg')}}');">
                        </div>
                    </div>
                </div>
            </div> <!-- row end -->

            <!-- Call to action -->
            <a href="#/contact" class="cta text-center">
                <div class="got-project">Got a project?</div>
                <div class="lets"><span>Let's</span> talk.</div>
            </a>

            @include('partials.footer')

        </div>
        </div>
    </section>

    <!-- CONTACT SECTION
    ================================================== -->
    <section id="contact" class="pt-page page-layout">
        <div class="inclusive">
            <!-- page title -->
            <div class="page-caption">
                <h1 class="page-title "><span class="gradient-text">Get in</span><br><span class="white-text-title">Touch</span></h1>
                <h2 class="page-subtitle">Je droom website met coderslab.nl .</h2>
            </div>

            <div class="contact-information row">
                <!-- form -->
                <div class="col-xl-5">
                    <div id="contact-formular">
                        <div id="message"></div>
                        <form method="post" action="contact.php" name="contactform" id="contactform">
                            <!-- name -->
                            <div class="form-group">
                                <div class="placeholder">Your name</div>
                                <input class="inp" name="name" type="text" id="name">
                            </div>
                            <!-- email -->
                            <div class="form-group">
                                <div class="placeholder">Your e-mail</div>
                                <input class="inp" name="email" type="text" id="email">
                            </div>
                            <!-- company -->
                            <div class="form-group">
                                <div class="placeholder">Your Company</div>
                                <input class="inp" name="company" type="text" id="company">
                            </div>
                            <!-- about project -->
                            <div class="form-group">
                                <div class="placeholder">Tell us about your project</div>
                                <textarea class="inp" name="comments" id="comments" rows="1"  placeholder=""></textarea>
                            </div>
                            <!-- button -->
                            <div class="form-btn">
                                <input class="site-btn" type="submit" value="Sent it">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1">
                    <div class="contact-info email">
                        <span>Or just say</span>
                        <a href="mailto:klantenservice@coderslab.nl">klantenservice@coderslab.nl</a>
                    </div>
                    <div class="contact-info address">
                        <span>Our Office</span>
                        <p>Winkelwaard<br>
                            1824 HN Alkmaar<br>
                            Tel. +31 6 12345678</p>
                    </div>
                </div>
            </div>

            @include('partials.footer')

        </div>
    </section>

</div>
