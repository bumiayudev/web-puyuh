@extends('main')
@section('title', 'Kandang')
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
  <h1>Kandang Puyuh</h1>
  <p>Kami melayani dan menjual kandang puyuh dengan kualitas terbaik.</p>
</header>
<section id="cage" class="cage">
    <div class="container">
        <img src="{{ asset('images/kandangpuyuh.jpg') }}" class="responsive-img" alt="kandang puyuh"><br>
        <div class="row">
            <div class="col-lg-12" data-aos="fade-right">
            <h3>Kandang Puyuh</h3>
            <p style="text-align: justify;">
                Kandang puyuh adalah struktur yang dirancang khusus untuk menampung burung puyuh dalam peternakan. Kandang ini harus memenuhi kebutuhan dasar burung puyuh, seperti ruang yang cukup, ventilasi yang baik, dan perlindungan dari cuaca ekstrem serta predator.
            </p>
            <ul style="list-style: none;">
                <li><i class="bi bi-check-circle"></i> Bahan: Terbuat dari bahan berkualitas tinggi seperti besi galvanis atau aluminium untuk ketahanan dan umur panjang</li>
                <li><i class="bi bi-check-circle"></i> Desain: Dirancang untuk memaksimalkan ruang dan kenyamanan burung puyuh</li>
                <li><i class="bi bi-check-circle"></i> Kapasitas: Tersedia dalam berbagai ukuran sesuai kebutuhan peternak</li>
                <li><i class="bi bi-check-circle"></i> Fitur Tambahan: Dilengkapi dengan sistem pembuangan kotoran dan tempat pakan serta minum yang mudah diakses</li>
            </ul>
            <p style="text-align: justify;">
                Perawatan kandang puyuh meliputi pembersihan rutin, pemeriksaan struktur untuk memastikan tidak ada kerusakan, serta pengaturan suhu dan kelembaban yang sesuai untuk menjaga kesehatan burung puyuh.
            </p>
            </div>
        </div>
    </div>
</section>
@endsection
