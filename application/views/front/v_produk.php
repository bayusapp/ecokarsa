  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Produk Kami</h2>
        </div>
      </div>
    </section>
    <section id="team" class="team section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Produk Kami</h2>
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