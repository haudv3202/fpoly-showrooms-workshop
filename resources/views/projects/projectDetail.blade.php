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
            <div class="col-xxl-7 col-xl-8 col-lg-9 col-md-12">
                <div class="section-title">
                    <h2 class="wow">
                        <strong>{{$projectDetails[0]->name}}</strong>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6  portfolio-slider-wrap-outer">
                <div class="portfolio-slider-wrap m-0">
                    <div
                        class="owl-carousel owl-theme"
                        id="portfolio-slider-single"
                    >
                    @foreach ($images as $image)
                    <div class="item">
                        <img
                            src="{{asset($image->image)}}"
                            alt
                        />
                    </div>
                    @endforeach
                        
                        
                    </div>
                </div> 
            </div>
           
            <div class="col-lg-6">
                <h3
                    class="txt-secondary mb-4 fw-7 text-capitalize wow fadeInUp"
                >
                {{$projectDetails[0]->name}}
                </h3>
                <p>
                    {{$projectDetails[0]->description}}
                </p>
                <ul
                    class="list-unstyled icons-listing theme-dark check w-half"
                >
                    <li>Technical: {{$projectDetails[0]->technical_name}}</li>
                    <li>
                        View: {{$projectDetails[0]->views}}
                     </li>
                    <li> Level: {{$projectDetails[0]->level_name}}</li>
                    <li>
                        Create at:  {{$projectDetails[0]->created_at}}
                     </li>
                    <li>
                        Domain: {{$projectDetails[0]->domain_name}}
                     </li>
                     <li>Update at: {{$projectDetails[0]->updated_at}}</li>
                </ul>
                <a href="{{$projectDetails[0]->deploy_link}}" class="btn btn-default mt-3"
                    ><span class="outer-wrap"
                        ><span data-text="View project"
                            >View project</span
                        ></span
                    ></a
                >
            </div>
        </div>
    </div>
</section>
<section class="section-spacing section-padding bg-light-blue services-related-slider">
    <div class="container">
        <div class="section-title text-start">
            
            <h2 class="mb-0 wow">
                Project heightligh
            </h2>
        </div>
    </div>
    <div class="owl-carousel container owl-theme top-right-arrow" id="services-related-slider">
        @foreach ($projects as $project)
        <div class="item">
            <div class="icon-style-top-icon">
                <div class="">
                    <img width="20%" src="{{ asset($project->image) }}" alt="">
                </div>
                <div class="text-right">
                    <p class="text-muted">{{$project->views}}</p>
                </div> 
                <div class="text">
                    <h6>{{ substr($project->name, 0, 20) }}</h6> 
                    <p style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">{{ $project->description }}</p> 
                </div>
                <div class="arrow-read-more">
                    
                    <a href="{{route('project.show',$project->id)}}">read more <i class="srn-arrow-right"></i></a>
                </div>
                               
            </div>
        </div>
        @endforeach
    </div>
    
</section>


{{-- <section class="faqs-bg section-spacing">
    <div class="container pos-rel">
        <div class="row align-items-center">
            <div
                class="col-lg-5 pos-rel offset-lg-2 offset-md-4 col-md-8 mb-0"
            >
                <img
                    src="{{asset('theme/client/assets/images/img-faqs.png')}}"
                    class="faqs-imgs"
                    alt
                />
                <div class="section-title text-start">
                    <span>Get Your Answer Fast</span>
                    <h2 class="wow">
                        Everything you need to
                        <strong>Know to work better</strong>
                    </h2>
                    <p>
                        Hiring an expert could well prove to be a
                        shot in the arm for your online business,
                        that deserves a robust web presence.
                    </p>
                </div>
            </div>
            <div
                class="col-lg-5 pos-rel offset-lg-0 offset-md-4 col-md-8"
            >
                <div class="theme-accordian">
                    <div
                        class="accordion accordion-flush theme-accordian"
                        id="accordionFlushExampleSimple"
                    >
                        <div class="accordion-item">
                            <h2
                                class="accordion-header"
                                id="flush-gap-headingOne"
                            >
                                <button
                                    class="accordion-button"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-gap-collapseOne"
                                    aria-expanded="false"
                                    aria-controls="flush-gap-collapseOne"
                                >
                                    First and foremost, you never
                                    want to go?
                                </button>
                            </h2>
                            <div
                                id="flush-gap-collapseOne"
                                class="accordion-collapse collapse show"
                                aria-labelledby="flush-gap-headingOne"
                                data-bs-parent="#accordionFlushExampleSimple"
                            >
                                <div class="accordion-body">
                                    Ned ut perspiciatis unde omnis
                                    iste natus error sit voluptatem
                                    accusantium doloremque
                                    laudantium, totam rem aperiam,
                                    eaque Arya.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2
                                class="accordion-header"
                                id="flush-gap-headingTwo"
                            >
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-gap-collapseTwo"
                                    aria-expanded="false"
                                    aria-controls="flush-gap-collapseTwo"
                                >
                                    How can i customized this theme?
                                </button>
                            </h2>
                            <div
                                id="flush-gap-collapseTwo"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-gap-headingTwo"
                                data-bs-parent="#accordionFlushExampleSimple"
                            >
                                <div class="accordion-body">
                                    Ned ut perspiciatis unde omnis
                                    iste natus error sit voluptatem
                                    accusantium doloremque
                                    laudantium, totam rem aperiam,
                                    eaque Arya.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2
                                class="accordion-header"
                                id="flush-gap-headingThree"
                            >
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-gap-collapseThree"
                                    aria-expanded="false"
                                    aria-controls="flush-gap-collapseThree"
                                >
                                    Can I cancel or change my order?
                                </button>
                            </h2>
                            <div
                                id="flush-gap-collapseThree"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-gap-headingThree"
                                data-bs-parent="#accordionFlushExampleSimple"
                            >
                                <div class="accordion-body">
                                    Ned ut perspiciatis unde omnis
                                    iste natus error sit voluptatem
                                    accusantium doloremque
                                    laudantium, totam rem aperiam,
                                    eaque Arya.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2
                                class="accordion-header"
                                id="flush-gap-headingFour"
                            >
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-gap-collapseFour"
                                    aria-expanded="false"
                                    aria-controls="flush-gap-collapseFour"
                                >
                                    How can I exchange an item
                                    bought online?
                                </button>
                            </h2>
                            <div
                                id="flush-gap-collapseFour"
                                class="accordion-collapse collapse"
                                aria-labelledby="flush-gap-headingFour"
                                data-bs-parent="#accordionFlushExampleSimple"
                            >
                                <div class="accordion-body">
                                    Ned ut perspiciatis unde omnis
                                    iste natus error sit voluptatem
                                    accusantium doloremque
                                    laudantium, totam rem aperiam,
                                    eaque Arya.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="img-abstract">&nbsp;</div>
        <div class="our-faqs-cta">
            <div class="content">
                <h3>
                    Do more of the marketing work you love. Let us
                    shape your first campaign
                </h3>
                <div class="btn-set">
                    <a
                        href="javascript:"
                        class="btn btn-secondary"
                        data-trigger="#signup"
                        ><span class="outer-wrap"
                            ><span data-text="Get A Free Quote"
                                >Get A Free Quote</span
                            ></span
                        ></a
                    >
                    <a href="contact.html" class="btn btn-default"
                        ><span class="outer-wrap"
                            ><span data-text="Contact us"
                                >Contact us</span
                            ></span
                        ></a
                    >
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding bg-default line-bg">
    <div class="line-1">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="1570.917"
            height="656.371"
            viewBox="0 0 1570.917 656.371"
        >
            <path
                id="ling_abstract"
                d="M608,101s126-116,320,7,362-21,405,223,126,46,226,255,619,81,619,81"
                transform="translate(-607.323 -50.436)"
                fill="none"
                stroke
                stroke-linejoin="round"
                stroke-width="2"
                stroke-dasharray="10"
            />
        </svg>
    </div>
    <div class="line-2">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="1570.917"
            height="656.371"
            viewBox="0 0 1570.917 656.371"
        >
            <path
                id="ling_abstract1"
                d="M608,101s126-116,320,7,362-21,405,223,126,46,226,255,619,81,619,81"
                transform="translate(-607.323 -50.436)"
                fill="none"
                stroke
                stroke-linejoin="round"
                stroke-width="2"
                stroke-dasharray="10"
            />
        </svg>
    </div>
    <div class="line-3">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="1570.917"
            height="656.371"
            viewBox="0 0 1570.917 656.371"
        >
            <path
                id="ling_abstract2"
                d="M608,101s126-116,320,7,362-21,405,223,126,46,226,255,619,81,619,81"
                transform="translate(-607.323 -50.436)"
                fill="none"
                stroke
                stroke-linejoin="round"
                stroke-width="2"
                stroke-dasharray="10"
            />
        </svg>
    </div>
    <div class="line-4">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="1570.917"
            height="656.371"
            viewBox="0 0 1570.917 656.371"
        >
            <path
                id="ling_abstract3"
                d="M608,101s126-116,320,7,362-21,405,223,126,46,226,255,619,81,619,81"
                transform="translate(-607.323 -50.436)"
                fill="none"
                stroke
                stroke-linejoin="round"
                stroke-width="2"
                stroke-dasharray="10"
            />
        </svg>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-xl-5 mx-auto text-center">
                <div class="section-title text-center light">
                    <span>Real User Reviews</span>
                    <h2 class="wow">
                        What our client’s are
                        <strong>Saying about us</strong>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 text-center">
                <div class="circle-thumbs">
                    <img
                        src="{{asset('theme/client/assets/images/thumb_1.jpg')}}"
                        alt
                        class="thumb one"
                    />
                    <img
                        src="{{asset('theme/client/assets/images/thumb_2.jpg')}}"
                        alt
                        class="thumb two"
                    />
                    <img
                        src="{{asset('theme/client/assets/images/thumb_3.jpg')}}"
                        alt
                        class="thumb three"
                    />
                    <img
                        src="{{asset('theme/client/assets/images/thumb_4.jpg')}}"
                        alt
                        class="thumb four"
                    />
                    <img
                        src="{{asset('theme/client/assets/images/thumb_5.jpg')}}"
                        alt
                        class="thumb five"
                    />
                    <img
                        src="{{asset('theme/client/assets/images/thumb_6.jpg')}}"
                        alt
                        class="thumb six"
                    />
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 1168 1168"
                    >
                        <g
                            fill="none"
                            stroke="#000"
                            stroke-dasharray="5"
                            stroke-width="2"
                        >
                            <g data-name="Ellipse 1">
                                <circle
                                    cx="584"
                                    cy="584"
                                    r="584"
                                    stroke="none"
                                />
                                <circle cx="584" cy="584" r="583" />
                            </g>
                            <g
                                data-name="Ellipse 2"
                                transform="translate(154 154)"
                            >
                                <circle
                                    cx="430"
                                    cy="430"
                                    r="430"
                                    stroke="none"
                                />
                                <circle cx="430" cy="430" r="429" />
                            </g>
                            <g
                                data-name="Ellipse 3"
                                transform="translate(310 310)"
                            >
                                <circle
                                    cx="274"
                                    cy="274"
                                    r="274"
                                    stroke="none"
                                />
                                <circle cx="274" cy="274" r="273" />
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 offset-xl-1">
                <div class="testimonials-slider-single-wrap">
                    <div class="svg-wrap">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                        >
                            <path
                                d="M437 75a254 254 0 0 0-362 0 254 254 0 0 0-39 312L1 492a15 15 0 0 0 19 19l105-35a255 255 0 0 0 387-220c0-68-27-133-75-181zM256 482c-43 0-84-12-121-35a15 15 0 0 0-12-2l-84 28 28-84c1-4 1-9-2-12A225 225 0 0 1 256 30a226 226 0 0 1 0 452z"
                            />
                            <path
                                d="M346 161h-40c-19 0-35 16-35 35v40c0 19 16 35 35 35h43c-7 29-32 50-63 50a15 15 0 0 0 0 30c52 0 95-43 95-95v-60c0-19-16-35-35-35zm-45 75v-40c0-3 2-5 5-5h40c3 0 5 2 5 5v45h-45c-3 0-5-2-5-5zm-95-75h-40c-19 0-35 16-35 35v40c0 19 16 35 35 35h43c-7 29-32 50-63 50a15 15 0 0 0 0 30c52 0 95-43 95-95v-60c0-19-16-35-35-35zm-45 75v-40c0-3 2-5 5-5h40c3 0 5 2 5 5v45h-45c-3 0-5-2-5-5z"
                            />
                        </svg>
                    </div>
                    <div
                        class="owl-carousel owl-theme dots-border-light"
                        id="testimonials-slider-single"
                    >
                        <div class="item">
                            <div class="testimonial-single-left">
                                <hr class="divider-secondary" />
                                <h6>
                                    My business is growing faster
                                    and I’m very happy with that
                                </h6>
                                <p>
                                    Thank you for your excellent
                                    work. No one could hear us as
                                    well as you and make our wishes
                                    come true so beautifully and
                                    beautifully. Starting from the
                                    very first day, the work was
                                    inspired and gave positive
                                    results.
                                </p>
                                <div class="testimonial-box">
                                    <div class="thumb-img">
                                        <img
                                            src="{{asset('theme/client/assets/images/thumb_1.jpg')}}"
                                            alt
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="name">
                                            Rider Smith
                                        </div>
                                        <div class="post">
                                            Marketing Envato Pty
                                            Ltd.
                                        </div>
                                        <div class="rating">
                                            <i
                                                class="bi bi-star-fill"
                                            ></i>
                                            <i
                                                class="bi bi-star-fill"
                                            ></i>
                                            <i
                                                class="bi bi-star-fill"
                                            ></i>
                                            <i
                                                class="bi bi-star-fill"
                                            ></i>
                                            <i
                                                class="bi bi-star"
                                            ></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single-left">
                                <hr class="divider-secondary" />
                                <h6>
                                    My business is growing faster
                                    and I’m very happy with that
                                </h6>
                                <p>
                                    Thank you for your excellent
                                    work. No one could hear us as
                                    well as you and make our wishes
                                    come true so beautifully and
                                    beautifully. Starting from the
                                    very first day, the work was
                                    inspired and gave positive
                                    results.
                                </p>
                                <div class="testimonial-box">
                                    <div class="thumb-img">
                                        <img
                                            src="{{asset('theme/client/assets/images/thumb_2.jpg')}}"
                                            alt
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="name">
                                            Kevin Martin
                                        </div>
                                        <div class="post">
                                            Marketing Consultant
                                        </div>
                                        <div class="rating">
                                            <i
                                                class="bi bi-star-fill"
                                            ></i>
                                            <i
                                                class="bi bi-star-fill"
                                            ></i>
                                            <i
                                                class="bi bi-star-fill"
                                            ></i>
                                            <i
                                                class="bi bi-star-fill"
                                            ></i>
                                            <i
                                                class="bi bi-star"
                                            ></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single-left">
                                <hr class="divider-secondary" />
                                <h6>
                                    My business is growing faster
                                    and I’m very happy with that
                                </h6>
                                <p>
                                    Thank you for your excellent
                                    work. No one could hear us as
                                    well as you and make our wishes
                                    come true so beautifully and
                                    beautifully. Starting from the
                                    very first day, the work was
                                    inspired and gave positive
                                    results.
                                </p>
                                <div class="testimonial-box">
                                    <div class="thumb-img">
                                        <img
                                            src="{{asset('theme/client/assets/images/thumb_3.jpg')}}"
                                            alt
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="name">
                                            Sarah Albert
                                        </div>
                                        <div class="post">
                                            Senior Advisor
                                        </div>
                                        <div class="rating">
                                            <i
                                                class="bi bi-star-fill"
                                            ></i>
                                            <i
                                                class="bi bi-star-fill"
                                            ></i>
                                            <i
                                                class="bi bi-star-fill"
                                            ></i>
                                            <i
                                                class="bi bi-star-fill"
                                            ></i>
                                            <i
                                                class="bi bi-star"
                                            ></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single-left">
                                <hr class="divider-secondary" />
                                <h6>
                                    My business is growing faster
                                    and I’m very happy with that
                                </h6>
                                <p>
                                    Thank you for your excellent
                                    work. No one could hear us as
                                    well as you and make our wishes
                                    come true so beautifully and
                                    beautifully. Starting from the
                                    very first day, the work was
                                    inspired and gave positive
                                    results.
                                </p>
                                <div class="testimonial-box">
                                    <div class="thumb-img">
                                        <img
                                            src="{{asset('theme/client/assets/images/thumb_4.jpg')}}"
                                            alt
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="name">
                                            David Cooper
                                        </div>
                                        <div class="post">
                                            Freelance Consultant
                                        </div>
                                        <div class="rating">
                                            <i
                                                class="bi bi-star-fill"
                                            ></i>
                                            <i
                                                class="bi bi-star-fill"
                                            ></i>
                                            <i
                                                class="bi bi-star-fill"
                                            ></i>
                                            <i
                                                class="bi bi-star-fill"
                                            ></i>
                                            <i
                                                class="bi bi-star"
                                            ></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection