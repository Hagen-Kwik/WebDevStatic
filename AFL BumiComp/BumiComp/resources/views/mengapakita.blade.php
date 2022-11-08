@extends('layout.homelayout')

@section('body')
    <!-- ======= Contact Section ======= -->

    <div id=contactpage>
        <div class="container mb-5">
            <div class="section-header">
                <h1 class="section-title m-5 text-black">Mengapa kami</h3>
                    <div class="row">
                        <div class="col-md-4">
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
                        <div class="col-md-8 align-middle">
                            <p class="section-description text-black ">Kehilangan DATA PENTING karena kerusakan perangkat keras ketika kita tidak memliki backup adalah sesuattu hal yang sangat menakutkan.
                            </p>
                        </div>
                        <p class="section-description text-black mt-4">Riset membuktikan bahwa lebih dari 88% perusahaan yang kehilangan data penting/critical akan memerlukan waktu dan biaya yang tidak sedikit untuk memulihkan kondisi bisnis perusahaan. Kami sebagai salah satu data recovery yang telah memiliki reputasi selalu mengupayakan yang terbaik dan berbagai cara untuk membantu mengembalikan data penting yang hilang tersebut.
                        </p>
                        <p class="section-description text-black fw-bold mt-4">Sebelum anda membuat pilihan yang tergesa gesa ketika hard disk anda bermasalah, pertimbangkan dulu kompetensi tempat yang anda ingin hubungi sebab kesalahan penanganan mungkin bisa memperparah kerusakan harddisk anda
                        </p>
                    </div>
            </div>
        </div>
    </div>

    <section id="contact">
        <div data-aos="fade-up">
                <div class="row text-center">
                    <div class="col-md-6 mt-5">
                        <div class="row mb-5">
                            <div class="col-lg-6 col-md-6" data-aos="zoom-in">
                                <div>
                                    <div class="d-flex justify-content-center mb-3">
                                        <img src="image/about us/pinpoint.png" alt="" class="pic">
                                    </div>
                                    <h4 class="title">Lokasi: </h4>
                                    <p class="description">Jalan Tentara Pelajar No.124, Melayu, Makassar City, Sulawesi
                                        Selatan
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6" data-aos="zoom-in">
                                <div>
                                    <div class="d-flex justify-content-center mb-3">
                                        <img src="image/about us/time.png" alt="" class="pic">
                                    </div>
                                    <h4 class="title"> Buka & Tutup: </h4>
                                    <p class="description">Monday - Saturday:
                                        10.50 - 5.30
                                        Sunday & Public Holiday: Closed</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6 col-md-6" data-aos="zoom-in">
                                <div>
                                    <div class="d-flex justify-content-center mb-3">
                                        <img src="image/about us/phone.png" alt="" class="pic">
                                    </div>
                                    <h4 class="title">Kontak: </h4>
                                    <p class="description mb-1">081 - 24217937</p>
                                    <a href="tel:08124217937" class="m-1">Call Now</a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6  mb-5" data-aos="zoom-in">
                                <div>
                                    <div class="d-flex justify-content-center mb-3">
                                        <img src="image/about us/mail.png" alt="" class="pic">
                                    </div>
                                    <h4 class="title">Email:</h4>
                                    <p class="description mb-1">bumihoras@gmail.com</p>
                                    <a href="mailto:bumihoras@gmail.com" class="m-1">Send Email</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <iframe width="100%" height="595px" style="border:0" allowfullscreen
                            src="https://maps.google.com/maps?width=100%25&amp;height=595&amp;hl=en&amp;q=-5.122760074446871,%20119.4159239711489+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>

                </div>
            </div>
    </section>
    <!-- End Contact Section -->
@endsection
