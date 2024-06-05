<header>
    <nav class="navbar">
        <div class="navbar-container container">
            <li><a class="main" href="{{ route('home') }}">Главная</a></li>
            <div class="nav-items">
                @auth()
                    <li><a href="{{ route('profile') }}">Задачи</a></li>
                    <form id="logout" method="post" action="{{ route("logout") }}" class="button-logout">
                        @csrf
                        <li><a href="#" onclick="document.getElementById('logout').submit()">
                                Выйти
                            </a></li>
                    </form>
                @endauth
                @guest()
                    <li><a href="{{ route('login') }}">Войти</a></li>
                    <li><a href="{{ route('register') }}">Зарегистрироваться</a></li>
                @endguest
            </div>
        </div>
    </nav>

</header>
