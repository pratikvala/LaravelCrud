<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
    <a href="{{ route('create') }}" class="btn ">Add User</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($list as $value)
            <tr>
              <th> {{ $value->id }}</th>
              <th> {{ $value->name }}</th>
              <th> {{ $value->email }}</th>
              <th> <a href="{{ route('edit',$value->id) }}">Edit</a> <a href="{{ route('delete',$value->id) }}">Delete</a></th>
            </tr>
            @endforeach
        </tbody>
      </table>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</html>
