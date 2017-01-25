<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader_title', 'Permission')
    @include('layouts.includes.htmlheader')
@show

@if(Auth::user()->status == 'User')
<body class="skin-green sidebar-mini">
@else
<body class="skin-blue sidebar-mini">
@endif
<div class="wrapper">

    @include('layouts.partials.mainheader')

    @include('layouts.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('layouts.partials.contentheader')
        
        <!-- Main content -->


        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table>
                <thead>
                  <tr>
                    <th>id reservation</th>
                    <th>id user</th>
                    <th>id room</th>
                    <th>end status</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($reservasi as $dat)
                  <tr>
                    <td>{{$dat->id_reservation}}</td>
                    <td>{{$dat->id_user}}</td>
                    <td>{{$dat->id_room}}</td>
                    <td>{{$dat->endstatus}}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
                          
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        
        <!-- /.content -->

    </div><!-- /.content-wrapper -->

    @include('layouts.partials.controlsidebar')

    @include('layouts.includes.footer')

</div><!-- ./wrapper -->

@section('scripts')
    @include('layouts.includes.scripts')

    @include('layouts.partials.scripts_calendar')
@show

</body>
</html>



    <!-- Main content -->
   
