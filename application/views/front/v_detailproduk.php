  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Detail Produk</h2>
        </div>
      </div>
    </section>
    <section id="blog" class="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 entries">
            <article class="entry entry-single" data-aos="fade-up">
              <div class="entry-img">
                <img src="<?= base_url($detail->foto_produk) ?>" alt="" class="img-fluid">
              </div>
              <h2 class="entry-title"><?= $detail->nama_produk ?></h2>
              <div class="entry-content">
                <?= $detail->deskripsi_produk ?>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
  </main>