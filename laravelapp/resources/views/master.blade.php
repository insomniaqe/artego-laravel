<!DOCTYPE html>
<html lang="ru">
<head>
    @include('helps.links')
</head>
<body>
@include('helps.nav')
<main>
    @yield('content')
</main>
<footer class="footer">
    @include('helps.footer')
</footer>
@include('helps.modals')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/additional-methods.min.js"></script>
<script src="js/bundle.js"></script>
</body>
</html>
