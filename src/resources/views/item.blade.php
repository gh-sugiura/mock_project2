@extends('app_logout')


@section('css')
    <link rel="stylesheet" href="{{asset('css/item.css')}}">
@endsection


@section('content')
    <div class="display_wrap">
        <div class="display_left">
            <img class="item_img" src="{{asset('storage/'.$product["img_path"])}}" alt="No Image" width="350" height="350">
        </div>


        <div class="display_right">
            <div class="item">
                <div class="item_name">{{$product["name"]}}</div>
                <div class="item_price">
                    @php
                        echo "¥".number_format($product["price"])
                    @endphp
                    <span class="item_price_tax">(税込)</span>
                </div>
                <table class="table">
                    <tr>
                        <td class="table_figure">☆</td>
                        <td class="table_figure">💬</td>
                    </tr>
                    <tr>
                        <td class="table_text">xx</td>
                        <td class="table_text">xx</td>
                    </tr>
                </table>
                <button onclick="location.href='/purchase/{{$product['id']}}'" class="item_link">購入手続きへ</button>
            </div>

            <div class="item_description">
                <div class="description_title">商品説明</div>
                <div class="content">{{$product['content']}}</div>
            </div>

            <div class="item_infomation">
                <div class="infomation_title">商品の情報</div>
                    <div class="infomation_category">
                        <div class="category_title">カテゴリー</div>
                        @foreach ($categories as $category)
                            <div class="category">{{$category}}</div>
                        @endforeach
                    </div>
                <div class="infomation_condition">
                    <div class="condition_title">商品の状態</div>
                    <div class="condition">{{$product['condition']}}</div> 
                </div>
            </div>

            <div class="comment">

                
            </div>


        </div> 
    </div> 
@endsection