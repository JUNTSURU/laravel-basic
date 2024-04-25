<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //venrorfactryクラスで定義した内容に基づいてダミーデータを５つ作成し、vendorsテーブルに追加する
        Vendor::factory()->count(5)->create();
    }
}
