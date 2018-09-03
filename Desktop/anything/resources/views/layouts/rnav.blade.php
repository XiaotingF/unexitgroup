<nav class="navbar navbar-default">
	<div class="container-fluid">
		

		<div class="navbar-header">

			<button type="button" class="navbar-toggle" data-toggle ="collapse" data-target="#mainNavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                

		</div>

		<div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav ">
                	<li><a href="/" class="navbar-brand"><img src="logo.png"></a></li>
                    <li ><a href='/home'>Home</a></li>
                    <li><a href='/profile'>Profile</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/answer">FAQs</a></li>

                  <!--  @if (Auth::check())
                    <li><a class="nav-link ml-auto" href="#">{{Auth::user()->firstname}}</a></li>
                    @endif
                    @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>-->

                </div>
	</div>
</nav>