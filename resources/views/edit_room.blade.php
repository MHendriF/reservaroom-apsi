<!DOCTYPE html>

<html lang="en">

@section('htmlheader_title', 'Edit Room')
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

    @section('contentheader_title', 'Edit Room')
    @section('contentheader_message', 'Room')
        @include('layouts.partials.contentheader')
        
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6 col-md-offset-3">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="register-logo">
                    <a href="{{ url('#') }}"><b>Edit Room</b></a>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ url('room/'.$data->id) }}" method="post">
                  <input type="hidden" name="_methode" value="PUT">
                  {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group">
                      <label>Room Name</label>
                      <input type="text" name="room_name" class="form-control" value="{{$data->room_name}}">
                    </div>
                    <div class="form-group">
                      <label>Room Type</label>
                      <input type="text" name="type" class="form-control" value="{{$data->type}}">
                    </div>
                    <div class="form-group">
                      <label>Cost</label>
                      <input type="number" name="cost" class="form-control" value="{{$data->cost}}">
                    </div>
                    <div class="form-group">
                      <label>Capacity</label>
                      <input type="number" name="capacity" class="form-control" value="{{$data->capacity}}">
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    {{-- <button type="submit" class="btn btn-default">Cancel</button> --}}
                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
              <!-- /.box -->
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </section>
        <!-- main content -->

    </div><!-- /.content-wrapper -->

    @include('layouts.partials.controlsidebar')

    @include('layouts.includes.footer')

</div><!-- ./wrapper -->
@section('scripts')
    @include('layouts.includes.scripts')

    @include('layouts.partials.scripts_datepicker')
@show
</body>
</html>
