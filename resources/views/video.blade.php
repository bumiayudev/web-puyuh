@extends("main")
@section("content")
<!-- HEADER -->
<header class="page-header">
  <h1>Proses Pengiriman Puyuh</h1>
  <p>Dokumentasi pengemasan, pengecekan, dan pengiriman puyuh hidup hingga sampai ke lokasi pelanggan dengan aman.</p>
</header>


<!-- MAIN VIDEO -->
<section class="video-section">
  <div class="video-wrapper">
    <iframe
      width="100%"
      height="100%"
      src="https://www.youtube.com/embed/g6yStC6T8-Y"
      title="YouTube video"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen>
    </iframe>
  </div>


  <div class="video-content">
    <span class="badge">Pengiriman Aman</span>
    <h2>Tahapan Pengiriman</h2>
    <ul>
    <li>Seleksi puyuh sehat & siap kirim</li>
    <li>Pengemasan dengan kandang khusus</li>
    <li>Pengecekan jumlah & kondisi</li>
    <li>Pengiriman ke alamat pelanggan</li>
    <li>Serah terima di lokasi</li>
    </ul>
    <p>Setiap pengiriman dilakukan sesuai SOP untuk menjaga kesehatan unggas selama perjalanan.</p>
  </div>
</section>

<!-- VIDEO LIST -->
<section class="video-list">
  <h3>Video Kegiatan Lainnya</h3>
  <div class="video-grid">

  <div class="video-card" onclick="changeVideo('video-pengemasan.mp4')">
    <iframe src="https://www.youtube.com/embed/J03z16RYw5g" frameborder="0" allowfullscreen></iframe>
    <div class="info">
    <h4>Pengiriman PST 100 Ekor</h4>
    <span>Kab Tangerang - Tigaraksa</span>
    </div>
  </div>

  <div class="video-card" onclick="changeVideo('video-loading.mp4')">
    <iframe src="https://www.youtube.com/embed/pGWYe75fEYE" frameborder="0" allowfullscreen></iframe>
    <div class="info">
    <h4>Pengiriman PST 300 Ekor</h4>
    <span>Jelambar - Jakbar</span>
    </div>
  </div>

  <div class="video-card" onclick="changeVideo('video-serah-terima.mp4')">
    <iframe src="https://www.youtube.com/embed/J3S4K82HOWc" frameborder="0" allowfullscreen></iframe>
    <div class="info">
    <h4>Pengiriman PST 500 Ekor</h4>
    <span>Parung - Bogor</span>
    </div>
  </div>

  </div>
</section>
@endsection
