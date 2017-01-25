<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/avatar5.png')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
            </div>
        </div>
        @endif
@if(Auth::user()->status == 'User')
    @include('layouts.includes.sidebar_user')
@elseif(Auth::user()->status == 'Admin')
    @include('layouts.includes.sidebar_admin')
@else
    @include('layouts.includes.sidebar_head')
@endif

</section>
<!-- /.sidebar -->
</aside>
