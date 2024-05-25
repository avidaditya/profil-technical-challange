@extends('admin.components.main')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="col-md-12">
            <div class="card card-body">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#pending-content" data-bs-toggle="tab" role="tab" class="nav-link {{ count($query_param) > 0 ? ($query_param['tab'] == 'pending' ? 'active':'') : 'active' }}">Pending</a>
                    </li>
                    <li class="nav-item">
                        <a href="#active-content" data-bs-toggle="tab" role="tab" class="nav-link {{ count($query_param) > 0 ? ($query_param['tab'] == 'aktif' ? 'active':'') : '' }} ">Aktif</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blocked-content" data-bs-toggle="tab" role="tab" class="nav-link {{ count($query_param) > 0 ? ($query_param['tab'] == 'blocked' ? 'active':'') : '' }} ">Diblokir</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Basic initialization -->
        <div class="tab-content">
            <div class="tab-pane fade  {{ count($query_param) > 0 ? ($query_param['tab'] == 'pending' ? 'active show':'') : 'active show' }} " id="pending-content" role="tabpanel">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center py-0">
                            <h5 class="mb-0 py-3">Daftar Solution</h5>
                            <div class="my-auto ms-auto">
                            </div>
                            <div class="my-auto ms-auto">
                                <div style="display:flex; gap:20px">
                                    <form action="{{route('admin-panel.solusi.index')}}" method="GET">
                                        @csrf
                                        <input type="hidden" value="pending" name="tab" />
                                        <select class="form-control" name="location" onchange="changeLocationPending()">
                                            <option value="" selected>Pilih Semua Lokasi</option>
                                            @foreach($locations as $key => $value)
                                                <option value="{{$value->id}}" {{count($query_param) > 0 ? (($query_param['location'] == $value->id && $query_param['tab'] == 'pending') ? 'selected' : '') :''}}>{{$value->name}}</option>

                                            @endforeach
                                        </select>
                                        <button type="submit" id="filterLocationPending" style="display:none"></button>
                                    </form>
                                    <a href="{{ route('admin-panel.solusi.export-excel', ['status' => 'pending']) }}"
                                        class="btn btn-primary btn-create"><i class="ph-microsoft-excel-logo me-1"></i>
                                        export data</a>
                                </div>
                            </div>
                        </div>
                        <table class="table datatable-responsive">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Peserta</th>
                                    <th>Email</th>
                                    <th>Judul Ide</th>
                                    <th>Sektor</th>
                                    <th>Jumlah Komentar</th>
                                    <th>Jumlah Vote</th>
                                    <th>Kategori</th>
                                    <th>Lokasi</th>
                                    <th>Waktu</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($solutionPending ?? [] as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{$item->user?->name}}</td>
                                        <td>{{$item->user?->email}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->sektor?->sektor}}</td>
                                        <td>{{count($item->comment)}}</td>
                                        <td>{{count($item->vote)}}</td>
                                        <td>
                                        @if($item->type == 0)
                                         <span class="badge bg-primary">Open</span>
                                        @else
                                         <span class="badge bg-danger">Advance</span>
                                        @endif
                                        </td>
                                        <td>{{$item->location->name}}</td>
                                        <td>{{\Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y H:i')}}</td>

                                        <td class="text-center">
                                            <div class="d-inline-flex">
                                                <a href="{{route('admin-panel.solusi.detail',[$item->id])}}" class="text-body mx-2" title="Detail Ide" >
                                                    <i class="ph-eye"></i>
                                                </a>

                                                <a href="#" class="text-body mx-2" title="blokir" data-bs-toggle="modal"
                                                    data-bs-target="#modal_block-solution-{{ $loop->index }}">
                                                    <i class="ph-x-circle"></i>
                                                </a>

                                                <a href="#" class="text-body mx-2" title="publish" data-bs-toggle="modal"
                                                    data-bs-target="#modal_publish-solution-{{ $loop->index }}">
                                                    <i class="ph-megaphone"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- Block Modal --}}
                                    <div id="modal_block-solution-{{ $loop->index }}" class="modal fade" tabindex="-1">
                                        <form action="{{ route('admin-panel.solusi.block', [$item['id']]) }}"
                                            method="POST" class="form-block">
                                            @csrf
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Blokir Ide</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <h6 class="fw-semibold">Blokir Ide</h6>
                                                        <p>Apa anda yakin memblokir Ide ini?</p>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger blokir">Ya, Blokir</button>
                                                        <button type="button" class="btn btn-link"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    {{-- Publish Modal --}}
                                    <div id="modal_publish-solution-{{ $loop->index }}" class="modal fade" tabindex="-1">
                                        <form action="{{ route('admin-panel.solusi.publish', [$item['id']]) }}"
                                            method="POST" class="form-publish">
                                            @csrf
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Publish Ide</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <h6 class="fw-semibold">Publish Ide</h6>
                                                        <p>Apa anda yakin mempublish Ide ini?</p>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger publish">Ya, Publish</button>
                                                        <button type="button" class="btn btn-link"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade {{ count($query_param) > 0 ? ($query_param['tab'] == 'aktif' ? 'active show':'') : '' }}" id="active-content" role="tabpanel">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center py-0">
                            <h5 class="mb-0 py-3">Daftar Solution</h5>
                            <div class="my-auto ms-auto">
                            </div>
                            <div class="my-auto ms-auto">
                                <div style="display:flex; gap:20px">
                                    <form action="{{route('admin-panel.solusi.index')}}" method="GET">
                                        @csrf
                                        <input type="hidden" value="aktif" name="tab" />
                                        <select class="form-control" name="location" onchange="changeLocationAktif()">
                                            <option value="" selected>Pilih Semua Lokasi</option>
                                            @foreach($locations as $key => $value)
                                                <option value="{{$value->id}}" {{count($query_param) > 0 ? (($query_param['location'] == $value->id && $query_param['tab'] == 'aktif') ? 'selected' : '') :''}} >{{$value->name}}</option>

                                            @endforeach
                                        </select>
                                        <button type="submit" id="filterLocationAktif" style="display:none"></button>
                                    </form>
                                    <a href="{{ route('admin-panel.solusi.export-excel', ['status' => 'aktif']) }}"
                                    class="btn btn-primary btn-create"><i class="ph-microsoft-excel-logo me-1"></i>
                                    export data</a>
                                </div>
                            </div>
                        </div>
                        <table class="table datatable-basic">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Peserta</th>
                                    <th>Email</th>
                                    <th>Judul Ide</th>
                                    <th>Sektor</th>
                                    <th>Jumlah Komentar</th>
                                    <th>Jumlah Vote</th>
                                    <th>Kategori</th>
                                    <th>Lokasi</th>
                                    <th>Waktu</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($solutionPublished ?? [] as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{$item->user?->name}}</td>
                                        <td>{{$item->user?->email}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->sektor?->sektor}}</td>
                                        <td>{{count($item->comment)}}</td>
                                        <td>{{count($item->vote)}}</td>
                                        <td>
                                        @if($item->type == 0)
                                         <span class="badge bg-primary">Open</span>
                                        @else
                                         <span class="badge bg-danger">Advance</span>
                                        @endif
                                        </td>
                                        <td>{{$item->location->name}}</td>
                                        <td>{{\Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y H:i')}}</td>

                                        <td class="text-center">
                                            <div class="d-inline-flex">
                                                <a href="{{route('admin-panel.solusi.detail',[$item->id])}}" class="text-body mx-2" title="Detail Ide" >
                                                    <i class="ph-eye"></i>
                                                </a>
                                                <a href="#" class="text-body mx-2" title="blokir" data-bs-toggle="modal"
                                                    data-bs-target="#modal_aktif_block-solution-{{ $loop->index }}">
                                                    <i class="ph-x-circle"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- Block Modal --}}
                                    <div id="modal_aktif_block-solution-{{ $loop->index }}" class="modal fade" tabindex="-1">
                                        <form action="{{ route('admin-panel.solusi.block', [$item['id']]) }}"
                                            method="POST" class="form-block">
                                            @csrf
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Blokir Ide</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <h6 class="fw-semibold">Blokir Ide</h6>
                                                        <p>Apa anda yakin memblokir Ide ini?</p>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger blokir">Ya, Blokir</button>
                                                        <button type="button" class="btn btn-link"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade {{ count($query_param) > 0 ? ($query_param['tab'] == 'blocked' ? 'active show':'') : '' }}" id="blocked-content" role="tabpanel">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center py-0">
                            <h5 class="mb-0 py-3">Daftar Solution</h5>
                            <div class="my-auto ms-auto">
                            </div>
                            <div class="my-auto ms-auto">
                                <div style="display:flex; gap:20px">
                                    <form action="{{route('admin-panel.solusi.index')}}" method="GET">
                                        @csrf
                                        <input type="hidden" value="blocked" name="tab" />
                                        <select class="form-control" name="location" onchange="changeLocationBlocked()">
                                            <option value="" selected>Pilih Semua Lokasi</option>
                                            @foreach($locations as $key => $value)
                                                <option value="{{$value->id}}" {{count($query_param) > 0 ? (($query_param['location'] == $value->id && $query_param['tab'] == 'blocked') ? 'selected' : '') :''}}>{{$value->name}}</option>

                                            @endforeach
                                        </select>
                                        <button type="submit" id="filterLocationBlocked" style="display:none"></button>
                                    </form>
                                    <a href="{{ route('admin-panel.solusi.export-excel', ['status' => 'blocked']) }}"
                                    class="btn btn-primary btn-create"><i class="ph-microsoft-excel-logo me-1"></i>
                                    export data</a>
                                </div>
                            </div>
                        </div>
                        <table class="table datatable-basic">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Peserta</th>
                                    <th>Email</th>
                                    <th>Judul Ide</th>
                                    <th>Sektor</th>
                                    <th>Jumlah Komentar</th>
                                    <th>Jumlah Vote</th>
                                    <th>Kategori</th>
                                    <th>Lokasi</th>
                                    <th>Waktu</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($solutionBlocked ?? [] as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{$item->user?->name}}</td>
                                        <td>{{$item->user?->email}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->sektor?->sektor}}</td>
                                        <td>{{count($item->comment)}}</td>
                                        <td>{{count($item->vote)}}</td>
                                        <td>
                                        @if($item->type == 0)
                                         <span class="badge bg-primary">Open</span>
                                        @else
                                         <span class="badge bg-danger">Advance</span>
                                        @endif
                                        </td>
                                        <td>{{$item->location->name}}</td>
                                        <td>{{\Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y H:i')}}</td>

                                        <td class="text-center">
                                            <div class="d-inline-flex">
                                                <a href="{{route('admin-panel.solusi.detail',[$item->id])}}" class="text-body mx-2" title="Detail Ide" >
                                                    <i class="ph-eye"></i>
                                                </a>
                                                <a href="#" title="Publish Ide" class="text-body mx-2" data-bs-toggle="modal"
                                                    data-bs-target="#modal_blocked_publish-solution-{{ $loop->index }}">
                                                    <i class="ph-megaphone"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- Publish Modal --}}
                                    <div id="modal_blocked_publish-solution-{{ $loop->index }}" class="modal fade" tabindex="-1">
                                        <form action="{{ route('admin-panel.solusi.publish', [$item['id']]) }}"
                                            method="POST" class="form-publish">
                                            @csrf
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Publish Ide</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <h6 class="fw-semibold">Publish Ide</h6>
                                                        <p>Apa anda yakin mempublish Ide ini?</p>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger publish">Ya, Publish</button>
                                                        <button type="button" class="btn btn-link"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /basic initialization -->

    </div>
    <!-- /content area -->

    @include('admin.components.modal')
    <script>
        $(function() {
            $('.form-block').on('submit', function() {
                // Disable all buttons with class 'submit-button' in the submitted form
                $('.blokir').prop('disabled', true).text('Proses...');
            });

            $('.form-publish').on('submit', function() {
                // Disable all buttons with class 'submit-button' in the submitted form
                $('.publish').prop('disabled', true).text('Proses...');
            });
        })
        function changeLocationPending(){
            $('#filterLocationPending').first().trigger('click');

        }
        function changeLocationAktif(){
            $('#filterLocationAktif').first().trigger('click');

        }
        function changeLocationBlocked(){
            $('#filterLocationBlocked').first().trigger('click');

        }
    </script>
@endsection

@section('js')
    <script src="{{ asset('admin/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/pages/datatables_basic.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/pages/components_modals.js') }}"></script>
@endsection
