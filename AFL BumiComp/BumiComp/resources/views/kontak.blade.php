@extends('layout.homelayout')

@section('body')
<section class="bg-dark">
    <img class="img-fluid" src="image/indonesia.png">
</section>
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
@endsection
