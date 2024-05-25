<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CommentUserNotification extends Notification
{
    use Queueable;
    protected $data;
    /**
     * Create a new notification instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
            $url = url()->previous();
            return (new MailMessage)
                    ->from('noreply@gojek.com', 'open ideas challange')
                    ->greeting('Ide Kamu berhasil menginspirasi orang lain!')
                    ->subject('Yeay Idemu Dapat Komentar')
                    ->line($this->data->property1->name)
                    ->line($this->data->property1->subscribed)
                    ->line(url($this->data->property1->id.'/unsubscribe'))
                    ->action('komentar',$url);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
