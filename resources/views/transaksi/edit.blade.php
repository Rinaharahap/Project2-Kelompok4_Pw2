@include('layouts.header')

<div class="wrapper">
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Transaksi</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Form fields for editing transaction -->
                        <div class="form-group row">
                            <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                            <div class="col-8">
                                <input id="tanggal" name="tanggal" type="date" class="form-control"
                                    value="{{ $transaksi->tanggal }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mulai" class="col-4 col-form-label">Mulai</label>
                            <div class="col-8">
                                <input id="mulai" name="mulai" type="time" class="form-control"
                                    value="{{ $transaksi->mulai }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="berakhir" class="col-4 col-form-label">Berakhir</label>
                            <div class="col-8">
                                <input id="berakhir" name="berakhir" type="time" class="form-control"
                                    value="{{ $transaksi->berakhir }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-4 col-form-label">Keterangan</label>
                            <div class="col-8">
                                <input id="keterangan" name="keterangan" type="text" class="form-control"
                                    value="{{ $transaksi->keterangan }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="biaya" class="col-4 col-form-label">Biaya</label>
                            <div class="col-8">
                                <input id="biaya" name="biaya" type="number" class="form-control"
                                    value="{{ $transaksi->biaya }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kendaraan_id" class="col-sm-4 col-form-label">Kendaraan</label>
                            <div class="col-sm-8">
                                <select id="kendaraan_id" name="kendaraan_id" class="form-control">
                                    @foreach ($data_kendaraan as $kendaraan)
                                    <option value="{{ $kendaraan->id }}" {{ $transaksi->kendaraan_id == $kendaraan->id ?
                                        'selected' : '' }}>{{ $kendaraan->merek }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="area_parkir_id" class="col-sm-4 col-form-label">Area Parkir</label>
                            <div class="col-sm-8">
                                <select id="area_parkir_id" name="area_parkir_id" class="form-control">
                                    @foreach ($data_area_parkir as $area_parkir)
                                    <option value="{{ $area_parkir->id }}" {{ $transaksi->area_parkir_id ==
                                        $area_parkir->id ? 'selected' : '' }}>{{ $area_parkir->nama }}</option>
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
        </section>

    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /.wrapper -->

@include('layouts.footer')