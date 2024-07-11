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
                    <h3 class="card-title">Dashboard Kampus</h3>
                </div>
                <div class="card-body">
                    <!-- Data Kampus section -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Kampus</h3>
                        </div>
                        <div class="card-body">
                            <!-- Table section -->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                        @foreach ($data_kampus as $kampus)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $kampus->id }}</td>
                                            <td>{{ $kampus->nama }}</td>
                                            <td>{{ $kampus->alamat }}</td>
                                            <td>
    <div class="btn-group" role="group">
        <a href="{{ route('kampus.show', $kampus->id) }}" class="btn btn-success" style="margin-right: 5px;">
            <i class="fas fa-eye"></i> 
        </a>
        <a href="{{ route('kampus.edit', $kampus->id) }}" class="btn btn-warning" style="margin-right: 5px;"
            onclick="return confirm('Apakah Anda yakin ingin mengedit kampus ini?')">
            <i class="fas fa-edit"></i> 
        </a>
        <form action="{{ route('kampus.destroy', $kampus->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" style="margin-right: 5px;"
                onclick="return confirm('Apakah Anda yakin ingin menghapus kampus ini?')">
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
                            <!-- End Table section -->
                        </div>
                    </div>
                    <br>
                    <!-- Modal -->
                    <div class="btn-group-vertical">
                        <button type="button" class="btn btn-primary btn-block"
                            onclick="openModalWithConfirmation()">Tambah</button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="inputModal" tabindex="-1" role="dialog"
                        aria-labelledby="inputModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="inputModalLabel">Tambah Data Kampus</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('kampus.store') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="nama">Nama Kampus:</label>
                                            <input type="text" id="nama" name="nama" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat:</label>
                                            <input type="text" id="alamat" name="alamat" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="latitude">Latitude:</label>
                                            <input type="text" id="latitude" name="latitude" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="longitude">Longitude:</label>
                                            <input type="text" id="longitude" name="longitude" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="submit" class="btn btn-primary float-left">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <script>
                        function openModalWithConfirmation() {
                            if (confirm('Apakah Anda yakin ingin menambahkan Kampus ini?')) {
                                $('#inputModal').modal('show');
                            }
                        }
                    </script>
                    <!-- End modal -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /.wrapper -->


@include('layouts.footer')