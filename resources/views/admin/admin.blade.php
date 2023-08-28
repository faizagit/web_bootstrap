<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: rgb(0, 20, 73)">
        <div class="container-fluid p-3">
            <a class="navbar-brand p-4" href="#"><img class="w-50" src="{{ asset('assets/img/logo.png') }}"
                    alt="salah yek"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav d-flex justify-content-between">
                    <div class="d-flex justify-content-between gap-5">
                        <div class="textnav">
                            <ul class="navbar-nav d-flex justify-content-between gap-5 fs-5">
                                <li class="nav-item">
                                    <a class="text-light nav-link " href="{{ route('home_index') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="text-light nav-link" href="#now">Tix Now</a>
                                </li>
                                <li class="nav-item">
                                    <a class="text-light nav-link" href="#spotlight">Spotlight</a>
                                </li>
                            </ul>
                        </div>
                        <div class="iconnav">
                            <ul class="navbar-nav d-flex justify-content-between gap-4 fs-5">
                                <li class="nav-item">
                                    <a class="text-light nav-link" href="#"><i style="width: 18px"
                                            data-feather="instagram"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="text-light nav-link" href="#"><i style="width: 18px"
                                            data-feather="youtube"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="text-light nav-link" href="#"><i style="width: 18px"
                                            data-feather="facebook"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="text-light nav-link" href="#"><i style="width: 18px"
                                            data-feather="twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="download d-flex align-items-center">
                            <button class="px-3 py-2 bg-btn rounded-pill">
                                DOWNLOAD TIX ID
                            </button>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
