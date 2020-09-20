  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Tentang Kami</h2>
        </div>
      </div>
    </section>
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
        <div class="row content">
          <div class="col-lg-12" data-aos="fade-right">
            <?= $perusahaan->tentang_perusahaan ?>
          </div>
        </div>
      </div>
    </section>
    <section id="team" class="team section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Tim Kami</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row">
          <?php
          foreach ($tim as $t) {
          ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                  <style>
                    .img-fluid {
                      max-width: 100%;
                      height: 255px;
                    }
                  </style>
                  <img src="<?= base_url($t->foto) ?>" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4><?= $t->nama ?></h4>
                  <span><?= $t->posisi ?></span>
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