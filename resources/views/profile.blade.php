<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader_title', 'Edit Account')
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
      @section('contentheader_title', 'Profile')
      @section('contentheader_message', 'Profile')
      @include('layouts.partials.contentheader')
        
        <!-- Main content -->
        <section class="content">

        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="{{ asset('/img/avatar5.png') }}" alt="User profile picture">

                <h3 class="profile-username text-center">{{ $user->name }}</h3>

                <p class="text-muted text-center">{{  $user->status }}</p>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="pull-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="pull-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="pull-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.box-body -->
            </div>
          
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#settings" data-toggle="tab">Profile</a></li>
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="settings">
                  <!-- /.form -->
                  <form action="{{ url('edit/'.$user->id) }}" method="post" class="form-horizontal">
                    <input type="hidden" name="_methode" value="PUT">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail" class="col-sm-2 control-label">NRP</label>
                      <div class="col-sm-10">
                        <input type="text" name="nrp" class="form-control" placeholder="NRP" value="{{  $user->nrp }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Phone</label>
                      <div class="col-sm-10">
                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{  $user->phone }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputExperience" class="col-sm-2 control-label">Email</label>
                     <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{  $user->email }}" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                  </form>
                  <!-- /.form -->
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
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
@show

</body>
</html>