<div class="modal fade" tabindex="-1" role="dialog" id="transaksi{{ $u->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Transaksi Siswa</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-simpan-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-simpan" type="button" role="tab" aria-controls="pills-simpan"
                            aria-selected="true">Simpan</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-ambil-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-ambil" type="button" role="tab" aria-controls="pills-ambil"
                            aria-selected="false">Ambil</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-simpan" role="tabpanel" aria-labelledby="pills-simpan-tab">
                        <form action="{{ route('dashboard.student.simpan', $u->nis) }}" method="post" class="form-group">
                            @csrf
                            <label for="jumlah" class="form-label">Nominal</label>
                            <input type="number" name="nominal" id="nominal" class="form-control">

                            <input type="submit" value="Simpan Uang" class="btn btn-info mt-3 text-dark">
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-ambil" role="tabpanel" aria-labelledby="pills-ambil-tab">
                        <form action="{{ route('dashboard.student.ambil', $u->nis) }}" method="post" class="form-group">
                            @csrf
                            <label for="jumlah" class="form-label">Nominal</label>
                            <input type="number" name="nominal" id="nominal" class="form-control">

                            <input type="submit" value="Ambil Uang" class="btn btn-info mt-3 text-dark">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
