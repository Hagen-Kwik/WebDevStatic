<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pagetitle }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="css/index.css" />

   
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
    rel="stylesheet">
    
    <!-- Vendor JS Files -->
    <link href="others/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="others/aos/aos.js"></script>
    
    {{-- <script src="others/bootstrap/js/bootstrap.bundle.js"></script> --}}
    <script src="others/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <script src="js/main.js" defer></script>
    <script src="js/slider.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript" ></script>
    <script src="js/slick.js" defer></script>
    <script src="js/klienkami.js" defer></script>




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
