@extends('admin.components.main')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <!-- Input fields -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Pengaturan Home Content</h5>
                    </div>

                    <!-- create form -->
                    <form action="{{ route('admin-panel.cms.homepage.content.save') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="accordion" id="accordion_expanded">
                                    {{-- Section 1 - Banner --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#expanded_item1">
                                                Section 1 - Banner
                                            </button>
                                        </h2>
                                        <div id="expanded_item1" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">
                                                <!-- Default input -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row mb-3">
                                                            <p class="fw-semibold">Gambar Banner</p>
                                                            <div class="parent-file">
                                                                <input type="file" class="file-input file-upload"
                                                                    data-show-caption="true" data-show-upload="false"
                                                                    accept="image/*" data-show-remove="false"
                                                                    name="banner[img]"
                                                                    data-default="{{ ImageService::getImageUrl(@$data['banner']['img']) }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Judul</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="banner[title]"
                                                                    value="{{ @$data['banner']['title'] }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Teks Tombol</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="banner[btn][text]"
                                                                    value="{{ @$data['banner']['btn']['text'] }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Link Tombol</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="banner[btn][link]"
                                                                    value="{{ @$data['banner']['btn']['link'] }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Section 2 - Intro --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#expanded_item2">
                                                Section 2 - Intro
                                            </button>
                                        </h2>
                                        <div id="expanded_item2" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Judul</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="intro[title]"
                                                                    value="{{ @$data['intro']['title'] }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Deskripsi</label>
                                                            <div class="col-lg-9">
                                                                <textarea cols="10" rows="5" class="form-control" name="intro[description]">{{ @$data['intro']['description'] }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Section 3 - Tentang --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#expanded_item3">
                                                Section 3 - Tentang
                                            </button>
                                        </h2>
                                        <div id="expanded_item3" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row mb-3">
                                                            <p class="fw-semibold">Gambar</p>
                                                            <div class="parent-file">
                                                                <input type="file" class="file-input file-upload"
                                                                    data-show-caption="true" data-show-upload="false"
                                                                    accept="image/*" data-show-remove="false"
                                                                    name="about[img]"
                                                                    data-default="{{ ImageService::getImageUrl(@$data['about']['img']) }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Judul</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="about[title]"
                                                                    value="{{ @$data['about']['title'] }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-lg-12">
                                                                <p class="fw-semibold">Deskripsi</p>
                                                                <textarea cols="10" rows="5" class="form-control ckeditor" name="about[description]">{!! @$data['about']['description'] !!}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Section 4 - Lokasi --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#expanded_item4">
                                                Section 4 - Lokasi
                                            </button>
                                        </h2>
                                        <div id="expanded_item4" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Judul</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="location[title]"
                                                                    value="{{ @$data['location']['title'] }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Deskripsi</label>
                                                            <div class="col-lg-9">
                                                                <textarea cols="10" rows="5" class="form-control" name="location[description]">{{ @$data['location']['description'] }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Section 5 - Counter --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#expanded_item5">
                                                Section 5 - Counter
                                            </button>
                                        </h2>
                                        <div id="expanded_item5" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row mb-3">
                                                            <p class="fw-semibold">Gambar</p>
                                                            <div class="parent-file">
                                                                <input type="file" class="file-input file-upload"
                                                                    data-show-caption="true" data-show-upload="false"
                                                                    accept="image/*" data-show-remove="false"
                                                                    name="counter[img]"
                                                                    data-default="{{ ImageService::getImageUrl(@$data['counter']['img']) }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Judul</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="counter[text]"
                                                                    value="{{ @$data['counter']['text'] }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Section 6 - Penghargaan --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#expanded_item6">
                                                Section 6 - Penghargaan
                                            </button>
                                        </h2>
                                        <div id="expanded_item6" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row mb-3">
                                                            <p class="fw-semibold">Gambar</p>
                                                            <div class="parent-file">
                                                                <input type="file" class="file-input file-upload"
                                                                    data-show-caption="true" data-show-upload="false"
                                                                    accept="image/*" data-show-remove="false"
                                                                    name="reward[img]"
                                                                    data-default="{{ ImageService::getImageUrl(@$data['reward']['img']) }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Judul</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="reward[title]"
                                                                    value="{{ @$data['reward']['title'] }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-lg-12">
                                                                <p class="fw-semibold">Deskripsi</p>
                                                                <textarea cols="10" rows="5" class="form-control ckeditor" name="reward[description]">{!! @$data['reward']['description'] !!}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
