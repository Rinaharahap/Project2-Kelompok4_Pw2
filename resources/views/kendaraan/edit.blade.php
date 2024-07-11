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
                    <h3 class="card-title">Edit Data Kendaraan</h3>
                </div>
                <br>
                <br>
                <div class="container">
                    <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="merek" class="col-sm-4 col-form-label">Merk Kendaraan</label>
                            <div class="col-sm-8">
                                <input id="merek" name="merek" type="text" class="form-control"
                                    value="{{ $kendaraan->merek }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pemilik" class="col-sm-4 col-form-label">Nama Pemilik</label>
                            <div class="col-sm-8">
                                <input id="pemilik" name="pemilik" type="text" class="form-control"
                                    value="{{ $kendaraan->pemilik }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nopolisi" class="col-sm-4 col-form-label">Nomor TNKB</label>
                            <div class="col-sm-8">
                                <input id="nopolisi" name="nopolisi" type="text" class="form-control"
                                    value="{{ $kendaraan->nopolisi }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="thn_beli" class="col-sm-4 col-form-label">Tahun Beli</label>
                            <div class="col-sm-8">
                                <input id="thn_beli" name="thn_beli" type="date" class="form-control"
                                    value="{{ $kendaraan->thn_beli }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi Kendaraan</label>
                            <div class="col-sm-8">
                                <textarea id="deskripsi" name="deskripsi" cols="40" rows="5"
                                    class="form-control">{{ $kendaraan->deskripsi }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis_id" class="col-sm-4 col-form-label">Jenis Kendaraan</label>
                            <div class="col-sm-8">
                                <select id="jenis_id" name="jenis_id" class="form-control">
                                    @foreach ($data_jenis as $jenis)
                                    <option value="{{ $jenis->id }}" {{ $jenis->id == $kendaraan->jenis_id ? 'selected'
                                        : '' }}>{{ $jenis->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kapasitas_kursi" class="col-sm-4 col-form-label">Kapasitas Kursi</label>
                            <div class="col-sm-8">
                                <input id="kapasitas_kursi" name="kapasitas_kursi" type="text" class="form-control"
                                    value="{{ $kendaraan->kapasitas_kursi }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rating" class="col-sm-4 col-form-label">Rating</label>
                            <div class="col-sm-8">
                                <input id="rating" name="rating" type="text" class="form-control"
                                    value="{{ $kendaraan->rating }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-4 col-sm-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
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