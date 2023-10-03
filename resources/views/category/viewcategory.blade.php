@extends("layout.layout")
@section("content")
    <div class="container">
        <div class="r">
            <div class="col-md-10 offset-1">
                <div class="card text-dark bg-info mb-3">
                    <div class="card-header text-center text-dark">Category list</div>
                    <div class="card-body">
                        @if (session("message"))
                            <div class="alert alert-info text-center">{{session("message")}}</div>
                        @endif
                        <a href="{{url('category/create')}}" class="btn btn-success btn-md mb-3">Add Category</a>
                        <table class="table table-success table-striped text-center">
                          <tr>
                            <th>SL Number:</th>
                            <th>User Name:</th>
                            <th>Category Name:</th>
                            <th>Action:</th>
                          </tr>
                          @forelse ($categoryview as $key=>$singlecategory)
                            <tr>
                                <td>{{$categoryview->firstItem()+$key}}</td>
                                <td>{{$singlecategory->user->name}}</td>
                                <td>{{$singlecategory->name}}</td>
                                <td>
                                    <a class="btn btn-info btn-sm d-inline-block" href='{{url("category/$singlecategory->id/edit")}}'>Edit Category</a></a>
                                    <form class="d-inline" action='{{url("category/$singlecategory->id")}}' method="post">
                                        @csrf
                                        @method("delete")
                                        <input onclick="return confirm('R U Sure This Data??')" class="btn btn-danger btn-sm" type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>
                          @empty
                              <tr>
                                <td colspan="50">No Data Available!</td>
                              </tr>
                          @endforelse

                        </table>
                        {{$categoryview->links()}}
                </div>
            </div>
        </div>
    </div>


@endsection
