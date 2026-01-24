@extends('main')
@section('title', 'Paket Pemula Puyuh')
@section('content')
<style>
.responsive-img {
  width: 100%;    /* Makes the image scale to the width of its container */
  max-width: 100%; /* Ensures the image doesn't exceed its parent container's width */
  height: auto;    /* Automatically adjusts the height to maintain the aspect ratio */
  display: block;  /* Helps with centering and layout issues */
  margin: 0 auto;  /* Optional: Centers the image if it's smaller than its container */
  background-origin: padding-box;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
</style>
<!-- HEADER -->
<header class="page-header">
  <h1>Paket Pemula Puyuh</h1>
  <p>Kami melayani dan menjual paket pemula puyuh dengan kualitas terbaik.</p>
</header>
<section id="starter-package" class="starter-package">
    <div class="container">
        <img src="{{ asset('images/puyuhdankandang.jpeg') }}" class="responsive-img" alt="paket pemula puyuh"><br>
        <div class="row">
            <div class="col-lg-12" data-aos="fade-right">
            <h3>Paket Pemula Puyuh</h3>
            <p style="text-align: justify;">
                Paket Pemula Puyuh adalah solusi lengkap bagi mereka yang ingin memulai usaha peternakan puyuh. Paket ini dirancang untuk memberikan semua kebutuhan dasar yang diperlukan untuk memulai peternakan puyuh, termasuk bibit puyuh, kandang, pakan awal, dan panduan perawatan.
            </p>
            <ul style="list-style: none;">
                <li><i class="bi bi-check-circle"></i> Bibit Puyuh: Termasuk sejumlah bibit puyuh berkualitas tinggi untuk memulai peternakan</li>
                <li><i class="bi bi-check-circle"></i> Kandang: Kandang puyuh yang dirancang khusus untuk kenyamanan dan keamanan burung</li>
                <li><i class="bi bi-check-circle"></i> Pakan Awal: Pakan nutrisif lengkap untuk mendukung pertumbuhan awal puyuh</li>
                <li><i class="bi bi-check-circle"></i> Panduan Perawatan: Buku panduan lengkap tentang cara merawat dan mengelola peternakan puyuh</li>
            </ul>
            <p style="text-align: justify;">
                Dengan Paket Pemula Puyuh, Anda akan mendapatkan semua yang Anda butuhkan untuk memulai peternakan puyuh dengan mudah dan efisien. Kami juga menyediakan dukungan teknis untuk membantu Anda dalam perjalanan peternakan Anda.
            </p>
            </div>
        </div>
    </div>
</section>
@endsection
