<div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-primary">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Stok Barang Masuk</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('barangmasuk.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="barang_id{{ $item->id }}">Nama Barang</label>
                        <select name="barang_id" id="barang_id{{ $item->id }}" class="form-control" required>
                            <option value="">-- Pilih Barang --</option>
                            @foreach ($barangs as $barang)
                                <option value="{{ $barang->id }}" {{ $barang->id == $item->barang_id ? 'selected' : '' }}>
                                    {{ $barang->namabarang }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah{{ $item->id }}">Jumlah Stok</label>
                        <input type="number" class="form-control" id="jumlah{{ $item->id }}" name="jumlah" value="{{ $item->jumlah }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_masuk{{ $item->id }}">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="tanggal_masuk{{ $item->id }}" name="tanggal_masuk" value="{{ $item->tanggal_masuk }}" required>
                    </div>
                    <div class="form-group">
                        <label for="penerima{{ $item->id }}">Penerima</label>
                        <input type="text" class="form-control" id="penerima{{ $item->id }}" name="penerima" value="{{ $item->penerima }}" required>
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