<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<?php include '../db/config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SORA</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<style>
  :root {
    --blue-primary: #1E88E5;
    --blue-dark: #1565C0;
    --blue-light: #E3F2FD;
    --text-dark: #343a40;
    --text-on-blue: #ffffff;
  }
  body {
    background-color: #f8f9fa;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    margin: 0;
    padding-top: 70px;
  }

  .wrapper {
    display: flex;
    min-height: 100vh;
  }

  .sidebar {
    width: 240px;
    background-color: var(--blue-primary);
    box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
  }

  .sidebar-header {
    padding: 20px;
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--text-on-blue);
    border-bottom: 1px solid var(--blue-dark);
    text-align: center;
  }

  .sidebar-nav {
    flex-grow: 1;
    margin-top: 20px;
  }

  .sidebar-nav a {
    color: var(--text-on-blue);
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 25px;
    text-decoration: none;
    font-size: 1rem;
    transition: background-color 0.2s ease-in-out, padding-left 0.2s ease-in-out;
  }

  .sidebar-nav a:hover {
    background-color: var(--blue-dark);
    padding-left: 30px;
  }

  .sidebar-nav a.active {
    background-color: var(--blue-light);
    color: var(--blue-dark);
    font-weight: 600;
  }

  .sidebar-nav a .fa-fw {
    width: 1.25em;
  }

  .main-content {
    flex-grow: 1;
    padding: 2rem;
  }

  .content-header {
    border-bottom: 1px solid #dee2e6;
    padding-bottom: 1rem;
    margin-bottom: 2rem;
  }

  .content-header h4 {
    color: var(--text-dark);
    font-weight: 600;
  }

  .card-header-blue {
    background-color: var(--blue-primary);
    color: var(--text-on-blue);
  }

   .navbar-custom {
      background: #F9FAFB;
      box-shadow: 0 4px 12px rgba(13, 71, 161, 0.2);
      padding: 0.5rem 0;
      z-index: 1000;
    }

    .navbar-custom::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 3px;
      background: 1px solid #E5E7EB;
    }

    .navbar-brand-custom {
      font-weight: 700;
      font-size: 1.8rem;
      background: linear-gradient(to right, #3B82F6  0%, black 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .navbar-brand-custom:hover {
      transform: translateY(-2px);
      text-shadow: #DDDDDD;
    }

    .search-input-custom {
      border-radius: 25px;
      padding: 0.5rem 1.5rem;
      border: 2px solid #DDDDDD;
      color: #DDDDDD;
    }

    .search-input-custom:focus {
      background-color: linear-gradient(to right, #3B82F6  0%, black 100%);
      border-color: #DDDDDD;
      box-shadow: 0 0 0 0.25rem  #DDDDDD;
    }

    .search-input-custom::placeholder {
      color: #DDDDDD;
    }

    .search-btn-custom {
      background-color: white;
      color:  #0D47A1;
      border-radius: 25px;
      padding: 0.5rem 1.2rem;
      font-weight: 600;
      border:2px solid #DDDDDD;
    }

    .search-btn-custom:hover {
      background-color:  #E3F2FD;
      color: #08306b;
    }

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
</head>

<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <img src="../uploads/SORA.png" style="height:40px; width:40px;" class="me-">
      <a class="navbar-brand navbar-brand-custom text-black" href="index.php" style="font-family:'Rajdhani', 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">SORA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="main-content container">
    <!-- Header -->
    <div class="content-header">
      <h4>Portal Admin</h4>
    </div>

    <div class="row">
      <!-- Tambah Kategori -->
      <div class="col-12 mb-4">
        <div class="card shadow-sm">
          <div class="card-header text-white" style="background-color: #303F9F; border: 1px solid #dee2e6;">
            <h6 class="mb-0">Tambah Kategori</h6>
          </div>
          <div class="card-body" style="background-color: #DEE5F2; color: #303F9F;">
            <form action="kategori_action.php" method="POST">
              <div class="mb-3">
                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required>
              </div>
              <button type="submit" class="btn btn" style="background-color:#b3d7ff">Simpan</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tambah Berita -->
      <div class="col-12 mb-4">
        <div class="card shadow-sm">
          <div class="card-header text-white" style="background-color: #303F9F; border: 1px solid #dee2e6;">
            <h6 class="mb-0">Tambah Berita</h6>
          </div>
          <div class="card-body" style="background-color: #DEE5F2; color: #303F9F;">
            <form action="berita_action.php" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="judul" class="form-label">Judul Berita</label>
                <input type="text" name="judul" id="judul" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="isi" class="form-label">Isi Berita</label>
                <textarea name="isi" id="isi" rows="5" class="form-control" required></textarea>
              </div>
              <div class="mb-3">
                <label for="id_kategori" class="form-label">Kategori</label>
                <select name="id_kategori" id="id_kategori" class="form-select" required>
                  <option value="">-- Pilih Kategori --</option>
                  <?php
                  $kat = $conn->query("SELECT * FROM kategori");
                  while($k = $kat->fetch_assoc()) {
                    echo "<option value='{$k['id']}'>{$k['nama_kategori']}</option>";
                  }
                  ?>
                </select>
              </div>
              <div class="mb-3">
                <label for="tagar" class="form-label">Tagar</label>
                <input type="text" name="tagar" id="tagar" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="datetime-local" name="tanggal" id="tanggal" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*" required>
              </div>
              <button type="submit" class="btn" style="background-color:#b3d7ff">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<footer class="custom-footer text-white">
  <div class="container">
    <div class="row">
      <!-- Logo -->
      <div class="col-md-3 mb-2 text-end">
        <img src="../uploads/SORA.png" alt="Logo PANERA" class="img-fluid" width="90" height="90">
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
          <li><a href="#" class="footer-link">Politik</a></li>
          <li><a href="#" class="footer-link">Sosial</a></li>
          <li><a href="#" class="footer-link">Olahraga</a></li>
          <li><a href="#" class="footer-link">Hiburan</a></li>
          <li><a href="#" class="footer-link">Teknologi</a></li>
          <li><a href="#" class="footer-link">Kesehatan & Kecantikan</a></li>
          <li><a href="#" class="footer-link">Pendidikan</a></li>
          <li><a href="#" class="footer-link">Lifestyle</a></li>
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
          <a href="mailto:panera@gmail.com" class="footer-link">sora@gmail.com</a>
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
