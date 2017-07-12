<!DOCTYPE html>
<html>
@include("admin.head.head")
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include("admin.layouts.headers.header")
    <!-- Left side column. contains the logo and sidebar -->
    @include("admin.layouts.sidebars.sidebar")

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <section class="content">

            @yield("dashboard1")

            @yield("users_table")

            @yield("movies_table")

            @yield("movie_add")

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

        @include("admin.layouts.footers.footer")
        @include("admin.layouts.sidebars.right_sidebar")
</div>


@include("admin.scripts.scripts")
</body>
</html>
