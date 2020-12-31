@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('subnav')
    @include('partials.breadcrumbs')
@stop

@section('content')
    @if(isset($page->files->first()->path))
        <img src="{{ $page->files->first()->path }}" class="img-fluid" alt="">
    @endif
    <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><strong>{{ $page->title}}</strong></h2>
                <p>{{ $page->meta_description }}</p>
            </div>

            <div class="row content">
                {!! $page->body !!}
            </div>

        </div>
    </section><!-- End About Us Section -->
    @include('partials.footer')

@stop

