<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PublishSolusiNotification extends Notification
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
        $url = url('problems-and-ideas/'.$this->data->property2->slug);

        return (new MailMessage)
                    ->from('noreply@gojek.com', 'Open Ideas Challange')
                    ->greeting('Selamat!')
                    ->subject('Selamat! Idemu Sudah Terpublikasi')
                    ->line($this->data->property1->name)
                    ->line($this->data->property1->subscribed)
                    ->line(url($this->data->property1->id.'/unsubscribe'))
                    ->action('publish_solusi',$url);
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
