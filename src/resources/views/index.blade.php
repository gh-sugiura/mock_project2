@extends('app_logout')


@section('css')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection


@section('content')
    <div class="tab">
        <a href="/index" class="tab_recommendation">おすすめ</a>
        <a href="" class="tab_mylist">マイリスト</a>
    </div>

    <div class="product_card_wrap">
        @foreach ($products as $product)
            <div class="product_card">
                <div class="product_img_wrap">
                    <a href="/item/{{$product['id']}}">
                        {{-- <img class="product_img" src="{{asset('storage/product_image/bag.jpg')}}" alt="No Image" width="250" height="250"> --}}
                        <img class="product_img" src="{{asset('storage/'.$product["img_path"])}}" alt="No Image" width="250" height="250">
                    </a>
                </div>
                <a href="/item/{{$product['id']}}" class="product_name">{{$product["name"]}}</a>
            </div>
        @endforeach
    </div>
@endsection