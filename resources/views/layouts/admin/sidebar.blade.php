
    <div class="sidebar-wrapper sidebar-theme">

        <nav id="sidebar">
            <div class="shadow-bottom"></div>
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu">
                    <a href="/admin_side" {{ (request()->is('admin_side')) ? 'data-active=true' : '' }} aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i data-feather="home"></i>
                           <span>Dashboard</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="#porto" {{ (request()->routeIs('project.*')) ? 'data-active=true' : '' }} data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i data-feather="briefcase"></i>
                            <span>Portfolio</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ (request()->routeIs('project.*')) ? 'show' : '' }}" id="porto" data-parent="#accordionExample">
                        <li class="{{ (request()->is('admin_side/project')) ? 'active' : '' }}">
                            <a href="/admin_side/project"> Daftar Protfolio </a>
                        </li>
                        <li class="{{ (request()->is('admin_side/project/add')) ? 'active' : '' }}">
                            <a href="/admin_side/project/add"> Tambah Protfolio  </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#client" {{ (request()->routeIs('client.*')) ? 'data-active=true' : '' }} data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i data-feather="users"></i>
                           <span>Client</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ (request()->routeIs('client.*')) ? 'show' : '' }}" id="client" data-parent="#accordionExample">
                        <li class="{{ (request()->is('admin_side/client')) ? 'active' : '' }}">
                            <a href="/admin_side/client"> Daftar Client </a>
                        </li>
                        <li class="{{ (request()->is('admin_side/client/add')) ? 'active' : '' }}">
                            <a href="/admin_side/client/add"> Tambah Client  </a>
                        </li>
                    </ul>
                </li>

            </ul>
            <!-- <div class="shadow-bottom"></div> -->

        </nav>

    </div>
