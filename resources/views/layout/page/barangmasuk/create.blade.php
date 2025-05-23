<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-success">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="createModalLabel">Tambah Barang Baru</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('barangmasuk.store') }}" method="POST">
                @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="barang_id">Nama Barang</label>
                            <select name="barang_id" class="form-control" required>
                                <option value="">-- Pilih Barang --</option>
                                @foreach ($barangs as $barang)
                                    <option value="{{ $barang->id }}">{{ $barang->namabarang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah Stok</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_masuk">Tanggal Masuk</label>
                            <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" required>
                        </div>
                        <div class="form-group">
                            <label for="penerima">Penerima</label>
                            <input type="text" class="form-control" id="penerima" name="penerima" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
            </form>
        </div>
    </div>
</div>