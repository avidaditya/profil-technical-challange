@extends('admin.components.main')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="card">
                <div class="card-header d-flex align-items-center py-0">
                    <h5 class="mb-0 py-3">List Timeline</h5>
                    <div class="my-auto ms-auto">
                    </div>
                    <div class="my-auto ms-auto">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_create">
                            <i class="ph-plus-circle me-1"></i>
                            Tambah Timeline</button>
                    </div>
                </div>
                {{-- List --}}
                <div class="row p-3" style="row-gap: 1.5rem">
                    @foreach ($data as $item)
                        @if (@$item['id'])
                            <div class="col-sm-6 col-xl-3">
                                <div class="card" style="height: 100%">
                                    <div class="card-body">
                                        <h6 class="mb-1">Tanggal</h6>
                                        <p class="mb-3">
                                            {{ @$item['date'] }}</p>
                                        <h6 class="mb-1">Judul</h6>
                                        <p class="mb-3">{{ @$item['title'] }}</p>
                                        <h6 class="mb-1">Deskripsi</h6>
                                        <p class="mb-3">{{ @$item['description'] }}</p>
                                    </div>

                                    <div class="card-footer d-flex justify-content-between">
                                        <span class="text-muted"></span>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modal_edit-{{ $loop->index }}">Ubah</a></li>
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modal_delete-{{ $loop->index }}">Hapus</a></li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- Edit Modal --}}
                                <div id="modal_edit-{{ $loop->index }}" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ubah Timeline</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <form
                                                action="{{ route('admin-panel.cms.homepage.timeline.update', [$item['id']]) }}"
                                                method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="row mb-3">
                                                        <label class="col-form-label col-lg-3">Tanggal</label>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" name="date"
                                                                value="{{ @$item['date'] }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-form-label col-lg-3">Judul</label>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" name="title"
                                                                value="{{ @$item['title'] }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-form-label col-lg-3">Deskripsi</label>
                                                        <div class="col-lg-9">
                                                            <textarea class="form-control" name="description" cols="10" rows="5">{{ @$item['description'] }}</textarea>
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
                                    <form action="{{ route('admin-panel.cms.homepage.timeline.destroy', [$item['id']]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Hapus Item</h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">
                                                    <h6 class="fw-semibold">Hapus Permanen</h6>
                                                    <p>Item yang telah dihapus secara permanen tidak dapat dikembalikan dan
                                                        hilang secara permanen</p>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                                                    <button type="button" class="btn btn-link"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /delete -->
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->
    {{-- Create Modal --}}
    <div id="modal_create" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Timeline</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('admin-panel.cms.homepage.timeline.store') }}" method="POST"
                    class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="POST">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Tanggal</label>
                            <div class="col-lg-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="date">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Judul</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Deskripsi</label>
                            <div class="col-lg-9">
                                <textarea class="form-control" name="description" cols="10" rows="5"></textarea>
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
