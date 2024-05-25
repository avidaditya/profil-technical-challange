@extends('admin.components.main')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="card">
                <div class="card-header d-flex align-items-center py-0">
                    <h5 class="mb-0 py-3">List Lokasi</h5>
                    <div class="my-auto ms-auto">
                    </div>
                    <div class="my-auto ms-auto">
                        <a href="{{ route('admin-panel.location.create') }}" class="btn btn-primary">
                            <i class="ph-plus-circle me-1"></i>
                            Tambah Lokasi</a>
                    </div>
                </div>
                {{-- List --}}
                <div class="row p-3" style="row-gap: 1.5rem">
                    @foreach ($data as $item)
                        @if (@$item['id'])
                            <div class="col-sm-6 col-xl-3">
                                <div class="card" style="height: 100%">
                                    <div class="card-img-actions mx-1 mt-1">
                                        <img class="card-img img-fluid" style="height:250px;"
                                            src="{{ ImageService::getImageUrl(@$item['cover_img']) }}" alt="">
                                        <div class="card-img-actions-overlay card-img">
                                            <a href="{{ ImageService::getImageUrl(@$item['cover_img']) }}"
                                                class="btn btn-outline-white btn-icon rounded-pill" data-bs-popup="lightbox"
                                                data-gallery="gallery1">
                                                <i class="ph-magnifying-glass"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <h6 class="mb-1">Nama</h6>
                                        <p class="mb-3">{{ @$item['name'] }}</p>
                                        <h6 class="mb-1">Deskripsi</h6>
                                        <p class="mb-3">{{ @$item['description'] }}</p>
                                        <h6 class="mb-1">Status</h6>
                                        <p class="mb-3 fw-bold {{ $item['status'] === LocationStatusEnum::Active ? 'text-success' : 'text-danger' }}"
                                            style="cursor: pointer;" data-bs-toggle="modal"
                                            data-bs-target="#modal_change_status-{{ $loop->index }}">
                                            {{ @$item['statusLabel'] }}</p>
                                    </div>

                                    <div class="card-footer d-flex justify-content-between">
                                        <span class="text-muted"></span>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><a
                                                    href="{{ route('admin-panel.location.edit', [$item['id']]) }}">Ubah</a>
                                            </li>
                                            <li class="list-inline-item"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modal_delete-{{ $loop->index }}">Hapus</a></li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- Change Status Modal --}}
                                <div id="modal_change_status-{{ $loop->index }}" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ubah Status {{ $item['name'] }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <form action="{{ route('admin-panel.location.change-status', [$item['id']]) }}"
                                                method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row mb-3">
                                                        <div class="col-lg-12">
                                                            <select class="form-select" name="status">
                                                                <option value="{{ LocationStatusEnum::Active }}"
                                                                    {{ $item['status'] === LocationStatusEnum::Active ? 'selected' : '' }}>
                                                                    Aktif
                                                                </option>
                                                                <option value="{{ LocationStatusEnum::Inactive }}"
                                                                    {{ $item['status'] === LocationStatusEnum::Inactive ? 'selected' : '' }}>
                                                                    Tidak
                                                                    Aktif</option>
                                                            </select>
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
                                    <form action="{{ route('admin-panel.location.destroy', [$item['id']]) }}"
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
@endsection
