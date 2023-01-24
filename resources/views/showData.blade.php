<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center my-5 border-bottom border-dark-subtle">Curd Operation</h1>
        <a class="btn btn-primary my-4" href="{{route('addData')}}">Add User</a>
        <table class="table table-striped table-bordered ">
            <thead>
              
                <tr>
                <th scope="col">Sl</th>
                <th scope="col">First</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach($showData as $key=> $data)
                <tr>
                <td class="center">{{ $key+1 }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>
                  <a href="{{ route('post.edit', $data->id) }}" class="btn btn-success mx-4">Edit</a>
                  <a href="{{ route('delete.post', $data->id) }}" class="btn btn-danger">Delete</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $showData->links() }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>