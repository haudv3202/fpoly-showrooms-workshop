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
        {{-- <div class="row">
            <div class="col-lg-10 col-xl-6 mx-auto text-center">
                <div class="section-title text-center">
                    <span>Team We Have</span>
                    <h2 class="wow">
                        Our Buddy's Always Ready
                        <strong>To Solve Your Issues</strong>
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. In urna lectus, mattis non
                        accumsan in, tempor dictum neque. In hac
                        habitasse platea dictumst. Lorem ipsum dolor
                        sit amet, consectetur adipiscing.
                    </p>
                </div>
            </div>
        </div> --}}
        <div class="row">
            @foreach ($ourteam as $item)
            <div class="col-md-6 col-xl-4 col-lg-6">
                <div class="team-wrap">
                    <div class="img">
                        <a href="{{route('viewMore',$item->id)}}"
                            ><img
                                src="{{asset('theme/client/assets/images/team/team_img_1.jpg')}}"
                                alt
                        /></a>
                    </div>
                    <div class="content">
                        <h6>
                            <a href="{{route('viewMore',$item->id)}}"
                                >{{$item->name}}</a
                            >
                        </h6>
                       
                        {{-- <ul class="list-unstyled social-icons">
                            <li>
                                <a href="javascript:"
                                    ><i class="bi bi-facebook"></i
                                ></a>
                            </li>
                            <li>
                                <a href="javascript:"
                                    ><i class="bi bi-twitter-x"></i
                                ></a>
                            </li>
                            <li>
                                <a href="javascript:"
                                    ><i class="bi bi-instagram"></i
                                ></a>
                            </li>
                            <li>
                                <a href="javascript:"
                                    ><i class="bi bi-linkedin"></i
                                ></a>
                            </li>
                            <li>
                                <a href="javascript:"
                                    ><i class="bi bi-youtube"></i
                                ></a>
                            </li>
                        </ul> --}}
                        <div class="arrow-read-more">
                            <a href="{{route('viewMore',$item->id)}}"
                                >view more
                                <i class="srn-arrow-right"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
            {{$ourteam->links()}}
        </div>
    </div>
</section>

@endsection