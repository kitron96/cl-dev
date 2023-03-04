<!doctype html>
<html lang="en" data-mobile-classic-layout="false" data-classic-layout="false" data-prev-animation="16" data-next-animation="15" data-random-animation="false">
<head>
    <title>coderslab.nl - Your next level of website building<</title>
    <meta charset="UTF-8">
    <meta name="description" content="coderslab.nl - Your next level of website building">
    <meta name="keywords" content="website, e-commerce, hosting">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.styles')

</head>
<body class="darkness">

<div class="page-overlay">
    <div class="page-transition"></div>
</div>
<div class="preloader-wrap">
    <div class="loader_bar"></div>
    <div id="precent"></div>
</div>

<div id="page">
    <main>
        @include('partials.header')
        @yield('content')
    </main>
</div>


@include('partials.scripts')


</body>
</html>
