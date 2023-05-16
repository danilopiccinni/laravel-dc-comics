
    <footer >
        <div class="cont-footer">
            <div class="cont-links">
                @foreach ($columns as $column)
                <div class="column">

                    <span class="link-title">{{ $column['head'] }}</span>

                    <ul class="link-list">

                        @foreach ($column['links'] as $link)
                        <li class="link">
                            {{$link}}
                        </li>
                        @endforeach

                    </ul>
                </div>
                @endforeach
                
            </div>
            
            <div class="logo">
                {{-- contenitore per usare un immagine in background --}}
            </div>
        </div>


    </footer>