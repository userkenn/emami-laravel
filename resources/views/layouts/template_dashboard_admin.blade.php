<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/styles_dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles_index.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-icon.png') }}" type="image/x-icon">
    <title>@yield('judul')</title>
  </head>
  <body>
    
    <div class="header">
        <div class="item-header-2 d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ url('/home')}}"><img class="img-emami" src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                

              
                
            </div>
        </div>
    </div>

    <div id="header" class="clearfix">
      <h1>Dashboard Penjual</h1>
    </div>
    
    @extends('layouts.sidebar_admin')

    <div id="content">
      @yield('isi')
    </div>

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
                <img src="{{ asset('assets/cod.png') }}" alt="" width="60" height="30" />

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
  

    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    
  </body>
</html>
