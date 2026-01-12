@extends("main")
@section("content")
  <section class="jumbotron">
    <div class="slide active" style="background-image: url('{{ asset("images/pexels-pixabay-158279.jpg") }}');">
    <div class="overlay">
    <div class="content">
    <h1>Puyuh KRI - Kota Bekasi</h1>
    <p>Solusi jual beli puyuh dengan kualitas terbaik dan harga terjangkau</p>
    </div>
    </div>
    </div>


    <div class="slide" style="background-image: url('{{ asset("images/pexels-pixabay-206768.jpg") }}');">
    <div class="overlay">
    <div class="content">
    <h1>Dari Peternak Lokal</h1>
    <p>Harga jujur langsung dari sumbernya</p>
    </div>
    </div>
    </div>


    <div class="slide" style="background-image: url('{{ asset("images/pexels-pixabay-235725.jpg") }}');">
    <div class="overlay">
    <div class="content">
    <h1>Pengiriman Cepat</h1>
    <p>Siap kirim ke rumah dan usaha Anda</p>
    </div>
    </div>
    </div>
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
