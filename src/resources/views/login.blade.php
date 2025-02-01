@extends('app')


@section('css')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection


@section('content')
    <div class="login">
        <div class="login_heading">
            <p>ログイン</p>
        </div>
        

        <form class="form_login" action="/login" method="post">
            @csrf
            <div class="login_email">
                <div class="login_email_title">メールアドレス</div>
                <input type="email" name="email" value="{{ old('email') }}"/>
            </div>
            @error("email")
                <div class="error_message">
                    {{ $message }} 
                </div>
            @enderror


            <div class="login_password">
                <div class="login_password_title">パスワード</div>
                <input type="password" name="password"/>
            </div>
            @error("password")
                <div class="error_message">
                    {{ $message }} 
                </div>
            @enderror


            <div class="login_button">
                <button class="login_button_text" type="submit">ログインする</button>
            </div>

            <div class="link">
                <a href="/register" class="link_register">会員登録はこちら</a>
            </div>            
        </form>
    </div>    
@endsection