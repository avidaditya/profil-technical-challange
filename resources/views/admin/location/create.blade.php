@extends('admin.components.main')

@section('content')
    <!-- Content area -->
    <div class="content">
        <form action="{{ route('admin-panel.location.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Tambah Lokasi</h5>
                        </div>
                        <!-- create form -->
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="accordion" id="accordion_expanded">
                                    {{-- Cover Depan --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#expanded_item1">
                                                Cover Depan
                                            </button>
                                        </h2>
                                        <div id="expanded_item1" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">
                                                <!-- Default input -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Nama</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="cover[name]">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Deskripsi</label>
                                                            <div class="col-lg-9">
                                                                <textarea name="cover[description]" class="form-control" cols="10" rows="5"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <p class="fw-semibold">Gambar</p>
                                                            <div class="parent-file">
                                                                <input type="file" class="file-input file-upload"
                                                                    data-show-caption="true" data-show-upload="false"
                                                                    accept="image/*" data-show-remove="false"
                                                                    name="cover[img]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Section 1 - Tentang --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#expanded_item2">
                                                Section 1 - Tentang
                                            </button>
                                        </h2>
                                        <div id="expanded_item2" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Nama</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="cover[name]">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Deskripsi</label>
                                                            <div class="col-lg-9">
                                                                <textarea name="cover[description]" class="form-control" cols="10" rows="5"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Section 2 - Konten --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#expanded_item2">
                                                Section 2 - Konten
                                            </button>
                                        </h2>
                                        <div id="expanded_item2" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row mb-3">
                                                            <p class="fw-semibold">Video</p>
                                                            <div class="parent-file">
                                                                <input type="file" class="file-input file-upload"
                                                                    data-show-caption="true" data-show-upload="false"
                                                                    accept="video/*" data-show-remove="false"
                                                                    name="content[video]">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label class="col-form-label col-lg-3">Judul</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control"
                                                                    name="content[title]">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-lg-12">
                                                                <p class="fw-semibold">Isi Konten</p>
                                                                <textarea cols="10" rows="5" class="form-control ckeditor" name="content[description]"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Section 3 - SEO --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#expanded_item3">
                                                Section 3 - SEO
                                            </button>
                                        </h2>
                                        <div id="expanded_item3" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion_expanded">
                                            <div class="accordion-body">
                                                <div class="row mb-3">
                                                    <label class="col-form-label col-lg-3">Meta Title</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control"
                                                            name="seo[title]">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-form-label col-lg-3">Meta Description</label>
                                                    <div class="col-lg-9">
                                                        <textarea class="form-control" name="seo[description]" cols="10" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-form-label col-lg-3">Meta Keywords</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control"
                                                            name="seo[keywords]">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-form-label col-lg-3">Meta OG Image
                                                        Link</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control"
                                                            name="seo[image]">
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
                <div class="col-lg-6" x-data="listImages()">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Galeri Gambar</h5>
                            <a href="#" class="btn btn-primary" @click="addNewImage()">
                                <i class="ph-plus-circle me-1"></i>
                                Tambah Gambar</a>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-1">
                        <template x-for="(item, index) in images" :key="item.id">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <p class="fw-semibold">Gambar</p>
                                                <a href="#" class="btn btn-danger" @click="removeImage(item.id)"><i
                                                        class="ph-trash"></i></a>
                                            </div>
                                            <div class="parent-file">
                                                <input type="file" class="file-input file-upload"
                                                    data-show-caption="true" data-show-upload="false" accept="image/*"
                                                    data-show-remove="false" name="images[]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
            <div class="row">
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
        </form>
    </div>
    <!-- /content area -->
@endsection

@section('script')
    <script>
        function listImages() {
            return {
                images: [],
                async addNewImage() {
                    await this.images.push({
                        id: new Date().getTime() + this.images.length
                    });
                    FileUpload.init();
                },
                removeImage(field) {
                    this.images.splice(this.images.map(a => a.id).indexOf(field), 1);
                }
            }
        }
    </script>
    <script src="//unpkg.com/alpinejs" defer></script>
@endsection
