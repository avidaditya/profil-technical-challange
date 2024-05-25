@extends('admin.components.main')

@section('content')
<!-- Content area -->
<div class="content">
    <div class="card">
        <div class="card-header">
            <div style="display:flex;justify-content:space-between">
                <h5 class="mb-0">Detail Ide </h5>
               <div style="display:flex;gap:20px">
                    @if($solution['type'] == 0)
                        <span class="badge bg-primary">Open</span>
                    @else
                        <span class="badge bg-danger">Advance</span>
                    @endif

                    <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" style="">
                                @if($solution->status == 'blocked' || $solution->status == 'pending')
                                    <form action="{{ route('admin-panel.solusi.publish', [request()->route('id')]) }}"
                                        method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="ph-megaphone me-2"></i>
                                            Publish
                                        </button>
                                    </form>
                                @endif

                                @if($solution->status == 'published')
                                    <form action="{{ route('admin-panel.solusi.block', [request()->route('id')]) }}"
                                    method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="ph-x-circle me-2"></i>
                                            Blokir
                                        </button>
                                    </form>
                                @endif
                                

                                
                                    
                        </div>
                    </div>
               </div>
               
            </div>
        </div>

        <div class="card-body">
            <div class="row mb-3" >
                <div class="col-1">
                    <b>Title  </b>
                </div>
                <div class="col-11">
                    : {{$solution['title']}}
                </div>
            </div>

            <div class="row mb-3" >
                <div class="col-1">
                    <b>Peserta  </b>
                </div>
                <div class="col-11">
                    : {{$solution['user']['name']}}
                </div>
            </div>

            <div class="row mb-3" >
                <div class="col-1">
                    <b>Tanggal  </b>
                </div>
                <div class="col-11">
                    : {{\Carbon\Carbon::parse($solution['created_at'])->translatedFormat('d F Y H:i')}}
                </div>
            </div>

            @if($solution['link_url'] != null)
                <div class="row mb-3" >
                    <div class="col-1">
                        <b>Link </b>
                    </div>
                    <div class="col-11">
                        : {{$solution['link_url']}}
                    </div>
                </div>
            @endif

            <div class="row mb-3" >
                <div class="col-1">
                    <b>Type </b>
                </div>
                <div class="col-11">
                    : 
                    @if($solution['type'] == 1)
                        Advance
                    @else
                        Open
                    @endif
                </div>
            </div>
           
            <div class="row mb-3" >
                <div class="col-1">
                    <b>Konten </b>
                </div>
                <div class="col-11">
                    : {{$solution['solution']}}
                </div>
            </div>

            @if($solution['type'])
            <div class="row mb-3">
                <div class="col-1"> File </div>
                <div class="col-11">
                    <a href="{{asset($solution['attachment_file'])}}" target="_blank" class="btn btn-primary btn-create mb-3">
                        Download file
                    </a>
                </div>
            </div>
            @endif
            

        </div>
    </div>

    <div class="card">

        <div class="card-body">
            <div class="fw-bold border-bottom pb-2 mb-3">Komentar</div>
            @foreach($solution['comment'] as $key => $value)
            <div class="accordion" id="accordion_collapsed_{{$key}}">
                <div class="accordion-item mb-2">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsed_item_{{$key}}">
                                {{$value->user->name}} &nbsp; <span class="text-info">{{\Carbon\Carbon::parse($value->created_at)->translatedFormat('d F Y H:i')}}</span>
                                
                        </button>
                        <div id="modal_block-{{ $loop->index }}" class="modal fade" tabindex="-1">
                            <form action="{{ route('admin-panel.komentar.block', [$value->id]) }}"
                                method="POST">
                                @csrf
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Blokir Komentar</h5>
                                            <button type="button" class="btn-close"
                                                data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <h6 class="fw-semibold">Blokir Komentar</h6>
                                            <p>Apa anda yakin memblokir komentar ini?</p>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger">Ya, Blokir</button>
                                            <button type="button" class="btn btn-link"
                                                data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </h2>
                   
                    <div id="collapsed_item_{{$key}}" class="accordion-collapse collapse" data-bs-parent="#accordion_collapsed_{{$key}}">
                        <div class="accordion-body">
                            <div style="display:flex;justify-content:space-between">
                                <span class="fw-semibold">
                                    {{$value->title}}
                                </span>
                                <a href="#" class="text-body mx-2" data-bs-toggle="modal"
                                    data-bs-target="#modal_block-{{ $loop->index }}">
                                    <i class="ph-trash"></i>
                                </a>
                            </div>
                           

                        </div>
                    </div>
                </div>

            </div>

            @endforeach

        </div>
    </div>
</div>


<!-- /content area -->

@include('admin.components.modal')
@endsection

@section('js')
<script src="{{ asset('admin/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('admin/assets/demo/pages/datatables_basic.js') }}"></script>
<script src="{{ asset('admin/assets/demo/pages/components_modals.js') }}"></script>
@endsection
