@extends('admin.components.main')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <!-- Input fields -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Pengaturan Header</h5>
                    </div>

                    <!-- create form -->
                    <form action="{{ route('admin-panel.cms.header.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <p class="fw-semibold">Logo Besar</p>
                                        <div class="parent-file">
                                            <input type="file" class="file-input file-upload" data-show-caption="true"
                                                data-show-upload="false" accept="image/*" data-show-remove="false"
                                                name="big_logo"
                                                data-default="{{ ImageService::getImageUrl(@$data['big_logo']) }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="fw-semibold">Logo Kecil</p>
                                        <div class="parent-file">
                                            <input type="file" class="file-input file-upload" data-show-caption="true"
                                                data-show-upload="false" accept="image/*" data-show-remove="false"
                                                name="small_logo"
                                                data-default="{{ ImageService::getImageUrl(@$data['small_logo']) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary btn-save">
                                    Simpan
                                    <i class="ph-check-square-offset ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /input fields -->
        </div>
    </div>
    <!-- /content area -->
@endsection
