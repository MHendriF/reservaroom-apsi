          <ul class="sidebar-menu">
            <li class="header">{{ trans('message.navigation') }}</li>
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li>
              <a href="{{ url('viewschedule') }}">
                <i class="fa fa-calendar"></i> <span>{{ trans('message.viewschedule') }}</span>
              </a>
            </li>
          
            <li class="treeview">
              <a href="#"><i class='glyphicon glyphicon-cog'></i> <span>{{ trans('message.manage') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('manage') }}"><i class="fa fa-user"></i>{{ trans('message.account') }}</a></li>
                    <li><a href="{{ url('room') }}"><i class="fa fa-bank"></i>{{ trans('message.room') }}</a></li>
                </ul>
            </li>
            <li>
              {{-- <a href="{{ url('adminpermission') }}"><i class="fa fa-edit"></i> <span>{{ trans('message.permission') }}</span></a> --}}
              <a href="{{ url('admnistratorgivepermission') }}"><i class="fa fa-edit"></i> <span>{{ trans('message.permission') }}</span></a>
            </li>
          </ul>