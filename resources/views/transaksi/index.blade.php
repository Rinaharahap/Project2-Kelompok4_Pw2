@include('layouts.header')

<div class="wrapper">
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- Card 1: Dashboard Transakis -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Dashboard Transaksi</h3>
                </div>
                <div class="card-body">
                    <!-- Card 2: Data Transaksi -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Transaksi</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Tanggal</th>
                                            <th>Biaya</th>
                                            <th>Kendaraan</th>
                                            <th>Area Parkir</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Loop through data_transaksi -->
                                        @foreach ($data_transaksi as $transaksi)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $transaksi->id }}</td>
                                            <td>{{ $transaksi->tanggal }}</td>
                                            <td>{{ $transaksi->biaya }}</td>
                                            <td>{{ optional($transaksi->kendaraan)->merek }}</td>
                                            <td>{{ optional($transaksi->areaParkir)->nama }}</td>
                                            <td>
                                                <!-- Detail, Edit, Delete buttons -->
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('transaksi.show', $transaksi->id) }}"
                                                        class="btn btn-success btn-sm" style="margin-right: 5px;">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('transaksi.edit', $transaksi->id) }}"
                                                        class="btn btn-warning btn-sm" style="margin-right: 5px;"
                                                        onclick="return confirm('Apakah Anda yakin ingin mengedit Transaksi ini?')">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('transaksi.destroy', $transaksi->id) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            style="margin-right: 5px;"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus Transaksi ini?')">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Button for Adding New Transaction -->
                    <div class="btn-group-vertical mt-3 ml-3">
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                            data-target="#inputModal">Tambah</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal for Adding New Transaction -->
        <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="inputModalLabel">Tambah Transaksi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('transaksi.store') }}" method="POST">
                            @csrf
                            <!-- Form fields for adding new transaction -->
                            <div class="form-group row">
                                <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                                <div class="col-8">
                                    <input id="tanggal" name="tanggal" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mulai" class="col-4 col-form-label">Mulai</label>
                                <div class="col-8">
                                    <input id="mulai" name="mulai" type="time" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="berakhir" class="col-4 col-form-label">Berakhir</label>
                                <div class="col-8">
                                    <input id="berakhir" name="berakhir" type="time" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="keterangan" class="col-4 col-form-label">Keterangan</label>
                                <div class="col-8">
                                    <textarea id="keterangan" name="keterangan" cols="40" rows="5"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="biaya" class="col-4 col-form-label">Biaya</label>
                                <div class="col-8">
                                    <input id="biaya" name="biaya" type="number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kendaraan_id" class="col-sm-4 col-form-label">Kendaraan</label>
                                <div class="col-sm-8">
                                    <select id="kendaraan_id" name="kendaraan_id" class="form-control">
                                        <!-- Options for selecting vehicle -->
                                        @foreach ($data_kendaraan as $kendaraan)
                                        <option value="{{ $kendaraan->id }}">{{ $kendaraan->merek }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="area_parkir_id" class="col-sm-4 col-form-label">Area Parkir</label>
                                <div class="col-sm-8">
                                    <select id="area_parkir_id" name="area_parkir_id" class="form-control">
                                        <!-- Options for selecting parking area -->
                                        @foreach ($data_area_parkir as $area_parkir)
                                        <option value="{{ $area_parkir->id }}">{{ $area_parkir->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /.wrapper -->

@include('layouts.footer')