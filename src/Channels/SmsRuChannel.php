<?php
namespace Back1ng\SmsRu\Channels;
use Back1ng\SmsRu\Facades\SmsRu;
use Illuminate\Notifications\Notification;

class SmsRuChannel
{
    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        $data = $notification->toSms($notifiable);
        SmsRu::send($data['phone'], $data['message']);
    }
}
