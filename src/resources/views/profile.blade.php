@extends('app_logout')


@section('css')
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endsection


@section('content')
    <div class="profile">
        <div class="profile_heading">
            <p>プロフィール設定</p>
        </div>
        
        <form class="form_profile" action="/mypage/profile" enctype="multipart/form-data" method="post">
            @csrf
            <div class="profile_img">
                <img class="img_area" src="{{asset('profile_image_backgrand.png')}}" alt="No Image" width="250" height="200">
                <div>
                    <label for="id_img">
                        <div class="lavel_img">画像を選択する</div>
                        <input class="input_img" id="id_img" type="file" name="img_path" accept=".png, .jpg, .jpeg">
                    </label> 
                    @error("img_path")
                        <div class="error_message">
                            {{ $message }} 
                        </div>
                    @enderror
                </div>             
            </div>


            <div class="profile_name">
                <div class="profile_name_title">ユーザー名</div>
                <input type="text" name="name" value="{{ old('name') }}"/>                
            </div>
            @error("name")
                <div class="error_message">
                    {{ $message }} 
                </div>
            @enderror


            <div class="profile_postalcode">
                <div class="profile_postalcode_title">郵便番号(ハイフンあり)</div>
                <input type="postalcode" name="postalcode" value="{{ old('postalcode') }}"/>
            </div>
            @error("postalcode")
                <div class="error_message">
                    {{ $message }} 
                </div>
            @enderror


            <div class="profile_address">
                <div class="profile_address_title">住所</div>
                <input type="address" name="address"/>
            </div>
            @error("address")
                <div class="error_message">
                    {{ $message }} 
                </div>
            @enderror


            <div class="profile_building">
                <div class="profile_building_title">建物名</div>
                <input type="text" name="building"/>
            </div>


            <div class="profile_button">
                <button class="profile_button_text" type="submit">更新する</button>
            </div>          
        </form>
    </div>    
@endsection