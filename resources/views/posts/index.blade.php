<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getlocale())}}">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <h1>Blog Name</h1>
    <div class='posts'>
        @foreach($posts as $post)
        <div class='post'>
            <h2 class='title'>
                <a href="/posts/{{$post->id}}">{{ $post->title}}

                </a>
                <p class='body'>{{$post->body}}</p>
                <form action="/posts/{{$post->id}}" id="from_{{$post->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="button" onclick="deletepost({{$post->id}})">delete</button>
                </form>
        </div>
        @endforeach
    </div>
    <div calss='paginate'>
        {{$posts->links()}}
    </div>
    <h2 class="title">
        <a href="/posts/{{$post->id}}">{{ $post->title}}</a>
    </h2>
    <a href="/posts/create">create</a>
    `from_${id}`
    <script>
        function deletepost(id) {
            'use strict'
            if (confirm('削除すると復元できません。\n本当に削除しますか')) {
                document.getElementById(`from_${id}`).submit();
            }
        }
    </script>
</body>

</html>