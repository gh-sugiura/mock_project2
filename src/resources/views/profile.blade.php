@extends('app_logout')


@section('css')
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endsection


@section('content')
    <div class="profile">
        <div class="profile_heading">
            <p>プロフィール設定</p>
        </div>
        

        <form class="form_profile" action="/mypage" enctype="multipart/form-data" method="post">
            @csrf
            <div class="profile_img">
                @if (isset($profile['img_path']))
                    <img class="img_area" src="{{asset('storage/'.$profile["img_path"])}}" alt="No Image" width="200" height="200">  
                @else
                    <img class="img_area" src="{{asset('profile_image_backgrand.png')}}" alt="No Image" width="200" height="200">                
                @endif
                <div>
                    {{-- input type="file"でデフォルト表示される「選択されていません」を非表示にするため、inputを非表示にしてlabelを設定 --}}
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
                @if (isset($profile['name']))
                    <input type="text" name="name" value="{{$profile['name']}}"/>  
                @else
                    <input type="text" name="name" value="{{old('name')}}"/>                
                @endif
            </div>
            @error("name")
                <div class="error_message">
                    {{ $message }} 
                </div>
            @enderror


            <div class="profile_postalcode">
                <div class="profile_postalcode_title">郵便番号(ハイフンあり)</div>
                @if (isset($profile['postalcode']))
                    <input type="text" name="postalcode" value="{{$profile['postalcode']}}"/>  
                @else
                    <input type="text" name="postalcode" value="{{old('postalcode')}}"/>                
                @endif  
            </div>
            @error("postalcode")
                <div class="error_message">
                    {{ $message }} 
                </div>
            @enderror


            <div class="profile_address">
                <div class="profile_address_title">住所</div>
                @if (isset($profile['address']))
                    <input type="text" name="address" value="{{$profile['address']}}"/>  
                @else
                    <input type="text" name="address" value="{{old('address')}}"/>                
                @endif 
            </div>
            @error("address")
                <div class="error_message">
                    {{ $message }} 
                </div>
            @enderror


            <div class="profile_building">
                <div class="profile_building_title">建物名</div>
                @if (isset($profile['building']))
                    <input type="text" name="building" value="{{$profile['building']}}"/>  
                @else
                    <input type="text" name="building" value="{{old('building')}}"/>                
                @endif 
            </div>
            @error("building")
                <div class="error_message">
                    {{ $message }} 
                </div>
            @enderror


            <div class="profile_button">
                <button class="profile_button_text" type="submit">更新する</button>
            </div>          
        </form>
    </div>    
@endsection