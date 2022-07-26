@extends('main')

@section('title', "DC Comics")

@section('head_scripts')
<script src="{{ asset("js/home.js") }}"></script>
@endsection

@section('main_content')
    @include('partials.home._cards-banner')
@endsection