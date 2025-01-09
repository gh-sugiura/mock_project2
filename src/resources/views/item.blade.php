@extends('app_logout')


@section('css')
    <link rel="stylesheet" href="{{asset('css/item.css')}}">
@endsection


@section('content')
    <div class="display_wrap">
        <div class="display_left">
            <div class="dummy_product_img"></div>
        </div>
        <div class="display_right">
            {{-- <p class="product_name">{{$product["name"]}}</p> --}}
        </div>
    </div> 
@endsection