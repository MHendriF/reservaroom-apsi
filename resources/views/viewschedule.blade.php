<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader_title', 'Schedule')
    @include('layouts.includes.htmlheader')
@show

@if(Auth::user()->status == 'User')
<body class="skin-green sidebar-mini">
@elseif(Auth::user()->status == 'Admin')
<body class="skin-blue sidebar-mini">
@else
<body class="skin-blue-light sidebar-mini">
@endif
<div class="wrapper">

    @include('layouts.partials.mainheader')

    @include('layouts.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @section('contentheader_title', 'View Schedule')
        @section('contentheader_message', 'Schedule')
        @include('layouts.partials.contentheader')
        
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- /.col -->
            <div class="col-md-10 col-md-offset-1">
              <div class="box box-primary">
                <div class="box-body no-padding">
                  <!-- THE CALENDAR -->
                  <div id="calendar"></div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /. box -->
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
    @include('layouts.partials.scripts_calendar')
@show

</body>
</html>



    <!-- Main content -->
   
