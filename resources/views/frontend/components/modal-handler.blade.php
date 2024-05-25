<button style="display: none" data-modal-target="auth-modal" data-modal-toggle="auth-modal"></button>
@if (Session::has('errorAuthForm') || Session::has('errorRegisterForm'))
    <script>
        window.onload = function() {
            setTimeout(() => {
                $('[data-modal-toggle="auth-modal"]').first().trigger('click');
            }, 500);
        }
    </script>
@endif

<button style="display: none" data-modal-target="complete-data-modal" data-modal-toggle="complete-data-modal"></button>
@if (Session::has('completeDataModal') || Session::has('errorCompleteDataForm'))
    <script>
        window.onload = function() {
            setTimeout(() => {
                $('[data-modal-toggle="complete-data-modal"]').first().trigger('click');
            }, 500);
        }
    </script>
@endif

<button style="display: none" data-modal-target="success-register-modal"
    data-modal-toggle="success-register-modal"></button>
@if (Session::has('successRegisterModal'))
    <script>
        window.onload = function() {
            setTimeout(() => {
                $('[data-modal-toggle="success-register-modal"]').first().trigger('click');
            }, 500);
        }
    </script>
@endif

<button style="display: none" data-modal-target="thankyou-modal" data-modal-toggle="thankyou-modal"></button>
@if (Session::has('thankyouModal'))
    <script>
        window.onload = function() {
            setTimeout(() => {
                $('[data-modal-toggle="thankyou-modal"]').first().trigger('click');
            }, 500);
        };
    </script>
@endif

<button style="display: none" data-modal-target="blocked-modal" data-modal-toggle="blocked-modal"></button>
@if (Session::has('blockedModal'))
    <script>
        window.onload = function() {
            setTimeout(() => {
                $('[data-modal-toggle="blocked-modal"]').first().trigger('click');
            }, 500);
        }
    </script>
@endif

<button style="display: none" data-modal-target="submission-guide-modal"
    data-modal-toggle="submission-guide-modal"></button>
@if (Session::has('submissionGuideModal'))
    <script>
        window.onload = function() {
            setTimeout(() => {
                $('[data-modal-toggle="submission-guide-modal"]').first().trigger('click');
            }, 500);
        }
    </script>
@endif

<button style="display: none" id="toggleSubmissionModal" data-modal-target="submission-form-modal"
    data-modal-toggle="submission-form-modal"></button>
@if (Session::has('submissionFormModal'))
    <script>
        window.onload = function() {
            setTimeout(() => {
                $('[data-modal-toggle="submission-form-modal"]').first().trigger('click');
            }, 500);
        }
    </script>
@endif

<button style="display: none" data-modal-target="unsub-modal" data-modal-toggle="unsub-modal"></button>
@if (Session::has('unsubModal'))
    <script>
        window.onload = function() {
            setTimeout(() => {
                $('[data-modal-toggle="unsub-modal"]').first().trigger('click');
            }, 500);
        }
    </script>
@endif


<button style="display: none" id="forget" data-modal-target="forget-password-modal"
    data-modal-toggle="forget-password-modal"></button>
@if (Session::has('resetPasswordEmail'))
    <script>
        window.onload = function() {
            setTimeout(() => {
                console.log('asdx')
                $('#forget').first().trigger('click');
            }, 500);
        }
    </script>
@endif

<button style="display: none" data-modal-target="new-password-modal" data-modal-toggle="new-password-modal"></button>
@if (Session::has('resetPassword'))
    <script>
        window.onload = function() {
            setTimeout(() => {
                $('[data-modal-toggle="new-password-modal"]').first().trigger('click');
            }, 700);
        }
    </script>
@endif

<button style="display: none" data-modal-target="reset-berhasil-modal"
    data-modal-toggle="reset-berhasil-modal"></button>
@if (Session::has('resetPasswordSuccess'))
    <script>
        console.log('resetPass')
        window.onload = function() {
            setTimeout(() => {
                console.log('tes')
                $('[data-modal-toggle="reset-berhasil-modal"]').first().trigger('click');
            }, 500);
        }
    </script>
@endif

<button style="display: none" id="passwordSuccess" data-modal-target="change-success-modal"
    data-modal-toggle="change-success-modal"></button>
@if (Session::has('changePasswordSuccess'))
    <script>
        console.log('change password')
        window.onload = function() {
            setTimeout(() => {
                $('#passwordSuccess').first().trigger('click');
            }, 500);
        }
    </script>
@endif

<button style="display: none" id="throttled-modal" data-modal-target="change-throttled-modal"
    data-modal-toggle="change-throttled-modal"></button>
@if (Session::has('changePasswordThrottled'))
    <script>
        console.log('change password')
        window.onload = function() {
            setTimeout(() => {
                $('#throttled-modal').first().trigger('click');
            }, 500);
        }
    </script>
@endif

<button style="display: none" data-modal-target="comment-form-modal" data-modal-toggle="comment-form-modal"></button>

<button style="display: none" data-modal-target="form-submission-failed-modal"
    data-modal-toggle="form-submission-failed-modal"></button>

<button style="display: none" data-modal-target="comment-blocked-modal"
    data-modal-toggle="comment-blocked-modal"></button>

<button style="display: none" data-modal-target="comment-failed-modal"
    data-modal-toggle="comment-failed-modal"></button>
