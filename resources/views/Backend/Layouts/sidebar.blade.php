<ul class="nav nav-list">
    <li class="active">
        <a href="{{ url('/admin/dashboard') }}">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
        </a>

        <b class="arrow"></b>
    </li>


    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text">
                Company Settings
            </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>


        <ul class="submenu">
            <li class="">
                <a href="{{ url('/company/1/edit') }}" class="">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Company Edit

                </a>

             </li>
        </ul>

    </li>

    <li class="">
        <a href="{{ URL::to('sliders') }}">
            <i class="menu-icon fa fa-list"></i>
            <span class="menu-text">
                Slider
            </span>
        </a>

    </li>

    <li class="">
        <a href="{{ URL::to('companyexcellence') }}">
            <i class="menu-icon fa fa-list"></i>
            <span class="menu-text">
                Comapany Excellence
            </span>
        </a>

    </li>

    <li class="">
        <a href="{{ URL::to('journey') }}">
            <i class="menu-icon fa fa-list"></i>
            <span class="menu-text">
                Journey & Mission
            </span>
        </a>

    </li>

    <li class="">
        <a href="{{ URL::to('companyglobal') }}">
            <i class="menu-icon fa fa-list"></i>
            <span class="menu-text">
                Company Global
            </span>
        </a>

    </li>







</ul><!-- /.nav-list -->
