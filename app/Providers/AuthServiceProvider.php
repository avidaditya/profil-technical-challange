<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            $url .= '&back=' . url()->previous();
            return (new MailMessage())
                ->from('noreply@gojek.com', 'Open Ideas Challange')
                ->greeting('Tinggal selangkah lagi!')
                ->subject('OIC Email Verifikasi')
                ->action('Verify Email Address', $url);
        });

        ResetPassword::createUrlUsing(function (User $user, string $token) {
            return config('app.url') . '/reset-password?token='.$token;
        });
    }
}
