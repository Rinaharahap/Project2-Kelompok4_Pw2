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
                    <h3 class="card-title">Dashboard Area Parkir</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <!-- Main content section -->
                        <div class="content">
                            <section class="content">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">{{ $area_parkir->nama }}</h3>
                                    </div>
                                    <div class="card-body">
                                        <!-- Table section -->
                                        <div class="container">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Kode</th>
                                                    <td>{{ $area_parkir->id }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Nama</th>
                                                    <td>{{ $area_parkir->nama }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Kapasitas</th>
                                                    <td>{{ $area_parkir->kapasitas }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Keterangan</th>
                                                    <td>{{ $area_parkir->keterangan }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Kampus</th>
                                                    <td>{{ $area_parkir->kampus->nama }}</td>
                                                </tr>
                                            </table>
                                            <a href="{{ route('area_parkir.index') }}"
                                                class="btn btn-primary">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- End table section -->
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /.wrapper -->

@include('layouts.footer')