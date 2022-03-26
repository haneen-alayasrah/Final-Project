
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link {{ Request::is('admin/dashboard') ? 'active':''}}" href="{{url('admin/dashboard')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Core</div>

                    <a class="nav-link {{ Request::is('admin/users')|| Request::is('admin/user/*') ? 'active':''}} " href="{{url('admin/users')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Users
                    </a>

                    <a class="nav-link {{Request::is('admin/type') || Request::is('admin/add-type')|| Request::is('admin/edit-type/*') ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Types
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse {{Request::is('admin/type')|| Request::is('admin/add-type') || Request::is('admin/edit-type/*')? 'show':''}}" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link {{ Request::is('admin/add-type') ? 'active':''}}" href="{{url('admin/add-type')}}">Add Type</a>
                            <a class="nav-link {{ Request::is('admin/type')|| Request::is('admin/edit-type/*') ? 'active':''}}" href="{{url('admin/type')}}">View Type</a>
                        </nav>
                    </div>
                    <a class="nav-link {{Request::is('admin/city') || Request::is('admin/add-city') || Request::is('admin/edit-city/*')? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCity" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-city"></i></div>
                        Cities
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse {{Request::is('admin/city') || Request::is('admin/add-city') || Request::is('admin/edit-city/*') ? 'show':''}}" id="collapseCity" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link {{ Request::is('admin/add-city') ? 'active':''}}" href="{{url('admin/add-city')}}">Add City</a>
                            <a class="nav-link {{ Request::is('admin/city')|| Request::is('admin/edit-city/*') ? 'active':''}}" href="{{url('admin/city')}}">View City</a>
                        </nav>
                    </div>
                    <a class="nav-link {{Request::is('admin/places') || Request::is('admin/add-place')|| Request::is('admin/edit-place/*') ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePlace" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fa fa-map-marker"></i></div>
                        Places
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse {{Request::is('admin/places') || Request::is('admin/add-place') || Request::is('admin/edit-place/*')? 'show':''}}" id="collapsePlace" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link {{ Request::is('admin/add-place') ? 'active':''}}" href="{{url('admin/add-place')}}">Add Place</a>
                            <a class="nav-link {{ Request::is('admin/places') || Request::is('admin/edit-place/*') ? 'active':''}}" href="{{url('admin/places')}}">View Place</a>
                        </nav>
                    </div>
                    <a class="nav-link {{Request::is('admin/article') || Request::is('admin/add-article') || Request::is('admin/edit-article/*')? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsearticle" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                        Articles
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse {{Request::is('admin/article') || Request::is('admin/add-article')|| Request::is('admin/edit-article/*') ? 'show':''}}" id="collapsearticle" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link {{ Request::is('admin/add-article') ? 'active':''}}" href="{{url('admin/add-article')}}">Add Article</a>
                            <a class="nav-link {{ Request::is('admin/article')|| Request::is('admin/edit-article/*') ? 'active':''}}" href="{{url('admin/article')}}">View Article</a>
                        </nav>
                    </div>
                    <a class="nav-link {{Request::is('admin/contact') ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsecontact" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                        Contacts
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse {{Request::is('admin/contact') ? 'show':''}}" id="collapsecontact" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link {{ Request::is('admin/contact') ? 'active':''}}" href="{{url('admin/contact')}}">View Contact</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="login.html">Login</a>
                                    <a class="nav-link" href="register.html">Register</a>
                                    <a class="nav-link" href="password.html">Forgot Password</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                Error
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">401 Page</a>
                                    <a class="nav-link" href="404.html">404 Page</a>
                                    <a class="nav-link" href="500.html">500 Page</a>
                                </nav>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>
    
        </nav>
    </div>
