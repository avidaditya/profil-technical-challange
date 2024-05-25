@extends('admin.components.main')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="card">
                <div class="card-header d-flex align-items-center py-0">
                    <h5 class="mb-0 py-3">List Juri</h5>
                    <div class="my-auto ms-auto">
                    </div>
                    <div class="my-auto ms-auto">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_create">
                            <i class="ph-plus-circle me-1"></i>
                            Tambah Juri</button>
                    </div>
                </div>
                {{-- List --}}
                <div class="row p-3" style="row-gap: 1.5rem">
                    @foreach ($data as $item)
                        @if (@$item['id'])
                            <div class="col-sm-6 col-xl-3">
                                <div class="card" style="height: 100%">
                                    <div class="card-img-actions mx-1 mt-1">
                                        <img class="card-img img-fluid" src="{{ ImageService::getImageUrl(@$item['img']) }}"
                                            alt="">
                                        <div class="card-img-actions-overlay card-img">
                                            <a href="{{ ImageService::getImageUrl(@$item['img']) }}"
                                                class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox"
                                                data-gallery="gallery1">
                                                <i class="ph-magnifying-glass"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <h6 class="mb-1">Nama</h6>
                                        <p class="mb-3">{{ @$item['name'] }}</p>
                                        <h6 class="mb-1">Posisi</h6>
                                        <p class="mb-3">{{ @$item['position'] }}</p>
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
                                                <h5 class="modal-title">Ubah Juri</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <form
                                                action="{{ route('admin-panel.cms.homepage.jury.update', [$item['id']]) }}"
                                                method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="row mb-3 mt-2 pb-3 border-bottom">
                                                        <div class="col-lg-12 justify-content-center">
                                                            <p class="fw-semibold">Gambar</p>
                                                            <input type="file" class="file-input file-upload"
                                                                data-show-caption="true" data-show-upload="false"
                                                                accept="image/*" data-show-remove="false" name="img"
                                                                data-default="{{ ImageService::getImageUrl(@$item['img']) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-form-label col-lg-3">Nama</label>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" name="name"
                                                                value="{{ @$item['name'] }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-form-label col-lg-3">Posisi</label>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" name="position"
                                                                value="{{ @$item['position'] }}">
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
                                    <form action="{{ route('admin-panel.cms.homepage.jury.destroy', [$item['id']]) }}"
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
                                                        data-bs-dismiss="modal">Tutup</button>
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
                    <h5 class="modal-title">Tambah Juri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('admin-panel.cms.homepage.jury.store') }}" method="POST" class="form-horizontal"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="POST">
                    <div class="modal-body">
                        <div class="row mb-3 mt-2 pb-3 border-bottom">
                            <div class="col-lg-12 justify-content-center">
                                <p class="fw-semibold">Gambar</p>
                                <input type="file" class="file-input file-upload" data-show-caption="true"
                                    data-show-upload="false" accept="image/*" data-show-remove="false" name="img" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Nama</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Posisi</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="position">
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
