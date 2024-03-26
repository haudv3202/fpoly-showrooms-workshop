@extends('layouts.app')

@section('content')
<section class>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 col-sm-12 mx-auto">
                <div class="portfolio-slider-wrap-outer portfolio-single">
                    <div class="portfolio-slider-wrap">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="img">
                                    <img class="rounded-circle" src="{{$project[0]->image}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="team-content">
                                    
                                    <h3><strong>{{$project[0]->name}}</strong></h3>
                                    <p>{{$project[0]->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<section class="section-spacing pattern-white-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 col-sm-12 mx-auto">
                <div class="portfolio-single-details">
                    <div
                        class="hstack justify-content-between wow fadeInUp"
                        data-wow-delay="0.1s"
                    >
                        <div class="client-details">
                            <div class="head">Views</div>
                            <h6>{{$project[0]->views}}</h6>
                        </div>
                        <div class="client-details">
                            <div class="head">Level</div>
                            <h6>{{$project[0]->level_name}}</h6>
                        </div>
                        <div class="client-details">
                            <div class="head">Added by</div>
                            <h6>{{$project[0]->added_by_name}}</h6>
                        </div>
                    </div>
                    <div
                        class="hstack justify-content-between wow fadeInUp"
                        data-wow-delay="0.2s"
                    >
                        <div class="client-details">
                            <div class="client-details">
                                <div class="head">Create at</div>
                                <h6>{{$project[0]->created_at}}</h6>
                            </div>
                        </div>
                        <div class="client-details">
                            <div class="client-details">
                                <div class="head">Update at</div>
                                <h6>{{$project[0]->updated_at}}</h6>
                            </div>
                        </div>
                        <div class="client-details">
                            <a
                                href="{{$domain[0]->name}}"
                                class="btn btn-outline-light"
                                ><span class="outer-wrap"
                                    ><span data-text="Contact Me"
                                        >
                                        
                                        go to project
                                        </span
                                    ></span
                                ></a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-spacing">
                <div class="container">
                    {{-- <div class="row">
                        <div class="col-md-9 col-lg-5 mx-auto text-center">
                            <div class="section-title text-center">
                                <span>Real User Reviews</span>
                                <h2 class="wow">
                                    What our client’s are
                                    <strong>Saying about us</strong>
                                </h2>
                            </div>
                        </div>
                    </div> --}}
                    <div
                        class="owl-carousel owl-theme"
                        id="testimonials-slider-shadow"
                    >
                    @foreach ($project_users as $project_user)
                    <div class="item">
                        <div class="testimonial-shadow">
                            <div class="thumb-img">
                                <img src="{{asset($project_user->avatar)}}" alt />
                            </div>
                            <h6 class="name">{{$project_user->name}}</h6>
                            <div class="post">
                                {{$project_user->email}}
                            </div>
                            
                        </div>
                    </div>
                    @endforeach
                       
                        {{-- <div class="item">
                            <div class="testimonial-shadow">
                                <div class="thumb-img">
                                    <img src="assets/images/thumb_2.jpg" alt />
                                </div>
                                <h6 class="name">Rider Smith</h6>
                                <div class="post">
                                    Marketing Envato Pty Ltd.
                                </div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <hr class="divider-default" />
                                <h2>
                                    My business is growing faster and I’m very
                                    happy with that
                                </h2>
                                <p>
                                    Thank you for your excellent work. No one
                                    could hear us as well as you and make our
                                    wishes come true so beautifully and
                                    beautifully.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-shadow">
                                <div class="thumb-img">
                                    <img src="assets/images/thumb_3.jpg" alt />
                                </div>
                                <h6 class="name">Rider Smith</h6>
                                <div class="post">
                                    Marketing Envato Pty Ltd.
                                </div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <hr class="divider-default" />
                                <h2>
                                    My business is growing faster and I’m very
                                    happy with that
                                </h2>
                                <p>
                                    Thank you for your excellent work. No one
                                    could hear us as well as you and make our
                                    wishes come true so beautifully and
                                    beautifully.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-shadow">
                                <div class="thumb-img">
                                    <img src="assets/images/thumb_4.jpg" alt />
                                </div>
                                <h6 class="name">Rider Smith</h6>
                                <div class="post">
                                    Marketing Envato Pty Ltd.
                                </div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <hr class="divider-default" />
                                <h2>
                                    My business is growing faster and I’m very
                                    happy with that
                                </h2>
                                <p>
                                    Thank you for your excellent work. No one
                                    could hear us as well as you and make our
                                    wishes come true so beautifully and
                                    beautifully.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-shadow">
                                <div class="thumb-img">
                                    <img src="assets/images/thumb_5.jpg" alt />
                                </div>
                                <h6 class="name">Rider Smith</h6>
                                <div class="post">
                                    Marketing Envato Pty Ltd.
                                </div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <hr class="divider-default" />
                                <h2>
                                    My business is growing faster and I’m very
                                    happy with that
                                </h2>
                                <p>
                                    Thank you for your excellent work. No one
                                    could hear us as well as you and make our
                                    wishes come true so beautifully and
                                    beautifully.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-shadow">
                                <div class="thumb-img">
                                    <img src="assets/images/thumb_6.jpg" alt />
                                </div>
                                <h6 class="name">Rider Smith</h6>
                                <div class="post">
                                    Marketing Envato Pty Ltd.
                                </div>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <hr class="divider-default" />
                                <h2>
                                    My business is growing faster and I’m very
                                    happy with that
                                </h2>
                                <p>
                                    Thank you for your excellent work. No one
                                    could hear us as well as you and make our
                                    wishes come true so beautifully and
                                    beautifully.
                                </p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </section>
@endsection