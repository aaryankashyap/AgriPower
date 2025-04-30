<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">AgroPower Solution</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center py-1" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('services') }}" class="nav-item nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                    <a href="{{ route('farm-projects') }}" class="nav-item nav-link {{ request()->routeIs('farm-projects') ? 'active' : '' }}">Farm Projects</a>
                    <a href="{{ route('blog') }}" class="nav-item nav-link {{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                </div>
                <div class="ml-auto d-flex align-items-center">
                    @guest
                        <a class="btn" href="{{ route('contact') }}">Request Assessment</a>
                    @else
                        <a class="btn mr-3" href="{{ route('contact') }}">Request Assessment</a>
                        <div class="nav-item dropdown user-dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user-circle mr-2"></i>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('account') }}">
                                    <i class="fa fa-user mr-2"></i>My Account
                                </a>
                                @if(Auth::user()->role === 'admin')
                                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                        <i class="fa fa-dashboard mr-2"></i>Dashboard
                                    </a>
                                @endif
                                @if(Auth::user()->role === 'expert')
                                    <a class="dropdown-item" href="{{ route('expert.dashboard') }}">
                                        <i class="fa fa-bolt mr-2"></i>My Projects
                                    </a>
                                @endif
                                @if(Auth::user()->role === 'client')
                                    <a class="dropdown-item" href="{{ route('client.projects') }}">
                                        <i class="fa fa-calendar mr-2"></i>My Projects
                                    </a>
                                @endif
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out mr-2"></i>Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End --> 