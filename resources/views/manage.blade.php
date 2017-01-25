<!DOCTYPE html>

<html lang="en">

@section('htmlheader_title', 'Manage')
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
        @section('contentheader_title', 'Manage Account')
        @section('contentheader_message', 'Manage')
        @include('layouts.partials.contentheader')
        
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Database User</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>NRP</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Edit</th>
                      <th>Delete</th>
                     
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $user)       
                    <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->nrp }}</td>
                      <td>{{ $user->phone }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->status }}</td>
                      <td><a href="{{ url('manage/'.$user->id.'/edit') }}" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a></td>
                      <td>
                          <form action="{{ url('manage/'.$user->id) }}" method="post">
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