@extends('admin.components.main')

@section('content')
    <div class="content">
        <div class="mb-3 d-flex justify-content-between">
            <div>
                <h6 class="mb-0">List of Frequently Asked Questions</h6>
                <span class="text-muted">Daftar pertanyaan umum seputar OIC dan idea submission.</span>
            </div>
            <div>
                <button class="btn btn-primary text-center col-12" data-bs-toggle="modal" data-bs-target="#modal_create">
                    <i class="ph-plus-circle"></i>&nbsp;
                    Tambah Item Baru
                </button>
            </div>
        </div>
        <div class="row">
            @foreach (@$data ?? [] as $item)
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header d-flex flex-wrap">
                            <h6 class="mb-0 col-10">{{ @$item['question'] }}</h6>
                            <div class="d-inline-flex ms-auto">
                                <a href="#" class="text-body cursor-pointer mx-2" data-bs-toggle="modal"
                                    data-bs-target="#modal_edit-{{ $loop->index }}">
                                    <i class="ph-pencil"></i>
                                </a>
                                <a href="#" class="text-body cursor-pointer" data-bs-toggle="modal"
                                    data-bs-target="#modal_delete-{{ $loop->index }}">
                                    <i class="ph-x"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            {!! @$item['answer'] !!}
                        </div>
                    </div>

                    {{-- Edit Modal --}}
                    <div id="modal_edit-{{ $loop->index }}" class="modal fade" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Ubah Item</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <form action="{{ route('admin-panel.faq.update', [$item['id']]) }}" method="POST"
                                    class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Pertanyaan</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="question"
                                                    value="{{ @$item['question'] }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-form-label col-lg-3">Jawaban</label>
                                            <div class="col-lg-9">
                                                <textarea name="answer" class="form-control ckeditor" cols="10" rows="5">{{ @$item['answer'] }}</textarea>
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
                    {{-- Delete Modal --}}
                    <div id="modal_delete-{{ $loop->index }}" class="modal fade" tabindex="-1">
                        <form action="{{ route('admin-panel.faq.destroy', [$item['id']]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Hapus Item</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <div class="modal-body">
                                        <h6 class="fw-semibold">Hapus Permanen</h6>
                                        <p>Item yang telah dihapus secara permanen tidak dapat dikembalikan dan
                                            hilang secara permanen</p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- /delete -->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- Create Modal --}}
    <div id="modal_create" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('admin-panel.faq.store') }}" method="POST" class="form-horizontal"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="POST">
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Pertanyaan</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="question">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">Jawaban</label>
                            <div class="col-lg-9">
                                <textarea name="answer" class="form-control ckeditor" cols="10" rows="5"></textarea>
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
