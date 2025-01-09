<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "user_id" => "1",
            "name" => "sugiura",
            "postalcode" => "123-4567",
            "address" => "北海道",
        ];
        DB::table("profiles")->insert($param);

        $param = [
            "user_id" => "2",
            "name" => "sato",
            "postalcode" => "234-5678",
            "address" => "青森県",
        ];
        DB::table("profiles")->insert($param);

        $param = [
            "user_id" => "3",
            "name" => "tanaka",
            "postalcode" => "345-6789",
            "address" => "岩手県",
        ];
        DB::table("profiles")->insert($param);

        $param = [
            "user_id" => "4",
            "name" => "suzuki",
            "postalcode" => "456-7891",
            "address" => "宮城県",
        ];
        DB::table("profiles")->insert($param);

        $param = [
            "user_id" => "5",
            "name" => "ito",
            "postalcode" => "567-8912",
            "address" => "秋田県",
        ];
        DB::table("profiles")->insert($param);

        $param = [
            "user_id" => "6",
            "name" => "takahashi",
            "postalcode" => "678-9123",
            "address" => "山形県",
        ];
        DB::table("profiles")->insert($param);

        $param = [
            "user_id" => "7",
            "name" => "watanabe",
            "postalcode" => "789-1234",
            "address" => "福島県",
        ];
        DB::table("profiles")->insert($param);

        $param = [
            "user_id" => "8",
            "name" => "yamamoto",
            "postalcode" => "891-2345",
            "address" => "茨城県",
        ];
        DB::table("profiles")->insert($param);

        $param = [
            "user_id" => "9",
            "name" => "nakamura",
            "postalcode" => "912-3456",
            "address" => "栃木県",
        ];
        DB::table("profiles")->insert($param);

        $param = [
            "user_id" => "10",
            "name" => "kobayashi",
            "postalcode" => "987-6543",
            "address" => "群馬県",
        ];
        DB::table("profiles")->insert($param);
    }
}