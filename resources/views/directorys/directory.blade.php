@extends('layouts.app')

@section('content')
<div class="row align-items-center mt-lg-5">
    {{-- <div class="col-lg-12 h-20 border-1">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('theme/client/assets/images/rectangle_small.svg')}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('theme/client/assets/images/rectangle_small.svg')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('theme/client/assets/images/rectangle_small.svg')}}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div> --}}
</div>
</div>
</div>

</div>
<main class="py-4" id="body-content">
<section class="section-spacing pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul id="portfolio-flters" class="list-unstyled">
                    <li data-filter="*" class="filter-active">
                        <a href="javascript:">All</a>
                    </li>
                    @foreach ($directorys as $directory)
                    <li data-filter=".{{$directory->name}}">
                        <a href="javascript:">{{$directory->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="isotope-gallery row four-column mb-5">
            @foreach ($projects as $project)
            
            <div class="gallery-item col-xl-3 col-lg-4 col-md-6 col-12 {{$project->level_name}}">
            <div class="portfolio-gallery-item">
                <div class="item-img">
                    <div class="portfolio-img-gallery">
                        <a
                            href="{{asset($project->image)}}"
                            class="portfolio-img-gallery"
                            title="{{$project->name}}"
                            ><img
                                src="{{asset($project->image)}}"
                                class="rounded"
                                alt
                        /></a>
                        <div class="img-over">
                            <i class="bi bi-plus-lg"></i>
                        </div>
                    </div>
                    <a
                        href="{{route('project.show',$project->id)}}"
                        class="arrow"
                        ><i class="srn-arrow-right"></i
                    ></a>
                </div>
                <div class="item-content">
                    <h6>
                        <a href="{{route('project.show',$project->id)}}"
                            >{{ substr($project->name, 0, 20) }}...</a
                        >
                    </h6>
                    <div class="sub-head">
                        Views:{{$project->views}}
                    </div>
                    <p style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">{{ $project->description }}</p> 
                </div>
            </div>
        </div>
            @endforeach
           
            
        </div>
       
    </div>
 
       
   
</section>




@endsection