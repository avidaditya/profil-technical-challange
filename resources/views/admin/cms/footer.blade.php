@extends('admin.components.main')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <!-- Input fields -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Pengaturan Footer</h5>
                    </div>

                    <!-- create form -->
                    <form action="{{ route('admin-panel.cms.footer.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="row mb-3 pb-4 border-bottom">
                                    <div class="col-lg-6">
                                        <p class="fw-semibold">Logo Besar</p>
                                        <div class="parent-file">
                                            <input type="file" class="file-input file-upload" data-show-caption="true"
                                                data-show-upload="false" accept="image/*" data-show-remove="false"
                                                name="logo_1"
                                                data-default="{{ ImageService::getImageUrl(@$data['logo_1']) }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="fw-semibold">Logo Kecil</p>
                                        <div class="parent-file">
                                            <input type="file" class="file-input file-upload" data-show-caption="true"
                                                data-show-upload="false" accept="image/*" data-show-remove="false"
                                                name="logo_2"
                                                data-default="{{ ImageService::getImageUrl(@$data['logo_2']) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-form-label col-lg-3">Teks Copyright</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="copyright"
                                            value="{{ @$data['copyright'] }}">
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
