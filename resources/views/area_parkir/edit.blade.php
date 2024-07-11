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
                    <h3 class="card-title">Edit Data Area Parkir</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('area_parkir.update', ['id' => $area_parkir->id]) }}" method="POST">

                        @csrf
                        @method('PUT') <!-- Use method spoofing for PUT request -->
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" id="nama" name="nama" class="form-control"
                                    value="{{ old('nama', $area_parkir->nama) }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kapasitas" class="col-sm-2 col-form-label">Kapasitas</label>
                            <div class="col-sm-10">
                                <input type="number" id="kapasitas" name="kapasitas" class="form-control"
                                    value="{{ old('kapasitas', $area_parkir->kapasitas) }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <textarea id="keterangan" name="keterangan" class="form-control" rows="3"
                                    required>{{ old('keterangan', $area_parkir->keterangan) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kampus_id" class="col-sm-2 col-form-label">Kampus</label>
                            <div class="col-sm-10">
                                <select id="kampus_id" name="kampus_id" class="form-control" required>
                                    @foreach ($data_kampus as $kampus)
                                    <option value="{{ $kampus->id }}" {{ $kampus->id == $area_parkir->kampus_id ?
                                        'selected' : '' }}>
                                        {{ $kampus->nama }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
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