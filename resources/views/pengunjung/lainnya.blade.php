@extends('layouts.template_pengunjung')

@section('judul','EMAMI')

@section('isi')

<div class="kategory-rekomendasi" style="top: 180px;">
    <div class="rekomendasi">
        <h3>Lainnya</h3>
    </div>

    <div class="row mx-0 mt-5">
        
        @foreach($lainnyaProduk as $p)
        @if($p->kategori_produk === 'lainnya')
            <div class="col-2 pl-0">
                <a href="#">
                    <div class="card" onclick="countKlik({{ $p->kode_produk }})">
                        <img src="{{ asset('assets/img/gambar_produk/' . $p->gambar_produk) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">{{ $p->nama_produk }}</h6>
                            <h5 class="mt-1" style="font-weight: bolder;">Rp.{{ number_format($p->harga_produk, 0, ',', '.') }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endif
        @endforeach
    
        
    </div>

    
</div>

@endsection