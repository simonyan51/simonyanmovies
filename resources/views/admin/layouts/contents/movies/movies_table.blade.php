@extends("admin.index")

@section("movies_table")
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Movies Table &emsp;</h3>
                <a href="/admin/movies/add" class="btn btn-info btn-lg">
                    <span class="glyphicon glyphicon-plus"></span> Add Movie
                </a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Year</th>
                    <th>Rating</th>
                    <th>Country</th>
                    <th>Length</th>
                    <th>Details / Edit / Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($movies as $movie)
                <tr>
                    <td>{{$movie -> image_url}}</td>
                    <td>{{$movie -> title}}</td>
                    <td>{{$movie -> year}}</td>
                    <td>{{$movie -> rating}}</td>
                    <td>{{$movie -> country}}</td>
                    <td>{{$movie -> length}}</td>
                    <th>
                            <a href="/admin/movies/{{$movie -> id}}/detail" class="glyphicon glyphicon-zoom-in btn btn-default btn-sm"></a>

                            <a href="/admin/movies/{{$movie -> id}}/edit" class="btn btn-default btn-sm glyphicon glyphicon-pencil"></a>

                            <a href="/admin/movies/{{$movie -> id}}/delete" class="glyphicon glyphicon-remove btn btn-default btn-sm"></a>
                    </th>
                </tr>
                @endforeach
                <tfoot>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Year</th>
                    <th>Rating</th>
                    <th>Country</th>
                    <th>Length</th>
                    <th>Details / Edit / Delete</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

@endsection