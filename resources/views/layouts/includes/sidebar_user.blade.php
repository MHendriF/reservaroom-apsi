          <ul class="sidebar-menu">
            <li class="header">{{ trans('message.navigation') }}</li>
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li>
              <a href="{{ url('viewschedule') }}">
                <i class="fa fa-calendar"></i> <span>{{ trans('message.viewschedule') }}</span>
              </a>
            </li>
            
            <li class="treeview">
              <a href="#"><i class='fa fa-book'></i> <span>{{ trans('message.applyproposal') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('applyproposalhall/'.Auth::user()->id) }}"><i class="fa fa-circle-o"></i>{{ trans('message.hall') }}</a></li>
                    <li><a href="{{ url('applyproposalclassroom/'.Auth::user()->id) }}"><i class="fa fa-circle-o"></i>{{ trans('message.class') }}</a></li>
                    <li><a href="{{ url('applyproposallaboratory/'.Auth::user()->id) }}"><i class="fa fa-circle-o"></i>{{ trans('message.laboratory') }}</a></li>
                    <li><a href="{{ url('applyproposal/'.Auth::user()->id) }}"><i class="fa fa-circle-o"></i>Music Studio</a></li>
                </ul>
            </li>


            <li>
              <a href="{{ url('getpermission') }}"><i class="fa fa-table"></i> <span>{{ trans('message.status') }}</span></a>
            </li>
            <li>
              <a href="{{ url('finishborrowing/'.Auth::user()->id) }}"><i class="fa fa-laptop"></i> <span>{{ trans('message.finish') }}</span></a>
            </li>
            
{{--             <li>
              <a href="{{url('')}}/viewschedule"><i class="fa fa-link"></i>View Schedule</a>
            </li>
            <li>
              <a href="{{url('')}}/applyproposal"><i class="fa fa-link"></i>Apply Proposal</a>
            </li>
            <li>
              <a href="{{url('')}}/getpermission"><i class="fa fa-link"></i>Get Permission</a>
            </li>
            <li>
              <a href="{{url('')}}/finishborrowing"><i class="fa fa-link"></i>Finish Borrowing</a>
            </li> --}}
          </ul>