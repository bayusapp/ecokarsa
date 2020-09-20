    <?php $url_bootstrap = base_url('assets/admin/'); ?>
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Developed by <a href="https://bayusapp.com" target="_blank">Bayu SAPP</a>. &copy; 2020 </strong>
    </footer>
    </div>
    <script src="<?= $url_bootstrap ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= $url_bootstrap ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= $url_bootstrap ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= $url_bootstrap ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= $url_bootstrap ?>bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= $url_bootstrap ?>plugins/sweetalert/sweetalert.min.js"></script>
    <script src="<?= $url_bootstrap ?>plugins/tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="<?= $url_bootstrap ?>plugins/maskmoney/jquery.maskMoney.js"></script>
    <script src="<?= $url_bootstrap ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= $url_bootstrap ?>bower_components/fastclick/lib/fastclick.js"></script>
    <script src="<?= $url_bootstrap ?>dist/js/adminlte.min.js"></script>
    <script>
      window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
          $(this).remove();
        });
      }, 3000);
    </script>
    <script>
      $(function() {
        var hash = window.location.hash;
        hash && $('ul.nav a[href="' + hash + '"]').tab('show');

        $('.nav-tabs a').click(function(e) {
          $(this).tab('show');
          var scrollmem = $('body').scrollTop();
          window.location.hash = this.hash;
          $('html,body').scrollTop(scrollmem);
        });
      });
    </script>
    <script>
      $(function() {
        $('.select2').select2({
          tags: true
        });

        $('#tabel-1').DataTable({
          "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "Semua"]
          ],
          "language": {
            "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
            "paginate": {
              "previous": "Sebelumnya",
              "next": "Selanjutnya"
            },
            "lengthMenu": "Menampilkan _MENU_ entri",
            "search": "Cari",
            "emptyTable": "Tidak ada data di dalam tabel"
          }
        });
      })
    </script>
    <script>
      tinymce.init({
        selector: '#text-editor',
        height: 300,
        plugins: 'print preview paste searchreplace autolink directionality visualblocks visualchars code fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools colorpicker textpattern help',
        toolbar: 'formatselect | fontsizeselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | image | table | removeformat',
        visual_table_class: 'tiny-table',
        fontsize_formats: "8px 10px 12px 14px 18px 24px 36px"
      });
    </script>
    <script>
      function hapus_produk(id) {
        $.ajax({
          url: '<?= base_url('admin/produk/ajaxproduk') ?>',
          method: 'post',
          data: {
            id: id
          },
          success: function(response) {
            swal({
              title: 'Apakah Anda yakin?',
              text: 'Ingin menghapus "' + response + '"',
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#DD6B55',
              confirmButtonText: 'Ya',
              cancelButtonText: 'Tidak',
              closeOnConfirm: false
            }, function() {
              window.location.href = '<?= base_url('admin/produk/hapusproduk/') ?>' + id;
            });
          }
        });
      }

      function hapus_testimoni(id) {
        $.ajax({
          url: '<?= base_url('admin/testimoni/ajaxtestimoni') ?>',
          method: 'post',
          data: {
            id: id
          },
          success: function(response) {
            swal({
              title: 'Apakah Anda yakin?',
              text: 'Ingin menghapus testimoni dari "' + response + '"',
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#DD6B55',
              confirmButtonText: 'Ya',
              cancelButtonText: 'Tidak',
              closeOnConfirm: false
            }, function() {
              window.location.href = '<?= base_url('admin/testimoni/hapustestimoni/') ?>' + id;
            });
          }
        });
      }

      function hapus_banner(id) {
        $.ajax({
          url: '<?= base_url('admin/banner/ajaxbanner') ?>',
          method: 'post',
          data: {
            id: id
          },
          success: function(response) {
            swal({
              title: 'Apakah Anda yakin?',
              text: 'Ingin menghapus banner "' + response + '"',
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#DD6B55',
              confirmButtonText: 'Ya',
              cancelButtonText: 'Tidak',
              closeOnConfirm: false
            }, function() {
              window.location.href = '<?= base_url('admin/banner/hapusbanner/') ?>' + id;
            });
          }
        });
      }
    </script>
    <script>
      $(function() {
        $('#harga').maskMoney({
          prefix: 'Rp ',
          thousands: '.',
          allowZero: true,
          precision: 0
        });
      })
    </script>
    </body>

    </html>