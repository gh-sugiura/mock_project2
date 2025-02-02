@extends('app_logout')


@section('css')
    <link rel="stylesheet" href="{{asset('css/mypage.css')}}">
@endsection


@section('content')
    <div class="profile_infomation">
        <div class="profile_img">
            @if (isset($profile['img_path']))
                <img class="img_area" src="{{asset('storage/'.$profile["img_path"])}}" alt="No Image" width="200" height="200">  
            @else
                <img class="img_area" src="{{asset('profile_image_background.jpg')}}" alt="No Image" width="200" height="200">                
            @endif
        </div>
        <div class="profile_name">{{$profile["name"]}}</div>
        <a href="/mypage/profile" class="edit_profile_link">プロフィールを編集</a>
    </div>

    <div class="tab">
        <a href="/mypage" class="tab_sell">出品した商品</a>
        <a href="" class="tab_buy">購入した商品</a>
    </div>

    <div class="product_card_wrap">
        @foreach ($products as $product)
            <div class="product_card">
                <div class="product_img_wrap">
                    <a href="/item/{{$product['id']}}">
                        <img class="product_img" src="{{asset('storage/'.$product["img_path"])}}" alt="No Image" width="250" height="250">
                    </a>
                </div>
                <a href="/item/{{$product['id']}}" class="product_name">{{$product["name"]}}</a>
            </div>
        @endforeach
    </div>
@endsection