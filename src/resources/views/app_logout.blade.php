<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COACHTECHフリマ</title>
    <link rel="icon" href="{{asset('favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/app_logout.css')}}">
    @yield('css')
</head>


<body>
    <header class="header">
        <div class="header_logo">
            <a href="/index">
                <img src="{{asset('logo_CT_COACHTECH.svg')}}" alt="COACH TECH"> 
            </a>  
        </div>
        <div class="header_search">
            <form class="form_search_button" action="/index" method="get">
                @csrf
                <input class="search_box" type="search" name="search_name" placeholder="なにをお探しですか？" spellcheck="false"></input>
                <button class="search_button" name="button" value="search">検索</button>
            </form>
        </div>
        <div class="header_link">
            <form class="header_link_logout" action="/logout" method="post">
                @csrf
                <button class="link_logout">ログアウト</button>
            </form>
            <a href="/mypage" class="link_mypage">マイページ</a>
            <a href="/sell" class="link_exhibit">出品</a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
    @yield('script')
</body>


</html>