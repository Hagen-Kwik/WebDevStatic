<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pagetitle }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="js/main.js"></script>
    <script src="js/slider.js" defer></script>
   



</head>

<body>

    <div>
        @include('components.header')

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="mt-5">
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
