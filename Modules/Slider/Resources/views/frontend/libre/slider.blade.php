    <div id="{{ $slider->system_name }}" class="carousel-inner" role="listbox">
        @foreach($slider->slides as $index => $slide)
            <div class="carousel-item @if($index === 0) active @endif " style="background-image: url({{ $slide->getImageUrl() }});">
                <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2 class="logo">{{ $slide->title }}</h2>
                        <p>{{ $slide->caption }}</p>
                        <div class="text-center"><a href="{{ $slide->getLinkUrl() }}" class="btn-get-started">{{ trans('page::frontend.blog.Read More') }}</a></div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
