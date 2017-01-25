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
      @section('contentheader_title', 'Admin Give Permission')
      @section('contentheader_message', 'Give Permission')
      @include('layouts.partials.contentheader')
        
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Reservation List</h3>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Room</th>
                      <th>Event</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Permission Status</th>
                      <th>Proposal Status</th>
                      <th>End Status</th>
                      <th>Proposal</th>
                      <th>Approve</th>
                      <th>Reject</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $a)       
                    <tr>
                      <td>{{ $a->id }}</td>
                      <td>{{ $a->pilihuser->name }}</td>
                      <td>{{ $a->pilihroom->room_name}}</td>
                      <td>{{ $a->event_name }}</td>
                      <td>{{ $a->startdate }}</td>
                      <td>{{ $a->enddate }}</td>
                      <td>{{ $a->permission_status }}</td>
                      <td>{{ $a->proposal_status }}</td>
                       <td>{{ $a->endstatus }}</td>
                       <td><a href="dokumen/{{ $a->proposal }}" download="{{ $a->proposal }}" class="btn btn-primary"><i class="fa  fa-cloud-download"> Download</i></a></td>
                      <td>
                          <form action="{{ url('admnistratorgivepermission/'.$a->id) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="permission_status" class="form-control" value="Approved">
                            <center><button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i></button></center>
                          </form>
                      </td>
                      <td>
                          <form action="{{ url('admnistratorgivepermission/'.$a->id) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                             <input type="hidden" name="permission_status" class="form-control" value="Rejected">
                            <center><button type="submit" class="btn btn-danger"><i class="fa fa-ban"></i></button></center>
                          </form>
                      </td>
                     
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->

    </div><!-- /.content-wrapper -->

    @include('layouts.partials.controlsidebar')

    @include('layouts.includes.footer')

</div><!-- ./wrapper -->

@section('scripts')
    @include('layouts.includes.scripts')
    
    @include('layouts.partials.scripts_table')
    @include('layouts.partials.scripts_dataTable')
@show

</body>
</html>



    <!-- Main content -->
   
