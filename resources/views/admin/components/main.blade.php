<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>

    <!-- Global stylesheets -->
    <link href="{{ asset('admin/assets/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/layout_assets/css/ltr/all.min.css') }}" id="stylesheet" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('admin/assets/css/custom.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('admin/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('admin/layout_assets/js/app.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/uploaders/fileinput/fileinput.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/media/glightbox.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/ui/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/pickers/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/tables/datatables/extensions/responsive.min.js') }}"></script>
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>

    <script src="{{ asset('admin/assets/demo/pages/uploader_bootstrap.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/pages/gallery.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/pages/datatables_basic.js') }}"></script>
    <script src="{{ asset('admin/assets/demo/pages/datatables_extension_responsive.js') }}"></script>
    <!-- /theme JS files -->

    @vite([])

</head>

<body>

    @include('admin.components.navbar')

    <!-- Page content -->
    <div class="page-content">

        @include('admin.components.sidebar')

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">
                @include('admin.components.page_header')

                @yield('content')

                @include('admin.components.footer')

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->
    @include('admin.components.modal')
    @include('admin.components.notification')
</body>

<script>
    // get all elements with class "file-upload"
    const fileUpload = document.getElementsByClassName('file-upload');
    // for each element
    for (let i = 0; i < fileUpload.length; i++) {
        var filename = fileUpload[i].getAttribute('data-default');
        if (filename) {
            if ($(fileUpload[i]).hasClass('file-input')) {
                // file input update on fileinput bootstrap
                var initialPreviewConfig = [{
                    caption: filename,
                    showDrag: false,
                    showZoom: true,
                    showRemove: false
                }, ];

                // cek type file from filename
                var ext = filename.split('.').pop();
                let typeImage = ['jpg', 'jpeg', 'png'];
                if (typeImage.includes(ext)) {
                    fileUpload[i].setAttribute('data-initial-preview-file-type', 'image');
                } else {
                    fileUpload[i].setAttribute('data-initial-preview-file-type', 'file');
                }

                var url = filename;
                fileUpload[i].setAttribute('data-initial-preview', url);
                fileUpload[i].setAttribute('data-initial-caption', filename);
                fileUpload[i].setAttribute('data-initial-preview-as-data', true);
                fileUpload[i].setAttribute('data-initial-preview-config', JSON.stringify(initialPreviewConfig));
            } else {
                // Create a new File object
                const myFile = new File([filename], filename, {
                    type: 'text/plain',
                    lastModified: new Date(),
                });

                // // Now let's create a DataTransfer to get a FileList
                const dataTransfer = new DataTransfer();
                dataTransfer.items.add(myFile);
                fileUpload[i].files = dataTransfer.files;
            }
        }
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('.daterange-single').daterangepicker({
            parentEl: '.content-inner',
            singleDatePicker: true,
            locale: {
                format: 'YYYY-MM-DD'
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editors = document.querySelectorAll('.ckeditor');
        if (editors.length > 0 || false) {
            editors.forEach((el) => {
                ClassicEditor
                    .create(el, {
                        ckfinder: {
                            uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
                        }
                    })
                    .catch(error => {
                        console.error(error);
                    });
            })
        }
    });
</script>

@yield('script')
<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
@include('sweetalert::alert')

</html>
