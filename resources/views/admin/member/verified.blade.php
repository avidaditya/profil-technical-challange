@extends('admin.components.main')

@section('content')
    <!-- Content area -->
    <div class="content">
        <div class="col-md-12">
            <div class="card card-body">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#active-content" data-bs-toggle="tab" role="tab" class="nav-link active">Aktif</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blocked-content" data-bs-toggle="tab" role="tab" class="nav-link">Diblokir</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Basic initialization -->
        <div class="tab-content">
            <div class="tab-pane fade active show" id="active-content" role="tabpanel">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center py-0">
                            <h5 class="mb-0 py-3">Daftar Peserta</h5>
                            <div class="my-auto ms-auto">
                            </div>
                            <div class="my-auto ms-auto">
                                @if ($allowed_export)
                                    <a href="{{ route('admin-panel.member.export-excel', ['status' => 'active']) }}"
                                        class="btn btn-primary btn-create"><i class="ph-microsoft-excel-logo me-1"></i>
                                        export data</a>
                                @endif
                            </div>
                        </div>
                        <table class="table datatable-responsive">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Peserta</th>
                                    <th>Email</th>
                                    <th>Pekerjaan</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Tanggal Verfikasi Email</th>
                                    <th>Tanggal Setuju</th>
                                    <th>Jumlah Solusi</th>
                                    <th>Jumlah Komentar</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($active_members ?? [] as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $item['name'] }}</td>
                                        <td>{{ $item['email'] }}</td>
                                        <td>{{ $item['occupation'] ?? '-' }}</td>
                                        <td>{{ $item['created_at'] ? Carbon::parse($item['created_at'])->format('d M Y') : '-' }}
                                        </td>
                                        <td>{{ $item['email_verified_at'] ? Carbon::parse($item['email_verified_at'])->format('d M Y') : '-' }}
                                        </td>
                                        <td>{{ $item['consent_date'] ? Carbon::parse($item['consent_date'])->format('d M Y') : '-' }}
                                        </td>
                                        <td>{{ $item->solutions->count() }}</td>
                                        <td>{{ $item->comments->count() }}</td>
                                        <td class="text-center">
                                            <div class="d-inline-flex">
                                                <a href="#" title="blokir" class="text-body mx-2"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modal_block-{{ $loop->index }}">
                                                    <i class="ph-x-circle"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- Block Modal --}}
                                    <div id="modal_block-{{ $loop->index }}" class="modal fade" tabindex="-1">
                                        <form action="{{ route('admin-panel.member.block', [$item['id']]) }}"
                                            method="POST">
                                            @csrf
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Blokir Peserta</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <h6 class="fw-semibold">Blokir Peserta</h6>
                                                        <p>Peserta yang diblokir tidak akan bisa mengirim solusi dan
                                                            komentar</p>
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="blocked-content" role="tabpanel">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center py-0">
                            <h5 class="mb-0 py-3">Daftar Peserta</h5>
                            <div class="my-auto ms-auto">
                            </div>
                            <div class="my-auto ms-auto">
                                @if ($allowed_export)
                                    <a href="{{ route('admin-panel.member.export-excel', ['status' => 'blocked']) }}"
                                        class="btn btn-primary btn-create"><i class="ph-microsoft-excel-logo me-1"></i>
                                        export data</a>
                                @endif
                            </div>
                        </div>
                        <table class="table datatable-basic">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Peserta</th>
                                    <th>Email</th>
                                    <th>Pekerjaan</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Tanggal Verfikasi Email</th>
                                    <th>Tanggal Setuju</th>
                                    <th>Jumlah Solusi</th>
                                    <th>Jumlah Komentar</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blocked_members ?? [] as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $item['name'] }}</td>
                                        <td>{{ $item['email'] }}</td>
                                        <td>{{ $item['occupation'] ?? '-' }}</td>
                                        <td>{{ $item['created_at'] ? Carbon::parse($item['created_at'])->format('d M Y') : '-' }}
                                        </td>
                                        <td>{{ $item['email_verified_at'] ? Carbon::parse($item['email_verified_at'])->format('d M Y') : '-' }}
                                        </td>
                                        <td>{{ $item['consent_date'] ? Carbon::parse($item['consent_date'])->format('d M Y') : '-' }}
                                        </td>
                                        <td>{{ $item->solutions->count() }}</td>
                                        <td>{{ $item->comments->count() }}</td>
                                        <td class="text-center">
                                            <div class="d-inline-flex">
                                                <a href="#" title="Aktifkan" class="text-body mx-2"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modal_unblock-{{ $loop->index }}">
                                                    <i class="ph-check-circle"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- Unblock Modal --}}
                                    <div id="modal_unblock-{{ $loop->index }}" class="modal fade" tabindex="-1">
                                        <form action="{{ route('admin-panel.member.unblock', [$item['id']]) }}"
                                            method="POST">
                                            @csrf
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Buka Blokir Peserta</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <h6 class="fw-semibold">Buka Blokir Peserta</h6>
                                                        <p>Peserta yang dibuka blokir akan kembali bisa mengirim solusi dan
                                                            komentar</p>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success">Ya, Buka
                                                            Blokir</button>
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
@endsection

@section('js')
    <script src="{{ asset('admin/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/pages/datatables_basic.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/pages/components_modals.js') }}"></script>
@endsection
