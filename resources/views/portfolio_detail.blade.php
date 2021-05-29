@extends('layouts.main')

@section('content')
    @foreach($projects as $project)
        <section class="breadcrumb_area_two breadcrumb_area_four parallaxie" data-background="{{ asset('project_images/'.$project->p_image) }}" style="background: url({{ asset('project_images/'.$project->p_image) }}) no-repeat;">
            <div class="overlay"></div>
            <div class="container custom_container">
                <div class="breadcrumb_content">
                    <h1>{{ $project->p_name }}</h1>
                </div>
            </div>
        </section>
        <!--        breadcrumb area    -->
        <!--        portfolio detailes three   -->
        <section class="portfolio_detailes_three sec_pad">
            <div class="container">
                <div class="pr_details_inner_three">
                    <div class="pr_details_slider_two">
                        <div class="item"><img style="width: 1110px" src="{{ asset('project_images/'.$project->p_image) }}" alt=""></div>
                        @foreach(json_decode($project->s_images) as $image)
                        <div class="item"><img style="width: 1110px" src="{{ asset('project_images/'.$image) }}" alt=""></div>
                        @endforeach
                    </div>
                    <div class="pr_details_nav">
                        <span class="prev">Prev</span>
                        <span class="next">Next</span>
                    </div>
                </div>
                <div class="row flex-row-reverse">
                    <div class="col-lg-4">
                        <div class="por_details_info">
                            <h4>Information</h4>
                            <div class="d-flex">
                                <div class="por_details_item">
                                    <h5 class="pr_title">Client</h5>
                                    <p>{{ $project->c_name }}</p>
                                </div>
                                <div class="por_details_item">
                                    <h5 class="pr_title">Category</h5>
                                    <p>{{ $project->category }}</p>
                                </div>
                                <div class="por_details_item">
                                    <h5 class="pr_title">Date</h5>
                                    <p>{{ date('F Y', strtotime($project->date)) }}</p>
                                </div>
                                <div class="por_details_item">
                                    <h5>Share</h5>
                                    <ul class="list-unstyled social_link social_link_two">
                                        <li><a href="#"><i class="social_dribbble"></i><i class="social_dribbble"></i></a></li>
                                        <li><a href="#"><i class="social_googleplus"></i><i class="social_googleplus"></i></a></li>
                                        <li><a href="#"><i class="social_facebook"></i><i class="social_facebook"></i></a></li>
                                        <li><a href="#"><i class="social_twitter"></i><i class="social_twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="portfolio_text">
                            <h3>About Project</h3>
                             <p>{{ $project->descriptions }}</p>
                            <a href="{{ $project->url }}" class="g_hover">Live Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
@endsection
