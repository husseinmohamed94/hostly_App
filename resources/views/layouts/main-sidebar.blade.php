<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-home"></i>HOME WEBSITE </a>
                        <div id="submenu-5" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('slide.index')}}"><i class="fas fa-fw fa-image"></i>slide <span class="badge badge-secondary">New</span></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('OurService.index')}}"><i class="fas fa-fw fa-suitcase"></i>OurService <span class="badge badge-secondary">New</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('webhosting.index')}}"><i class="fas fa-fw fa-cloud"></i>webhosting</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('costumer.index')}}"><i class="fas fa-fw fa-comments"></i>costumer <span class="badge badge-secondary">New</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('Domain.index')}}"><i class="fas fa-fw fa-globe"></i>Domain</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('Features.index')}}"><i class="fas fa-fw fa-moon"></i>Features <span class="badge badge-secondary">New</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('Asked.index')}}"><i class="fas fa-fw fa-question-circle"></i>Asked</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('users.index')}}"><i class="fas fa-fw fa-user"></i>Users <span class="badge badge-secondary">New</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('OrderPayment.index')}}"><i class="fas fa-fw fa-shopping-bag"></i>Orders <span class="badge badge-secondary">New</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('Setting.index')}}"><i class="fas fa-fw fa-cog"></i>Setting</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
