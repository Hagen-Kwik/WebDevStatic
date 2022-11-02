<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pagetitle }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css" />
    <script src="others/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="others/bootstrap/js/bootstrap.bundle.min.js"></script>



    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="js/main.js"></script>
    <script src="js/slider.js" defer></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
        rel="stylesheet">
    
    <!-- Vendor JS Files -->
    <link href="others/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <script src="others/purecounter/purecounter_vanilla.js"></script>
    <script src="others/aos/aos.js"></script>
    <script src="others/glightbox/js/glightbox.min.js"></script>
    <script src="others/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="others/swiper/swiper-bundle.min.js"></script>
    <script src="others/php-email-form/validate.js"></script>
    <link href="others/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="others/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="others/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="others/aos/aos.css" rel="stylesheet">





</head>

<body>

    <div>
        @include('components.header')


        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
                <h1>{{ $maintitle }}</h1>
                @yield('tagline')
            </div>
        </section><!-- End Hero Section -->

    </div>

    <div>
        @yield('body')
    </div>

    @include('components.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center text-white"> UP</a>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
