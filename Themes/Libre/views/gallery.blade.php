

    <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Todo</li>
                @foreach($slider->slides->unique('classes') as $type)
                <li data-filter=".filter-{{$type->classes}}" >{{$type->classes}}</li>

                @endforeach
            </ul>
        </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up">
        @foreach($slider->slides as $index => $slide)
        <div class="col-lg-4 col-md-6 portfolio-item filter-{{$slide->classes}}">
            <img src="{{ $slide->getImageUrl() }}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <p><b>{{ $slide->title }}</b></p>
                <p>{{ $slide->caption }}</p>
                <a href="{{ $slide->getImageUrl() }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-fullscreen"></i></a>
            </div>
        </div>
        @endforeach
    </div>