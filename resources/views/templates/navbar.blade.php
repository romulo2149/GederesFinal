<header> 
    <!-- Main container -->
        <!-- bloc-0 -->
        <div class="bloc sticky-nav full-width-bloc bgc-white l-bloc" id="bloc-0">
            <div class="container">
                <nav class="navbar nav-center row mini-nav">
                    <div class="navbar-header"><a class="navbar-brand" href="{{route('welcome')}}"><span class="special-tag-for-editing-text-with-html"></span><span class="special-tag-for-editing-text-with-html"></span><img src="img/logo.svg" alt="logo" height="130" width="275" /></a><button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle menu-icon-rounded-bars" data-toggle="collapse" data-target=".navbar-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                    <div class="collapse navbar-collapse navbar-1 nav-special fullscreen-nav"> 
                        <ul class="site-navigation nav navbar-nav">
                        @guest
                        <li><a href="{{ route('login') }}"><p class="text-white">Iniciar Sesión</p></a></li>
                        <li><a href="{{ route('register') }}"><p class="text-white">Registrar Usuarios (ADMIN)</p></a></li>
                        @endguest
                            <li></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- bloc-0 END -->
</header>