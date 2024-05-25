@extends('admin.components.main')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Basic initialization -->
        <div class="card col-xl-10 col-md-12">
            <div class="card-header d-flex align-items-center py-0">
                <h5 class="mb-0 py-3">List Pekerjaan</h5>
                <div class="my-auto ms-auto">
                </div>
                <div class="my-auto ms-auto">
                    <a href="#" class="btn btn-primary btn-create" data-bs-toggle="modal"
                        data-bs-target="#modal_create"><i class="ph-plus-circle me-1"></i> Tambah Item</a>
                </div>
            </div>
            <table class="table datatable-responsive">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Sektor</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data ?? [] as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $item['sektor'] }}</td>
                            <td class="text-center">
                                <div class="d-inline-flex">
                                    <a href="#" class="text-body" data-bs-toggle="modal"
                                        data-bs-target="#modal_edit-{{ $loop->index }}">
                                        <i class="ph-pen"></i>
                                    </a>
                                    <a href="#" class="text-body mx-2 btn-delete" data-bs-toggle="modal"
                                        data-bs-target="#modal_delete-{{ $loop->index }}">
                                        <i class="ph-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        {{-- Edit Modal --}}
                        <div id="modal_edit-{{ $loop->index }}" class="modal fade" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ubah Sektor</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <form action="{{ route('admin-panel.master-data.master_sektors.update', [$item['id']]) }}"
                                        method="POST" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="row mb-3">
                                                <label class="col-form-label col-lg-3">Nama</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ $item['sektor'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link"
                                                data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Simpan <i
                                                    class="ph-check-square-offset ms-2"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- Delete Modal --}}
                        <div id="modal_delete-{{ $loop->index }}" class="modal fade" tabindex="-1">
                            <form action="{{ route('admin-panel.master-data.master_sektors.destroy', [$item['id']]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Hapus Sektor</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <h6 class="fw-semibold">Hapus Permanen</h6>
                                            <p>Sektor yang telah dihapus secara permanen tidak dapat dikembalikan dan
                                                hilang secara permanen</p>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                                            <button type="button" class="btn btn-link"
                                                data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- /delete -->
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /basic initialization -->

    </div>
    <!-- /content area -->

    {{-- Create Modal --}}
    <div id="modal_create" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Sektor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('admin-panel.master-data.master_sektors.store') }}" method="POST" class="form-horizontal"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Sektor</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan <i
                                class="ph-check-square-offset ms-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('admin/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/pages/datatables_basic.js') }}"></script>
@endsection
