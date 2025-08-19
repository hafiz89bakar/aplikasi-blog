<!-- Footer -->
  <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col-md-6 mb-3">
          <h5>Capaian Pantas</h5>
          <a href="{{ route('welcome') }}">Utama</a> |
          <a href="{{ route('about') }}">Tentang Blog</a> |
          <a href="{{ route('contact') }}">Hubungi</a> |
          <a href="{{ route('posts.index') }}">Blog Post</a>
        </div>
        <div class="col-md-6">
          <h5>Ikuti Kami</h5>
          <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
      <hr style="border-color: rgba(255,255,255,0.3);">
      <p class="mb-0">&copy; 2025 MyBlog. Semua Hakcipta Terpelihara.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
