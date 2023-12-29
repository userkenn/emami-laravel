<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/styles_index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-icon.png') }}" type="image/x-icon">
    <title>@yield('judul')</title>
  </head>
  <body>
    
    <div class="header">
        <div class="item-header-2 d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ url('/')}}"><img class="img-emami" src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                <span class="mx-2 text-kategory" onclick="kategoryOn()">Kategori</span>
                <div class="wrap-search">
                    <input type="text" class="form-control" placeholder="Cari disini yuk" data-toggle="modal"
                        data-target="#exampleModal">
                    <div class=" wrap-icon-search">
                        <img class="img-search" src="{{ asset('assets/img/search.png') }}" alt="">
                    </div>
                </div>

                <div class="wrap-img-shop mx-3" onclick="on()">
                    <img class="img-shop" src="{{ asset('assets/img/shopping-cart.png') }}" alt="">
                </div>

                <span class="mr-3 line">|</span>

                <div class="d-flex">
                    <a href="{{ url('/masuk')}}">
                    <button class="btn font-weight-bold mr-3">Masuk</button>
                    </a>

                    <a href="{{ url('/daftar')}}">
                    <button class="btn font-weight-bold text-white">Daftar</a></button>
                    
                </div>
            </div>

            <div class="menu-bar flex-column justify-content-between align-items-center" id="menuBar">
                <img src="assets/img/5.png" alt="">
                <h4 class="mt-2">Wah keranjang belanjaanmu kosong</h4>
                <p class="text-center">Daripada dianggurin, mending diisi dengan barang barang impianmu. Yuk cek
                    sekarang!</p>
                <button class="btn">Lihat Rekomendasi</button>
            </div>
        </div>
    </div>

    <div class="kategory" id="kategory">
        
        <div class="row">
            <div class="col-12">
                <div class="head-left">
                    <div class="w-100 d-flex align-items-center">
                        <nav style="background-color: #ffffff; margin-bottom: 30px;" >
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <a
                                class="nav-link active"
                                id="nav-home-tab"
                                data-toggle="tab"
                                href="#nav-home"
                                role="tab"
                                aria-controls="nav-home"
                                aria-selected="true"
                                style="color: #f53d2d; border-right: none"
                              >
                                <h6>MAKANAN</h6>
                              </a>
                              <a
                                class="
                                  nav-link
                                  d-flex
                                  justify-content-center
                                  align-items-center
                                "
                                id="nav-minumnan-tab"
                                data-toggle="tab"
                                href="#nav-minumnan"
                                role="tab"
                                aria-controls="nav-minumnan"
                                aria-selected="false"
                                style="color: #f53d2d; border-right: none; width: 100px"
                              >
                                <h6>MINUMAN</h6>
                              </a>
                              <a
                                class="
                                  nav-link
                                  d-flex
                                  justify-content-center
                                  align-items-center
                                "
                                id="nav-pakaian-tab"
                                data-toggle="tab"
                                href="#nav-pakaian"
                                role="tab"
                                aria-controls="nav-pakaian"
                                aria-selected="false"
                                style="color: #f53d2d; border-right: none; width: 100px"
                              >
                                <h6>PAKAIAN</h6>
                              </a>
                              <a
                                class="
                                  nav-link
                                  d-flex
                                  justify-content-center
                                  align-items-center
                                "
                                id="nav-aksesoris-tab"
                                data-toggle="tab"
                                href="#nav-aksesoris"
                                role="tab"
                                aria-controls="nav-aksesoris"
                                aria-selected="false"
                                style="color: #f53d2d; border-right: none; width: 100px"
                              >
                                <h6>AKSESORIS</h6>
                              </a>
                              <a
                                class="
                                  nav-link
                                  d-flex
                                  justify-content-center
                                  align-items-center
                                "
                                id="nav-lainnya-tab"
                                data-toggle="tab"
                                href="#nav-lainnya"
                                role="tab"
                                aria-controls="nav-lainnya"
                                aria-selected="false"
                                style="color: #f53d2d; border-right: none; width: 100px"
                              >
                                <h6>LAINNYA</h6>
                              </a>
                            </div>
                        </nav>
                    </div>

                    <div class="tab-content mt-2" id="nav-tabContent">
                        <div
                          class="tab-pane fade show active"
                          id="nav-home"
                          role="tabpanel"
                          aria-labelledby="nav-home-tab"
                        >
                          <div class="row mx-0 mt-2" style="height: 60px">
                            <div class="col-2 pl-0">
                                <div class="col-2 pl-0">
                                    <button class="btn btn-width">Makanan Ringan</button>
                                </div>
                            </div>
                            <div class="col-2 pl-0">
                                <div class="col-2 pl-0" style="margin-left: -90px;">
                                  <a href="{{ route('makanan-berat.index') }}" class="btn btn-width">Makanan Berat</a>
                                </div>
                            </div>
                          </div>
                        </div>
                        
                        <div
                          class="tab-pane fade"
                          id="nav-minumnan"
                          role="tabpanel"
                          aria-labelledby="nav-minuman-tab"
                        >
                          <div class="row mx-0 mt-2" style="height: 60px">
                            <div class="col-2 pl-0">
                                <div class="col-2 pl-0">
                                    <button class="btn btn-width">Minuman</button>
                                </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="tab-pane fade"
                          id="nav-pakaian"
                          role="tabpanel"
                          aria-labelledby="nav-pakaian-tab"
                        >
                          <div class="row mx-0 mt-2" style="height: 60px">
                            <div class="col-2 pl-0">
                                <div class="col-2 pl-0">
                                    <button class="btn btn-width">Pakaian Pria</button>
                                </div>
                            </div>
                            <div class="col-2 pl-0">
                                <div class="col-2 pl-0" style="margin-left: -125px;">
                                    <button class="btn btn-width">Pakaian Wanita</button>
                                </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="tab-pane fade"
                          id="nav-aksesoris"
                          role="tabpanel"
                          aria-labelledby="nav-aksesoris-tab"
                        >
                          <div class="row mx-0 mt-2" style="height: 60px">
                            <div class="col-2 pl-0">
                                <div class="col-2 pl-0">
                                    <button class="btn btn-width">Aksesoris Pria</button>
                                </div>
                            </div>
                            <div class="col-2 pl-0">
                                <div class="col-2 pl-0" style="margin-left: -110px;">
                                    <button class="btn btn-width">Aksesoris Wanita</button>
                                </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="tab-pane fade"
                          id="nav-lainnya"
                          role="tabpanel"
                          aria-labelledby="nav-lainnya-tab"
                        >
                          <div class="row mx-0 mt-2" style="height: 60px">
                            <div class="col-2 pl-0">
                                <div class="col-2 pl-0">
                                    <button class="btn btn-width">Lainnya</button>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('isi')

    <!-- footer -->
    <div class="footer">
        <div class="container pt-5">
          <p class="title font-weight-bold">
            EMAMI - Jual Beli berbasis Website
          </p>
          <p class="desc">
            EMAMI atau E-Market STMI adalah mobile-platform pertama di Asia Tenggara (Indonesia,
            Filipina, Malaysia, Singapura, Thailand, Vietnam) dan Taiwan yang
            menawarkan transaksi jual beli online yang menyenangkan, gratis, dan
            terpercaya via ponsel. Bergabunglah dengan jutaan pengguna lainnya
            dengan mulai mendaftarkan produk jualan dan berbelanja berbagai
            penawaran menarik kapan saja, di mana saja. Keamanan transaksi kamu
            terjamin - Terima pesanan kamu atau dapatkan uang kamu kembali dengan
            Garansi Shopee. Ayo gabung dalam komunitas Shopee dan mulai belanja
            sekarang!
          </p>
  
          <p class="title font-weight-bold mt-5">Pembeli Suka Belanja Online</p>
          <p class="desc">
            Temukan apapun kebutuhanmu dengan harga terbaik cuma di Shopee. Shopee
            adalah pusat perbelanjaan online dimana kamu bisa mendapatkan update
            terkini dari penjual yang kamu ikuti, sekaligus dari pengguna favorit
            kamu. Berbelanja dan berjualan menjadi lebih menyenangkan dengan fitur
            sosial, dimana kamu bisa menyebarkan produk yang kamu jual ataupun
            barang favorit kamu hanya dengan satu klik saja! Belanja semua
            kebutuhanmu di Shopee dengan hati yang tenang! Cek rating dan review
            toko-toko yang ada dan temukan penjual yang terpercaya dengan mudah.
            Kami selalu mengutamakan keamanan transaksi untuk para pembeli kami!
            Dengan Garansi Shopee, kamu akan mendapatkan uangmu kembali jika kamu
            tidak menerima pesanan dengan baik. Tidak yakin apa yang ingin kamu
            beli? Fitur hashtag dapat membantumu menemukan tren produk terkini.
            Jelajahi berbagai kategori produk, seperti Kemeja Pria, Perlengkapan
            Rumah, Tas Selempang Pria, Hobi & Koleksi, Makanan & Minuman, Pakaian
            Wanita, Fashion Anak, Clucth Tas Wanita, Kosmetik, Otomotif, Handphone
            & Aksesoris, Ibu & Bayi, Jam Tangan Analog, Kamera Mirrorless,
            Souvenir & Pesta, Perawatan & Kesehatan, Sepatu Pria, Aksesoris
            Fashion, Fashion Muslim, Serba Serbi, Komputer & Aksesoris, Sepatu
            Wanita, Elektronik, Perlengkapan Olahraga, Voucher, dan masih banyak
            lagi! Gunakan fitur Pencarian atau Rekomendasi untuk menemukan produk
            yang paling sesuai dengan keinginanmu secara instan. Berbelanja
            menjadi semakin hemat dengan voucher dan cashback di Shopee. Ayo mulai
            belanja di Shopee sekarang!
          </p>
  
          <div class="d-flex justify-content-between" style="margin-top: 80px">
 
            <div class="d-flex flex-column ">
              <p class="desc font-weight-bold">PEMBAYARAN</p>
              <div class="d-flex align-items-center">
                <img src="#" alt="" width="60" height="30" />

              </div>
            </div>
          </div>
  
          <hr />
  
          <div
            class="d-flex justify-content-between mt-5 pb-3"
            style="color: #888"
          >
            <span> &copy; Kelompok SAW 2023 </span>
            <span
              >Kampus: Politeknik STMI Jakarta </span
            >
          </div>
        </div>
    </div>
  


    <!-- Modal pencarian -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content m-c-head">
                <div class="d-flex justify-content-between">
                    <span class="font-weight-bold title">Pencarian Terakhir</span>
                    <span class="font-weight-bold" style="color: #d50000;">Hapus Semua</span>
                </div>
                <span class="ml-2 mt-2" style="font-size: 14px;">Jersey sepeda</span>
                <span class="ml-2 mt-2" style="font-size: 14px;">Lampu Emergency</span>
                <span class="ml-2 mt-2" style="font-size: 14px;">Lampu Emergency</span>
            </div>
        </div>
    </div>

    



    <script src="{{ asset('assets/js/index.js') }}"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    
  </body>
</html>