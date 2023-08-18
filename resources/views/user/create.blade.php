<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
@include('navbar')
    <div class="container my-5">
        <form method="POST" action="/user/store">
            @csrf
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> Name </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="crud" name="name" value="" />
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> Email </label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="" />
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> Password </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="password" name="password" value="" />
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="user_type_id" class="col-sm-2 col-form-label"> User type </label>
                <div class="col-sm-10">
                    <select class="form-control" id="user_type_id" name="user_type_id" required>
                        <option value=""> -- Select -- </option>
                            @foreach($usertypes as $usertype)
                            <option value="{{$usertype->id}}"> {{$usertype->name}} </option>
                            @endforeach
                    </select>
                </div>
            </div>

            <input type="submit" name="submit" id="btn-submit" value="Save" class="btn btn-primary" />
            <a href="/user/show" class= "btn btn-danger">Cancle</a>

        </form>
    </div>
</body>

</html>
