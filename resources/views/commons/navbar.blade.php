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
                <a class="navbar-brand" href="/"><div class="text-primary">PICME</div></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                <span class="text-primary">SEARCH</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('sss') }}">使うシーンから探す</a></li>
                                <li><a href="{{ route('ppp') }}">料金から探す</a></li>
                                <li><a href="{{ route('allpicture') }}">撮った写真から選ぶ</a></li>                                
                                <li><a href="{{ route('cameras.index') }}">全てのカメラから選ぶ</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                                <span class="text-primary">REGISTER</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('cameras.create') }}">カメラを登録する</li>
                                <li><a href="{{ route('pictures.create') }}">写真を登録する</a></li>
                                <li><button type="button" id="hoge" class="btn btn-xs btn-default" data-toggle="popover"  data-content="カメラを登録後、写真の登録が可能になります。">
                                 <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></button><script type="text/javascript">$(function() {$('#hoge').popover({trigger:'hover', });});</script></a></li>
                            </ul>
                        </li>                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                <span class="text-primary">{{ Auth::user()->name }}</span> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>{!! link_to_route('users.show', 'プロフィール', ['id' => Auth::User()->id]) !!}</li>
                                <li>{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                           </ul>
                        </li>
                    @else
                        <li class="text-primary">{!! link_to_route('register', 'SIGNUP') !!}</li>
                        <li class="text-primary">{!! link_to_route('login', 'LOGIN') !!}</li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

