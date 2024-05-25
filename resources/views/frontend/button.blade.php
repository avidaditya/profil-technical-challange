@extends('frontend.components.main')

@section('seo_title', @$data['content_data']['seo']['title'])
@section('seo_description', @$data['content_data']['seo']['description'])
@section('seo_keywords', @$data['content_data']['seo']['keywords'])
@section('seo_image', @$data['content_data']['seo']['image'])

@section('content')

    <div ng-controller="buttonController" ng-init="initButton()" class="my-52 gap-6">
        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded-full mt-6" data-modal-target="auth-modal"
            data-modal-toggle="auth-modal">
            Login/Register
        </button>

        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded-full mt-6"
            data-modal-target="forget-password-modal" data-modal-toggle="forget-password-modal">
            Forget Password
        </button>

        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded-full mt-6"
            data-modal-target="new-password-modal" data-modal-toggle="new-password-modal">
            New Password
        </button>

        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded-full mt-6"
            data-modal-target="reset-berhasil-modal" data-modal-toggle="reset-berhasil-modal">
            Reset Password Success
        </button>

        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded-full mt-6"
            data-modal-target="complete-data-modal" data-modal-toggle="complete-data-modal">
            Complete Data
        </button>


        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded-full mt-6"
            data-modal-target="success-register-modal" data-modal-toggle="success-register-modal">
            Pendaftaran Berhasil
        </button>


        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded-full mt-6"
            data-modal-target="thankyou-modal" data-modal-toggle="thankyou-modal">
            Ide Submission Berhasil
        </button>

        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded-full mt-6"
            data-modal-target="form-submission-failed-modal" data-modal-toggle="form-submission-failed-modal">
            Ide Gagal Terkirim
        </button>


        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded-full mt-6"
            data-modal-target="blocked-modal" data-modal-toggle="blocked-modal">
            Ide Diblokir
        </button>


        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded-full mt-6"
            data-modal-target="submission-guide-modal" data-modal-toggle="submission-guide-modal">
            Petunjuk Submission
        </button>

        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded-full mt-6"
            data-modal-target="change-success-modal" data-modal-toggle="change-success-modal">
            Ubah Password Berhasil
        </button>

        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded-full mt-6"
            data-modal-target="change-throttled-modal" data-modal-toggle="change-throttled-modal">
            Ubah Password Sedang Sibuk
        </button>


        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded-full mt-6" id="toggleSubmissionModal"
            data-modal-target="submission-form-modal" data-modal-toggle="submission-form-modal">
            Kirim Ide
        </button>


        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded-full mt-6" data-modal-target="unsub-modal"
            data-modal-toggle="unsub-modal">
            Unsubscribe Berhasil
        </button>

        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded-full mt-6"
            data-modal-target="comment-form-modal" data-modal-toggle="comment-form-modal">Submit Komentar
        </button>

        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded-full mt-6"
            data-modal-target="comment-failed-modal" data-modal-toggle="comment-failed-modal">
            Komentar Gagal Terkirim
        </button>

        <button class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded-full mt-6"
            data-modal-target="comment-blocked-modal" data-modal-toggle="comment-blocked-modal">
            Komentar Diblokir
        </button>

    </div>
    <script>
        angular.module('myApp')
            .controller('buttonController', function($scope, $http, $rootScope) {
                $('.alert-link').hide()
                $rootScope.formData = {
                    link: {
                        text: ''
                    }
                }
                $scope.initButton = () => {
                    console.log('ready button')
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
@endsection
