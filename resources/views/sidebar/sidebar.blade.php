<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">

            {{-- Dashboard sidebar menu start --}}
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="submenu {{set_active(['home','teacher/dashboard','student/dashboard'])}}">
                    <a href="#"><i class="feather-grid"></i>
                        <span> Dashboard</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('home') }}" class="{{set_active(['home'])}}">Admin Dashboard</a></li>
                        <li><a href="{{ route('teacher/dashboard') }}" class="{{set_active(['teacher/dashboard'])}}">Teacher Dashboard</a></li>
                        <li><a href="{{ route('student/dashboard') }}" class="{{set_active(['student/dashboard'])}}">Student Dashboard</a></li>
                    </ul>
                </li>
                @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
                <li class="submenu {{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-shield-alt"></i>
                        <span>User Management</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('list/users') }}" class="{{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">List Users</a></li>
                    </ul>
                </li>
                @endif

                <li class="submenu {{set_active(['student/list','student/grid','student/add/page'])}} {{ (request()->is('student/edit/*')) ? 'active' : '' }} {{ (request()->is('student/profile/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-graduation-cap"></i>
                        <span> Students</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('student/list') }}"  class="{{set_active(['student/list','student/grid'])}}">Student List</a></li>
                        <li><a href="{{ route('student/add/page') }}" class="{{set_active(['student/add/page'])}}">Student Add</a></li>
                        <li><a class="{{ (request()->is('student/edit/*')) ? 'active' : '' }}">Student Edit</a></li>
                        <li><a href=""  class="{{ (request()->is('student/profile/*')) ? 'active' : '' }}">Student View</a></li>
                    </ul>
                </li>

                <li class="submenu  {{set_active(['teacher/add/page','teacher/list/page','teacher/grid/page','teacher/edit'])}} {{ (request()->is('teacher/edit/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i>
                        <span> Teachers</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('teacher/list/page') }}" class="{{set_active(['teacher/list/page','teacher/grid/page'])}}">Teacher List</a></li>
                        <li><a href="teacher-details.html">Teacher View</a></li>
                        <li><a href="{{ route('teacher/add/page') }}" class="{{set_active(['teacher/add/page'])}}">Teacher Add</a></li>
                        <li><a class="{{ (request()->is('teacher/edit/*')) ? 'active' : '' }}">Teacher Edit</a></li>
                    </ul>
                </li>
                
                <li class="submenu {{set_active(['department/add/page','department/edit/page'])}}">
                    <a href="#"><i class="fas fa-building"></i>
                        <span> Departments</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="departments.html">Department List</a></li>
                        <li><a href="{{ route('department/add/page') }}" class="{{set_active(['department/add/page'])}}">Department Add</a></li>
                        <li><a href="{{ route('department/edit/page') }}" class="{{set_active(['department/edit/page'])}}">Department Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i>
                        <span> Subjects</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="subjects.html">Subject List</a></li>
                        <li><a href="add-subject.html">Subject Add</a></li>
                        <li><a href="edit-subject.html">Subject Edit</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <li>
                        <a href="{{ route('invoice.page') }}"><i class="fas fa-clipboard"></i> <span>Invoise</span></a>
                    </li>
                </li>
                <li class="menu-title">
                    <span>Management</span>
                </li>
                <li class="{{set_active(['setting/page'])}}">
                    <a href="{{ route('setting/page') }}">
                        <i class="fas fa-cog"></i> 
                        <span>Settings</span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-file-invoice-dollar"></i>
                        <span> Accounts</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('salary.page') }}">Salary</a></li>
                        <li><a href="{{ route('addSalary.page') }}">Add Salary</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('holiday.page') }}"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
                </li>
                <li>
                    <a href="{{ route('fees.page') }}"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                </li>
                <li>
                    <a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                </li>
                <li>
                    <a href="{{ route('event.page') }}"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                </li>
                <li>
                    <a href="{{ route('time.page') }}"><i class="fas fa-table"></i> <span>Time Table</span></a>
                </li>
                <li>
                    <a href="{{ route('library.page') }}"><i class="fas fa-book"></i> <span>Library</span></a>
                </li>
            </ul>





        </div>
    </div>
</div>