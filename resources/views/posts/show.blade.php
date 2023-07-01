<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="antialiased">
        <x-app-layout>
            <x-slot name="header">
                Post Show
            </x-slot>
            <h1 class='title'>
                {{ $post->title}}
            </h1>
            <div class='content'>
                <div class='content_post'>
                    <h3>本文</h3>
                    <p class='body'>{{$post->body}}</p>
                </div>
            </div>
            <div class='edit'>
                <a href='/posts/{{ $post->id }}/edit'>[edit]</a>
            </div>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            <div class='footer'>
                <a href="/">戻る</a>
            </div>
        </x-app-layout>
    </body>
</html>
        
     
