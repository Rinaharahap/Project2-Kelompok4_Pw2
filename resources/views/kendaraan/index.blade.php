@include('layouts.header')

<div class="wrapper">
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Dashboard Kendaraan</h3>
                </div>
                <div class="card-body">
                    <!-- Card untuk Data Kendaraan -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Kendaraan</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Merek</th>
                                            <th>Pemilik</th>
                                            <th>Jenis Kendaraan</th>
                                            <th>Rating</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data_kendaraan as $kendaraan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $kendaraan->id }}</td>
                                            <td>{{ $kendaraan->merek }}</td>
                                            <td>{{ $kendaraan->pemilik }}</td>
                                            <td>{{ $kendaraan->jenis->nama }}</td>
                                            <td>{{ $kendaraan->rating }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('kendaraan.show', $kendaraan->id) }}"
                                                        class="btn btn-success" style="margin-right: 5px;">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('kendaraan.edit', $kendaraan->id) }}"
                                                        class="btn btn-warning" style="margin-right: 5px;"
                                                        onclick="return confirm('Apakah Anda yakin ingin mengedit kendaraan ini?')">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('kendaraan.destroy', $kendaraan->id) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            style="margin-right: 5px;"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus kendaraan ini?')">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>

                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7">Tidak ada data kendaraan.</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- Tombol untuk tambah kendaraan -->
                    <div class="btn-group-vertical mt-3">
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                            data-target="#inputModal">Tambah</button>
                    </div>
                    <!-- End tombol tambah kendaraan -->

                    <!-- Modal untuk tambah kendaraan -->
                    <div class="modal fade" id="inputModal" tabindex="-1" role="dialog"
                        aria-labelledby="inputModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="inputModalLabel">Tambah Kendaraan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('kendaraan.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="merek" class="col-sm-4 col-form-label">Merk Kendaraan</label>
                                            <div class="col-sm-8">
                                                <input id="merek" name="merek" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pemilik" class="col-sm-4 col-form-label">Nama Pemilik</label>
                                            <div class="col-sm-8">
                                                <input id="pemilik" name="pemilik" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nopolisi" class="col-sm-4 col-form-label">Nomor TNKB</label>
                                            <div class="col-sm-8">
                                                <input id="nopolisi" name="nopolisi" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="thn_beli" class="col-sm-4 col-form-label">Tahun Beli</label>
                                            <div class="col-sm-8">
                                                <input id="thn_beli" name="thn_beli" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi
                                                Kendaraan</label>
                                            <div class="col-sm-8">
                                                <textarea id="deskripsi" name="deskripsi" cols="40" rows="5"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jenis_id" class="col-sm-4 col-form-label">Jenis
                                                Kendaraan</label>
                                            <div class="col-sm-8">
                                                <select id="jenis_id" name="jenis_id" class="form-control">
                                                    @foreach ($data_jenis as $jenis)
                                                    <option value="{{ $jenis->id }}">{{ $jenis->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kapasitas_kursi" class="col-sm-4 col-form-label">Kapasitas
                                                Kursi</label>
                                            <div class="col-sm-8">
                                                <input id="kapasitas_kursi" name="kapasitas_kursi" type="text"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="rating" class="col-sm-4 col-form-label">Rating</label>
                                            <div class="col-sm-8">
                                                <input id="rating" name="rating" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-4 col-sm-8">
                                                <button name="submit" type="submit"
                                                    class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End modal -->

                </div>
            </div>
        </section>

    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /.wrapper -->

@include('layouts.footer')