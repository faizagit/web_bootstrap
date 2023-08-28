@extends('admin.admin')

@section('title', 'Home')

@section('content')

    <div class="iklan">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/carousel1.jpeg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/carousel2.jpeg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/carousel3.jpeg') }}" class="d-block w-100" alt="...">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div id="now"></div>
    </div>
    <div class="container mt-5">
        <div class="info mb-5">
            <h1 class="fw-bold roboto" style="font-size: 50px">NOW SHOWING IN CINEMAS</h3>
        </div>
        <div class="content row">
            <div class="image col-md-3">
                <img src="{{ asset('assets/img/card.jpg') }}" alt="yek gaisok" class="zoom rounded-4">
                <h5 class="roboto pt-3 pb-5">GRAN TURISMO</h5>
            </div>
            <div class="image col-md-3">
                <img src="{{ asset('assets/img/card2.jpg') }}" alt="yek gaisok" class="zoom rounded-4">
                <h5 class="roboto pt-3 pb-5">GALAKSI</h5>
            </div>
            <div class="image col-md-3">
                <img src="{{ asset('assets/img/card3.jpg') }}" alt="yek gaisok" class="zoom rounded-4">
                <h5 class="roboto pt-3 pb-5">BLUE BEETLE</h5>
            </div>
            <div class="image col-md-3">
                <img src="{{ asset('assets/img/card4.jpg') }}" alt="yek gaisok" class="zoom rounded-4">
                <h5 class="roboto pt-3 pb-5">MEG 2: THE TRENCH</h5>
            </div>
            <div class="image col-md-3">
                <img src="{{ asset('assets/img/card5.jpg') }}" alt="yek gaisok" class="zoom rounded-4">
                <h5 class="roboto pt-3 pb-5">KETIKA BERHENTI DISINI</h5>
            </div>
            <div class="image col-md-3">
                <img src="{{ asset('assets/img/card6.jpg') }}" alt="yek gaisok" class="zoom rounded-4">
                <h5 class="roboto pt-3 pb-5">LANTAI 4</h5>
            </div>
            <div class="image col-md-3">
                <img src="{{ asset('assets/img/card7.jpg') }}" alt="yek gaisok" class="zoom rounded-4">
                <h5 class="roboto pt-3 pb-5">DREAM GIRL 2</h5>
            </div>
            <div class="image col-md-3">
                <img src="{{ asset('assets/img/card8.jpg') }}" alt="yek gaisok" class="zoom rounded-4">
                <h5 class="roboto pt-3 pb-5" id="spotlight">TALK TO ME</h5>
            </div>
        </div>
    </div>
    <div class="spotlight pb-5">
        <div class="container">
            <div class="text">
                <h1 class="roboto pt-4 pb-4" style="font-size: 45px">SPOTLIGHT</h1>
            </div>
            <div class="image row">
                <div class="col-md-4 pb-3">
                    <img class="rounded-4 pb-3 zoom" width="400px" src="{{ asset('assets/img/card-v1.jpeg') }}"
                        alt="">
                    <h5 class="roboto">Ketika Gamer Gran Turismo Berhasil Jadi Pembalap P...</h5>
                </div>
                <div class="col-md-4">
                    <img class="rounded-4 pb-3 zoom" width="400px" src="{{ asset('assets/img/card-v2.jpeg') }}"
                        alt="">
                    <h5 class="roboto">Talk to Me, Kengerian Teror Arwah Jahat Yang Menga...</h5>
                </div>
                <div class="col-md-4">
                    <img class="rounded-4 pb-3 zoom" width="400px" src="{{ asset('assets/img/card-v3.jpeg') }}"
                        alt="">
                    <h5 class="roboto">Saatnya Dibikin Salting Sama Angga Yunanda di Film...</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="partner">
        <div class="container">
            <div class="text">
                <h1 class="roboto pt-4 pb-4" style="font-size: 45px;">OUR PARTNERS</h1>
            </div>
            <div class="icon-brand row">
                <div class="col-3 mb-5">
                    <img src="{{ asset('assets/img/logo-brand1.png') }}" alt="" class="w-100">
                </div>
                <div class="col-3 mb-5">
                    <img src="{{ asset('assets/img/logo-brand2.png') }}" alt="" class="w-100">
                </div>
                <div class="col-3 mb-5">
                    <img src="{{ asset('assets/img/logo-brand3.png') }}" alt="" class="w-100">
                </div>
                <div class="col-3 mb-5">
                    <img src="{{ asset('assets/img/logo-brand4.png') }}" alt="" class="w-100">
                </div>
                <div class="col-3 mb-5">
                    <img src="{{ asset('assets/img/logo-brand5.png') }}" alt="" class="w-100">
                </div>
                <div class="col-3 mb-5">
                    <img src="{{ asset('assets/img/logo-brand6.png') }}" alt="" class="w-100">
                </div>
                <div class="col-3 mb-5">
                    <img src="{{ asset('assets/img/logo-brand7.png') }}" alt="" class="w-100">
                </div>
                <div class="col-3 mb-5">
                    <img src="{{ asset('assets/img/logo-brand8.png') }}" alt="" class="w-100">
                </div>
                <div class="col-3 mb-5">
                    <img src="{{ asset('assets/img/logo-brand9.png') }}" alt="" class="w-100">
                </div>
            </div>
        </div>
        <div class="footer p-4" style="background-color: rgb(0, 20, 73)">
            <div class="container">
                <div class="row">
                    <div class="img col-3">
                        <img src="{{ asset('assets/img/logo.png') }}" class="pb-3" style="width: 150px"
                            alt="">
                        <p class="text-light">Best App For Movie Lovers In Indonesia! Movie Entertainment Platform
                            From Cinema
                            To Online Movie
                            Streaming Selections.</p>
                    </div>
                    <div class="col-3 d-flex flex-column fs-5 gap-2">
                        <a class="text-secondary text-decoration-none text-center" href="">NOW SHOWING</a>
                        <a class="text-secondary text-decoration-none text-center" href="">TIX NOW</a>
                        <a class="text-secondary text-decoration-none text-center" href="">SPOTLIGHT</a>
                    </div>
                    <div class="col-3 d-flex flex-column fs-5 gap-2">
                        <a class="text-secondary text-decoration-none text-center" href="">NOW SHOWING</a>
                        <a class="text-secondary text-decoration-none text-center" href="">TIX NOW</a>
                        <a class="text-secondary text-decoration-none text-center" href="">SPOTLIGHT</a>
                    </div>
                    <div class="col-3 fs-6">
                        <p class="text-light">TIX ID SUPPORT</p>
                        <p class="text-light">E-MAIL: HELP@TIX.ID</p>
                        <P class="text-light">FOLLOW US</P>
                        <i class="text-light" data-feather="instagram"></i>
                        <i class="text-light" data-feather="youtube"></i>
                        <i class="text-light" data-feather="facebook"></i>
                        <i class="text-light" data-feather="twitter"></i>
                    </div>
                </div>
            </div>
        </div>
    @endsection
