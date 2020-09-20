  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Daftar Harga</h2>
        </div>
      </div>
    </section>
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <?php
          foreach ($harga as $h) {
          ?>
            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" style="margin-bottom: 20px;">
              <div class="box">
                <?php
                if ($h->terlaris == 1) {
                  echo '<span class="advanced">Terlaris</span>';
                }
                if ($perusahaan->whatsapp_perusahaan != null || $perusahaan->whatsapp_perusahaan != '') {
                  $link_pesan = 'https://wa.me/' . $perusahaan->whatsapp_perusahaan . '?text=Hai Admin ' . $perusahaan->nama_perusahaan . ', Apakah ' . $h->nama_paket . ' tersedia?';
                } else {
                  $link_pesan = '#';
                }
                ?>
                <h3><?= $h->nama_paket ?></h3>
                <h4><sup>Rp </sup><?= number_format($h->harga_paket, 0, '', '.') ?><br><span>(<?= $h->qty_paket ?> qty)</span></h4>
                <ul>
                  <?php
                  $isi_paket = explode(', ', $h->isi_paket);
                  foreach ($isi_paket as $i) {
                    echo '<li>' . $i . '</li>';
                  }
                  ?>
                </ul>
                <div class="btn-wrap">
                  <a href="<?= $link_pesan ?>" target="_blank" class="btn-buy">Pesan Sekarang</a>
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