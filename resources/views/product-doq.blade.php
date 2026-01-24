@extends('main')
@section('title', 'Bibit Puyuh(DOQ)')
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
  <h1>Bibit Puyuh (DOQ)</h1>
  <p>Kami melayani dan menjual bibit puyuh dengan kualitas terbaik.</p>
</header>
<section id="product-doq" class="product-doq">
    <div class="container">
        <img src="{{ asset('images/doq.jpg') }}" class="responsive-img" alt="bibit puyuh atau doq"><br>
        <div class="row">
            <div class="col-lg-12" data-aos="fade-right">
            <h3>Bibit Puyuh (DOQ)</h3>
            <p>
                Bibit Puyuh (Day Old Quail) adalah anak burung puyuh yang baru menetas dan berusia satu hari. Bibit ini biasanya digunakan untuk memulai usaha peternakan puyuh, baik untuk tujuan produksi telur maupun daging. Bibit puyuh DOQ memiliki potensi pertumbuhan yang baik dan dapat berkembang menjadi burung puyuh dewasa yang sehat jika diberikan perawatan yang tepat.
            </p>
            <ul style="list-style: none;">
                <li><i class="bi bi-check-circle"></i> Usia: 1 hari</li>
                <li><i class="bi bi-check-circle"></i> Berat: 6-8 gram</li>
                <li><i class="bi bi-check-circle"></i> Kualitas: Sehat, aktif, dan memiliki bulu yang rapi</li>
                <li><i class="bi bi-check-circle"></i> Kemasan: Dikemas dalam kotak khusus untuk menjaga suhu dan kelembaban</li>
            </ul>
            <p>
                Perawatan bibit puyuh DOQ meliputi pemberian pakan yang sesuai, penyediaan lingkungan yang bersih dan hangat, serta pemantauan kesehatan secara rutin.
            </p>
            </div>
        </div>
    </div>
</section>
@endsection
