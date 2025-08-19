
@extends('layouts.app')
@section('content')
  <!-- Header Hero -->
  <header>
    <div class="container">
      <h1>Aplikasi Blog Fancy</h1>
      <p>Tempat anda membaca, berkongsi dan menginspirasi dunia.</p>
      <a href="#artikel" class="btn btn-fancy">Baca Artikel</a>
    </div>
  </header>

  <!-- Content -->
  <main class="container my-5" id="artikel">
    <div class="row g-4">
      <!-- Artikel 1 -->
      <div class="col-md-4">
        <div class="card h-100">
          <img src="https://picsum.photos/id/1015/400/200" class="card-img-top" alt="Artikel 1">
          <div class="card-body">
            <h5 class="card-title">Tajuk Artikel 1</h5>
            <p class="card-text">Ringkasan artikel yang menarik minat pembaca...</p>
          </div>
          <div class="card-footer text-muted">
            Oleh <b>Admin</b> | 19 Ogos 2025
          </div>
        </div>
      </div>
      <!-- Artikel 2 -->
      <div class="col-md-4">
        <div class="card h-100">
          <img src="https://picsum.photos/id/1011/400/200" class="card-img-top" alt="Artikel 2">
          <div class="card-body">
            <h5 class="card-title">Tajuk Artikel 2</h5>
            <p class="card-text">Artikel tentang ilmu & pengalaman menarik...</p>
          </div>
          <div class="card-footer text-muted">
            Oleh <b>Hafiz</b> | 18 Ogos 2025
          </div>
        </div>
      </div>
      <!-- Artikel 3 -->
      <div class="col-md-4">
        <div class="card h-100">
          <img src="https://picsum.photos/id/1016/400/200" class="card-img-top" alt="Artikel 3">
          <div class="card-body">
            <h5 class="card-title">Tajuk Artikel 3</h5>
            <p class="card-text">Kupasan yang memberi motivasi kepada pembaca...</p>
          </div>
          <div class="card-footer text-muted">
            Oleh <b>Aisyah</b> | 17 Ogos 2025
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection


