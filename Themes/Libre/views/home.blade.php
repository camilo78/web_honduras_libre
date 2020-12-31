@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}"/>
    <meta name="description" content="{{ $page->meta_description }}"/>
@stop
@section('subnav')
    @include('partials.hero')
@stop

@section('content')

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><strong>{{trans('page::frontend.blog.ABOUT US')}}</strong></h2>
            </div>

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-right">
                    {!! Block::get('izq-quienes-somos') !!}
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                    {!! Block::get('der-quienes-somos') !!}
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->
    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title" data-aos="fade-up">
                <h2><strong>{{trans('page::frontend.blog.topicality')}}</strong></h2>
                <h5>{{trans('page::frontend.blog.latest_posts')}}</h5>
            </div>

            <div class="row">

                @foreach($posts as $post)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="100">
                            <div class="member art" data-aos="fade-up">
                                <a href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}">
                                    <div class="member-img">
                                        <img src="{{ $post->files->first()->path }}"  class="img-fluid" alt="">
                                        <div class="social font-weight-bold">
                                            <a href="{{URL::route($currentLocale . '.category.slug', [$post->category->slug]) }}">{{ $post->category->name }}</a>
                                        </div>
                                    </div>
                                </a>
                                    <div >
                                        <a href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}">
                                            <h4 class="title-post">{{ $post->title }}</h4>
                                            <p class="text-post text-muted">{{ Illuminate\Support\Str::limit(strip_tags($post->content),200) }}</p>
                                        </a>
                                    </div>

                            </div>
                        </div>

                @endforeach
        </div>
    </section>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>{{trans('page::frontend.blog.gallery')}}</h2>
            </div>
                {!! Slider::render('gallery', 'gallery') !!}
            </div>

        </div>
    </section><!-- End Portfolio Section -->
    @include('partials.footer')
@stop
@section('css')
    <style>
        .agent-image{

            background-position:center;
            background-size:cover;
            height: 120px;
            width: 120px;
            border-radius: 50%;

        }
        .title-post{
            color:#2c333c;
            font-size: 16px;
            text-align: left;
            padding: 10px 10px 0px 10px;
            font-family: 'Montserrat', sans-serif;
        }
        .text-post{
            padding: 0px 10px 10px 10px;
            font-size: 12px;
            text-align: left;
            font-family: 'Montserrat', sans-serif;
        }
        .title-post:hover{
            color: #E3001B;
        }

        .art:hover {
            background-color: #F0F0F0;
            color: #0a4b3e !important;
            -webkit-transition: background-color 500ms linear;
            -ms-transition: background-color 500ms linear;
            transition: background-color 500ms linear;
        }
    </style>
@stop
