<ul class="menu">
        <li class="sidebar-title">Menu</li>
        <li
            class="sidebar-item">
            <a href="{{route('dashboard')}}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>ACL</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{route('user.index')}}">
                        <i class="fa-solid fa-arrow-right"></i>
                        <span>User</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('role.index')}}">
                        <i class="fa-solid fa-arrow-right"></i>
                        <span>Role</span>
                    </a>
                </li>
                {{-- <li class="submenu-item ">
                    <a href="{{route('employee.index')}}"> <i class="fa-solid fa-arrow-right"></i>
                        <span>Employee</span>
                    </a>
                </li> --}}
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="{{route('message.index')}}" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>User Message</span>
            </a>
        </li>
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Services</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{route('corporateheader.index')}}">Corporate-Header</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('corporatemiddle.index')}}">Corporate-Middle</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('individualheader.index')}}">Individual-Header</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('individualmiddle.index')}}">Individual-Middle</a>
                </li>
            </ul>
        </li>
       
        {{-- <li class="sidebar-item">
            <a href="{{route('receiveproject.index')}}" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Receive From Project</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('expensecategory.index')}}" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Expense Category</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('projectexpense.index')}}" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Expense Project</span>
            </a>
        </li> --}}

        {{-- <li
            class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Project</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{route('project.index')}}">
                        <i class="fa-solid fa-arrow-right"></i>
                        <span>Project List</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('expensecategory.index')}}">
                        <i class="fa-solid fa-arrow-right"></i>
                        <span>Expense Category</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('receiveproject.index')}}">
                        <i class="fa-solid fa-arrow-right"></i>
                        <span>Receive From Project</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="{{route('projectexpense.index')}}"><i class="fa-solid fa-arrow-right"></i>
                    <span>Project Expense</span></a>
                </li>
            </ul>
        </li> --}}
        <li class="sidebar-item">
            <a href="{{route('logOut')}}" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Log Out</span>
            </a>
        </li>
</ul>