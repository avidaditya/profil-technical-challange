<!-- modal delete -->
<div id="modal_delete" class="modal fade" tabindex="-1">
    <!-- delete form -->
    <form action="#" method="POST">
        @csrf
        @method('DELETE')
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <h6 class="fw-semibold">Hapus Permanen</h6>
                    <p>Item yang telah dihapus secara permanen tidak dapat dikembalikan dan hilang secara permanen</p>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </form>
    <!-- delete form -->
</div>
<!-- /modal edit link -->
