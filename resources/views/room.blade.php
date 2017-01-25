<!DOCTYPE html>

<html lang="en">

@section('htmlheader_title', 'Manage Room')
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
        @section('contentheader_title', 'Manage Room')
        @section('contentheader_message', 'Manage')
        @include('layouts.partials.contentheader')
       
        <!-- Main content -->
        <section class="content">
          @include('layouts.includes._message')
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Database Room</h3>
                   <a href="{{ url('room/create') }}" class="btn btn-success"><i class="fa fa-plus-square"></i> Add Room</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID Room</th>
                      <th>Name</th>
                      <th>Type</th>
                      <th>Cost</th>
                      <th>Capacity</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $room)       
                    <tr>
                      <td>{{ $room->id }}</td>
                      <td>{{ $room->room_name }}</td>
                      <td>{{ $room->type }}</td>
                      <td>{{ $room->cost }}</td>
                      <td>{{ $room->capacity }}</td>
                      <td><a href="{{ url('room/'.$room->id.'/edit') }}" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a></td>
                      <td>
                          <form action="{{ url('room/'.$room->id) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
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