
@if(count($slider->slides) > 1)
    <a class="carousel-control-prev" href="#{{ $slider->system_name }}" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">{{ trans('slider::frontend.previous') }}</span>
    </a>

    <a class="carousel-control-next" href="#{{ $slider->system_name }}" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">{{ trans('slider::frontend.next') }}</span>
    </a>
@endif
