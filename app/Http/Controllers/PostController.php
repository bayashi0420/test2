<?php

namespace App\Http\Controllers;

//use宣言で外部にあるクラスをPostController内にインポート

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post; //App\Models内のPostクラスをインポート


class PostController extends Controller
{
    public function index(Post $post) //インポートしたPostをインスタンス化して$postとして使用
    {
        return view('posts.index')->with(['posts' => $post->getpaginatebylimit(3)]);
        //blade内で使う変数'posts'と設定。'posts'の中身にgetを使いインスタンス化した$postを代入
    }
    //
    /** 
     * 特定のIDのPOSTを表示する
     * 
     * ＠params object post //引数の＄postはid=1のPostインスタンス
     * ＠return Pesponse post view
     */
    public function show(Post $post)
    {
        return view("posts.show")->with(["post" => $post]);
    }
    public function create(Category $category)
    {
        return view("posts.create")->with(['categories' => $category->get()]);
    }
    public function store(Post $post, PostRequest $request)
    {
        $input = $request["post"];
        $post->fill($input)->save();
        return redirect("/posts/" . $post->id);
    }
    public function edit(post $post)
    {
        return view('posts.edit')->with(["post" => $post]);
    }
    public function update(PostRequest $request, post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }
}
