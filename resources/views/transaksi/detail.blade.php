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
                    <h3 class="card-title">Detail Transaksi</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <!-- Main content section -->
                        <div class="content">
                            <section class="content">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">{{ $transaksi->tanggal }}</h3>
                                    </div>
                                    <div class="card-body">
                                        <!-- Table section -->
                                        <div class="container">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tr style="background-color: #f2f2f2;">
                                                        <th>ID</th>
                                                        <td>{{ $transaksi->id }}</td>
                                                    </tr>
                                                    <tr style="background-color: #ffffff;">
                                                        <th>Tanggal</th>
                                                        <td>{{ $transaksi->tanggal }}</td>
                                                    </tr>
                                                    <tr style="background-color: #f2f2f2;">
                                                        <th>Mulai</th>
                                                        <td>{{ $transaksi->mulai }}</td>
                                                    </tr>
                                                    <tr style="background-color: #ffffff;">
                                                        <th>Berakhir</th>
                                                        <td>{{ $transaksi->berakhir }}</td>
                                                    </tr>
                                                    <tr style="background-color: #f2f2f2;">
                                                        <th>Keterangan</th>
                                                        <td>{{ $transaksi->keterangan }}</td>
                                                    </tr>
                                                    <tr style="background-color: #ffffff;">
                                                        <th>Biaya</th>
                                                        <td>{{ $transaksi->biaya }}</td>
                                                    </tr>
                                                    <tr style="background-color:#f2f2f2;">
                                                        <th>Kendaraan</th>
                                                        <td>{{ $transaksi->kendaraan->merek }}</td>
                                                    </tr>
                                                    <tr style="background-color: #ffffff;">
                                                        <th>Area Parkir</th>
                                                        <td>{{ $transaksi->areaParkir->nama }}</td>
                                                    </tr>
                                                </table>
                                                <a href="{{ route('transaksi.index') }}"
                                                    class="btn btn-primary">Kembali</a>
                                            </div>
                                        </div>
                                        <!-- End table section -->
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- End main content section -->
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /.wrapper -->

@include('layouts.footer')