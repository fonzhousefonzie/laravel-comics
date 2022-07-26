@php
$navbarLinks = [
    [
        'name' => 'Characters',
        'href' => '#',
    ],
    [
        'name' => 'Comics',
        'href' => '#',
    ],
    [
        'name' => 'Movies',
        'href' => '#',
    ],
    [
        'name' => 'Tv',
        'href' => '#',
    ],
    [
        'name' => 'Games',
        'href' => '#',
    ],
    [
        'name' => 'Collectibles',
        'href' => '#',
    ],
    [
        'name' => 'Videos',
        'href' => '#',
    ],
    [
        'name' => 'Fans',
        'href' => '#',
    ],
    [
        'name' => 'News',
        'href' => '#',
    ],
    [
        'name' => 'Shop',
        'href' => '#',
    ]
]
@endphp

<header class="container d-flex justify-content-between align-items-center">
    <div class="brand py-4">
        <img alt="DC Logo" src="{{asset('img/dc-logo.png')}}">
    </div>
    <ul class="list-unstyled d-flex gap-3">
        @foreach ($navbarLinks as $link)
        <li>
            <a href="{{$link['href']}}" class="text-decoration-none text-uppercase fw-bold">
            {{ $link['name'] }}
            <div class="hover-border"></div>
            </a>
        </li>
        @endforeach
    </ul>
</header>