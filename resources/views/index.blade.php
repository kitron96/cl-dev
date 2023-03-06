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
            <div class="gif" style="background:url('{{asset('images/videos/slider.gif')}}') no-repeat center center fixed"></div>
        </div>
        <div class="video-wrapper d-none d-md-block d-lg-none">
            <video loop="" muted="" autoplay>
                <source src="{{asset('images/videos/slider-720.webm')}}" type="video/webm">
                <source src="{{asset('images/videos/slider-720.mp4')}}" type="video/mp4">
            </video>
            <div class="gif" style="background:url('{{asset('images/videos/slider.gif')}}') no-repeat center center fixed"></div>
        </div>
        <div class="video-wrapper d-none d-md-block">
            <video loop="" muted="" autoplay>
                <source src="{{asset('images/videos/slider-mobile.webm')}}" type="video/webm">
                <source src="{{asset('images/videos/slider-mobile.mp4')}}" type="video/mp4">
            </video>
            <div class="gif" style="background:url('{{asset('images/videos/slider.gif')}}') no-repeat center center fixed"></div>
        </div>
        <div class="video-wrapper d-md-none">
            <video loop="" muted="" autoplay>
                <source src="{{asset('images/videos/slider-mobile.webm')}}" type="video/webm">
                <source src="{{asset('images/videos/slider-mobile.mp4')}}" type="video/mp4">
            </video>
            <div class="gif" style="background:url('{{asset('images/videos/slider.gif')}}') no-repeat center center fixed"></div>
        </div>

    </section>

    <!-- ABOUT SECTION
    ================================================== -->
    <section id="about" class="pt-page page-layout">
        <div class="inclusive">
                <!-- page title -->
                <div class="page-caption">
                    <h1 class="page-title"><span class="gradient-text">Over</span><br><span class="white-text-title">ons</span></h1>
                    <h2 class="page-subtitle" >Your next level of website building</h2>
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

                <!-- Who we are -->

                <div class="row split-content">
                    <div class="col-lg-4">
                        <h2 class="little-title">Gedeeld succes</h2>
                    </div>
                    <div class="col-lg-7 second">
                        <p>Jouw online succes is de sleutel tot het succes van ons bedrijf. Als onze klanten betekenen jullie alles voor ons. We denken voortdurend na over hoe we onze producten en diensten voor jou kunnen verbeteren. We werken hard zodat iedereen kan genieten van de best mogelijke oplossingen voor online aanwezigheid, ongeacht je technische vaardigheden.
                        </p>
                    </div>
                </div>
                            <!-- Call to action -->
                <a href="#/contact" class="cta text-center">
                    <div class="got-project">Got a project?</div>
                    <div class="lets"><span>Let's</span> talk.</div>
                </a>

                @include('partials.footer')

            </div>
    </section>

    <!-- OFFERS SECTION
    ================================================== -->
    <section id="offers" class="pt-page page-layout">
        <div class="inclusive">
            <!-- page title -->
            <div class="page-caption">
                <h1 class="page-title"><span class="gradient-text">Onze</span><br><span class="white-text-title">Diensten</span></h1>
                <h2 class="page-subtitle">Your next level of website building</h2>
            </div>
            <div class="row masonry">

                <!-- a news -->
                <div class="col-xl-6 grid-item">
                    <div class="news">
                        <div class="news-content">
                            <div class="inner">
                                <a href="#" data-type="ajax-load">
                                    <h2 class="title">Website Pro</h2>
                                </a>
                                <p>WordPress sites of ontwikkeling op maat. We zorgen voor mooi design, snelle laadtijd en SEO optimalisatie in één.</p>
                                <a href="#" data-type="ajax-load" class="read d-none d-md-block">Lees meer <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486"
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
                                    <h2 class="title">E-commerce</h2>
                                </a>
                                <p>We bouwen complete gebruiksvriendelijke webshops waar klanten eenvoudig jouw producten kunnen bestellen.</p>
                                <a href="#" data-type="ajax-load" class="read d-none d-md-block">Lees meer <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486"
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
                                <a href="#" data-type="ajax-load" class="read d-none d-md-block">Lees meer <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486"
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
                                <a href="#" data-type="ajax-load" class="read d-none d-md-block">Lees meer <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486"
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
                                <a href="#" data-type="ajax-load" class="read d-none d-md-block">Lees meer <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486"
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
                                <a href="#" data-type="ajax-load" class="read d-none d-md-block">Lees meer <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="12.486"
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
    </section>


    <!-- PRICING SECTION
    ================================================== -->
    <section id="price" class="pt-page page-layout">
        <div class="inclusive">
            <!-- page title -->
            <div class="page-caption">
                <h1 class="page-title"><span class="gradient-text">Onze</span><br><span class="white-text-title">Prijzen</span></h1>
                <h2 class="page-subtitle">Your next level of website building</h2>
            </div>
            <div class="row masonry">

                <!-- a card -->
                <div class="col-xl-4 grid-item">
                    <div class="news">
                        <div class="news-content">
                            <div class="inne text-center">
                                <a href="#" data-type="ajax-load">
                                    <h2 class="title">Start</h2>
                                    <span class="gradient-text-danger">Vanaf <h4>€ 400</h4></span>
                                </a><br/><br/>
                                <div class="text-left price-list">
                                    <span class="text-white"><i class="fas fa-check-circle"></i> SEO friendly</span>
                                    <span class="text-white"><i class="fas fa-check-circle"></i> SSL certificaat</span>
                                    <span class="text-white"><i class="fas fa-times-circle"></i> E-commerce</span>
                                    <span class="text-white"><i class="fas fa-times-circle"></i> Extra hulp</span>
                                    <span class="text-white"><i class="fas fa-times-circle"></i> Prioritaire support</span>
                                </div>
                            </div>
                        </div>
                        <div class="image"  style="background-image:url('{{asset('images/news-1.jpg')}}');">
                        </div>
                    </div>
                </div>
                <!-- a card -->
                <div class="col-xl-4 grid-item">
                    <div class="news">
                        <div class="news-content">
                            <div class="inne text-center">
                                <a href="#" data-type="ajax-load">
                                    <h2 class="title">Compleet</h2>
                                    <span class="gradient-text-danger">Vanaf <h4>€ 700</h4></span>
                                </a><br/><br/>
                                <div class="text-left price-list">
                                    <span class="text-white"><i class="fas fa-check-circle"></i> SEO friendly</span>
                                    <span class="text-white"><i class="fas fa-check-circle"></i> SSL certificaat</span>
                                    <span class="text-white"><i class="fas fa-check-circle"></i> E-commerce</span>
                                    <span class="text-white"><i class="fas fa-check-circle"></i> Extra hulp 2 uur</span>
                                    <span class="text-white"><i class="fas fa-times-circle"></i> Prioritaire support</span>
                                </div>
                            </div>
                        </div>
                        <div class="image"  style="background-image:url('{{asset('images/news-1.jpg')}}');">
                        </div>
                    </div>
                </div>
                <!-- a card -->
                <div class="col-xl-4 grid-item">
                    <div class="news">
                        <div class="news-content">
                            <div class="inne text-center">
                                <a href="#" data-type="ajax-load">
                                    <h2 class="title">Maximaal</h2>
{{--                                    <p class="text-small">Perfect for</p>--}}
                                    <span class="gradient-text-danger">Vanaf <h4>€ 1500</h4></span>
                                </a><br/><br/>
                                <div class="text-left price-list">
                                    <span class="text-white"><i class="fas fa-check-circle"></i> SEO friendly</span>
                                    <span class="text-white"><i class="fas fa-check-circle"></i> SSL certificaat</span>
                                    <span class="text-white"><i class="fas fa-check-circle"></i> E-commerce</span>
                                    <span class="text-white"><i class="fas fa-check-circle"></i> Extra hulp 4 uur</span>
                                    <span class="text-white"><i class="fas fa-check-circle"></i> Prioritaire support</span>
                                </div>
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
    </section>

    <!-- CONTACT SECTION
    ================================================== -->
    <section id="contact" class="pt-page page-layout">
        <div class="inclusive">
            <!-- page title -->
            <div class="page-caption">
                <h1 class="page-title "><span class="gradient-text">Get in</span><br><span class="white-text-title">Touch</span></h1>
                <h2 class="page-subtitle">Your next level of website building .</h2>
            </div>

            <div class="contact-information row">
                <!-- form -->
                <div class="col-xl-5">
                    <div id="contact-formular">
                        <div id="message"></div>
                        <form method="post" action="#" name="contactform" id="contactform">
                            <!-- name -->
                            <div class="form-group">
                                <div class="placeholder">Je naam</div>
                                <input class="inp" name="name" type="text" id="name">
                            </div>
                            <!-- email -->
                            <div class="form-group">
                                <div class="placeholder">Je e-mailadres</div>
                                <input class="inp" name="email" type="text" id="email">
                            </div>
                            <!-- company -->
                            <div class="form-group">
                                <div class="placeholder">Je bedrijfsnaam</div>
                                <input class="inp" name="company" type="text" id="company">
                            </div>
                            <!-- about project -->
                            <div class="form-group">
                                <div class="placeholder">Vertel ons meer over je project</div>
                                <textarea class="inp" name="comments" id="comments" cols="50"  placeholder=""></textarea>
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
                        <span>Contact</span>
                        <a href="mailto:klantenservice@coderslab.nl">klantenservice@coderslab.nl</a>
                    </div>
                    <div class="contact-info address">
                        <span>Onze contactgegevens</span>
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
