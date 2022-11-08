@extends('layout.homelayout')

@section('body')
    <!-- ======= Contact Section ======= -->

    <div id=contactpage>
        <div class="container mb-5">
            <div class="section-header">
                <h1 class="section-title m-5 text-black">Tentang kami</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="image/about us/toko kami.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-8 align-middle textspecial">
                            <p class="section-description text-black ">Pada tahun 1970 dan awal 1980 dimana Indonesia mulai memasuki era modernisasi, banyak orang yang mencari asisten dalam perbaikan komputer.
                                Hal ini mengacu pada perkembangan teknik baik untuk memperbaiki suatu kondisi komputer kembali ke kondisi awalnya ataupun teknik untuk menyelamatkan dan mengembalikan data dari media penyimpanan yang rusak.
                            </p>
                        </div>
                        <p class="section-description text-black mt-4">Didukung oleh meningkatnya kebutuhan akan jasa perbaikan komputer dan penarikan data, Bumi makmur computer didirikan pada tahun 1997. 
                            Semenjak itu, Bumi Makmur Computer telah berkembang menjadi pusat Data recovery di Sulawesi Selatan dan juga salah satu pusat service komputer/peralatan komputer di Sulawesi Selatan.
                        </p>
                        <p class="section-description text-black mt-4">Disini kami dapat membantu anda untuk mengembalikan data yang hilang dari berbagai media penyimpanan data dan sistem seperti Hard disk, RAID, USB, dan Memory Card. Disini kami juga dapat memperbaiki CPU, Laptop, dan Printer anda
                        </p>
                        <p class="section-description text-black fw-bold mt-4">Kepuasan pelanggan adalah prioritas kami dan kami akan selalu menjaga keamanan dan kerahasiaan data anda dari pihak manapun.
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
