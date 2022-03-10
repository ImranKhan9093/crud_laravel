<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
      .error-message{
         color: red;
         font-size: 12px;
        
      }
    </style>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
     <div class="container">
         <h1 class="text-center">Edit Post</h1>
       <form action="/update/{{ $post->id }}" method="POST">
        @csrf
        @method('GET')
        
            <div class="mb-3">
               <label for="title">Post title:</label>
               <input type="text" name="title" class="form-control" value="{{ $post->title }}">
               @error('title')
              <div class="error-message">{{ $message }}</div>
                   
               @enderror
            </div>
            <div class="mb-3">
                <label for="author">Post author:</label>
                <input type="text" name="author" class="form-control" value="{{ $post->author }}">
                @error('author')
                <div class="error-message">{{ $message }}</div>
                   
               @enderror
             </div>
             <input type="submit" name="update" value="update" class="btn btn-sucess">

       </form>
       
       
     </div>
     
</body>
</html>