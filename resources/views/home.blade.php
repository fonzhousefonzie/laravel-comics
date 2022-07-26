@extends('main')

@section('title', "DC Comics")

@section('head_scripts')
<script src="{{ asset("js/home.js") }}"></script>
@endsection

@section('main_content')
    @include('partials.home._cards-banner')
    @include('partials.home._blue-banner')
    @include('partials.home._bannerCTA')
@endsection