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




    <!-- Home contents -->

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text">
                Home Settings
            </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>


        <ul class="submenu">
            <li class="">
                <a href="{{ URL::to('sliders') }}">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text">
                        Slider
                    </span>
                </a>

            </li>
        </ul>

        <ul class="submenu">
            <li class="">
                <a href="{{ URL::to('companyexcellence/1/edit') }}">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text">
                        Comapany Excellence
                    </span>
                </a>

            </li>
        </ul>

         <ul class="submenu">
            <li class="">
                <a href="{{ URL::to('journey/1/edit') }}">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text">
                        Journey & Mission
                    </span>
                </a>

            </li>
        </ul>

        <ul class="submenu">
            <li class="">
                <a href="{{ URL::to('companyglobal/1/edit') }}">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text">
                        Company Global
                    </span>
                </a>

            </li>
        </ul>

        <ul class="submenu">
            <li class="">
                <a href="{{ URL::to('companyteam/1/edit') }}">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text">
                        Company Team
                    </span>
                </a>

            </li>
        </ul>

        <ul class="submenu">
            <li class="">
                <a href="{{ URL::to('newsevents') }}">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text">
                        News & Events
                    </span>
                </a>

            </li>
        </ul>


    </li>




    <!-- About Section -->


    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text">
                About Settings
            </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>


        <ul class="submenu">
            <li class="">
                <a href="{{ url('/about/aboutedit/1') }}" class="">
                    <i class="menu-icon fa fa-caret-right"></i>

                    About Title

                </a>

             </li>
        </ul>

        <ul class="submenu">
            <li class="">
                <a href="{{ url('aboutdetails') }}" class="">
                    <i class="menu-icon fa fa-caret-right"></i>

                    About Details

                </a>

             </li>
        </ul>

    </li>


    <!-- Business Section -->


    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text">
                Business Settings
            </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>


        <ul class="submenu">
            <li class="">
                <a href="{{ url('/businesstitle/titleedit/1') }}" class="">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Business Title

                </a>

             </li>
        </ul>

        <ul class="submenu">
            <li class="">
                <a href="{{ url('businessdetails') }}" class="">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Business Details

                </a>

             </li>
        </ul>

    </li>


     <!-- Investor Section -->


     <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text">
                Investor Settings
            </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>


        <ul class="submenu">
            <li class="">
                <a href="{{ url('/investortitle/titleedit/1') }}" class="">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Business Title

                </a>

             </li>
        </ul>

        <ul class="submenu">
            <li class="">
                <a href="{{ url('investordetails') }}" class="">
                    <i class="menu-icon fa fa-caret-right"></i>

                    Investor Details

                </a>

             </li>
        </ul>

    </li>









</ul><!-- /.nav-list -->
