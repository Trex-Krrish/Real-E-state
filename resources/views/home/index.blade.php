@extends('home.layout')
@section('content')
    <main>
        <article>
            @include('home.partials.hero')

            @include('home.partials.about')

            @include('home.partials.service')

            @include('home.partials.property')

            @include('home.partials.features')

            @include('home.partials.blog')

            @include('home.partials.cta')
        </article>
    </main>
@endsection
