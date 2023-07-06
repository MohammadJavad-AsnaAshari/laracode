<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>MJ | @yield("title")</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet"/>
</head>
<body>
<!-- Responsive navbar-->
@include("layouts.navigation")

<!-- Page header with logo and tagline-->
@include("layouts.header")

<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            @yield("content")
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            @section("sidebar")
                @include("layouts.sidebar")
            @show
        </div>
    </div>
</div>
<!-- Footer-->
@include("layouts.footer")

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
