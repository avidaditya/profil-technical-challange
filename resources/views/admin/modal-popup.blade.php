@extends('admin.components.main')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <!-- Input fields -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Pengaturan Modal Popup</h5>
                    </div>

                    <!-- create form -->
                    <form action="{{ route('admin-panel.modal-popup.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="accordion" id="accordion_expanded">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#expanded_item1">
                                                Pendaftaran Berhasil (Verifikasi Email)
                                            </button>
                                        </h2>
                                        <div id="expanded_item1" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">
                                                <!-- Default input -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Judul</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="success-register-modal[title]"
                                                                    value="{{ @$data['success-register-modal']['title'] }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Teks 1</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="success-register-modal[text1]"
                                                                    value="{{ @$data['success-register-modal']['text1'] }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Teks 2</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="success-register-modal[text2]"
                                                                    value="{{ @$data['success-register-modal']['text2'] }}">
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
                                                Submission Guide
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
                                                                    name="submission-guide-modal[title]"
                                                                    value="{{ @$data['submission-guide-modal']['title'] }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Sub Judul</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="submission-guide-modal[subtitle]"
                                                                    value="{{ @$data['submission-guide-modal']['subtitle'] }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-lg-12">
                                                                <p class="fw-semibold">Konten</p>
                                                                <textarea class="form-control ckeditor" name="submission-guide-modal[content]" cols="10" rows="5">{{ @$data['submission-guide-modal']['content'] }}</textarea>
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
                                                Thankyou Modal (Berhasil Kirim Solusi)
                                            </button>
                                        </h2>
                                        <div id="expanded_item3" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Judul</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="thankyou-modal[title]"
                                                                    value="{{ @$data['thankyou-modal']['title'] }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Deskripsi</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="thankyou-modal[description]"
                                                                    value="{{ @$data['thankyou-modal']['description'] }}">
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
