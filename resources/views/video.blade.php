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
      src="{{ $row->url }}"
      title="{{ $row->title }}"
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
@foreach ($videos as $video)
@if ($video->id != $row->id)
  <div class="video-card" onclick="changeVideo('{{ $video->url }}')">
    <iframe src="{{ $video->url }}" frameborder="0" allowfullscreen></iframe>
    <div class="info">
    <h4>{{ $video->title }}</h4>
    <span>{{ $video->description }}</span>
    </div>
  </div>
@endif
@endforeach
  </div>
</section>
@endsection
