          <ul class="sidebar-menu">
            <li class="header">{{ trans('message.navigation') }}</li>
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li>
              <a href="{{ url('viewschedule') }}">
                <i class="fa fa-calendar"></i> <span>{{ trans('message.viewschedule') }}</span>
              </a>
            </li>
             <li>
              <a href="{{ url('headmajorgivepermission') }}"><i class="fa fa-edit"></i> <span>{{ trans('message.permission') }}</span></a>
            </li>
            
          </ul>