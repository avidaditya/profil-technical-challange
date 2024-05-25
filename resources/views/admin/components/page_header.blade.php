<!-- Page header -->
<div class="page-header page-header-light shadow">
    <div class="page-header-content d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                <!-- cek breadbrum  -->
                {{ @$title }} <span class="fw-normal"></span>
            </h4>

            <a href="#page_header"
                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
        </div>

    </div>

    <div class="page-header-content d-lg-flex border-top">
        <div class="d-flex">
            <div class="breadcrumb py-2">
                <a href="" class="breadcrumb-item"><i class="ph-house"></i></a>
                @if (!empty($breadcrumbs))
                    @foreach ($breadcrumbs as $breadcrumb)
                        @if (!empty($breadcrumb['url']))
                            <a href="{{ $breadcrumb['url'] }}" class="breadcrumb-item">{{ $breadcrumb['name'] }}</a>
                        @else
                            <span class="breadcrumb-item active">{{ $breadcrumb['name'] }}</span>
                        @endif
                    @endforeach
                @endif

            </div>

            <a href="#breadcrumb_elements"
                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
        </div>
    </div>
</div>
<!-- /page header -->
