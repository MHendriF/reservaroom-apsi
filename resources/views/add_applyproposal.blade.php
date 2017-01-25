<!DOCTYPE html>

<html lang="en">

@section('htmlheader_title', 'Apply Proposal')
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

    @section('contentheader_title', 'Apply Proposal')
    @section('contentheader_message', 'Proposal')
        @include('layouts.partials.contentheader')
        
        <!-- Main content -->
         <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6 col-md-offset-3">
              <!-- general form elements -->
              <div class="box box-primary">
                 <div class="register-logo">
                    <b>Reservation Form</b>
                </div>
                <!-- /.box-header -->
                @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <strong>Whoops!</strong> {{ trans('message.someproblems') }}<br><br>
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                @endif
                <!-- form start -->
                <form action="{{ url('applyproposal') }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                 
                  <div class="box-body">
                    <input type="hidden" name="id_user" class="form-control" value='{{Auth::user()->id}}'>
                   
                    <div class="form-group">
                      <label>Event Name</label>
                      <input type="text" name="event_name" class="form-control">
                    </div>
                    <!--Room-->

                    <div class="form-group">
                      <label>Room</label>
                      <select class="form-control select2" style="width: 100%;" name="id_room">
                       @foreach($data as $room)
                          <option value='{{ $room->id}}'> {{ $room->room_name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <!--Room--> 
                    <!-- Start Date -->
                    <div class="form-group">
                      <label>Start Date</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        {{-- <input type="text" name="event_date" class="form-control pull-right" id="datepicker"> --}}
                        <input type="date" name="startdate" class="form-control pull-right">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label>End Date</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        {{-- <input type="text" name="event_date" class="form-control pull-right" id="datepicker"> --}}
                        <input type="date" name="enddate" class="form-control pull-right">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                   {{--  <div class="bootstrap-timepicker">
                      <div class="form-group">
                        <label>Start</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                          </div>
                          <input type="text" class="form-control timepicker">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
                    </div>
                    <div class="bootstrap-timepicker">
                      <div class="form-group">
                        <label>End</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                          </div>
                          <input type="text" class="form-control timepicker">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
                    </div> --}}
                    
                    <div class="form-group">
                      <label>File input</label>
                      <input type="file" name="proposal">
                      <p class="help-block">Input file format .pdf only.</p>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                  </div>
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
