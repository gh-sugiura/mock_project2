<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COACHTECHフリマ</title>
    <link rel="icon" href="{{asset('favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
</head>


<body>
    <header class="header">
        <div class="header_logo">
            <img src="{{asset('logo_CT_COACHTECH.svg')}}" alt="COACH TECH">     
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>


</html>