<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Mofifica fumetto</h1>
    <form action="{{route('admin.posts.update', ['post'=>$post])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Modifica il titolo</label>
        <input type="text" name="title" id="title" value="{{$post->title}}">
    
        <label for="author">Modifica l'autore</label>
        <input type="text" name="author" id="author" value="{{$post->author}}">
    
        <label for="content">Modifica il contenuto</label>
        <input type="text" name="content" id="content" value="{{$post->content}}">
    
        <label for="image_url">Modifica l'url dell'immagine</label>
        <input type="text" name="image_url" id="image_url" value="{{$post->image_url}}">

        <label for="slug">Modifica slug</label>
        <input type="text" name="slug" id="slug" value="{{$post->slug}}">
    
        <button type="submit">Send</button>
    </form>
</body>
</html>