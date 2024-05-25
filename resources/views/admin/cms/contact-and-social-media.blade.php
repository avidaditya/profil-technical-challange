@extends('admin.components.main')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <!-- create form -->
            <form action="{{ route('admin-panel.cms.contact-and-social-media.save') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <!-- Input fields -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card" style="height: 95%">
                            <div class="card-header">
                                <h5 class="mb-0">Pengaturan Informasi Kontak</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">No Telepon</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="contact-information[phone]"
                                                value="{{ @$data['contact-information']['phone'] }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Email</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="contact-information[email]"
                                                value="{{ @$data['contact-information']['email'] }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-form-label col-lg-3">Google Maps Embed</label>
                                        <div class="col-lg-9">
                                            <textarea type="text" class="form-control" name="contact-information[maps]" cols="10" rows="5">{{ @$data['contact-information']['maps'] }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card" style="height: 95%">
                            <div class="card-header">
                                <h5 class="mb-0">Pengaturan Sosial Media</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="accordion" id="accordion_expanded">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button fw-semibold" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#expanded_item1">
                                                    LinkedIn
                                                </button>
                                            </h2>
                                            <div id="expanded_item1" class="accordion-collapse collapse show"
                                                data-bs-parent="#accordion_expanded">
                                                <div class="accordion-body">
                                                    <!-- Default input -->
                                                    <div class="row">
                                                        <div class="col-xl-8">
                                                            <div class="row mb-3">
                                                                <label class="col-form-label col-lg-3">Link</label>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control"
                                                                        name="social-media[linkedin][link]"
                                                                        value="{{ @$data['social-media']['linkedin']['link'] }}">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label class="col-form-label col-lg-3">Teks</label>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control"
                                                                        name="social-media[linkedin][text]"
                                                                        value="{{ @$data['social-media']['linkedin']['text'] }}">
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
                                                    Instagram
                                                </button>
                                            </h2>
                                            <div id="expanded_item2" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion_expanded">
                                                <div class="accordion-body">
                                                    <!-- Default input -->
                                                    <div class="row">
                                                        <div class="col-xl-8">
                                                            <div class="row mb-3">
                                                                <label class="col-form-label col-lg-3">Link</label>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control"
                                                                        name="social-media[instagram][link]"
                                                                        value="{{ @$data['social-media']['instagram']['link'] }}">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label class="col-form-label col-lg-3">Teks</label>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control"
                                                                        name="social-media[instagram][text]"
                                                                        value="{{ @$data['social-media']['instagram']['text'] }}">
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
                                                    data-bs-toggle="collapse" data-bs-target="#expanded_item3">
                                                    Website
                                                </button>
                                            </h2>
                                            <div id="expanded_item3" class="accordion-collapse collapse"
                                                data-bs-parent="#accordion_expanded">
                                                <div class="accordion-body">
                                                    <!-- Default input -->
                                                    <div class="row">
                                                        <div class="col-xl-8">
                                                            <div class="row mb-3">
                                                                <label class="col-form-label col-lg-3">Link</label>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control"
                                                                        name="social-media[website][link]"
                                                                        value="{{ @$data['social-media']['website']['link'] }}">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label class="col-form-label col-lg-3">Teks</label>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control"
                                                                        name="social-media[website][text]"
                                                                        value="{{ @$data['social-media']['website']['text'] }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary btn-save">
                                        Simpan
                                        <i class="ph-check-square-offset ms-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /input fields -->
            </form>
        </div>
    </div>
    <!-- /content area -->
@endsection
