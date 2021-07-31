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
    @if(Session::has('add_check'))
    <span>{{Session::get('add_check')}}</span>
    @endif
        <form method="post" action="{{route('save.add')}}">
        @csrf
        Post: <br><input type="text" name="name" value=""><br>
        Description: <br><textarea name="description"></textarea><br>
        <input type="submit" name="submit">
        </form>
    </body>
</html>
