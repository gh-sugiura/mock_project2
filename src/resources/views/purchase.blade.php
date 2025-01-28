@extends('app_logout')


@section('css')
    <link rel="stylesheet" href="{{asset('css/purchase.css')}}">
@endsection


@section('content')
    <form action="/index" method="post">
    <div class="display_wrap">
        <div class="display_left">
            <div class="purchase_product_wrap">
                <img class="product_img" src="{{asset('storage/'.$product["img_path"])}}" alt="No Image" width="180" height="180">
                <div class="purchase_product">
                    <div class="product_name">{{$product["name"]}}</div>
                    <div class="product_price">
                        @php
                            echo "¥".number_format($product["price"])
                        @endphp
                    </div>
                </div>
            </div>
            <div class="purchase_payment_wrap">
                <p class="purchase_payment_title">支払い方法</p>
                <select class="purchase_payment" id="purchase_payment" name="purchase_payment">
                    <option class="purchase_payment_option" value="hidden" hidden>選択してください</option>
                    <option class="purchase_payment_option" value="コンビニ支払い">コンビニ支払い</option>
                    <option class="purchase_payment_option" value="カード支払い">カード支払い</option>
                </select>
                @error("purchase_payment")
                    <div class="error_message">
                        {{$message}} 
                    </div>
                @enderror
            </div>
            <div class="purchase_address_wrap">
                <div class="purchase_address_heading">
                    <p class="purchase_address_title">配送先</p>
                    <p class="purchase_address_link">
                        <a href="/purchase/address/{{$product['id']}}" class="address_link">変更する</a>
                    </p>
                </div>
                <div class="purchase_address_postalcode">〒{{$profile["postalcode"]}}</div>
                <div class="purchase_address">{{$profile["address"]}}{{$profile["building"]}}</div>
            </div>
        </div>


        <div class="display_right">
            <div class="purchase_table_wrap">
                <table class="purchase_table">
                    <tr>
                        <td>商品代金</td>
                        <td>
                            @php
                                echo "¥".number_format($product["price"])
                            @endphp
                        </td>
                    </tr>
                    <tr>
                        <td>支払い方法</td>
                        <td id="purchase_payment_table">---</td>
                    </tr>
                </table>
            </div>
            <div class="purchase_button_wrap">
                <button class="purchase_button" type="submit">購入する</button>
            </div>
        </div>  
    </div>
    </form>
@endsection


@section('script')
    <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous">
    </script>
    <script src="{{asset('js/purchase.js')}}"></script>
@endsection