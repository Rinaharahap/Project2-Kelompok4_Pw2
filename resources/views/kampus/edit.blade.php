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
                    <h3 class="card-title">Edit Data Kampus</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('kampus.update', ['id' => $kampus->id]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Kampus:</label>
                            <input type="text" id="nama" name="nama" class="form-control" value="{{$kampus->nama}}"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <input type="text" id="alamat" name="alamat" class="form-control"
                                value="{{$kampus->alamat}}" required>
                        </div>
                        <div class="form-group">
                            <label for="latitude">Latitude:</label>
                            <input type="text" id="latitude" name="latitude" class="form-control"
                                value="{{$kampus->latitude}}" required>
                        </div>
                        <div class="form-group">
                            <label for="longitude">Longitude:</label>
                            <input type="text" id="longitude" name="longitude" class="form-control"
                                value="{{$kampus->longitude}}" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /.wrapper -->
@include('layouts.footer')