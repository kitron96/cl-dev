@extends('layouts.master')

<div id="main" class="site-main">

    <!-- HOME SECTION -->
    <section id="hero" class="pt-page page-layout hero agency">
        @include('pages.hero')
    </section>

    <!-- ABOUT SECTION-->
    <section id="about" class="pt-page page-layout">
        @include('pages.about')
    </section>

    <!-- OFFERS SECTION -->
    <section id="offers" class="pt-page page-layout">
        @include('pages.offers')
    </section>

    <!-- PRICING SECTION -->
    <section id="price" class="pt-page page-layout">
        @include('pages.pricing')
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="pt-page page-layout">
        @include('pages.contact')
    </section>

</div>
