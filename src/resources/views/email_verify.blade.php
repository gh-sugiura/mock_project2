@extends('app')


@section('css')
    <link rel="stylesheet" href="{{asset('css/email_verify.css')}}">
@endsection


@section('content')
    <div class="confirm_content">
        <div class="confirm_heading">
            <p>確認</p>
        </div>

        <div class="confirm_main">
            <div class="title">
                <p class="title_text">確認メール送信完了</p>
            </div>
            <div class="color_area">
                <p class="color_area_text1">✔</p>
                <p class="color_area_text2">確認メールを送信しました</p>
            </div>
            <div class="message">
                <p class="message_text">ご登録いただいたメールアドレスに確認メールを送信しました。メール本文中の確認ボタン「認証完了」をクリックして登録を完了させて下さい。</p>
            </div>
        </div>                        
    </div>
@endsection