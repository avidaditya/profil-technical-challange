@extends('auth.components.main')

@section('content')
<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Login form -->
                <form class="login-form" method="post" action="{{ route('admin-login.attempt') }}">
                    @csrf
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <div class="d-inline-flex align-items-center justify-content-center mb-2 mt-2">
                                    <img src="{{ asset('frontend/images/logo-main.svg') }}" class="h-64px" alt="">
                                </div>
                                <h5 class="mb-0">Login ke akun anda</h5>
                                <span class="d-block text-muted">Masukkan data akun anda</span>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="john@doe.com">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-envelope text-muted"></i>
                                    </div>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Kata Sandi</label>
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="•••••••••••">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-lock text-muted"></i>
                                    </div>
                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100">Masuk</button>
                            </div>

                            <div class="text-center">
                                <a href="{{ route('password.request', ['back' => 'admin-login']) }}">Lupa password?</a>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /login form -->

            </div>
            <!-- /content area -->


            <!-- Footer -->
            <div class="navbar navbar-sm navbar-footer border-top">
                <div class="container-fluid">
                    <span>&copy; {{ date('Y') }} <a href="#">{{ config('app.name') }}</a></span>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->
@endsection
