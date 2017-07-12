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
                    <th>Register Date</th>
                    <th>Admin</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    @if($user -> id === Auth::user() -> id)
                        @else
                <tr>
                    <td>{{ $user -> name  }}</td>
                    <td>{{ $user -> email  }}</td>
                    <td> {{ $user -> created_at  }} </td>
                    <td>{{ $user -> admin }}</td>
                    <th>
                        <a href="/admin/users/{{$user -> id}}/delete" class="glyphicon glyphicon-remove btn btn-default btn-sm"></a>
                    </th>
                </tr>
                    @endif
                @endforeach
                <tfoot>
                <tr>
                    <th>Nickname</th>
                    <th>Email</th>
                    <th>Register Date</th>
                    <th>Admin</th>
                    <th>Delete</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

@endsection