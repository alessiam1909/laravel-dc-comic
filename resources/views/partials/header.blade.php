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
                    @foreach($nav_menu as $elem)
                    <li>
                        <a class="{{Route::currentRouteName() == '#' ? 'active' : ''}}" href="{{$elem['url']}}">{{$elem['label']}}</a>
                    </li>
                    @endforeach
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