@extends('layouts.master')

@section('title')
    Blog {{ trans('page::frontend.blog.Topicality') }} | @parent
@stop
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center align-text-bottom">
            <h2>{{ trans('page::frontend.blog.Topicality') }}</h2>
        </div>

    </div>
</section>
@section('content')
    <section id="blog" class="blog">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single" data-aos="fade-up">

                        <div class="entry-img">
                            <img src="{{ $post->files->first()->path }}" alt="{{ $post->title }}" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="blog-single.html">{{ $post->title }}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center "><a href="{{ url()->previous()  }}"><i class="icofont-arrow-left"></i>{{trans('page::frontend.blog.Back to post list')}} </a></li>
                                {{-- <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>--}}
                                <li class="d-flex align-items-end"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="{{$post->created_at}}">{{ $post->created_at->format('d M Y') }}</time></a></li>
                                {{-- <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li>--}}
                            </ul>
                        </div>

                        <div class="entry-content">
                            {!! $post->content !!}
                        </div>
                        <div class="blog-pagination mb-4">
                            <ul class="justify-content-center">
                            <?php if ($previous = $post->present()->previous): ?>
                                <li><a href="{{ route(locale() . '.blog.slug', [$previous->slug]) }}"><i class="icofont-double-left"></i> {{trans('page::frontend.blog.Previous')}} </a></li>
                            <?php endif; ?>
                            <?php if ($next = $post->present()->next): ?>
                                <li><a href="{{ route(locale() . '.blog.slug', [$next->slug]) }}">  {{trans('page::frontend.blog.Next')}} <i class="icofont-double-right"></i></a></li>
                            <?php endif; ?>
                            </ul>
                        </div>
                        <div id="disqus_thread"></div>
                    </article>
                    <script>
                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://honduras-libre.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar" data-aos="fade-left">
                        <h3 class="sidebar-title">{{ trans('page::frontend.blog.Search') }}</h3>
                        <div class="sidebar-item search-form">
                            <form action="" id="form_search">
                                <input class="form-control" type="text" id="search" name="search">
                                <table class="sidebar table table-bordered table-hover tbody">
                                    <tbody class="small" id='tbody'></tbody>
                                </table>
                            </form>

                        </div><!-- End sidebar search formn-->
                        <h3 class="sidebar-title">{{ trans('page::frontend.blog.Categories') }}</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                @foreach($categories as $category)
                                    @if(count($category->posts)>0)
                                        <li>
                                            <a href="{{URL::route($currentLocale . '.category.slug', [$category->slug]) }}">{{$category->name}}
                                                <span>{{ count($category->posts) }}</span></a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>

                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">{{ trans('page::frontend.blog.Recent Posts') }}</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach($latestPosts as $lastpost)
                                <div class="post-item clearfix">
                                    <img src="{{ Imagy::getThumbnail($lastpost->files->first()->path, 'blogThumb') }}"
                                         alt="">
                                    <h4>
                                        <a href="{{ URL::route($currentLocale . '.blog.slug', [$lastpost->slug]) }}">{{ $lastpost->title }}</a>
                                    </h4>
                                    <time datetime="{{$post->created_at}}">{{ $post->created_at->format('d M Y') }}</time>
                                </div>
                            @endforeach
                        </div><!-- End sidebar recent posts-->

                    </div><!-- End sidebar -->
                    <h3 class="sidebar-title mt-4" data-aos="fade-left">Wilfredo Méndez</h3>
                    <div class="embed-responsive embed-responsive-16by9" data-aos="fade-left">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qpqZMelo_go"
                                allowfullscreen></iframe>
                    </div>
                    <h3 class="sidebar-title mt-4" data-aos="fade-left">Música en Resitencia</h3>
                    <div id="cp_widget_5294b4e8-eb79-4382-9a3e-33de7543120c" style="height: 183px;"
                         data-aos="fade-left">...
                    </div>


                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section>
    @include('partials.footer')

@stop

@section('css')
    <style type="text/css">
        .jp-container {
            background: #E3001B !important;
            border-radius: 0px !important;
            box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
        }

        .dragger {
            background: #000000 !important;
        }

        .jp-previous, .jp-next {
            background: #23355B;
            font-size: 8px;
        }
        .tbody{
            position: absolute;
            top: 110px;
            right: 0;
            bottom: 0;
            border: 0;
            padding: 0 15px;
            margin: -1px;
            background: #FFFFFF;
            transition: 0.3s;
            border-radius: 0 4px 4px 0;
            z-index: 999999;
        }
    </style>
@stop

@section('js')
    <script type="text/javascript">
        var cpo = [];
        cpo["_object"] = "cp_widget_5294b4e8-eb79-4382-9a3e-33de7543120c";
        cpo["_fid"] = "AgJAzxOAXQY4";
        var _cpmp = _cpmp || [];
        _cpmp.push(cpo);
        (function () {
            var cp = document.createElement("script");
            cp.type = "text/javascript";
            cp.async = true;
            cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
            var c = document.getElementsByTagName("script")[0];
            c.parentNode.insertBefore(cp, c);
        })();
        // search
        const search = document.getElementById('search');
        const tableBody = document.getElementById('tbody');

        function getContent() {

            const searchValue = search.value;

            const xhr = new XMLHttpRequest();
            xhr.open('GET', '{{route('search')}}/?search=' + searchValue, true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.onreadystatechange = function () {

                if (xhr.readyState == 4 && xhr.status == 200) {
                    tableBody.innerHTML = xhr.responseText;
                }
            }
            xhr.send()
        }

        search.addEventListener('input', getContent);
        $("#search").blur(function() {
            $("#tbody").addClass("d-none");
            $("#search").val('')
        });
        $("#search").focus(function() {
            $("#tbody").removeClass("d-none");
        });
        const formulario = document.querySelector("#search");


    </script>
    <script id="dsq-count-scr" src="//honduras-libre.disqus.com/count.js" async></script>

@stop