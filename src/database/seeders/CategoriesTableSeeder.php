<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert(["category" => "ファッション"]);
        DB::table("categories")->insert(["category" => "家電"]);
        DB::table("categories")->insert(["category" => "インテリア"]);
        DB::table("categories")->insert(["category" => "レディース"]);
        DB::table("categories")->insert(["category" => "メンズ"]);
        DB::table("categories")->insert(["category" => "コスメ"]);
        DB::table("categories")->insert(["category" => "本"]);
        DB::table("categories")->insert(["category" => "ゲーム"]);
        DB::table("categories")->insert(["category" => "スポーツ"]);
        DB::table("categories")->insert(["category" => "キッチン"]);
        DB::table("categories")->insert(["category" => "ハンドメイド"]);
        DB::table("categories")->insert(["category" => "アクセサリー"]);
        DB::table("categories")->insert(["category" => "おもちゃ"]);
        DB::table("categories")->insert(["category" => "ベビー・キッズ"]);
    }
}