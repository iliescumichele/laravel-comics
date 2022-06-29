<header class="">
    <div class="container ">
        <div class="logo">
            <img src="{{ asset('/img/dc-logo.png') }}" alt="">
        </div>
        <div class="nav">
            <ul>
                <li>
                    <a href=""> CHARACTERS</a>
                </li>
                <li class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">
                    <a href=" {{ route('comics') }} "> COMICS</a>
                </li>
                <li class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">
                    <a href=" {{ route('movies') }}  "> MOVIES</a>
                </li>
                <li class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}">
                    <a href=""> TV</a>
                </li>
                <li class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}">
                    <a href=""> GAMES</a>
                </li>
                <li class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}">
                    <a href=""> COLLECTIBLES</a>
                </li>
                <li class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}">
                    <a href=""> VIDEOS</a>
                </li>
                <li class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}">
                    <a href=""> FANS</a>
                </li>
                <li class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}">
                    <a href=""> NEWS</a>
                </li>
                <li class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}">
                    <a href=""> SHOP</a>
                </li>
            </ul>
        </div>
    </div>
</header>