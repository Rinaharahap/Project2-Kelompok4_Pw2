@include('layouts.header')

<div class="wrapper">
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- Card 1: Dashboard jenis -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Dashboard Jenis</h3>
                </div>
                <div class="card-body">
                    <!-- Card 2: Data jenis -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Jenis</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_jenis as $jenis)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $jenis->id }}</td>
                                            <td>{{ $jenis->nama }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('jenis.show', $jenis->id) }}">
                                                        <button class="btn btn-success" style="margin-right: 5px;">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                    </a>
                                                    <a href="{{ route('jenis.edit', $jenis->id) }}"
                                                        onclick="return confirm('Apakah Anda yakin ingin mengedit jenis ini?')">
                                                        <button class="btn btn-warning" style="margin-right: 5px;">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </a>
                                                    <form action="{{ route('jenis.destroy', $jenis->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus jenis ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            style="margin-right: 5px;">
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
                        </div>
                    </div>

                    <!-- Button for Adding New Transaction -->
                    <div class="btn-group-vertical mt-3 ml-3">
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                            data-target="#inputModal">Tambah</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="inputModalLabel">Tambah Jenis</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('jenis.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Jenis:</label>
                                <input type="text" id="nama" name="nama" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /.wrapper -->

@include('layouts.footer')