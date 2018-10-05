<nav class="navbar navbar-default navbar-fixed-top">
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
                    <li><a href='/'>Home</a></li>
                    <li><a href="/about_b4login">About</a></li>
                    <li><a href="/contact_b4login">Contact</a></li>
                    <li><a href="/answer_b4login">FAQs</a></li>
                    <li><a href='/preference'>Preference</a></li>
                   <!-- <li><a href='/home'>Dashboard</a></li>


<!-- Right Side Of Navbar -->

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position:relative; padding-left:50px;">
                                <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                   <!-- <a href="{{ url('/profile')}}"><i class="fa fa-btn fa-use"></i>Profile</a></li>-->
                                    <li><a href="/profile/{{Auth::user()->id}}">Profile</a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                </div>
	</div>
</nav>