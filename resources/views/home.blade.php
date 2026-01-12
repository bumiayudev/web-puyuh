@extends("main")
@section("content")
  <section class="jumbotron">
    @foreach ($banners as $banner)
        <div class="slide active" style="background-image: url('{{ asset("storage/" . $banner->image) }}');">
            <div class="overlay">
                <div class="content">
                    <h1>{{ $banner->title }}</h1>
                    <p>{{ $banner->subtitle }}</p>
                </div>
            </div>
        </div>
    @endforeach
 </section>

  <!-- PRODUK -->
  <section id="produk" class="produk">
    <h2>Produk Unggulan Kami</h2>
    <span>Semua produk yang kami tawarkan dengan kualitas terbaik dan kami siap melayani setiap hari jika terjadi kendala dalam pemeliharaan atau perawatan.</span><br><br>
    <div class="cards">
      <div class="card">
        <h3>Bibit Puyuh(DOQ)</h3>
        <!-- <p>Umur Sehari</p><br> -->
        <img src="images/doq.jpg" alt="bibit puyuh(DOQ)">
      </div>
      <div class="card">
        <h3>Puyuh Siap Telur</h3>
        <!-- <p>Berat 6 - 8 gram</p><br> -->
        <img src="images/bibitpuyuh.jpg" alt="pst">
      </div>
      <div class="card">
        <h3>Kandang Puyuh Petelur</h3>
        <!-- <p>Bahan Kayu + Tempat pakan + Nipple puyuh</p><br> -->
        <img src="images/kandangpuyuh.jpg" alt="kandang puyuh">
      </div>
    </div>
  </section>
<!-- END PRODUK -->
@endsection
