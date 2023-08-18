<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
@include('navbar')
    <div class="container">
        <form method="POST" action="/crud/update/{{$record->id}}">
            @csrf
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> Name </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="crud" name="name" value="{{$record->name}}" />
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> Age </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="crud" name="age" value="{{$record->age}}" />
                </div>
            </div>

            <input type="submit" name="submit" id="btn-submit" value="Update" class="btn btn-primary" />
        </form>
    </div>
</body>

</html>