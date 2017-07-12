@extends("admin.index")

@section("movies_table")
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Movies Table</h3>
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
                <tr>
                    <td>Trident</td>
                    <td>Internet
                        Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                    <td>X</td>
                    <th>
                        <button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-zoom-in"></span>
                        </button>

                        <button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </button>

                        <button type="button" class="btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    </th>
                </tr>
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