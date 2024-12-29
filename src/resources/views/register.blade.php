@extends('app')


@section('css')
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection


@section('content')
    <div class="register">
        <div class="register_heading">
            <p>会員登録</p>
        </div>
        

        <form class="form_register" action="/register" method="post">
            @csrf
            <div class="register_name">
                <div class="register_name_title">ユーザー名</div>
                <input type="text" name="name" value="{{ old('name') }}"/>                
            </div>
            @error("name")
                <div class="error_message">
                    {{ $message }} 
                </div>
            @enderror


            <div class="register_email">
                <div class="register_email_title">メールアドレス</div>
                <input type="email" name="email" value="{{ old('email') }}"/>
            </div>
            @error("email")
                <div class="error_message">
                    {{ $message }} 
                </div>
            @enderror


            <div class="register_password">
                <div class="register_password_title">パスワード</div>
                <input type="password" name="password"/>
            </div>
            @error("password")
                <div class="error_message">
                    {{ $message }} 
                </div>
            @enderror


            <div class="register_password_confirmation">
                <div class="register_password_confirmation_title">確認用パスワード</div>
                <input type="password" name="password_confirmation"/>
            </div>
            @error("password_confirmation")
                <div class="error_message">
                    {{ $message }} 
                </div>
            @enderror


            <div class="register_button">
                <button class="register_button_text" type="submit">登録する</button>
            </div>

            <div class="link">
                <a href="/login" class="link_login">ログインはこちら</a>
            </div>            
        </form>
    </div>    
@endsection