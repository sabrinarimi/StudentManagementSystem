<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{route('home')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Home</span>
                    </a>

                </li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboard</span>
                    </a>

                </li>
                @if(auth()->user()->role == 2)


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Teacher</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('teachers.create')}}">Add Teacher</a></li>
                        <li><a href="{{route('teachers.index')}}">Manage Teacher</a></li>
                    </ul>
                </li>
                @endif

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Course</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('courses.create')}}">Add Course</a></li>
                        <li><a href="{{route('courses.index')}}">Manage Course</a></li>
                    </ul>
                </li>
                @if(auth()->user()->role == 2)
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>ENroll Courses</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('manage-enrolls')}}">Manage Course</a></li>
                    </ul>
                </li>
                @endif


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
