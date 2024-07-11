@include('layouts.header')

<!-- Main content -->
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
                    <h3 class="card-title">Detail Jenis</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <!-- Main content section -->
                        <div class="content">
                            <section class="content">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">{{ $jenis->nama }}</h3>
                                    </div>
                                    <div class="card-body">
                                        <!-- Table section -->
                                        <div class="container">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>ID</th>
                                                    <td>{{ $jenis->id }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Nama</th>
                                                    <td>{{ $jenis->nama }}</td>
                                                </tr>
                                            </table>
                                            <a href="{{ route('jenis.index') }}" class="btn btn-primary">Kembali</a>
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

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /.wrapper -->

@include('layouts.footer')