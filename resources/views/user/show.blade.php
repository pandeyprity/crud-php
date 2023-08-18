<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
@include('navbar')
<div class="container">

    <a href="/user/create" class="btn btn-primary" style="float: right;"> New Record </a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">sl no.</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">User type</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $record)
            <tr>
                <th scope="row">{{ $loop->iteration  }}</th>
                <td>{{ $record->name}}</td>
                <td>{{ $record->email}}</td>
                <td>{{ $record->userType->name}}</td>
                <td>{{ $record->created_at}}</td>
                <td>{{ $record->updated_at}}</td>
                <td>
                    <a href="/user/edit/{{$record->id}} " class="btn btn-success"> Edit</a>
                    <a href="/user/delete/{{$record->id}}" class="btn btn-danger"> Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>

</html>