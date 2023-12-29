@extends('layouts.template_pengunjung')

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
                                
                                @php $counter = 0; @endphp

                                @foreach($products as $p)
                                    @if ($counter < 4)
                                        <div class="col-3 align-items-center">
                                            <div class="card-container"> <!-- Add a container class -->
                                                <a href="{{ url('contoh_detail/detail/' . $p->kode_produk) }}">
                                                    <div class="card">
                                                        <img src="{{ asset('assets/img/gambar_produk/' . $p->gambar_produk) }}" class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <h6 class="card-title">{{ $p->nama_produk }}</h6>
                                                            <h5 class="mt-1" style="font-weight: bolder;">Rp{{ number_format($p->harga_produk, 0, ',', '.') }}</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                    @php $counter++; @endphp
                                @endforeach
                                
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
            
            @foreach($produk as $p)
            <div class="col-2 pl-0">
                <a href="#"><div class="card" onclick="countKlik({{ $p->kode_produk }})">
                    <img src="{{ asset('assets/img/gambar_produk/' . $p->gambar_produk) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title">{{ $p->nama_produk }}</h6>
                        <h5 class="mt-1" style="font-weight: bolder;">Rp.{{ number_format($p->harga_produk, 0, ',', '.') }}</h5>
                    </div></a>
                </div>
            </div>
            @endforeach
            
        </div>
           
    </div>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta name="csrf-token" content="your_csrf_token_here"> --}}
    <script>
        function countKlik(id) {
                            var url = "/jumlahKlik" + "/" + id;
                            // replace with your desired URL
                            var token = $('meta[name="csrf-token"]').attr('content');
                            $.ajax({
                                url: url,
                                type: 'POST',
                                data: {
                                    _token: token
                                },
                                success: function(response) {

                                    console.log('DATA BERHASIL DITAMBAHKAN');

                                },
                                error: function(xhr) {
                                    console.log('DATA GAGAL DITAMBAHKAN');
                                }
                            });
                        };
    </script>
@endsection
