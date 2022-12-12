@extends('dashboard.layout.master')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h2>Data Siswa</h2>
                                <button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-plus"></i> Tambah Siswa
                                </button>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped border mt-2">
                                    <tr>
                                        <th>No</th>
                                        <th>Nis</th>
                                        <th>Nama</th>
                                        <th>Saldo</th>
                                        <th>Rombel</th>
                                        <th>Rayon</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($users as $u)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $u->nis }}</td>
                                            <td>{{ $u->name }}</td>
                                            <td>Rp{{ number_format($u->saldo_tabungan, 0, ',', '.') }}</td>
                                            <td>{{ $u->rombel->nama_rombel }}</td>
                                            <td>{{ $u->rayon->nama_rayon }}</td>
                                            <td>
                                                <button class="btn btn-info" data-toggle="modal"
                                                    data-target="#detailSiswa{{ $u->id }}">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                                <button class="btn btn-warning" data-toggle="modal"
                                                    data-target="#transaksi{{ $u->id }}">
                                                    <i class="fa-solid fa-hand-holding-dollar"></i> Keuangan
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('dashboard.student.store') }}" method="post" class="form-group">
                    @csrf
                    <div class="modal-body">
                        <label for="nis" class="form-label">Nis</label>
                        <input placeholder="12108292" type="number" name="nis" id="nis" class="form-control"
                            value="{{ old('nis') }}">

                        @error('nis')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <label for="name" class="form-label mt-2">Nama</label>
                        <input placeholder="Akmal Maulana Basri" type="text" name="name" id="name"
                            class="form-control" value="{{ old('name') }}">

                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <label for="rombel" class="form-label mt-2">Rombel</label>
                        <select name="rombel_id" id="rombel" class="form-control">
                            <option value="">Pilih Rombel</option>
                            @foreach ($rombel as $r)
                                <option value="{{ $r->id }}">{{ $r->nama_rombel }}</option>
                            @endforeach
                        </select>

                        @error('rombel')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <label for="rayon" class="form-label mt-2">Rayon</label>
                        <select name="rayon_id" id="rayon" class="form-control">
                            <option value="">Pilih Rayon</option>
                            @foreach ($rayon as $r)
                                <option value="{{ $r->id }}">{{ $r->nama_rayon }}</option>
                            @endforeach
                        </select>

                        @error('rayon')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-primary">Tambah Pengguna Baru</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($users as $u)
        <div class="modal fade" tabindex="-1" role="dialog" id="detailSiswa{{ $u->id }}">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Siswa</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab"
                                    aria-controls="pills-home" aria-selected="true">Detail</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Edit</button>
                            </li>
                            {{-- <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Contact</button>
                                </li> --}}
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">@include('dashboard.components.modal-detail')</div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">@include('dashboard.components.modal-edit')</div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">.d..</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($users as $u)
        @include('dashboard.components.modal-transaksi')
    @endforeach
@endsection
