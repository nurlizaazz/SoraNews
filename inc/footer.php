<style>
  .bg-blue-theme {
    background: linear-gradient(135deg, #2196F3 0%, #64B5F6 50%, #1E88E5 100%);
    color: white;
    position: relative;
    overflow: hidden;
  }

  .bg-blue-theme::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #BBDEFB 0%, #64B5F6 50%, #1565C0 100%);
  }

  .footer-link {
    color: white;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
  }

  .footer-link:hover {
    color: #E3F2FD;
    transform: translateY(-2px);
    text-shadow: 0 2px 4px rgba(0,0,0,0.1);
  }

  .social-icon {
    font-size: 1.4rem;
    margin: 0 8px;
    transition: all 0.3s ease;
  }

  .social-icon:hover {
    transform: scale(1.15) translateY(-2px);
    color: #E3F2FD;
  }

  .contact-item {
    margin-bottom: 8px;
    padding-left: 6px;
    border-left: 2px solid rgba(255,255,255,0.3);
    transition: all 0.3s ease;
    font-size: 0.95rem;
  }

  .contact-item:hover {
    border-left: 2px solid white;
    padding-left: 10px;
  }

  .footer-title {
    position: relative;
    display: inline-block;
    padding-bottom: 4px;
    font-size: 1.1rem;
  }

  .footer-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 40px;
    height: 2px;
    background: white;
  }

  .footer-wave {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 16px;
    background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" fill="rgba(255,255,255,0.1)" opacity=".25"/></svg>');
    background-size: cover;
  }
</style>

<footer class="bg-blue-theme text-white py-3 mt-auto position-relative">
  <div class="footer-wave"></div>
  <div class="container position-relative">
    <div class="row">
      <div class="col-lg-4 mb-3">
        <h5 class="footer-title">BungaBuzz</h5>
        <p class="small">Portal berita terkini yang menyajikan informasi aktual, terpercaya, dan inspiratif dari berbagai bidang.</p>
        <div class="d-flex flex-wrap gap-2">
          <a href="index.php" class="btn btn-outline-light btn-sm rounded-pill">Beranda</a>
          <a href="index.php" class="btn btn-outline-light btn-sm rounded-pill">Artikel</a>
          <a href="tentang.php" class="btn btn-outline-light btn-sm rounded-pill">Tentang</a>
        </div>
      </div>

      <div class="col-lg-4 mb-3">
        <h5 class="footer-title">Kontak</h5>
        <div class="contact-item">
          <i class="bi bi-envelope me-2"></i>
          <a href="mailto:bungaalyamukhbita@gmail.com" class="footer-link">bungaalyamukhbita@gmail.com</a>
        </div>
        <div class="contact-item">
          <i class="bi bi-instagram me-2"></i>
          <a href="https://www.instagram.com/bngalya_" target="_blank" class="footer-link">@bngalya_</a>
        </div>
        <div class="contact-item">
          <i class="bi bi-geo-alt me-2"></i>
          <span>Medan, Sumatera Utara</span>
        </div>
      </div>

      <div class="col-lg-4">
        <h5 class="footer-title">Ikuti Saya</h5>
        <div class="d-flex">
          <a href="https://www.instagram.com/bngalya_" class="footer-link social-icon"><i class="bi bi-instagram"></i></a>
          <a href="https://github.com/Buwnbun17" class="footer-link social-icon"><i class="bi bi-github"></i></a>
        </div>
      </div>
    </div>

    <hr class="my-3" style="border-color: rgba(255,255,255,0.2);">

    <div class="text-center small">
      <p class="mb-0">&copy; 2025 <strong>BungaBuzz</strong>. All rights reserved. | 
        <a href="#" class="footer-link">Kebijakan Privasi</a> | 
        <a href="#" class="footer-link">Syarat & Ketentuan</a>
      </p>
    </div>
  </div>
</footer>

<!-- Bootstrap Icons & JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
