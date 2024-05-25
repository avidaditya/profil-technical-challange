@extends('admin.components.main')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <!-- Input fields -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Pengaturan SEO</h5>
                    </div>

                    <!-- create form -->
                    <form action="{{ route('admin-panel.cms.seo.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="accordion" id="accordion_expanded">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#expanded_item1">
                                                Home Page
                                            </button>
                                        </h2>
                                        <div id="expanded_item1" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">
                                                <!-- Default input -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Meta Title</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="home-page[title]"
                                                                    value="{{ @$data['home-page']['title'] }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Meta Description</label>
                                                            <div class="col-lg-9">
                                                                <textarea class="form-control" name="home-page[description]" cols="10" rows="5">{{ @$data['home-page']['description'] }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Meta Keywords</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="home-page[keywords]"
                                                                    value="{{ @$data['home-page']['keywords'] }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Meta OG Image
                                                                Link</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="home-page[image]"
                                                                    value="{{ @$data['home-page']['image'] }}">
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
                                                FAQ Page
                                            </button>
                                        </h2>
                                        <div id="expanded_item2" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Meta Title</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="faq-page[title]"
                                                                    value="{{ @$data['faq-page']['title'] }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Meta Description</label>
                                                            <div class="col-lg-9">
                                                                <textarea class="form-control" name="faq-page[description]" cols="10" rows="5">{{ @$data['faq-page']['description'] }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Meta Keywords</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="faq-page[keywords]"
                                                                    value="{{ @$data['faq-page']['keywords'] }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Meta OG Image
                                                                Link</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="faq-page[image]"
                                                                    value="{{ @$data['faq-page']['image'] }}">
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
