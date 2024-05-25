@extends('admin.components.main')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="col-md-12">
            <div class="card card-body">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#active-content" data-bs-toggle="tab" role="tab" class="nav-link {{ count($query_param) > 0 ? ($query_param['tab'] == 'aktif' ? 'active':'') : 'active' }}">Aktif</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blocked-content" data-bs-toggle="tab" role="tab" class="nav-link {{ count($query_param) > 0 ? ($query_param['tab'] == 'blocked' ? 'active':'') : '' }}">Diblokir</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Basic initialization -->
        <div class="tab-content">
            <div class="tab-pane fade {{ count($query_param) > 0 ? ($query_param['tab'] == 'aktif' ? 'active show':'') : 'active show' }}" id="active-content" role="tabpanel">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center py-0">
                            <h5 class="mb-0 py-3">Daftar Komentar</h5>
                            <div class="my-auto ms-auto">
                            </div>
                            <div class="my-auto ms-auto">
                                <div style="display:flex; gap:20px">
                                    <form action="{{route('admin-panel.komentar.index')}}" method="GET">
                                        @csrf
                                        <input type="hidden" value="aktif" name="tab" />
                                        <select class="form-control" name="location" onchange="changeLocationAktif()">
                                            <option value="" selected>Pilih Semua Lokasi</option>
                                            @foreach($locations as $key => $value)
                                                <option value="{{$value->id}}" {{count($query_param) > 0 ? (($query_param['location'] == $value->id && $query_param['tab'] == 'aktif') ? 'selected' : '') :''}}>{{$value->name}}</option>

                                            @endforeach
                                        </select>
                                        <button type="submit" id="filterLocationAktif" style="display:none"></button>
                                    </form>
                                    <a href="{{ route('admin-panel.komentar.export-excel', ['status' => 'aktif']) }}"
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
                                    <th>Lokasi</th>
                                    <th>Komentar</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($commentPublish ?? [] as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{$item->user->name}}</td>
                                        <td>{{$item->user->email}}</td>
                                        <td>{{$item->solution->title}}</td>
                                        <td>{{$item->solution->location->name}}</td>
                                        <td>{{$item->title}}</td>
                                        <td class="text-center">
                                            <div class="d-inline-flex">
                                                <a href="#" class="text-body mx-2" data-bs-toggle="modal"
                                                    data-bs-target="#modal_aktif_block-{{ $loop->index }}">
                                                    <i class="ph-x-circle"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- Block Modal --}}
                                    <div id="modal_aktif_block-{{ $loop->index }}" class="modal fade" tabindex="-1">
                                        <form action="{{ route('admin-panel.komentar.block', [$item['id']]) }}"
                                            method="POST" class="form-block">
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
            <div class="tab-pane fade {{ count($query_param) > 0 ? ($query_param['tab'] == 'blocked' ? 'active show':'') : '' }}"  id="blocked-content" role="tabpanel">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center py-0">
                            <h5 class="mb-0 py-3">Daftar Komentar</h5>
                            <div class="my-auto ms-auto">
                            </div>
                            <div class="my-auto ms-auto">
                                <div style="display:flex; gap:20px">
                                    <form action="{{route('admin-panel.komentar.index')}}" method="GET">
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
                                    <a href="{{ route('admin-panel.komentar.export-excel', ['status' => 'blocked']) }}"
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
                                    <th>Lokasi</th>
                                    <th>Komentar</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($commentDeleted ?? [] as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{$item->user->name}}</td>
                                        <td>{{$item->user->email}}</td>
                                        <td>{{$item->solution->title}}</td>
                                        <td>{{$item->solution->location->name}}</td>
                                        <td>{{$item->title}}</td>
                                        <td class="text-center">
                                            <div class="d-inline-flex">
                                                <a href="#" class="text-body mx-2" data-bs-toggle="modal"
                                                    data-bs-target="#modal_publish-{{ $loop->index }}">
                                                    <i class="ph-megaphone"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- Publish Modal --}}
                                    <div id="modal_publish-{{ $loop->index }}" class="modal fade" tabindex="-1">
                                        <form action="{{ route('admin-panel.komentar.publish', [$item['id']]) }}"
                                            method="POST" class="form-publish">
                                            @csrf
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Publish Komentar</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <h6 class="fw-semibold">Publish Komentar</h6>
                                                        <p>Apa anda yakin menpublish komentar ini?</p>
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
            console.log('init jquery')
        })
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
