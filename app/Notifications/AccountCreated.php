<?php

namespace App\Notifications;

use App\Models\Account;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AccountCreated extends Notification
{
    use Queueable;

    private Account $account;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Account $account)
    {
        //
        $this->account = $account;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        return (new MailMessage)
                    ->greeting("Hi! This is to notify you that a new CDB Account is added.")
                    ->line("Account Name: {$this->account->AccountName}")
                    ->line("Account Group: {$this->account->AccountGroup}")
                    ->line("Account Type: {$this->account->AccountType}")
                    ->line("Domain Account: {$this->account->DomainAccount}")
                    ->line("Email: {$this->account->Email}")
                    ->line("Nickname: {$this->account->NickName}")
                    ->action('Go to TestApp', url('/'))
                    ->line('Thank you!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
