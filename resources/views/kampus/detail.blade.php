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
                    <h3 class="card-title">Detail Kampus</h3>
                </div>
                <div class="card-header">
                    <h3 class="card-title">{{$kampus->nama}}</h3>
                </div>
                <div class="card-body">
                    <!-- Data Kampus section -->
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr style="background-color: #f2f2f2;">
                                <th>ID</th>
                                <td>{{ $kampus->id }}</td>
                            </tr>
                            <tr style="background-color: #ffffff;">
                                <th>Nama</th>
                                <td>{{ $kampus->nama }}</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <th>Alamat</th>
                                <td>{{ $kampus->alamat }}</td>
                            </tr>
                            <tr style="background-color: #ffffff;">
                                <th>Latitude</th>
                                <td>{{ $kampus->latitude }}</td>
                            </tr>
                            <tr style="background-color: #f2f2f2;">
                                <th>Longitude</th>
                                <td>{{ $kampus->longitude }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('kampus.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /.wrapper -->

@include('layouts.footer')
