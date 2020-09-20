  <?php $url_bootstrap = base_url('assets/front/') ?>
  <?php
  if ($banner == true) {
  ?>
    <section id="hero">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <?php
          $no = 0;
          $active = '';
          foreach ($banner as $b) {
            if ($no == 0) {
              $active = 'active';
            } else {
              $active = '';
            }
          ?>
            <div class="carousel-item <?= $active ?>" style="background-image: url(<?= base_url($b->foto_banner) ?>);">
              <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp">
                  <h2><?= $b->judul_banner ?></h2>
                  <p><?= $b->deskripsi_banner ?></p>
                </div>
              </div>
            </div>
          <?php
            $no++;
          }
          ?>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      </div>
    </section>
  <?php
  } else {
  ?>
    <main id="main" style="margin-top: 80px;">
    <?php
  }
    ?>
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Tentang Kami</strong></h2>
        </div>
        <div class="row content">
          <div class="col-lg-12" data-aos="fade-right">
            <?= $perusahaan->tentang_perusahaan ?>
          </div>
        </div>
      </div>
    </section>
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Produk Kami</strong></h2>
        </div>
        <div class="row">
          <?php
          foreach ($produk as $p) {
          ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                  <style>
                    .img-fluid {
                      max-width: 100%;
                      height: 255px;
                    }

                    .btn-baca {
                      font-family: "Roboto", sans-serif;
                      font-weight: 500;
                      font-size: 14px;
                      letter-spacing: 1px;
                      display: inline-block;
                      padding: 12px 32px;
                      border-radius: 4px;
                      transition: 0.5s;
                      line-height: 1;
                      margin: 10px;
                      color: #111;
                      -webkit-animation-delay: 0.8s;
                      animation-delay: 0.8s;
                      border: 2px solid #1bbd36;
                      background: #fff;
                    }

                    .btn-baca:hover {
                      background: #1bbd36;
                      color: #fff;
                      text-decoration: none;
                    }
                  </style>
                  <img src="<?= base_url($p->foto_produk) ?>" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4><?= $p->nama_produk ?></h4>
                  <div class="text-center">
                    <a href="<?= base_url('p/detailproduk/' . substr(sha1($p->id_produk), 16, 7)) ?>" class="btn-baca">Detail Produk</a>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section>
    </main>