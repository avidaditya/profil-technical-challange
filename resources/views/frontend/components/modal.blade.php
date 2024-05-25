<!-- Auth modal -->
<div ng-controller="modalController" ng-init="initModal()">

    <div id="auth-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full @if (Session::has('errorRegisterForm')) on-register @endif">
        <div class="relative p-4 w-full max-w-xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                <!-- Modal body -->
                <div class="p-8 md:p-10 flex flex-col gap-6">
                    <section id="login-form-modal" class="fade flex flex-col gap-6">
                        <form action="{{ route('member-login.attempt') }}" method="POST" class="flex flex-col gap-6"
                            autocomplete="on">
                            @csrf
                            <div class="flex flex-col gap-1 items-center">
                                <h2 class="text-2xl font-semibold">Masuk ke Akunmu</h2>
                                <p class="text-sm">Tidak punya akun? <a href="javascript:;" id="register-here-btn"
                                        class="color-def-purple hover:text-gray-800 transition duration-300">Daftar
                                        di sini</a>
                                </p>
                            </div>
                            <div class="flex flex-col gap-4">
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input type="email" name="email"
                                        class="@if (Session::has('errorEmailMember')) border-red-500 @endif text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 px-4"
                                        placeholder="Email"
                                        value="{{ Session::has('emailMember') ? Session::get('emailMember') : '' }}"
                                        required />
                                    @if (Session::has('errorEmailMember') ?? false)
                                        <div class="text-sm text-red-500 pt-2 pl-4">
                                            {{ Session::get('errorEmailMember') }}
                                        </div>
                                    @endif

                                </div>
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input type="password" name="password"
                                        class="@if (Session::has('errorEmailMember')) border-red-500 @endif text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 px-4"
                                        placeholder="Kata Sandi"
                                        value="{{ Session::has('passwordMember') ? Session::get('passwordMember') : '' }}"
                                        required />
                                    @if (Session::has('errorPasswordMember') ?? false)
                                        <div class="text-sm text-red-500 pt-2 pl-4">
                                            {{ Session::get('errorPasswordMember') }}</div>
                                    @endif
                                </div>
                                <button type="submit" class="w-full bg-def-green p-3 rounded-3xl font-semibold text-normal"
                                    id="masuk-btn">Masuk</button>
                                    {{-- data-modal-hide="success-register-modal" --}}
                                <p class="text-sm self-center">Lupa kata sandi? klik <a href="javascript:" data-modal-hide="auth-modal"  data-modal-target="forget-password-modal" data-modal-toggle="forget-password-modal"
                                        class="color-def-purple hover:text-gray-800 transition duration-300">di sini</a>
                                </p>
                            </div>
                        </form>
                    </section>
                    <section id="register-form-modal" class="fade flex flex-col gap-6">
                        <div class="flex flex-col gap-1 items-center">
                            <h2 class="text-2xl font-semibold">Daftar Sekarang</h2>
                            <p class="text-sm">Sudah punya akun? <a href="javascript:;" id="login-here-btn"
                                    class="color-def-purple hover:text-gray-800 transition duration-300">Masuk di
                                    sini</a>
                            </p>
                        </div>
                        <div class="flex flex-col gap-4">
                            <form action="{{ route('register') }}" class="flex flex-col gap-4" method="POST"
                                class="flex flex-col gap-6" autocomplete="on">
                                @csrf
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input type="text" name="name"
                                        class="@if (Session::has('errorRegisterNameInput')) border-red-500 @endif text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 px-4"
                                        placeholder="Nama Lengkap" required
                                        value="{{ Session::has('valueRegisterNameInput') ? Session::get('valueRegisterNameInput') : '' }}" />
                                    @if (Session::has('errorRegisterNameInput') ?? false)
                                        <div class="text-sm text-red-500 pt-2 pl-4">
                                            {!! Session::get('errorRegisterNameInput') !!}</div>
                                    @endif
                                </div>
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input type="email" name="email"
                                        class="@if (Session::has('errorRegisterEmailInput')) border-red-500 @endif text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 px-4"
                                        placeholder="Email" required
                                        value="{{ Session::has('valueRegisterEmailInput') ? Session::get('valueRegisterEmailInput') : '' }}" />
                                    @if (Session::has('errorRegisterEmailInput') ?? false)
                                        <div class="text-sm text-red-500 pt-2 pl-4">
                                            {!! Session::get('errorRegisterEmailInput') !!}</div>
                                    @endif
                                </div>
                                <div id="occupation_other" class="form-control-feedback form-control-feedback-start"
                                    @if (Session::get('valueRegisterOccupationInput') !== 'Lainnya') style="display: none;" @endif>
                                    <input type="text" name="occupation_other"
                                        class="text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 px-4"
                                        placeholder="Tulis Pekerjaan Kamu Disini"
                                        value="{{ Session::has('valueRegisterOccupationOtherInput') ? Session::get('valueRegisterOccupationOtherInput') : '' }}" />
                                    @if (Session::has('errorRegisterOccupationOtherInput') ?? false)
                                        <div class="text-sm text-red-500 pt-2 pl-4">
                                            {!! Session::get('errorRegisterOccupationOtherInput') !!}</div>
                                    @endif
                                </div>
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input type="password" name="password"
                                        class="text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 px-4"
                                        placeholder="Kata Sandi" required />
                                    @if (Session::has('errorRegisterPasswordInput') ?? false)
                                        <div class="text-sm text-red-500 pt-2 pl-4">
                                            {!! Session::get('errorRegisterPasswordInput') !!}</div>
                                    @endif
                                </div>
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input type="password" name="password_confirmation"
                                        class="text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 px-4"
                                        placeholder="Ulangi Kata Sandi" required />
                                    @if (Session::has('errorRegisterPasswordConfirmationInput') ?? false)
                                        <div class="text-sm text-red-500 pt-2 pl-4">
                                            {!! Session::get('errorRegisterPasswordConfirmationInput') !!}</div>
                                    @endif
                                </div>
                                {{-- end of consent section --}}
                                <button type="submit"
                                    class="w-full bg-def-green p-3 rounded-3xl font-semibold text-normal"
                                    id="daftar-btn">Daftar</button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- success register modal -->
    <div id="success-register-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                <!-- Modal body -->
                <div class="px-8 md:px-10 py-4 md:py-6 flex flex-col gap-6 justify-center items-center">
                    <h2 class="text-2xl font-semibold">
                        {{ @$globalSection['modal-popup']['success-register-modal']['title'] }}</h2>
                    <div class="leading-relaxed text-md text-center">
                        <p>{{ @$globalSection['modal-popup']['success-register-modal']['text1'] }}</p>
                        <a class="my-6" href="#">{{ Session::get('registerSuccessEmail') }}</a>
                        {{-- <p class="">{{ @$globalSection['modal-popup']['success-register-modal']['text2'] }}</p> --}}
                        <p>Harap melakukan aktivasi akun dengan mengikuti petunjuk pada emailmu. Mohon cek di spam bila
                            Kamu tidak menemukan email verifikasi di inbox.</p>
                    </div>
                    <div class="self-end">
                        <button class="bg-def-green py-3 px-6 rounded-3xl text-normal font-semibold"
                            data-modal-hide="success-register-modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- success register modal -->

    <!-- profile modal -->
    <div id="profile-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                <!-- Modal body -->
                <div class="p-8 md:p-10 flex flex-col gap-6">
                    <div class="flex flex-col gap-4">
                        <form action="{{ route('member-login.ubah') }}" class="flex flex-col gap-4" method="POST"
                            class="flex flex-col gap-6" autocomplete="on">
                            @csrf
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="text" name="name"
                                    class="@if (Session::has('errorRegisterNameInput')) border-red-500 @endif text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 px-4"
                                    placeholder="Nama Lengkap" required
                                    value="{{ Session::has('valueRegisterNameInput') ? Session::get('valueRegisterNameInput') : (Auth::check() ? Auth::user()->name : '') }}" />
                                @if (Session::has('errorRegisterNameInput') ?? false)
                                    <div class="text-sm text-red-500 pt-2 pl-4">
                                        {!! Session::get('errorRegisterNameInput') !!}</div>
                                @endif
                            </div>
                            
                            {{-- end of consent section --}}
                            <button type="submit"
                                class="w-full bg-def-green p-3 rounded-3xl font-semibold text-normal"
                                id="daftar-btn">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- success register modal -->

    <!-- forget password modal -->
    <div id="forget-password-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-xl max-h-full">
            <!-- Modal content -->
            <form action="{{route('password.email')}}" method="POST">
            @csrf
                <div class="relative w-full bg-white rounded-3xl shadow dark:bg-gray-700">
                    <!-- Modal body -->
                    <div class="w-full px-8 md:px-10 py-8 md:py-10 flex flex-col justify-center items-center">
                        <h2 class="text-2xl font-semibold">Masukkan Email Kamu</h2>
                        <div class="py-8 md:py-6 w-full gap-6">
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="text" name="email"
                                    class="@if (Session::has('errorEmailForget')) border-red-500 @endif text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 px-4"
                                    placeholder="Email terdaftar" required value="{{session::get('email')}}" />
                                @if (Session::has('errorEmailForget') ?? false)
                                    <div class="text-sm text-red-500 pt-2 pl-4">
                                        {{ Session::get('errorEmailForget') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="self-end">
                            <button type="submit" class="w-full bg-def-green py-3 px-8 rounded-3xl font-semibold text-normal"
                                data-modal-hide="forget-password-modal">Kirim</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- end of forget password modal -->

    <!-- new password modal -->
    <div id="new-password-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-xl max-h-full">
            <!-- Modal content -->
             <form class="login-form" method="post" action="{{ route('password.update') }}">
                    @csrf
                    <div class="relative w-full bg-white rounded-3xl shadow dark:bg-gray-700">
                        <!-- Modal body -->
                        <input type="hidden" name="token" value="{{ Session::get('token') }}">
                        <input type="hidden" name="email" value="{{ Session::get('email') }}">

                        <div class="w-full px-8 md:px-10 py-8 md:py-10 flex flex-col justify-center items-center">
                            <h2 class="text-xl md:text-2xl font-semibold">Masukkan Kata Sandi Baru</h2>
                            <div class="pt-4 md:pt-6 w-full gap-6">
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input type="password" name="password"
                                        class="@if (Session::has('error_password')) border-red-500 @endif text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 px-4"
                                        placeholder="kata sandi baru" required value="" />

                                    @if (Session::has('error_password') ?? false)
                                        <div class="text-sm text-red-500 pt-2 pl-4">
                                            {{ Session::get('error_password') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="pt-4 md:pt-4 w-full gap-6">
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input type="password" name="password_confirmation"
                                        class="@if (Session::has('error_password')) border-red-500 @endif text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 px-4"
                                        placeholder="ulangi kata sandi baru" required value="" />

                                     @if (Session::has('error_password') ?? false)
                                        <div class="text-sm text-red-500 pt-2 pl-4">
                                            {{ Session::get('error_password') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="self-end mt-4">
                                <button class="w-full bg-def-green py-3 px-8 rounded-3xl font-semibold text-normal"
                                    data-modal-hide="new-password-modal">Kirim</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <!-- end of new password modal -->

    <!-- thankyou modal -->
    <div id="thankyou-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                <!-- Modal body -->
                <div class="px-8 md:px-10 py-4 md:py-6 flex flex-col gap-6 justify-center items-center">
                    <h2 class="text-2xl font-semibold">{{ @$globalSection['modal-popup']['thankyou-modal']['title'] }}
                    </h2>
                    <div class="leading-6 text-md text-center">
                        <p>
                            {{ @$globalSection['modal-popup']['thankyou-modal']['description'] }}
                        </p>
                    </div>
                    <div class="self-end">
                        <button class="bg-def-green py-3 px-6 rounded-3xl text-normal font-semibold"
                            data-modal-hide="thankyou-modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- unsubscribe modal -->
    <div id="unsub-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                <!-- Modal body -->
                <div class="px-8 md:px-10 py-4 md:py-6 flex flex-col gap-6 justify-center items-center">
                    {{-- <h2 class="text-2xl font-semibold">{{ @$globalSection['modal-popup']['unsub-modal']['title'] }} --}}
                    <h2 class="text-2xl font-semibold">Kami Sedih Melihatmu Pergi!</h2>
                    <div class="leading-6 text-md text-center">
                        <p>
                            {{-- {{ @$globalSection['modal-popup']['unsub-modal']['description'] }} --}}
                            Email yang kami kirim merupakan pemberitahuan jika ide kamu dipublikasikan atau ada komentar terhadap ide kamu.
                        </p>
                    </div>
                    <div class="self-end">
                        <button class="bg-def-green py-3 px-6 rounded-3xl text-normal font-semibold"
                            data-modal-hide="unsub-modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- unsubscribe modal -->
    <div id="change-throttled-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                <!-- Modal body -->
                <div class="px-8 md:px-10 py-4 md:py-6 flex flex-col gap-6 justify-center items-center">
                    {{-- <h2 class="text-2xl font-semibold">{{ @$globalSection['modal-popup']['change-throttled-modal']['title'] }} --}}
                    <h2 class="text-2xl font-semibold">Ubah Kata Sandi Gagal</h2>
                    <div class="leading-6 text-md text-center">
                        <p>
                            {{-- {{ @$globalSection['modal-popup']['change-throttled-modal']['description'] }} --}}
                            Harap menunggu 1-2 menit untuk mencoba ubah kata sandi lagi.
                        </p>
                    </div>
                    <div class="self-end">
                        <button class="bg-def-green py-3 px-6 rounded-3xl text-normal font-semibold"
                            data-modal-hide="change-throttled-modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- reset berhasil modal -->
    <div id="reset-berhasil-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                <!-- Modal body -->
                <div class="px-8 md:px-10 py-4 md:py-6 flex flex-col gap-6 justify-center items-center">
                    {{-- <h2 class="text-2xl font-semibold">{{ @$globalSection['modal-popup']['reset-berhasil-modal']['title'] }} --}}
                    <h2 class="text-2xl font-semibold">Kata Sandimu Berhasil Dirubah</h2>
                    <div class="leading-6 text-md text-center">
                        <p>
                            {{-- {{ @$globalSection['modal-popup']['reset-berhasil-modal']['description'] }} --}}
                            Harap masuk ke akunmu dengan menggunakan email dan kata sandi yang telah kamu perbaharui.
                        </p>
                    </div>
                    <div class="self-end">
                        <button class="bg-def-green py-3 px-6 rounded-3xl text-normal font-semibold"
                            data-modal-hide="reset-berhasil-modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

         <!-- reset berhasil modal -->
    <div id="change-success-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                <!-- Modal body -->
                <div class="px-8 md:px-10 py-4 md:py-6 flex flex-col gap-6 justify-center items-center">
                    {{-- <h2 class="text-2xl font-semibold">{{ @$globalSection['modal-popup']['change-success-modal']['title'] }} --}}
                    <h2 class="text-2xl font-semibold">Email Ubah Kata Sandi Terkirim</h2>
                    <div class="leading-6 text-md text-center">
                        <p>
                            {{-- {{ @$globalSection['modal-popup']['change-success-modal']['description'] }} --}}
                            Cek email kamu untuk melakukan pergantian kata sandi
                        </p>
                    </div>
                    <div class="self-end">
                        <button class="bg-def-green py-3 px-6 rounded-3xl text-normal font-semibold"
                            data-modal-hide="change-success-modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- blocked modal -->
    <div id="blocked-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                <!-- Modal body -->
                <div class="px-8 md:px-10 py-4 md:py-6 flex flex-col gap-6 justify-center items-center">
                    {{-- <h2 class="text-2xl font-semibold">{{ @$globalSection['modal-popup']['blocked-modal']['title'] }} --}}
                    <h2 class="text-2xl font-semibold">Idemu Ditolak</h2>
                    <div class="leading-6 text-md text-center">
                        <p>
                            {{-- {{ @$globalSection['modal-popup']['blocked-modal']['description'] }} --}}
                            Maaf, idemu belum bisa diproses karena terdeteksi mengandung kata-kata yang tidak diizinkan.
                            Yuk coba lagi sumbangkan idemu yang tidak mengandung kata-kata kasar ataupun ujaran
                            kebencian.
                        </p>
                    </div>
                    <div class="self-end">
                        <button class="bg-def-green py-3 px-6 rounded-3xl text-normal font-semibold"
                            data-modal-hide="blocked-modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Forum submission failed modal -->
    <div id="form-submission-failed-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                <!-- Modal body -->
                <div class="px-8 md:px-10 py-4 md:py-6 flex flex-col gap-6 justify-center items-center">
                    {{-- <h2 class="text-2xl font-semibold">{{ @$globalSection['modal-popup']['form-submission-failed-modal']['title'] }} --}}
                    <h2 class="text-2xl font-semibold">Ide Gagal Terkirim </h2>
                    <div class="leading-6 text-md text-center">
                        <p>
                            {{-- {{ @$globalSection['modal-popup']['form-submission-failed-modal']['description'] }} --}}
                            Maaf, idemu gagal terkirim. Harap mengisi semua kolom dengan benar dan coba lagi. Pastikan
                            koneksi internetmu stabil dan mengikuti panduan pengiriman ide.
                        </p>
                    </div>
                    <div class="self-end">
                        <button class="bg-def-green py-3 px-6 rounded-3xl text-normal font-semibold"
                            data-modal-hide="form-submission-failed-modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Forum submission failed modal -->
    <div id="comment-failed-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                <!-- Modal body -->
                <div class="px-8 md:px-10 py-4 md:py-6 flex flex-col gap-6 justify-center items-center">
                    {{-- <h2 class="text-2xl font-semibold">{{ @$globalSection['modal-popup']['comment-failed-modal']['title'] }} --}}
                    <h2 class="text-2xl font-semibold">Komentar Gagal Terkirim </h2>
                    <div class="leading-6 text-md text-center">
                        <p>
                            {{-- {{ @$globalSection['modal-popup']['comment-failed-modal']['description'] }} --}}
                            Maaf, komentarmu gagal terkirim. Harap mengisi semua kolom dengan benar dan coba lagi.
                            Pastikan koneksi internetmu stabil dan mengikuti panduan pengiriman komentar.
                        </p>
                    </div>
                    <div class="self-end">
                        <button class="bg-def-green py-3 px-6 rounded-3xl text-normal font-semibold"
                            data-modal-hide="comment-failed-modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- comment blocked modal -->
    <div id="comment-blocked-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                <!-- Modal body -->
                <div class="px-8 md:px-10 py-4 md:py-6 flex flex-col gap-6 justify-center items-center">
                    {{-- <h2 class="text-2xl font-semibold">{{ @$globalSection['modal-popup']['comment-blocked-modal']['title'] }} --}}
                    <h2 class="text-2xl font-semibold">Komentarmu Ditolak</h2>
                    <div class="leading-6 text-md text-center">
                        <p>
                            {{-- {{ @$globalSection['modal-popup']['comment-blocked-modal']['description'] }} --}}
                            Maaf, komentarmu belum bisa diproses karena terdeteksi mengandung kata-kata yang tidak
                            diizinkan. Yuk coba lagi sumbangkan komentarmu yang tidak mengandung kata-kata kasar ataupun
                            ujaran kebencian.
                        </p>
                    </div>
                    <div class="self-end">
                        <button class="bg-def-green py-3 px-6 rounded-3xl text-normal font-semibold"
                            data-modal-hide="comment-blocked-modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of comment blocked modal -->

    <!-- submission guide modal -->
    <div id="submission-guide-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                <!-- Modal body -->
                <div class="px-8 md:px-10 py-4 md:py-6 flex flex-col gap-6 justify-center items-center">
                    <div class="flex flex-col justify-center items-center">
                        <h2 class="text-2xl font-semibold">
                            {{ @$globalSection['modal-popup']['submission-guide-modal']['title'] }}</h2>
                        {{-- <p class="text-sm">{{ @$globalSection['modal-popup']['submission-guide-modal']['subtitle'] }}</p> --}}
                    </div>
                    <div class="leading-6 text-md space-y-4 overflow-y-auto max-h-96">
                        {{-- {!! @$globalSection['modal-popup']['submission-guide-modal']['content'] !!} --}}
                        <p class="font-bold">Untuk Open dan Advanced Category</p>
                        <p>
                            Tuliskan di kotak ide, apa ide Kamu untuk mengatasi masalah di kota ini, dan jelaskan
                            mengapa
                            menurut Kamu ide ini cocok untuk memecahkan masalah tersebut berdasarkan:</p>
                        <ul class="list-disc ml-4">
                            <li>Kondisi lapangan (letak geografis, demografis, cuaca, dll)</li>
                            <li>Kondisi sosial dan budaya penduduk (kearifan lokal, kondisi SES, budaya, dll)</li>
                            <li>Potensi lokal yang ada (potensi alam, bisnis, lapangan pekerjaan, dll)</li>
                            (50-100 kata)
                        </ul>

                        <p class="font-bold">Untuk Advanced Category, pdf mu harus menyertai jawaban dari 3 pertanyaan
                            berikut</p>
                        <ol class="list-decimal ml-4">
                            <li>
                                <p>Untuk mewujudkan ide tersebut dan mencapai dampak berkelanjutan, apa faktor pendukung
                                    apa
                                    yang Kamu pandang penting untuk dikembangkan (pengetahuan, kreativitas, keahlian,
                                    kolaborasi, dan kebijakan)? Bagaimana Kamu berencana untuk mengintegrasikan
                                    faktor-faktor tersebut ke dalam implementasi idemu? (min. 100 kata)</p>

                                <p class="mt-4">Penjelasan faktor pendukung:</p>
                                <ul class="list-disc ml-4 mt-2">
                                    <li>Pengetahuan: segala sesuatu yang berkaitan dengan fakta, informasi, data, teori,
                                        atau kemampuan yang diperoleh dari suatu pengalaman.</li>
                                    <li>Kreativitas: kemampuan menggunakan imajinasi untuk menghasilkan atau
                                        mengembangkan
                                        ide baru.</li>
                                    <li>Keahlian: keterampilan, kompetensi, dan penguasaan atas suatu bidang atau
                                        aktivitas
                                        tertentu.</li>
                                    <li>Kolaborasi: Proses kerja sama antara individu atau kelompok untuk mencapai
                                        tujuan
                                        bersama yang melibatkan ide, sumber daya, dan tanggung jawab.</li>
                                    <li>Kebijakan: Aturan, panduan, atau keputusan yang ditetapkan oleh pemerintah,
                                        organisasi, atau lembaga untuk mengarahkan tindakan dan mencapai tujuan
                                        tertentu.
                                    </li>
                                </ul>
                            </li>

                            <li class="mt-4">Dampak positif apa yang mungkin terjadi jika ide tersebut
                                diimplementasikan?
                                Berapa
                                perkiraan desa dan jumlah orang yang dapat merasakan dampak dari implementasi idemu?
                                (min.
                                100 kata)</li>

                            <li class="mt-4">Jelaskan hambatan/ tantangan yang mungkin terjadi dalam proses
                                implementasi
                                ide tersebut?
                                (min. 100 kata)</li>
                        </ol>
                    </div>
                    <div class="self-end">
                        {{-- <form action="{{ route('lokasi.send-guide') }}" enctype="multipart/form-data" method="POST"
                            autocomplete="off"> --}}
                        {{-- @csrf --}}
                        <button type="submit" ng-disabled="$root.guideDisabled" ng-click="$root.acceptGuide()"
                            class="bg-def-green py-3 px-6 rounded-3xl text-normal font-semibold">Setuju</button>

                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- submission form modal -->
    <div id="submission-form-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                <!-- Modal body -->
                <form ng-submit="$root.submitForm()" enctype="multipart/form-data" method="POST"
                    autocomplete="off">
                    @csrf
                    <div class="px-8 md:px-10 py-4 md:py-6 flex flex-col gap-6">
                        <div class="flex flex-col justify-center items-center">
                            <h2 class="text-2xl font-semibold">Tulis Idemu</h2>
                            <p class="text-sm">Kamu menulis ide untuk {{ $data->name ?? '' }}</p>
                        </div>
                        <div class="flex flex-col gap-4 form-solution">
                            <input type="hidden" ng-model="$root.formData.location_id" name="location_id"
                                value="{{ $data->id ?? '' }}" />
                            <input type="text" name="title" ng-model="$root.formData.title" maxlength="255"
                                class="text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 px-6"
                                placeholder="Judul Ide" required />
                            <textarea name="solution" ng-model="$root.formData.solution" maxlength="2100" id="solution" spellcheck="false"
                                class="text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 px-6"
                                cols="10" rows="5"
                                placeholder="Tulis idemu yang relevan dengan permasalahan. Semakin detail idemu akan semakin mudah digunakan untuk menyusun solusi (maks 2100 char)"
                                required></textarea>
                            <div class="link-group">
                                <input type="text" name="link[]" ng-blur="$root.linkBlur(($index + 1))"
                                    ng-repeat="links in $root.formData.link" ng-model="links.text"
                                    class="text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 px-6 mb-2 {%$index > 0 ? 'mt-4' : '' %} link-{%$index%}"
                                    placeholder="Tulis link URL sebagai referensi/ pendukung idemu (optional)" />
                                <div class="text-sm text-red-500 alert-link ps-6">Format link salah</div>
                            </div>

                            <select ng-model="$root.formData.sektor"
                                class="text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 px-6"
                                name="sektor" required>
                                <option class="p-3" value="" disabled selected hidden>Sektor permasalahan
                                    yang
                                    ingin kamu bantu
                                </option>
                                @foreach ($sektors ?? [] as $value)
                                    <option value="{{ $value->id }}">{{ $value->sektor }}</option>
                                @endforeach
                            </select>

                            <label class="inline-flex items-center cursor-pointer pb-0 mb-0">
                                <input type="checkbox" name="checkSubmission"
                                    ng-model="$root.formData.checkSubmission" id="submission-checkbox"
                                    class="sr-only peer">
                                <div
                                    class="relative w-11 h-6 bg-def-green peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-def-purple">
                                </div>
                                <span
                                    class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300 submission-label">Open
                                    Category </span>
                            </label>
                            <p class="text-xs relative top-0 -mt-2 text-gray-500">Geser tombol ini bila Kamu ingin
                                sumbang
                                ide lebih detail dalam bentuk pdf (1 file maks 20MB)</p>
                            <div class="flex upload-submission cursor-pointer h-12">

                                <button type="button"
                                    class="bg-def-purple w-1/3 md:w-3/12 text-white text-sm rounded-l-2xl">Unggah
                                    Dokumen</button>
                                <div
                                    class="span-unggah pl-2 items-center flex w-2/3 md:w-9/12 text-sm text-gray-600 border border-gray-600 rounded-r-2xl focus:outline-none">
                                    Belum ada dokumen</div>

                            </div>
                            <p class="-mt-2 text-xs text-gray-500 dark:text-gray-500 upload-submission"
                                id="file_input_help">Rangkum kata-kata, visual, link referensi, ke dalam satu dokumen
                                pdf (max. 20 MB)</p>

                            <input id="file_input" class="uploaded_file" name="uploaded_file"
                                ng-model="$root.formData.uploaded_file" accept=".pdf" type="file"
                                style="display:none">
                        </div>
                        <div class="flex flex-wrap justify-between items-center">
                            <div class="g-recaptcha" id="recaptcha" data-callback="enableBtn"
                                data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>

                            <button type="submit" ng-disabled="$root.submissionDisabled || !$root.captchaVerified"
                                class="disabled:opacity-50 disabled:bg-gray-400 disabled:cursor-not-allowed bg-def-green mr-0 py-3 px-6 mx-auto rounded-3xl self-center text-normal font-semibold block w-full md:block md:w-4/12 lg:w-4/12 text-center mt-6 md:mt-0">Kirim
                                Ide</button>
                        </div>
                    </div>
                    {{-- !$root.captchaVerified || --}}
                </form>
            </div>
        </div>
    </div>

    <!-- logout confirmation modal -->
    <div id="logout-confirmation-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                <!-- Modal body -->
                <form action="{{ route('logout') }}" method="GET">
                    @csrf
                    <div class="px-8 md:px-10 py-4 md:py-6 flex flex-col gap-6 justify-center items-center">
                        <div class="flex flex-col justify-center items-center">
                            <h2 class="text-2xl font-semibold">
                                Kamu yakin ingin keluar?
                            </h2>
                        </div>
                        <div class="self-center">
                            <button type="submit"
                                class="bg-def-green py-3 px-6 rounded-3xl text-normal font-semibold">Ya,
                                Keluar Akun</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- comment form modal -->
    <div id="comment-form-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        {{-- <div id="submission-form-modal" tabindex="-1" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full flex" aria-modal="true" role="dialog"> --}}
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                <!-- Modal body -->
                {{-- <form action="{{ route('lokasi.send-comment') }}" method="POST" autocomplete="off">
                    @csrf --}}
                <div class="px-8 md:px-10 py-4 md:py-6 flex flex-col gap-6">
                    <div class="flex flex-col justify-center items-center">
                        <h2 class="text-2xl font-semibold">Tulis Komentar</h2>
                    </div>
                    <div class="flex flex-col gap-4 form-solution">
                        <input type="hidden" name="solution_id" id="solution_id" />
                        <textarea name="title" maxlength="2100" id="title" ng-model="$root.titleComment" spellcheck="false"
                            class="text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-3 px-6"
                            cols="10" rows="5" placeholder="Tulis Komentar" required></textarea>

                    </div>
                    <div class="flex flex-wrap justify-center items-center">
                        <div class="g-recaptcha" id="recaptcha-comment" data-callback="enableBtn"
                            data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                        {{--  --}}
                        <button type="submit"
                            ng-disabled="($root.titleComment == '' || !$root.captchaVerified) || $root.commentDisabled"
                            ng-click="$root.sendComment()"
                            class=" disabled:opacity-50 disabled:bg-gray-400 disabled:cursor-not-allowed mr-0 bg-def-green py-3 px-6 mx-auto rounded-3xl self-center text-normal font-semibold block w-full md:block md:w-4/12 lg:w-4/12 text-center mt-6 md:mt-0">Kirim
                            Komentar</button>
                    </div>
                </div>
                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>


<script>
    angular.module('myApp')
        .controller('modalController', function($scope, $http, $rootScope) {

            $scope.initModal = () => {
                console.log('ready modal')
            }

            var enableBtn = function(response) {
                $rootScope.recaptchaResponse = response;
                $rootScope.captchaVerified = true;

                console.log('peh')
                $scope.$apply()
            };

            window.enableBtn = enableBtn;


        })
</script>

{{-- Backdrop for develop modal only --}}
{{-- <div modal-backdrop="" class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40"></div> --}}
