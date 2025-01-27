<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use datetime;

//DB::table('テーブル名’)->insert(['カラム名'=>'データ']);
//use I

class postseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => '命名の心得',
            'body' => '命名はデータを基準に考える',
            'created_at' => new datetime(),
            'updated_at' => new datetime(),
        ]);
        //
    }
}
