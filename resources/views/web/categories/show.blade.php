@extends('web.templates.master')
@section('title', $category->title)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>{{ $category->title }}</h1>
                <p><a href="{{ route('web.home') }}" class="text-decoration-none text-white">Home</a>
                    > {{ $category->title }}</p>
            </div>

        </div>
    </div>


    <section class="value">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{ $category->title }}</h2>
                </div>
                @include('web.includes.post')
            </div>
        </div>
    </section>
@endsection
