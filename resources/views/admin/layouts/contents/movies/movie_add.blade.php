@extends("admin.index")

@section("movie_add")
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Add Movie</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Title</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input1" placeholder="Title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input2" class="col-sm-2 control-label">Year</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input2" placeholder="Year">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input3" class="col-sm-2 control-label">Country</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input3" placeholder="Country">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input4" class="col-sm-2 control-label">Length</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input4" placeholder="Length">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input5" class="col-sm-2 control-label">Producer</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input5" placeholder="Producer">
                    </div>
                </div>


                <div class="form-group">
                    <label for="input7" class="col-sm-2 control-label">Starting</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input7" placeholder="Starting">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input6" class="col-sm-2 control-label">Image</label>

                    <div class="col-sm-10">
                        <input type="file" id="input6" placeholder="Image">
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="/admin/movies" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Add Movie</button>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
@endsection