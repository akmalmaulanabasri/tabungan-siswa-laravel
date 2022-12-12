@extends('dashboard.layout.master')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h2>Data Rayon</h2>
                                <button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-plus"></i> Tambah Rayon
                                </button>
                            </div>

                            <table class="table table-striped border mt-2">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Rayon</th>
                                    <th>Pembimbing Rayon</th>
                                </tr>
                                @foreach ($rayon as $r)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $r->nama_rayon }}</td>
                                        <td>{{ $r->pembimbing_rayon }}</td>
                                    </tr>
                                @endforeach
                            </table>
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
                    <h5 class="modal-title">Tambah Rayon</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('dashboard.rayon.store') }}" method="post" class="form-group">
                    @csrf
                    <div class="modal-body">
                        <label for="nama_rayon" class="form-label">Nama Rayon</label>
                        <input type="text" name="nama_rayon" id="nama_rayon" class="form-control">

                        <label for="pembimbing_rayon" class="form-label mt-2">Pembimbing Rayon</label>
                        <input type="text" name="pembimbing_rayon" id="pembimbing_rayon" class="form-control">
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-primary">Tambah Rayon Baru</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
