<?php include 'inc/header.php'; include 'db/config.php'; ?>

<style>
  .card-header.tema-biru {
    background-color: #E8EAF6;
    color: #3F51B5;
    font-weight: bold; 
  } 

  .card-body h5 a {
    color: #512DA8;
    font-weight: bold;
    text-decoration: none; 
  }
  .card-body h5 a:hover {
    color: #303F9F; 
  }

  .kategori .list-group-item {
    color:  #5C6BC0;
  }
  .kategori .list-group-item:hover {
    background-color: #DEE5F2;
    color: #303F9F;
    cursor: pointer;
    transition: 0.2s ease-in-out;
  }

  .hot-news-link a {
    color: #5C6BC0 !important; 
    text-decoration: none;
  }
  .hot-news-link a:hover {
    color: #303F9F !important;
  }
  .btn,.btn mb-4{
    background-color:#E6F0FF; 
    color:#0056b3; 
    border:1px solid #b3d7ff;
  }
  .pagination .page-item .page-link {
  background-color: white;
  color: #0056b3;
  border: 1px solid #b3d7ff;
  transition: 0.3s;
}

.pagination .page-item .page-link:hover {
  background-color: #E6F0FF;
  color: #0056b3;
  border: 1px solid #b3d7ff;
}

.pagination .page-item.active .page-link {
  background-color: #E6F0FF;
  color: #0056b3;
  border: 1px solid #b3d7ff;
}

.pagination .page-item.disabled .page-link {
  background-color: #f8f9fa;
  color: #adb5bd;
  border: 1px solid #dee2e6;
}

  </style>
<div class="container mt-4 mb-5">
  <div class="row">
    <!-- Konten Berita Utama -->
    <div class="col-md-9">
    <?php
    $slug = $_GET['slug'];
    $stmt = $conn->prepare("SELECT * FROM berita WHERE slug = ?");
    $stmt->bind_param("s", $slug);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      $berita = $result->fetch_assoc();
      echo "<a href='javascript:history.back()' class='btn mb-4'>&laquo; Back</a>";
      echo "<h1 class='mb-3'>{$berita['judul']}</h1>";
      echo "<div class='text-muted mb-3 border-bottom pb-2'>
              <small>" . date('d F Y, H:i', strtotime($berita['tanggal'])) . " WIB</small>
            </div>";

      echo "<img src='uploads/{$berita['gambar']}' class='img-fluid rounded shadow-sm mb-4' style='max-height: 500px; width: 100%; object-fit: cover;' alt='{$berita['judul']}'>";
      
      echo "<div class='article-content' style='font-size: 1.1rem; line-height: 1.8;'>
              ".nl2br($berita['isi'])."
            </div>";

      if (!empty($berita['tagar'])) {
      echo "<div class='mt-4'>";
      echo "<h5>Tagar:</h5>";

      $tags = explode(',', $berita['tagar']);
      foreach ($tags as $tag) {
        $tag_trim = trim($tag);
        echo "<a href='tag.php?tag=".urlencode($tag_trim)."' class='badge bg-primary me-2'>".htmlspecialchars($tag_trim)."</a>";
      }

      echo "</div>";
    }

      
      $prev_stmt = $conn->prepare("SELECT slug FROM berita WHERE id < ? ORDER BY id DESC LIMIT 1");
      $prev_stmt->bind_param("i", $berita['id']);
      $prev_stmt->execute();
      $prev_result = $prev_stmt->get_result();
      $prev_berita = $prev_result->fetch_assoc();

      $next_stmt = $conn->prepare("SELECT slug FROM berita WHERE id > ? ORDER BY id ASC LIMIT 1");
      $next_stmt->bind_param("i", $berita['id']);
      $next_stmt->execute();
      $next_result = $next_stmt->get_result();
      $next_berita = $next_result->fetch_assoc();
      
      echo "<hr class='my-4'>";
      $total_result = $conn->query("SELECT COUNT(*) as total FROM berita");
      $total_row = $total_result->fetch_assoc();
      $total_berita = $total_row['total'];
      $all_result = $conn->query("SELECT id, slug FROM berita ORDER BY id ASC");
      $slug_list = [];
      while($row = $all_result->fetch_assoc()) {
        $slug_list[] = $row['slug'];
      }
      $current_index = array_search($berita['slug'], $slug_list);
      echo "<nav aria-label='Navigasi halaman berita'>";
      echo "<ul class='pagination justify-content-center'>";
      // Tombol Sebelumnya
      if ($current_index > 0) {
        $prev_slug = $slug_list[$current_index-1];
        echo "<li class='page-item'><a class='page-link' href='detail.php?slug=$prev_slug'>&laquo; Sebelumnya</a></li>";
      } else {
        echo "<li class='page-item disabled'><span class='page-link'>&laquo; Sebelumnya</span></li>";
      }
      // Nomor halaman
      for ($i = 0; $i < $total_berita; $i++) {
        $active = ($i == $current_index) ? 'active' : '';
        echo "<li class='page-item $active'><a class='page-link' href='detail.php?slug={$slug_list[$i]}'>".($i+1)."</a></li>";
      }
      // Tombol Berikutnya
      if ($current_index < $total_berita-1) {
        $next_slug = $slug_list[$current_index+1];
        echo "<li class='page-item'><a class='page-link' href='detail.php?slug=$next_slug'>Berikutnya &raquo;</a></li>";
      } else {
        echo "<li class='page-item disabled'><span class='page-link'>Berikutnya &raquo;</span></li>";
      }
      echo "</ul>";
      echo "</nav>";
      // --- END PAGINATION ---

    } else {
      echo "<div class='alert alert-danger text-center'>
              <h4 class='alert-heading'>404 - Tidak Ditemukan</h4>
              <p>Maaf, berita yang Anda cari tidak dapat ditemukan. Mungkin URL telah berubah atau berita telah dihapus.</p>
              <hr>
              <a href='index.php' class='btn btn-primary'>Kembali ke Beranda</a>
            </div>";
    }

    $stmt->close();
    ?>
    </div>

<div class="col-md-3">
      <div class="card">
        <div class="card-header fw-bold tema-biru">Trending Topics</div>
        <ul class="list-group list-group-flush">
        <?php
        $hot = $conn->query("SELECT * FROM berita ORDER BY tanggal DESC LIMIT 5");
        while($h = $hot->fetch_assoc()) {
          echo "<li class='list-group-item'>
                  <div class='d-flex'>
                    <img src='uploads/{$h['gambar']}' width='60' height='40' class='me-2 rounded'>
                    <div class='hot-news-link'>
                      <a href='detail.php?slug={$h['slug']}' class='fw-semibold d-block'>{$h['judul']}</a>
                      <small class='text-muted'>{$h['tanggal']}</small>
                    </div>
                  </div>
                </li>";
        }
        ?>
        </ul>
      </div>
    </div>
  </div>
</div>
  </div>
</div>

<?php include 'inc/footer.php'; ?>