@extends("admin.index")

@section("users_table")
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Users Table</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nickname</th>
                    <th>Email</th>
                    <th>Orders</th>
                    <th>Register Date</th>
                    <th>Admin</th>
                    <th>Edit / Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user -> name  }}</td>
                    <td>{{ $user -> email  }}</td>
                    <td>...</td>
                    <td> {{ $user -> created_at  }} </td>
                    <td>{{ $user -> admin }}</td>
                    <th>

                        <button type="button" class="btn btn-default btn-sm" >
                            <a href="/admin/users/{{$user -> id}}/edit" class="glyphicon glyphicon-pencil"></a>
                        </button>

                        <button type="button" class="btn btn-default btn-sm" href="/admin/users/{{$user -> id}}/delete">
                            <a href="/admin/users/{{$user -> id}}/delete" class="glyphicon glyphicon-remove"></a>
                        </button>

                    </th>
                </tr>
                @endforeach
                <tfoot>
                <tr>
                    <th>Nickname</th>
                    <th>Email</th>
                    <th>Orders</th>
                    <th>Register Date</th>
                    <th>Admin</th>
                    <th>Edit / Delete</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

@endsection