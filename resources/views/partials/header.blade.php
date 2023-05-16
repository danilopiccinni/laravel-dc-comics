<header>
            <!-- nav -->
            <nav class="nav-bar">
                <div class="logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="" class="logo">
                </div>
        
                <div class="cont-link-list">
                    <ul class="link-list">
                        @foreach ($links as $link)
                        <li class="link">
                            {{$link}}
                        </li>
                        @endforeach
                    </ul>
                    
                </div>
                <div class="cont-search">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary">search</button>
                  </div>
            </nav>

</header>