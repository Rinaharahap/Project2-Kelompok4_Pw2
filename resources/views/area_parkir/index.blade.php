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
                    <!-- Data Area Parkir section -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Area Parkir</h3>
                        </div>
                        <div class="card-body">
                            <!-- Table section -->
                            <div class="table-responsive">
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Kapasitas</th>
                                            <th>Kampus</th>
                                            @if(Auth::user()->role == 'administrator')
                                            <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_area_parkir as $area_parkir)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $area_parkir->id }}</td>
                                            <td>{{ $area_parkir->nama }}</td>
                                            <td>{{ $area_parkir->kapasitas }}</td>
                                            <td>{{ $area_parkir->kampus->nama }}</td>
                                            <td>
                                                @if(Auth::user()->role == 'administrator')
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('area_parkir.show', $area_parkir->id) }}">
                                                        <button class="btn btn-success" style="margin-right: 5px;">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                    </a>
                                                    <a href="{{ route('area_parkir.edit', $area_parkir->id) }}">
                                                        <button class="btn btn-warning" style="margin-right: 5px;">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </a>
                                                    <form action="{{ route('area_parkir.destroy', $area_parkir->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus Area Parkir ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            style="margin-right: 5px;">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                                @endif
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
                    <!-- Button to open modal -->
                    <div class="btn-group-vertical">

                        <button type="button" class="btn btn-primary btn-block"
                            onclick="openModalWithConfirmation()">Tambah</button>

                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="inputModal" tabindex="-1" role="dialog"
                        aria-labelledby="inputModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="inputModalLabel">Tambah Area Parkir</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('area_parkir.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="nama" name="nama" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kapasitas" class="col-sm-2 col-form-label">Kapasitas</label>
                                            <div class="col-sm-10">
                                                <input type="number" id="kapasitas" name="kapasitas"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                            <div class="col-sm-10">
                                                <textarea id="keterangan" name="keterangan" class="form-control"
                                                    rows="3" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kampus_id" class="col-sm-2 col-form-label">Kampus</label>
                                            <div class="col-sm-10">
                                                <select id="kampus_id" name="kampus_id" class="form-control" required>
                                                    @foreach ($data_kampus as $kampus)
                                                    <option value="{{ $kampus->id }}">{{ $kampus->nama }}</option>
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
                        </div>
                    </div>
                    <script>
                        function openModalWithConfirmation() {
                            if (confirm('Apakah Anda yakin ingin menambahkan Area Parkir ini?')) {
                                $('#inputModal').modal('show');
                            }
                        }
                    </script>
                    <!-- End modal -->
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /.wrapper -->

@include('layouts.footer')