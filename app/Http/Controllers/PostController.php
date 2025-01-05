<?php

namespace App\Http\Controllers;

//use宣言で外部にあるクラスをPostController内にインポート
use App\Models\Post; //App\Models内のPostクラスをインポート
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post) //インポートしたPostをインスタンス化して$postとして使用
    {
        return $post->get(); //$postの中身を戻り値にする
    }
    //
}
