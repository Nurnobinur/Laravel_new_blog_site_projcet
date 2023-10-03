@extends("layout.layout")
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card text-dark bg-info mb-3">
                    <div class="card-header text-center text-info">Add Category:</div>
                    <div class="card-body">
                        <form action="{{url('category')}}" method="post">
                            @csrf
                            <div class="mb-3">
                              <label for="user_id" class="form-label">Select User Name:</label>
                              @error("user_id")
                                <div class="alert alert-danger"> {{$message}}</div>
                             @enderror
                              <select name="user_id" id="user_id" class="form-control">
                                <option value="{{old('user_id')}}">Select One</option>
                                @foreach ($userdata as $singledata)
                                    <option value="{{$singledata->id}}">{{$singledata->name}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="category_name" class="form-label">Enter Category Name:</label>
                              @error("name")
                                <div class="alert alert-danger"> {{$message}}</div>
                             @enderror
                              <input value="{{old('name')}}" name="name" type="text" class="form-control" id="category_name" placeholder="enter category name.....">
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </form>
                    </div>
            </div>
        </div>
    </div>
@endsection
