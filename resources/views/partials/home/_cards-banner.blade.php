@php
    $comics = config('comics');
@endphp

<div class="cards-sections-container">
    <div class="cards-jumbo">
        <div class="container">
            <h3>CURRENT SERIES</h3>
        </div>
    </div>
    <div class="cards-section">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                <div class="col col-6 col-sm-4 col-md-2"> 
                    {{-- @click="active(i)" :class="{active : comic.isActive}" --}}
                    <div class="comic-card">
                        <div class="thumb-container">
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        </div>
                        <p>{{ $comic['title'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="primary">LOAD MORE</button>
        </div>
    </div>
</div>