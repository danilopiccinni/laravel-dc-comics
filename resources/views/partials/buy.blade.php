    <div class="cont">
        <ul class="link-list">
            @foreach ($buyLinks as $buyLink)
            <li class="link">
                <div class="int-cont-link">
                    <img src="{{ Vite::asset('resources' . $buyLink['image']) }}"  class="link-image">
                    <span class="title-link">{{ $buyLink['title'] }}</span>   
                </div>
            </li>
            @endforeach
        </ul>

    </div>