<header>
    <div class="blu-ctn">
        <div class="col-visa">
            <p>DC POWER VISA<i class="fa-solid fa-trademark"></i></p>
            <p>ADDITIONAL DC SITES<i class="fa-regular fa-registered ps-1"></i></p>
        </div>
    </div>
    <div class="main-header">
        <div>
            <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="">
        </div>
        <div>
            <nav>
                <ul>
                    <li>
                        <a class="{{Route::currentRouteName() == 'Homepage' ? 'active' : ''}}" href="{{route('homepage')}}">Homepage</a>
                    </li>
                    <li>
                        <a class="{{Route::currentRouteName() == 'Fumetti' ? 'active' : ''}}" href="{{route('comics.index')}}">Fumetti</a>
                    </li>
                    <li>
                        <a class="{{Route::currentRouteName() == 'Aggiungi fumetto' ? 'active' : ''}}" href="{{route('comics.create')}}">Aggiungi fumetto</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="search">
            <div >
                <input type="text" placeholder=" Search">
            </div>
        </div>
    </div>

</header>