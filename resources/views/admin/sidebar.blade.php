<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
        <a href="/index.html">
          <img src="{{ asset('admin2/images/logo.png') }}" alt="Mono">
          <span class="brand-name">MONO</span>
        </a>
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-left" data-simplebar style="height: 100%;">
        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">



            <li
             class="active"
             >
              <a class="sidenav-item-link" href="index.html">
                <i class="mdi mdi-briefcase-account-outline"></i>
                <span class="nav-text">Admin Dashboard</span>
              </a>
            </li>

            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users"
                aria-expanded="false" aria-controls="users">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">Students</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="users"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                      <li >
                        <a class="sidenav-item-link" href="{{url('students_get')}}">
                          <span class="nav-text">Students List</span>
                        </a>
                      </li>
                </div>
              </ul>
            </li>
            <li  class="has-sub" >
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Giving_Avenues"
                aria-expanded="false" aria-controls="Giving_Avenues">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">Giving Avenues</span> <b class="caret"></b>
              </a>
              <ul  class="collapse"  id="Giving_Avenues"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                      <li >
                        <a class="sidenav-item-link" href="{{url('one_year_education')}}">
                          <span class="nav-text">One year Education</span>
                        </a>
                      </li>
                      <li >
                        <a class="sidenav-item-link" href="{{url('entire_degree_education')}}">
                          <span class="nav-text">Entire Degree</span>
                        </a>
                      </li>
                      <li >
                        <a class="sidenav-item-link" href="{{url('perpetual_seat_in__your__name')}}">
                          <span class="nav-text">Perpetual Seat</span>
                        </a>
                      </li>
                      <li >
                        <a class="sidenav-item-link" href="{{url('zakat_support')}}">
                          <span class="nav-text">Zakat for Students</span>
                        </a>
                      </li>
                </div>
              </ul>
            </li>


            <li  class="has-sub" >
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#FundaProject"
                  aria-expanded="false" aria-controls="FundaProject">
                  <i class="mdi mdi-image-filter-none"></i>
                  <span class="nav-text">Fund a Project</span> <b class="caret"></b>
                </a>
                <ul  class="collapse"  id="FundaProject"
                  data-parent="#sidebar-menu">
                  <div class="sub-menu">
                        <li >
                          <a class="sidenav-item-link" href="{{url('fundaproject')}}">
                            <span class="nav-text">Fund a Project</span>
                          </a>
                        </li>

                  </div>
                </ul>
            </li>


            <li  class="has-sub" >
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#SupportScholor"
                  aria-expanded="false" aria-controls="SupportScholor">
                  <i class="mdi mdi-image-filter-none"></i>
                  <span class="nav-text">Support Scholor</span> <b class="caret"></b>
                </a>
                <ul  class="collapse"  id="SupportScholor"
                  data-parent="#sidebar-menu">
                  <div class="sub-menu">
                        <li >
                          <a class="sidenav-item-link" href="{{url('suport_scholor_payment')}}">
                            <span class="nav-text">Payment Scholor</span>
                          </a>
                        </li>
                        <li >
                          <a class="sidenav-item-link" href="{{url('suport_scholor_pledge')}}">
                            <span class="nav-text">Pledge Scholor</span>
                          </a>
                        </li>

                  </div>
                </ul>
            </li>

            <li  class="has-sub" >
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Team"
                  aria-expanded="false" aria-controls="Team">
                  <i class="mdi mdi-image-filter-none"></i>
                  <span class="nav-text">Team</span> <b class="caret"></b>
                </a>
                <ul  class="collapse"  id="Team"
                  data-parent="#sidebar-menu">
                  <div class="sub-menu">
                        <li >
                          <a class="sidenav-item-link" href="{{url('team_list')}}">
                            <span class="nav-text">Team List</span>
                          </a>
                        </li>
                        <li >
                          <a class="sidenav-item-link" href="{{url('add_team')}}">
                            <span class="nav-text">Add Team</span>
                          </a>
                        </li>

                  </div>
                </ul>
            </li>


            <li  class="has-sub" >
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Messages"
                  aria-expanded="false" aria-controls="Messages">
                  <i class="mdi mdi-image-filter-none"></i>
                  <span class="nav-text">Messages</span> <b class="caret"></b>
                </a>
                <ul  class="collapse"  id="Messages"
                  data-parent="#sidebar-menu">
                  <div class="sub-menu">
                        <li >
                          <a class="sidenav-item-link" href="{{url('contact_us_message')}}">
                            <span class="nav-text">Messages</span>
                          </a>
                        </li>
                  </div>
                </ul>
            </li>
        </ul>

      </div>


    </div>
  </aside>
