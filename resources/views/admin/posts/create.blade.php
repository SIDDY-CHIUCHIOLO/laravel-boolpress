<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="texyt">Crea nuovo fumetto</h1>
    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf
    
        <label for="title">Inserisci il titolo</label>
        <input type="text" name="title" id="title">
    
        <label for="author">Inserisci l'autore</label>
        <input type="text" name="author" id="author">
    
        <label for="content">Inserisci il contenuto</label>
        <input type="text" name="content" id="content">
    
        <label for="image_url">Inserisci l'url dell'immagine</label>
        <input type="text" name="image_url" id="image_url">

        <label for="slug">Inserisci slug</label>
        <input type="text" name="slug" id="slug">
    
        <button type="submit">Send</button>
    </form>
</body>
</html>