<style>
.custom-footer {
  background-color: #3F51B5;
  padding-top: 30px;
  color: white;
  position: relative;
  overflow: hidden;
}

.footer-title {
  position: relative;
  display: inline-block;
  padding-bottom: 4px;
  font-size: 1.1rem;
}

.footer-divider {
  width: 60px;
  height: 2px;
  background-color: white;
  margin-left: 0;
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
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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
  border-left: 2px solid rgba(255, 255, 255, 0.3);
  transition: all 0.3s ease;
  font-size: 0.95rem;
}

.contact-item:hover {
  border-left: 2px solid white;
  padding-left: 10px;
}

.copyright-note {
  font-size: 0.95rem;
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

<footer class="custom-footer text-white">
  <div class="container">
    <div class="row">
      <!-- Logo -->
      <div class="col-md-3 mb-2 text-end">
        <img src="./uploads/SORA.png" alt="Logo PANERA" class="img-fluid" width="90" height="90">
      </div>

      <!-- Deskripsi -->
      <div class="col-md-3 mb-2">
        <h5 class="fw-bold footer-title">SORA</h5>
        <hr class="footer-divider mt-0">
        <p class="small">Update berita terkini yang akurat, kredibel, dan penuh inspirasi dari berbagai tempat.</p>
      </div>

      <!-- Kategori -->
      <div class="col-md-3 mb-2">
        <h5 class="fw-bold footer-title">Kategori</h5>
        <hr class="footer-divider mt-0">
        <ul class="list-unstyled small">
          <li><a href="#" class="footer-link">Era Digital</a></li>
          <li><a href="#" class="footer-link">Nilai Pancasila</a></li>
          <li><a href="#" class="footer-link">Tantangan</a></li>
          <li><a href="#" class="footer-link">Solusi & Upaya</a></li>
        </ul>
      </div>

      <!-- Kontak -->
      <div class="col-md-3 mb-2">
        <h5 class="fw-bold footer-title">Kontak</h5>
        <hr class="footer-divider mt-0">
        <div class="contact-item">
          <i class="fas fa-home me-2"></i> Medan, Indonesia
        </div>
        <div class="contact-item">
          <i class="fas fa-envelope me-2"></i>
          <a href="" class="footer-link">sora@gmail.com</a>
        </div>
        <div class="contact-item">
          <i class="fas fa-phone me-2"></i> +62 812 3456 7890
        </div>
      </div>
    </div>

    <!-- Sosial Media -->
    <div class="text-center pb-3">
      <a href="https://www.instagram.com/nurlizaazz" class="footer-link social-icon"><i class="fab fa-github"></i></a>
      <a href="https://www.x.com/nurlizaazz" class="footer-link social-icon"><i class="fab fa-twitter"></i></a>
      <a href="https://github.com/nurlizaazz" class="footer-link social-icon"><i class="fab fa-instagram"></i></a>
    </div>

    <!-- Copyright -->
    <div class="text-center pt-2 border-top border-light copyright-note">
      © 2025 <strong>SORA</strong>. All rights reserved. |
      <a href="#" class="footer-link">Kebijakan Privasi</a> |
      <a href="#" class="footer-link">Syarat & Ketentuan</a>
    </div>
  </div>
</footer>




<!-- Bootstrap Icons & JS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
