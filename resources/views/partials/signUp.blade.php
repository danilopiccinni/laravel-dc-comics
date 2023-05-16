    <div class="cont">
        <div class="section-sx">
            <button class="button-sign-up">SIGN-UP NOW!</button>
        </div>
        <div class="section-dx">
            <span class="title-social">FOLLOW US</span>
            <ul class="social-list">
                @foreach ($socialIcons as $socialIcon)
                <li class="link">
                    <img src='{{ Vite::asset('resources' . $socialIcon )}}' alt="" class="image-link">
                </li>
                @endforeach
            </ul>
        </div>   
    </div>