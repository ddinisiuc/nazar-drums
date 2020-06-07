@extends('layouts.app')
@section('content')
@include('layouts.includes.header')
<!-- Content
================================================== -->

<!-- Parallax Full-Screen Background -->
<div class="fullscreen background parallax" data-background="{{ asset('images/portfolio-slide-01.jpg') }}" data-img-width="1800" data-img-height="1202" data-diff="300" data-color="#303133" data-color-opacity="0.9">
    <div class="parallax-content-container">
        <div class="parallax-content">
            <h2>{{ $project->title }}</h2>
            <div class="scroll-to-content bounce ln ln-icon-Down-3"></div>
        </div>
    </div>
</div>

<br>

<!-- Content -->
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="project-details margin-top-45 margin-bottom-0">
                <h4>{{ $project->title }}</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            {!! $project->excerpt !!}
        </div>

        <div class="col-md-4">
            <ul class="details alt2">
                <li><span>Дата создания проекта: </span>{{ strftime("%B %d, %Y", strtotime($project->created_at)) }} </li>
                <li><span>Локация:</span> {{ $project->location }}</li>
                @if ($project->link)
                    <li><span>Сайт:</span> <a href="{{ $project->link }}" target="_blank">{{ $project->link }}</a></li>
                @endif
                @if ($project->facebook)
                    <li><span>Facebook:</span> <a href="{{ $project->facebook }}" target="_blank">{{ $project->facebook }}</a></li>
                @endif
            </ul>
        </div>
    </div>

</div>

<!-- Image Edge -->
<div class="image-edge margin-top-80">

    <div class="image-edge-content">
        {!! $project->description !!}
    </div>

    <div class="edge-bg" data-background-image="{{ Voyager::image($project->image_one) }}"></div>

</div>
<!-- Image Edge / End -->

<!-- Image Edge -->
<div class="image-edge left margin-top-0">

    <div class="image-edge-content">
        <div class="row">

            @forelse ($project->benefits as $item)
            {{-- {{ dd( $item) }} --}}
                <div class="col-md-6 col-sm-6">
                    <div class="icon-box-1">
                        <i class="ln {{ $item->icons }}"></i>
                        <h4>{{ $item->title }}</h4>
                        {!! $item->description !!}
                    </div>
                </div>
            @empty

            @endforelse
        </div>
    </div>

    <div class="edge-bg" data-background-image="{{ Voyager::image($project->image_two) }}"></div>

</div>
<!-- Image Edge / End -->

<!-- Back To Top Button -->
<div id="backtotop">
    <a href="#"></a>
</div>
@endsection
