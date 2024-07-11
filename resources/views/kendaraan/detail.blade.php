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
            <h3 class="card-title">Detail Kendaraan</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- Main content section -->
                <div class="content">
                    <section class="content">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{ $kendaraan->merek }}</h3>
                            </div>
                            <div class="card-body">
                                <!-- Table section -->
                                <div class="container">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <th>No</th>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <th>ID</th>
                                                <td>{{ $kendaraan->id }}</td>
                                            </tr>
                                            <tr>
                                                <th>Merek</th>
                                                <td>{{ $kendaraan->merek }}</td>
                                            </tr>
                                            <tr>
                                                <th>Pemilik</th>
                                                <td>{{ $kendaraan->pemilik }}</td>
                                            </tr>
                                            <tr>
                                                <th>TNKB</th>
                                                <td>{{ $kendaraan->nopolisi }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tahun Beli</th>
                                                <td>{{ $kendaraan->thn_beli }}</td>
                                            </tr>
                                            <tr>
                                                <th>Deskripsi</th>
                                                <td>{{ $kendaraan->deskripsi }}</td>
                                            </tr>
                                            <tr>
                                                <th>Pemilik</th>
                                                <td>{{ $kendaraan->pemilik }}</td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Kendaraan</th>
                                                <td>{{ $kendaraan->jenis->nama }}</td>
                                            </tr>
                                            <tr>
                                                <th>Rating</th>
                                                <td>{{ $kendaraan->rating }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="{{ route('kendaraan.index') }}" class="btn btn-primary">Kembali</a>
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















