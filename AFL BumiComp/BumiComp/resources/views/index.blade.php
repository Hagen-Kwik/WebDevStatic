@extends('layout.homelayout')

@section('tagline')
    <h2>{{ $tagline }}</h2>
    <a href="#about" class="btn-get-started">Get Started</a>
@endsection


@section('body')
    <!-- ======= About Section ======= -->
    <section id="about">
        <div class="container" data-aos="fade-in">
            <div class="about-container">
                <div class="row text-center">
                    <h2 class="title">Tentang kami</h2>

                    {{-- half of the page --}}
                    <div class="col-lg-6">
                        <img class="img-fluid" src="/image/logoBumiComp.png">
                    </div>

                    {{-- other half --}}
                    <div class="col content order-lg-1 text-start">

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <p class="description">Proses service peralatan komputer adalah sebuah proses identifikasi dan
                                penyelesaian permasalahan yang mengganggu peralatan komputer anda. Beberapa contoh peralatan
                                yang rusak adalah CPU, Laptop, Printer, dan juga Hardisk
                            </p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <p class="description">Data Recovery adalah sebuah proses mengakses dan merecovery informasi
                                digital yang tersimpan di media penyimpanan dimana tidak bisa diakses secara normal.
                                Berbagai kerusakan yang umum yang membutuhkan proses Recovery Hardisk adalahi: Data
                                terhapus, HDD/SSD Rusak sehingga tidak bisa diakses, dll
                            </p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <p class="description">Kami - Bumi Makmur Computer - telah berpengalaman lebih dari 20 tahun
                                dalam bidang-bidang diatas. Dengan dukungan Hardware dan Software yang kompleks, kami akan
                                menjadi pilihan terbaik untuk solusi masalah peralatan komputer anda...<a
                                    href="/tentangkita">selengkapnya</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Jasa Service Section ======= -->
    <section id="team">
        <div class="container text-center" data-aos="fade-up">
            <div class="section-header">
                <h3 class="section-title">Layanan Kami</h3>
                <p class="section-description">Toko kami memberi beberapa servis yang dapat kalian pilih, mereka adalah</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="member shadowss" data-aos="fade-up" data-aos-delay="100">
                        <h4>PC/Komputer</h4>
                        <div class="pic mt-5"><img src="/image/PC.PNG" alt=""></div>
                        <div class="text-center mt-5"><a href="/laptop&pc"><button type="submit">See
                                    details</button></a></div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member shadowss" data-aos="fade-up" data-aos-delay="300">
                        <h4>Hard Disk</h4>
                        <div class="pic mt-5"><img src="/image/hdd.png" alt=""></div>
                        <div class="text-center mt-5"><a href="/harddisk"><button type="submit">See details</button></a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member shadowss" data-aos="fade-up" data-aos-delay="400">
                        <h4>Printer</h4>
                        <div class="pic mt-5"><img src="/image/printer.png" alt=""></div>
                        <div class="text-center mt-5"><a href="/printer"><button type="submit">See details</a></button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Jasa Service Section -->

    <!-- ======= Testimonies Section ======= -->

    <section id="services">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h1 class="title">Apa Kata Mereka?</h1>
                </h2>
            </div>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000" style="height: 300px">
                        <div class="row p-5">
                            <div class="col-3">
                                <img src="{{ $reviews[0]['profilepicture'] }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="col-8">
                                <h1>"{{ $reviews[0]['komen'] }}"</h1>
                                <h2>{{ $reviews[0]['nama'] }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="10000" style="height: 300px">
                        <div class="row p-5">
                            <div class="col-3">
                                <img src="{{ $reviews[1]['profilepicture'] }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="col-8">
                                <h1>"{{ $reviews[1]['komen'] }}"</h1>
                                <h2>{{ $reviews[1]['nama'] }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="10000" style="height: 300px">
                        <div class="row p-5">
                            <div class="col-3">
                                <img src="{{ $reviews[2]['profilepicture'] }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="col-8">
                                <h1>"{{ $reviews[2]['komen'] }}"</h1>
                                <h2>{{ $reviews[2]['nama'] }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </section>
    <!-- End Testimonies Section -->

    <!-- ======= Supported File Section ======= -->
    <section id="team">
        <div class="container text-center" data-aos="fade-up">
            <div class="section-header">
                <h3 class="section-title">Supported File System</h3>
                <p class="section-description">Toko kami memberi beberapa servis yang dapat kalian pilih, mereka adalah</p>
            </div>

            <div class="row">

                @php($i = 0)
                @foreach ($supported as $s)
                    @php($i++)
                    @if ($i == 7)
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-4">
                    <div class="member shadowss" data-aos="fade-up" data-aos-delay="100">
                        <div class="picsupported mt-5"><img class="img-fluid" src="{{ $s['logo'] }}" alt="">
                        </div>
                    </div>
                </div>
            @else
                <div class="col-lg-2 col-md-4">
                    <div class="member shadowss" data-aos="fade-up" data-aos-delay="100">
                        <div class="picsupported mt-5"><img class="img-fluid" src="{{ $s['logo'] }}" alt="">
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            {{-- end div for row on if else statement --}}
        </div>
    </section>
    <!-- End supported file Section -->

    <!-- ======= Testimonies Section ======= -->

    <section id="services">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h1 class="title">Klien Kami</h1>
                </h2>
            </div>


            <div class="customer-logos">
                @foreach ($clients as $client)
                    @if ($client['logo'] == '')
                        <div class="slide h-100 align-middle">
                            <h3>{{ $client['nama'] }}</h3>
                        </div>
                    @else
                        <div class="slide h-100 align-middle"><img class="h-100" src="{{ $client['logo'] }}">
                            @if ($client['cabang_mskr'] == 'true')
                                <h5>*Hanya di Cabang Makassar</h5>
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>


        </div>
    </section>
    <!-- End Testimonies Section -->


    {{-- Carilah kami sekarang section --}}
    <section id="call-to-action">
        <div class="container">
            <div class="row" data-aos="zoom-in">
                <div class="col-lg-5 text-center text-lg-start">
                    <h3 class="cta-title">Carilah Kami sekarang</h3>
                    <p class="cta-text"> Jangan sungkan untuk mencari kami, kami dapat dikontak melalui whatsapp dan email
                        tertera atau kunjungi kami langsung.</p>
                </div>
            </div>
            <div class="row text-lg-start">
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="/kontakkami">Lokasi Kami</a>
                </div>
            </div>
        </div>
    </section>
@endsection
