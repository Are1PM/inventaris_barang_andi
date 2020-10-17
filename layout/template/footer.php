<footer>
  <div class="pull-right">
    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
  </div>
  <div class="clearfix"></div>
</footer>


<div class="modal fade modal-hapus" tabindex="-1" role="dialog" aria-hidden="true">
  <form action="index.php?page=hapus-<?= $GLOBALS['currentRoute'] ?>" method="POST">
    <input type="hidden" name="id" id="field-hapus">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel2">Anda yakin?</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary" name="kirim">Ya</button>
        </div>

      </div>
    </div>
  </form>
</div>