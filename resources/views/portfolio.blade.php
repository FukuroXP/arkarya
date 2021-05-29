@extends('layouts.main')

@section('content')
        <!--        breadcrumb_area_three     -->
        <section class="breadcrumb_area_two breadcrumb_area_three parallaxie" data-background="{{ asset('wavee/img/bgdt.jpg') }}" style="background: url({{ asset('wavee/img/bgdt.jpg') }}) no-repeat;">
            <div class="overlay"></div>
            <div class="container">
                <div class="breadcrumb_content">
                    <h1>Portfolio</h1>
                    <p>Huge collection of stunning designs</p>
                </div>
            </div>
        </section>

        <section class="portfolio_area sec_pad">
            <div class="container">
                <div class="sec_title text-center">
                    <h2 class="s_section_title">Our Projects</h2>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <ul class="list-unstyled gallery_filter">
                            <li class="active" data-filter="*">All Projects</li>
                            <li data-filter=".design">Design</li>
                            <li data-filter=".market">Marketing</li>
                            <li data-filter=".develop">Development</li>
                            <li data-filter=".br">Branding</li>
                        </ul>
                    </div>
                    <div class="col-lg-10 col-md-9">
                        <div id="gallery" class="row gallery_inner">
                            @foreach($projects as $project)
                                <a href="{{ route('portfolio.view', [$project->id]) }}">
                                    <div class="col-lg-4 col-sm-6 gallery_item design">
                                        <div class="gallery_post">
                                            <div class="img"><img src="{{ asset('project_images/'.$project->p_image) }}" alt=""></div>
                                            <div class="gallery_text_info">
                                                <div class="gallery_content">
                                                    <a href="#">
                                                        <h3>{{ $project->name }}</h3>
                                                    </a>
                                                    <a href="#" class="g_tag">{{ $project->category }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
