@extends('app')


@section('css')
    <link rel="stylesheet" href="{{asset('css/address.css')}}">
@endsection


@section('content')
    <div class="address">
        <div class="address_heading">
            <p>住所の変更</p>
        </div>
        

        <form class="form_address" action="/purchase/address" method="post">
            @csrf
            <div class="address_postalcode">
                <div class="address_postalcode_title">郵便番号（ハイフンあり）</div>
                <input type="text" name="postalcode" value="{{ old('postalcode') }}"/>                
            </div>
            @error("postalcode")
                <div class="error_message">
                    {{ $message }} 
                </div>
            @enderror


            <div class="address_address">
                <div class="address_address_title">住所</div>
                <input type="text" name="address" value="{{ old('address') }}"/>
            </div>
            @error("address")
                <div class="error_message">
                    {{ $message }} 
                </div>
            @enderror


            <div class="address_building">
                <div class="address_building_title">建物名</div>
                <input type="text" name="building" value="{{ old('building') }}"/>
            </div>
            @error("building")
                <div class="error_message">
                    {{ $message }} 
                </div>
            @enderror


            <div class="address_button">
                <button class="address_button_text" type="submit">更新する</button>
            </div>         
        </form>
    </div>    
@endsection