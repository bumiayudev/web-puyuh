@extends("main")
@section('title', 'Puyuh Siap Telur(PST)')
@section("content")
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
  <h1>Puyuh Siap Telur(PST)</h1>
  <p>Kami melayani dan menjual puyuh siap telur dengan kualitas terbaik.</p>
</header>
<section id="product-pst" class="product-pst">
    <div class="container">
       <img src="{{ asset('images/burungpuyuh.jpeg') }}" class=responsive-img alt="burung puyuh siap telur"><br>
        <div class="row">
            <div class="col-lg-12" data-aos="fade-right">
            <h3>Puyuh Siap Telur (PST)</h3>
            <p>
                Puyuh Siap Telur (PST) adalah burung puyuh yang telah mencapai usia produktif dan siap untuk bertelur. Puyuh ini biasanya berusia antara 6 hingga 8 minggu dan telah melewati masa pertumbuhan awal. Puyuh PST sangat diminati oleh peternak karena kemampuannya untuk menghasilkan telur dalam jumlah yang signifikan.
            </p>
            <ul style="list-style: none;">
                <li><i class="bi bi-check-circle"></i> Usia: 6-8 minggu</li>
                <li><i class="bi bi-check-circle"></i> Berat: 150-200 gram</li>
                <li><i class="bi bi-check-circle"></i> Kualitas: Sehat, aktif, dan memiliki bulu yang rapi</li>
                <li><i class="bi bi-check-circle"></i> Produksi Telur: Mampu bertelur hingga 250-300 butir per tahun</li>
            </ul>
            <p>
                Perawatan puyuh PST meliputi pemberian pakan yang kaya nutrisi, penyediaan lingkungan yang bersih dan nyaman, serta pemantauan kesehatan secara rutin untuk memastikan produktivitas optimal.
            </p>
            </div>
        </div>
    </div>
</section>

@endsection

