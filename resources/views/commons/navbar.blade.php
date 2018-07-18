<header>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">PicMe</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
			            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                Borrow
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('sss') }}">撮りたいシーンから探す</a></li>
                                <li><a href="{{ route('ppp') }}">料金から探す</a></li>
                                <li><a href="{{ route('allpicture') }}">写真から探す</a></li>                                
				                <li><a href="{{ route('cameras.index') }}">すべてのカメラを見る</a></li>
                            </ul>
                        </li>
			            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                                Rend
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
				                <li><a href="{{ route('cameras.create') }}">カメラの登録</a></li>
				                
				                <li><a href="{{ route('pictures.create') }}">写真の登録</a></li>
				                
                            </ul>
                        </li>                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>{!! link_to_route('users.show', 'My profile', ['id' => Auth::User()->id]) !!}</li>
                                <li>{!! link_to_route('logout.get', 'Log out') !!}</li>
                           </ul>
                        </li>
                    @else
                        <li>{!! link_to_route('register', 'Signup') !!}</li>
                        <li>{!! link_to_route('login', 'Login') !!}</li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

