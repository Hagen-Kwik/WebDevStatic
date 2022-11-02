@extends('layout.homelayout')

@section('tagline')
    <h2>{{ $tagline }}</h2>
    <a href="#about" class="btn-get-started">Get Started</a>
@endsection


@section('body')
    <!-- ======= About Section ======= -->
    <section id="about">
        <div class="container" data-aos="fade-up">
            <div class="about-container">
                <div class="row">
                    {{-- half of the page --}}
                    <div class="col-lg-6">
                        <div class="mainss">
                            <div class="containerss">
                                <div class="image-containerss">
                                    <img class="image-before slider-image imgss" src="/image/hdd-nofire.png"
                                        alt="" />
                                    <img class="image-after slider-image imgss" src="/image/hdd-withfire.png"
                                        alt="" />
                                </div>
                                <!-- step="10" -->
                                <input type="range" min="0" max="100" value="50"
                                    aria-label="Percentage of before photo shown" class="slider" />
                                <div class="slider-line" aria-hidden="true"></div>
                                <div class="slider-button" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" viewBox="0 0 256 256">
                                        <rect width="256" height="256" fill="none"></rect>
                                        <line x1="128" y1="40" x2="128" y2="216" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="16"></line>
                                        <line x1="96" y1="128" x2="16" y2="128" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="16"></line>
                                        <polyline points="48 160 16 128 48 96" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                        <line x1="160" y1="128" x2="240" y2="128" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="16"></line>
                                        <polyline points="208 96 240 128 208 160" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- other half --}}
                    <div class="col-lg-6 content order-lg-1 order-2">
                        <h2 class="title">Serviskan Hard Drive yang rusak</h2>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <p class="description"> - Hard Disk Korup</p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <p class="description"> - Recover data hilang</p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <p class="description"> - Data tidak bisa terakses</p>
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
                <h3 class="section-title">Jasa Servis Kami Termasuk</h3>
                <p class="section-description">Toko kami memberi beberapa servis yang dapat kalian pilih, mereka adalah</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="member shadowss" data-aos="fade-up" data-aos-delay="100">
                        <h4>PC/Komputer</h4>
                        <div class="pic mt-5"><img src="/image/PC.PNG" alt=""></div>
                        <div class="text-center mt-5"><button type="submit">See details</button></div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member shadowss" data-aos="fade-up" data-aos-delay="300">
                        <h4>Hard Disk</h4>
                        <div class="pic mt-5"><img src="/image/hdd.png" alt=""></div>
                        <div class="text-center mt-5"><button type="submit">See details</button></div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member shadowss" data-aos="fade-up" data-aos-delay="400">
                        <h4>Printer</h4>
                        <div class="pic mt-5"><img src="/image/printer.png" alt=""></div>
                        <div class="text-center mt-5"><button type="submit">See details</button></div>

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
                <h1 class="title">Testimonies</h1>
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
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($reviews as $review)
                        @if ($i == 0)
                            <div class="carousel-item active" data-bs-interval="10000">
                                <div class="row p-5">
                                    <div class="col-3">
                                        <img src="{{ $review['profilepicture'] }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-8">
                                        <h1>"{{ $review['komen'] }}"</h1>
                                        <h2>{{ $review['nama'] }}</h2>
                                    </div>
                                </div>
                            </div>
                            @php
                                $i++;
                            @endphp
                        @endif
                    @endforeach


                    <div class="carousel-item" data-bs-interval="2000">
                        <div class="row p-5">
                            <div class="col-3">
                                <img src="image/laki2.jpeg" class="d-block w-100" alt="...">
                            </div>
                            <div class="col-8">
                                <h1>"untungnya ada ini toko, dataku bisa selamat"</h1>
                                <h2>Bambang</h2>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row p-5">
                            <div class="col-3">
                                <img src="image/wanita3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="col-8">
                                <h1>"pelayanannya bagus dan cepat, nda di tipu tipuki juga"</h1>
                                <h2>Yanti</h2>
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
    <!-- End Services Section -->

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
                    <a class="cta-btn align-middle" href="#">Lokasi Kami</a>
                </div>
            </div>
        </div>
    </section>
@endsection
