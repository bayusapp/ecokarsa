    <div class="content-wrapper">
      <section class="content-header">
        <h1>Daftar Harga Paket</h1>
      </section>
      <section class="content">
        <?php
        if (flashdata('msg')) {
          echo flashdata('msg');
        }
        ?>
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-paket"><i class="fa fa-plus"></i> Tambah Harga Paket</button>
                <div class="modal fade" id="tambah-paket">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title" style="text-align: center;">Tambah Harga Paket</h3>
                      </div>
                      <form method="post" action="<?= base_url('admin/paket/simpanpaket') ?>" role="form">
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <div class="form-group">
                                <label for="nama_paket" style="font-size: 15px;">Nama Paket</label>
                                <input type="text" name="nama_paket" id="nama_paket" class="form-control" placeholder="Masukkan Nama Paket">
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <div class="form-group">
                                <label for="isi_paket" style="font-size: 15px;">Isi Paket</label>
                                <select name="isi_paket[]" class="form-control select2" multiple="multiple" style="width: 100%;">
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <div class="form-group">
                                <label for="harga_paket" style="font-size: 15px;">Harga Paket</label>
                                <input type="text" name="harga_paket" id="harga" class="form-control" placeholder="Masukkan Harga Paket">
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                              <div class="form-group">
                                <label for="qty_paket" style="font-size: 15px;">Qty</label>
                                <input type="number" name="qty_paket" id="qty_paket" class="form-control" placeholder="Masukkan Qty Paket">
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                              <div class="form-group">
                                <label for="terlaris" style="font-size: 15px;">Terlaris</label>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="terlaris" id="terlaris" value="1"> Ya
                                  </label>&nbsp;&nbsp;&nbsp;
                                  <label>
                                    <input type="radio" name="terlaris" id="terlaris" value="0"> Tidak
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                          <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <table id="tabel-1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th width="30%">Nama Paket</th>
                      <th width="40%">Isi Paket</th>
                      <th width="15%">Harga Paket</th>
                      <th width="10%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($paket as $p) {
                    ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $p->nama_paket ?></td>
                        <td><?= $p->isi_paket ?></td>
                        <td style="text-align: right;">Rp <?= number_format($p->harga_paket, 0, '', '.') ?></td>
                        <td>-</td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>