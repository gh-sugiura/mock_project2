<?php
// edit from default

namespace App\Providers;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->subject("会員登録 認証確認メール")
                ->greeting("会員登録、ありがとうございます。")
                ->line("以下のボタンをクリックして認証完了となります。\nクリック後は、トップ画面が表示されます。")
                ->action("認証完了", $url)
                ->line("※本メールは自動送信となります。本メールにお心当たりがない方は、お手数をおかけしますがメールを破棄して頂きますようお願い申し上げます。")
                ->salutation("以上、宜しくお願い致します。");
        });
    }
}