@extends('admin.components.main')

@section('content')
    <!-- Content area -->
    <div class="content">

        <!-- Basic initialization -->
        <div class="card col-md-12">
            <div class="card-header d-flex align-items-center py-0">
                <h5 class="mb-0 py-3">Daftar Peserta</h5>
                <div class="my-auto ms-auto">
                </div>
                <div class="my-auto ms-auto">
                    @if ($allowed_export)
                        <a href="{{ route('admin-panel.member.export-excel', ['status' => 'not-verified']) }}"
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
                    @foreach ($data ?? [] as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['email'] }}</td>
                            <td>{{ $item['occupation'] ?? '-' }}</td>
                            <td>{{ $item['created_at'] ? Carbon::parse($item['created_at'])->format('d M Y') : '-' }}</td>
                            <td>{{ $item['email_verified_at'] ? Carbon::parse($item['email_verified_at'])->format('d M Y') : '-' }}
                            </td>
                            <td>{{ $item['consent_date'] ? Carbon::parse($item['consent_date'])->format('d M Y') : '-' }}
                            </td>
                            <td>{{ $item->solutions->count() }}</td>
                            <td>{{ $item->comments->count() }}</td>
                            <td class="text-center">
                                <div class="d-inline-flex">
                                    {{-- <a href="#" class="text-body" data-bs-popup="tooltip" aria-label="Edit"
                                        data-bs-original-title="Edit">
                                        <i class="ph-pen"></i>
                                    </a>
                                    <a href="#" class="text-body mx-2 btn-delete" data-bs-toggle="modal"
                                        data-bs-target="#modal_delete" data-bs-popup="tooltip" aria-label="Remove"
                                        data-bs-original-title="Remove" data-url="#">
                                        <i class="ph-trash"></i>
                                    </a>
                                    <a href="#" target="__blank" class="text-body" data-bs-popup="tooltip"
                                        aria-label="Options" data-bs-original-title="Options">
                                        <i class="ph-eye"></i>
                                    </a> --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
