@extends('layouts.template_index')

@section('judul','EMAMI')

@section('isi')
     <!-- caraousel atau berita -->
    <div id="carouselExampleIndicators" class="carousel slide d-flex flex-column align-items-center"
        data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/slide/3.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/slide/4.png') }}" class="d-block w-100" alt="..." >
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/slide/5.png') }}" class="d-block w-100" alt="..." >
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <img src="{{ asset('assets/img/222.png') }}" alt=" "style="width: 20%" />
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <img src="{{ asset('assets/img/333.png') }}" alt=" "style="width: 20%" />
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- kategory pilihan -->
    <div class="kategory-pilihan">
        <div class="row">
            <div class="col-12">
                <h1>Produk Terlaris</h1>
                <div id="carouselExampleControls" class="carousel carousel2 slide mt-4" >
                    <div class="carousel-inner carousel-inner2">
                        <div class="carousel-item active">
                            <div class="row" style="padding: 10px;">
                                <div class="col-3 align-items-center">
                                    <a href="contoh_detail/detail.html"><div class="card">
                                        <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                                            <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                                        </div></a>
                                    </div>    
                                </div>
                                <div class="col-3 align-items-center">
                                    <a href="contoh_detail/detail.html"><div class="card">
                                        <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                                            <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                                        </div></a>
                                    </div> 
                                </div>
                                <div class="col-3 align-items-center">
                                    <a href="contoh_detail/detail.html"><div class="card">
                                        <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                                            <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="col-3 align-items-center">
                                    <a href="contoh_detail/detail.html"><div class="card">
                                        <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                                            <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                                        </div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <div class="row mx-0 " style="padding: 10px;">
                                <div class="col-3 align-items-center">
                                    <a href="contoh_detail/detail.html"><div class="card">
                                        <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                                            <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="col-3 align-items-center">
                                    <a href="contoh_detail/detail.html"><div class="card">
                                        <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                                            <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="col-3 align-items-center">
                                    <a href="contoh_detail/detail.html"><div class="card">
                                        <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                                            <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                                        </div></a>
                                    </div>
                                </div>
                                <div class="col-3 align-items-center">
                                    <a href="contoh_detail/detail.html"><div class="card">
                                        <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                                            <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                                        </div></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev" style="left: -100px;">
                            <span class="sr-only">Previous</span>
                            <img src="{{ asset('assets/img/222.png') }}" alt=" "style="width: 30%" />
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next" style="left: 1311px;">
                            <span class="sr-only">Next</span>
                            <img src="{{ asset('assets/img/333.png') }}" alt=" "style="width: 30% " />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- kategory rekomendasi -->
    <div class="kategory-rekomendasi" style="top: 180px;">
        <div class="rekomendasi">
            <h3>Rekomendasi Produk</h3>
        </div>

        <div class="row mx-0 mt-5">
            <div class="col-2 pl-0">
                <a href="contoh_detail/detail.html"><div class="card">
                    <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                        <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                    </div></a>
                </div>
            </div>
            <div class="col-2 pl-0">
                <a href="contoh_detail/detail.html"><div class="card">
                    <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                        <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                    </div></a>
                </div>
            </div>
            <div class="col-2 pl-0">
                <a href="contoh_detail/detail.html"><div class="card">
                    <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                        <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                    </div></a>
                </div>
            </div>
            <div class="col-2 pl-0">
                <a href="contoh_detail/detail.html"><div class="card">
                    <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                        <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                    </div></a>
                </div>
            </div>
            <div class="col-2 pl-0">
                <a href="contoh_detail/detail.html"><div class="card">
                    <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                        <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                    </div></a>
                </div>
            </div>
            <div class="col-2 pl-0">
                <a href="contoh_detail/detail.html"><div class="card">
                    <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                        <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                    </div></a>
                </div>
            </div>
        </div>

        <div class="row mx-0 mt-2">
            <div class="col-2 pl-0">
                <a href="contoh_detail/detail.html"><div class="card">
                    <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                        <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                    </div></a>
                </div>
            </div>
            <div class="col-2 pl-0">
                <a href="contoh_detail/detail.html"><div class="card">
                    <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                        <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                    </div></a>
                </div>
            </div>
            <div class="col-2 pl-0">
                <a href="contoh_detail/detail.html"><div class="card">
                    <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                        <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                    </div></a>
                </div>
            </div>
            <div class="col-2 pl-0">
                <a href="contoh_detail/detail.html"><div class="card">
                    <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                        <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                    </div></a>
                </div>
            </div>
            <div class="col-2 pl-0">
                <a href="contoh_detail/detail.html"><div class="card">
                    <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                        <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                    </div></a>
                </div>
            </div>
            <div class="col-2 pl-0">
                <a href="contoh_detail/detail.html"><div class="card">
                    <img src="{{ asset('assets/img/produk1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Stick Keju Aneka Rasa</h6>
                        <h5 class="mt-1" style="font-weight: bolder;">Rp15.000</h5>
                    </div></a>
                </div>
            </div>
        </div>
    </div>
@endsection
