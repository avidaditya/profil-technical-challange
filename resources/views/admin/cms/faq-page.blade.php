@extends('admin.components.main')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <!-- Input fields -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Pengaturan FAQ</h5>
                    </div>

                    <!-- create form -->
                    <form action="{{ route('admin-panel.cms.faq.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="accordion" id="accordion_expanded">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#expanded_item1">
                                                Section 1 - About
                                            </button>
                                        </h2>
                                        <div id="expanded_item1" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">
                                                <!-- Default input -->
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
                                                            <label class="col-form-label col-lg-3">Deskripsi</label>
                                                            <div class="col-lg-9">
                                                                <textarea class="form-control" name="about[description]" cols="10" rows="5">{{ @$data['about']['description'] }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#expanded_item2">
                                                Section 2 - FAQ
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
                                                                <input type="text" class="form-control" name="faq[title]"
                                                                    value="{{ @$data['faq']['title'] }}">
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
