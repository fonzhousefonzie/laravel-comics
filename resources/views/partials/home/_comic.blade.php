@extends('main')

@section('title', $comic['title'] . ' - DC Comics')

@section('head_scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection

@section('main_content')
    <div class="cards-sections-container comic">
        <div class="cards-jumbo">
            <div class="container">
            </div>
        </div>
        <div class="comic-head pb-5 pt-4">
            <div class="container">
                <div class="comic-img">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <p class="type">comic book</p>
                    <p class="view">view gallery</p>
                </div>
            </div>
        </div>
        <div class="comic-details container d-flex py-5 text-start">
            <div class="details">
                <h3 class="text-uppercase fw-bold">{{ $comic['title'] }}</h3>
                <div class="availability d-flex mt-4 mb-3">
                    <div class="price d-flex justify-content-between">
                        <p><span>U.S. price: </span>{{ $comic['price'] }}</p>
                        <p><span>AVAILABLE</span></p>
                    </div>
                    <div class="check">
                        <p>Check availability <i>&#9660</i></p>
                    </div>
                </div>
                <p class="description">{{ $comic['description'] }}</p>
            </div>
            <div class="ad">
                <p class="text-end fw-bold text-uppercase">ADVERTISEMENT</p>
                <img src="{{ asset('img/side-img.jpg') }}">
            </div>
        </div>
        <div class="comic-specs">
            <div class="container d-flex text-start">
                <div class="row">
                    <div class="col">
                        <h5>Talent</h5>
                        <div class="d-flex">
                            <p class="spec">Art by:</p>
                            <div class="links">
                                @foreach ($comic['artists'] as $i => $artist)
                                    @if (COUNT($comic['artists']) - $i === 1)
                                        <a href="#">{{ $artist }}</a>
                                    @else
                                        <a href="#">{{ $artist }}</a>,
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="d-flex">
                            <p class="spec">Written by:</p>
                            <div class="links">
                                @foreach ($comic['writers'] as $i => $writer)
                                    @if (COUNT($comic['writers']) - $i === 1)
                                        <a href="#">{{ $writer }}</a>
                                    @else
                                        <a href="#">{{ $writer }}</a>,
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h5>Specs</h5>
                        <div class="d-flex">
                            <p class="spec">Series:</p>
                            <p class="links"><a href="#" class="text-uppercase">{{$comic['series']}}</a></p>
                        </div>
                        <div class="d-flex">
                            <p class="spec">U.S. Price:</p>
                            <p class="links">{{$comic['price']}}</p>
                        </div>
                        <div class="d-flex">
                            <p class="spec">On Sale Date:</p>
                            <p class="links">{{date('M d Y', strtotime($comic['sale_date']))}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cta-section">
        <div class="container">
            <ul class="d-flex list-unstyled align-items-center">
                <li>
                    <a href="#" class="text-decoration-none d-flex">
                        <p>DIGITAL COMICS</p>
                        <img src="{{asset('img/cta-icon1.png')}}">
                    </a>
                </li>
                <li>
                    <a href="#" class="text-decoration-none d-flex">
                        <p>DC MERCHANDISE</p>
                        <img src="{{asset('img/cta-icon2.png')}}">
                    </a>
                </li>
                <li>
                    <a href="#" class="text-decoration-none d-flex">
                        <p>SUBSCRIPTION</p>
                        <img src="{{asset('img/cta-icon3.png')}}">
                    </a>
                </li>
                <li>
                    <a href="#" class="text-decoration-none d-flex">
                        <p>COMIC SHOP LOCATOR</p>
                        <img src="{{asset('img/cta-icon4.png')}}">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    @include('partials.home._bannerCTA')
@endsection
