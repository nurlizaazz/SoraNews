<?php include 'inc/header.php'; ?>

<style>
  .about-section {
    background: #f7f9fc;
    padding: 4rem 0;
    text-align: center;
  }

  .about-img {
    width: 170px;
    height: 170px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #0D47A1;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .about-img:hover {
    transform: scale(1.08);
  }

  .about-name {
    font-size: 2.1rem;
    font-weight: 600;
    margin-top: 1.5rem;
    color: #0D47A1;
  }

  .about-desc {
    max-width: 680px;
    margin: 1.2rem auto;
    font-size: 1.1rem;
    color: #333;
    line-height: 1.9;
  }

  .social-icons a {
    font-size: 1.7rem;
    margin: 0 15px;
    transition: all 0.3s ease;
  }

  .social-icons a:hover {
    transform: translateY(-5px);
    color: #1565c0 !important;
  }
   .identitas {
      margin-top: 30px;
      padding-top: 20px;
      border-top: 1px solid #ddd;
    }
    .container-contact {
      max-width: 800px;
      margin: auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .profile-container {
  display: flex;
  align-items: flex-start;
  gap: 30px;
  margin: 60px auto;
  max-width: 1000px;
  padding: 0 20px;
}
</style>

<section class="about-section mb-5">
  <div class="profile-container">
  <div class="profile-photo me-6 mt-3">
    <img src="uploads/pas foto.jpg" alt="Foto Profil Mahasiswa" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
  </div>
 <div class="container-contact mt-3">
   <h2 class="text-center mt-4" style=" text-align: center; color: #5C6BC0; font-family: 'Rajdhani', 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><b>NUR LIZA AZMI</b></h2>
    <p class="about-desc">
      Halo! Saya adalah penulis dan pengelola <strong>SORA</strong>, portal berita yang berfokus pada penyajian informasi aktual, mendidik, dan inspiratif dari berbagai perspektif kehidupan. Harapan saya, SORA dapat menjadi sumber informasi yang tidak hanya membuka wawasan, tetapi juga memberi energi positif bagi para pembacanya.
    </p>
    <div class="social-icons">
      <a href="https://www.instagram.com/nurlizaazz" class="text-danger" target="_blank"><i class="bi bi-instagram"></i></a>
      <a href="https://www.x.com/nurlizaazz" class="text-primary"><i class="fab fa-twitter"></i></a>
      <a href="https://github.com/nurlizaazz" class="text-dark" target="_blank"><i class="bi bi-github"></i></a>
    </div>
  </div>
  </div>
</div>
</section>

<?php include 'inc/footer.php'; ?>
