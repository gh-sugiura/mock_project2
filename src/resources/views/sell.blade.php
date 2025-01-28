@extends('app_logout')


@section('css')
    <link rel="stylesheet" href="{{asset('css/sell.css')}}">
@endsection


@section('content')
    <div class="sell">
        <div class="sell_heading">
            <p>商品の出品</p>
        </div>
        

        <form class="form_sell" action="/mypage" enctype="multipart/form-data" method="post">
            @csrf
            <div class="sell_img_title">商品画像</div>
            <div class="sell_img_wrap">
                <label for="sell_img">
                    <div class="sell_img">画像を選択する</div>
                    <input class="sell_img_input" id="sell_img" type="file" name="img_path" accept=".png, .jpg, .jpeg">
                </label>    
            </div>
            @error("img_path")
                <div class="error_message">
                    {{$message}} 
                </div>
            @enderror


            <div class="sell_detail">
                <div class="sell_detail_heading">商品の詳細</div>
                    <div class="sell_category_title">カテゴリー</div>
                        <div class="sell_category_wrap">
                            @foreach ($categories as $category) 
                                <div class="sell_category">
                                    <input type="checkbox" class="sell_category_input" id="sell_category_{{$category['id']}}"  name="sell_category[]" value="{{$category['id']}}">
                                    <label for="sell_category_{{$category['id']}}">{{$category["category"]}}</label> 
                                </div>
                            @endforeach
                        </div>
                    @error("sell_category")
                        <div class="error_message">
                            {{$message}} 
                        </div>
                    @enderror

                    <div class="sell_condition_title">商品の状態</div>
                    <select class="sell_condition" name="sell_condition">
                        <option class="sell_condition_option" value="" hidden>選択してください</option>
                        <option class="sell_condition_option" value="良好">良好</option>
                        <option class="sell_condition_option" value="目立った傷や汚れなし">目立った傷や汚れなし</option>
                        <option class="sell_condition_option" value="やや傷や汚れあり">やや傷や汚れあり</option>
                        <option class="sell_condition_option" value="状態が悪い">状態が悪い</option>
                    </select>
                    @error("sell_condition")
                        <div class="error_message">
                            {{$message}} 
                        </div>
                    @enderror
            </div>


            <div class="sell_product">
                <div class="sell_product_heading">商品名と説明</div>
                    <div class="sell_name_title">商品名</div>
                    <input type="text" class="sell_name" name="sell_name" value="{{old('sell_name')}}"/>
                    @error("sell_name")
                        <div class="error_message">
                            {{$message}} 
                        </div>
                    @enderror

                    <div class="sell_content_title">商品の説明</div>
                    <textarea name="sell_content" value="{{old('sell_content')}}"></textarea>
                    @error("sell_content")
                        <div class="error_message">
                            {{$message}} 
                        </div>
                    @enderror

                    <div class="sell_price_title">販売価格</div>
                    <input type="text" class="sell_price" name="sell_price" value="{{old('sell_price')}}"/>
                    @error("sell_price")
                        <div class="error_message">
                            {{$message}} 
                        </div>
                    @enderror
            </div>


            <div class="sell_button">
                <button class="sell_button_text" type="submit">出品する</button>
            </div>          
        </form>
    </div>    
@endsection