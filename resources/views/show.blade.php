<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table-bordered text-center table-striped">
            <tr>
                <th>Post id</th>
                <th>Post title</th>
                <th>Post author</th>
                <th>Delete Post</th>
                <th>Edit post</th>
                
            </tr>
            @foreach ($posts as $post )
                
            
            <tr>
                  <td>{{ $post->id }}</td>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->author }}</td>
                  <td> <a href="/delete/{{ $post->id }}" class="btn btn-danger">Delete</a></td>
                  <td> <a href="/edit/{{ $post->id }}" class="btn btn-success">Edit</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    
</body>
</html>