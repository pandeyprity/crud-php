<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    
    @include('navbar')
    <div class="container">
        <form method="POST" action="/user/update/{{$user->id}}">
            @csrf
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> Name </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="crud" name="name" value="{{$user->name}}" />
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> Email </label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" />
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label"> Password </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="password" name="password" value="{{$user->password}}" />
                </div>
            </div>

            <!-- Assuming you have passed $record and $userTypes from the controller to the view -->

            <!-- Assuming you have passed $user and $userTypes from the controller to the view -->

            <div class="row mb-3">
                <label for="user_type_id" class="col-sm-2 col-form-label">User Type</label>
                <div class="col-sm-10">
                    <select class="form-control" id="user_type_id" name="user_type_id">
                        <option value="">-- Select --</option>
                        @foreach($userTypes as $userType)
                            <option value="{{ $userType->id }}" {{ $userType->id === $user->user_type_id ? 'selected' : '' }}>
                                {{ $userType->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>



            <input type="submit" name="submit" id="btn-submit" value="Update" class="btn btn-primary" />
        </form>
    </div>
</body>

</html>