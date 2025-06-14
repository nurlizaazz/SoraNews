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
    /* Navbar Styles */
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

    /* Fix untuk konten tidak ketiban navbar */
    body {
      padding-top: 70px; /* Sesuaikan dengan tinggi navbar */
    }

.nav-link {
  padding: 8px 16px;
  text-decoration: none;
  color: #5C6BC0 !important;
  font-weight: 500;
  transition: all 0.2s ease-in-out;
  border-radius: 8px;
}

.nav-link:hover {
  background-color: #DBEAFE;
  color: #1A237E !important;
}

.nav-link:not(.active):hover {
  background-color: white !important;
  color: #1A237E !important;
}

.nav-link.active {
  background-color: #DBEAFE !important;
  color: #1E3A8A !important;
  font-weight: 600;
}


.nav.nav-pills .nav-item {
  margin: 0 60px; 
}
  </style>
</head>
<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <img src="./uploads/SORA.png" style="height:40px; width:40px;" class="me-">
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

        <form class="d-flex" action="search.php" method="GET">
          <input class="form-control search-input-custom me-2" type="search" placeholder="Cari berita..." name="q">
          <button class="btn search-btn-custom" type="submit">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>
    </div>
  </nav>

  <ul class="nav nav-pills nav-fill justify-content-center">
  <li class="nav-item">
    <a class="nav-link text-end" href="index.php">Beranda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php">Artikel</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-start" href="tentang.php">Tentang</a>
  </li>
  </ul>
