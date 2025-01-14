<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "img_path" => "public/product_image/clock.jpg",
            "name" => "腕時計",
            "price" => "15000",
            "content" => "スタイリッシュなデザインのメンズ腕時計",
            "condition" => "良好",
        ];
        DB::table("products")->insert($param);

        $param = [
            "img_path" => "public/product_image/HDD.jpg",
            "name" => "HDD",
            "price" => "5000",
            "content" => "高速で信頼性の高いハードディスク",
            "condition" => "目立った傷や汚れなし",
        ];
        DB::table("products")->insert($param);

        $param = [
            "img_path" => "public/product_image/onion_3.jpg",
            "name" => "玉ねぎ3束",
            "price" => "300",
            "content" => "新鮮な玉ねぎ3束のセット",
            "condition" => "やや傷や汚れあり",
        ];
        DB::table("products")->insert($param);

        $param = [
            "img_path" => "public/product_image/shoes.jpg",
            "name" => "革靴",
            "price" => "4000",
            "content" => "クラシックなデザインの革靴",
            "condition" => "状態が悪い",
        ];
        DB::table("products")->insert($param);

        $param = [
            "img_path" => "public/product_image/laptop.jpg",
            "name" => "ノートPC",
            "price" => "45000",
            "content" => "高性能なノートパソコン",
            "condition" => "良好",
        ];
        DB::table("products")->insert($param);

        $param = [
            "img_path" => "public/product_image/microphone.jpg",
            "name" => "マイク",
            "price" => "8000",
            "content" => "高音質のレコーディング用マイク",
            "condition" => "目立った傷や汚れなし",
        ];
        DB::table("products")->insert($param);

        $param = [
            "img_path" => "public/product_image/bag.jpg",
            "name" => "ショルダーバッグ",
            "price" => "3500",
            "content" => "おしゃれなショルダーバッグ",
            "condition" => "やや傷や汚れあり",
        ];
        DB::table("products")->insert($param);

        $param = [
            "img_path" => "public/product_image/tumbler.jpg",
            "name" => "タンブラー",
            "price" => "500",
            "content" => "使いやすいタンブラー",
            "condition" => "状態が悪い",
        ];
        DB::table("products")->insert($param);

        $param = [
            "img_path" => "public/product_image/coffee_mill.jpg",
            "name" => "コーヒーミル",
            "price" => "4000",
            "content" => "手動のコーヒーミル",
            "condition" => "良好",
        ];
        DB::table("products")->insert($param);

        $param = [
            "img_path" => "public/product_image/makeup_set.jpg",
            "name" => "メイクセット",
            "price" => "2500",
            "content" => "便利なメイクアップセット",
            "condition" => "目立った傷や汚れなし",
        ];
        DB::table("products")->insert($param);
    }
}