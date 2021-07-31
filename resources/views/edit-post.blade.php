<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Post</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    
    </head>
    <body class="antialiased">
    @if(Session::has('post_update'))
    <span>{{Session::get('post_update')}}</span>
    @endif
        <form method="post" action="{{route('update.post')}}">
        @csrf
        <input type="hidden" name="id" value="{{$post->id}}">
        Post: <br><input type="text" name="name" value="{{$post->name}}"><br>
        Description: <br><textarea name="description">{{$post->description}}</textarea><br>
        <input type="submit" name="submit">
        </form>
    </body>
</html>
