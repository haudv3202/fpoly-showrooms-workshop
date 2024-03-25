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
            <div
                class="col-xl-5 col-lg-9 col-md-12 mx-auto text-center"
            >
                <div class="section-title text-center">
                    <span>Latest Case Studies</span>
                    <h2 class="wow">
                        Our Creativity
                        <strong>Introduce Our Projects</strong>
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
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul id="portfolio-flters" class="list-unstyled">
                    <li data-filter="*" class="filter-active">
                        <a href="javascript:">All</a>
                    </li>
                    <li data-filter=".design">
                        <a href="javascript:">Design</a>
                    </li>
                    <li data-filter=".development">
                        <a href="javascript:">Development</a>
                    </li>
                    <li data-filter=".ideas">
                        <a href="javascript:">Ideas</a>
                    </li>
                    <li data-filter=".technology">
                        <a href="javascript:">Technology</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="isotope-gallery row four-column">
            <div
                class="gallery-item col-xl-3 col-lg-4 col-md-6 col-12 design"
            >
                <div class="portfolio-gallery-item">
                    <div class="item-img">
                        <div class="portfolio-img-gallery">
                            <a
                                href="{{asset('theme/client/assets/images/portfolio/portfolio_img_1.jpg')}}"
                                class="portfolio-img-gallery"
                                title="Title Come here"
                                ><img
                                    src="{{asset('theme/client/assets/images/portfolio/portfolio_img_1.jpg')}}"
                                    class="rounded"
                                    alt
                            /></a>
                            <div class="img-over">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <a
                            href="portfolio-single.html"
                            class="arrow"
                            ><i class="srn-arrow-right"></i
                        ></a>
                    </div>
                    <div class="item-content">
                        <h6>
                            <a href="portfolio-single.html"
                                >Global revenue</a
                            >
                        </h6>
                        <div class="sub-head">
                            It Services & Consultancy
                        </div>
                        <p>
                            We use the latest technologies it
                            voluptatem accusantium We do this by
                            discerning the ships
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="gallery-item col-xl-3 col-lg-4 col-md-6 col-12 development"
            >
                <div class="portfolio-gallery-item">
                    <div class="item-img">
                        <div class="portfolio-img-gallery">
                            <a
                                href="{{asset('theme/client/assets/images/portfolio/portfolio_img_2.jpg')}}"
                                class="portfolio-img-gallery"
                                title="Title Come here"
                                ><img
                                    src="{{asset('theme/client/assets/images/portfolio/portfolio_img_2.jpg')}}"
                                    class="rounded"
                                    alt
                            /></a>
                            <div class="img-over">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <a
                            href="portfolio-single.html"
                            class="arrow"
                            ><i class="srn-arrow-right"></i
                        ></a>
                    </div>
                    <div class="item-content">
                        <h6>
                            <a href="portfolio-single.html"
                                >We can blend colors multiple ways,
                                the most common</a
                            >
                        </h6>
                        <div class="sub-head">
                            It Services & Consultancy
                        </div>
                        <p>
                            We use the latest technologies it
                            voluptatem accusantium We do this by
                            discerning the ships
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="gallery-item col-xl-3 col-lg-4 col-md-6 col-12 ideas"
            >
                <div class="portfolio-gallery-item">
                    <div class="item-img">
                        <div class="portfolio-img-gallery">
                            <a
                                href="{{asset('theme/client/assets/images/portfolio/portfolio_img_3.jpg')}}"
                                class="portfolio-img-gallery"
                                title="Title Come here"
                                ><img
                                    src="{{asset('theme/client/assets/images/portfolio/portfolio_img_3.jpg')}}"
                                    class="rounded"
                                    alt
                            /></a>
                            <div class="img-over">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <a
                            href="portfolio-single.html"
                            class="arrow"
                            ><i class="srn-arrow-right"></i
                        ></a>
                    </div>
                    <div class="item-content">
                        <h6>
                            <a href="portfolio-single.html"
                                >Global revenue</a
                            >
                        </h6>
                        <div class="sub-head">
                            It Services & Consultancy
                        </div>
                        <p>
                            We use the latest technologies it
                            voluptatem accusantium We do this by
                            discerning the ships
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="gallery-item col-xl-3 col-lg-4 col-md-6 col-12 design"
            >
                <div class="portfolio-gallery-item">
                    <div class="item-img">
                        <div class="portfolio-img-gallery">
                            <a
                                href="{{asset('theme/client/assets/images/portfolio/portfolio_img_4.jpg')}}"
                                class="portfolio-img-gallery"
                                title="Title Come here"
                                ><img
                                    src="{{asset('theme/client/assets/images/portfolio/portfolio_img_4.jpg')}}"
                                    class="rounded"
                                    alt
                            /></a>
                            <div class="img-over">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <a
                            href="portfolio-single.html"
                            class="arrow"
                            ><i class="srn-arrow-right"></i
                        ></a>
                    </div>
                    <div class="item-content">
                        <h6>
                            <a href="portfolio-single.html"
                                >We can blend colors multiple ways,
                                the most common</a
                            >
                        </h6>
                        <div class="sub-head">
                            It Services & Consultancy
                        </div>
                        <p>
                            We use the latest technologies it
                            voluptatem accusantium We do this by
                            discerning the ships
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="gallery-item col-xl-3 col-lg-4 col-md-6 col-12 development"
            >
                <div class="portfolio-gallery-item">
                    <div class="item-img">
                        <div class="portfolio-img-gallery">
                            <a
                                href="{{asset('theme/client/assets/images/portfolio/portfolio_img_5.jpg')}}"
                                class="portfolio-img-gallery"
                                title="Title Come here"
                                ><img
                                    src="{{asset('theme/client/assets/images/portfolio/portfolio_img_5.jpg')}}"
                                    class="rounded"
                                    alt
                            /></a>
                            <div class="img-over">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <a
                            href="portfolio-single.html"
                            class="arrow"
                            ><i class="srn-arrow-right"></i
                        ></a>
                    </div>
                    <div class="item-content">
                        <h6>
                            <a href="portfolio-single.html"
                                >Global revenue</a
                            >
                        </h6>
                        <div class="sub-head">
                            It Services & Consultancy
                        </div>
                        <p>
                            We use the latest technologies it
                            voluptatem accusantium We do this by
                            discerning the ships
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="gallery-item col-xl-3 col-lg-4 col-md-6 col-12 technology"
            >
                <div class="portfolio-gallery-item">
                    <div class="item-img">
                        <div class="portfolio-img-gallery">
                            <a
                                href="{{asset('theme/client/assets/images/portfolio/portfolio_img_6.jpg')}}"
                                class="portfolio-img-gallery"
                                title="Title Come here"
                                ><img
                                    src="{{asset('theme/client/assets/images/portfolio/portfolio_img_6.jpg')}}"
                                    class="rounded"
                                    alt
                            /></a>
                            <div class="img-over">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <a
                            href="portfolio-single.html"
                            class="arrow"
                            ><i class="srn-arrow-right"></i
                        ></a>
                    </div>
                    <div class="item-content">
                        <h6>
                            <a href="portfolio-single.html"
                                >Global revenue</a
                            >
                        </h6>
                        <div class="sub-head">
                            It Services & Consultancy
                        </div>
                        <p>
                            We use the latest technologies it
                            voluptatem accusantium We do this by
                            discerning the ships
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="gallery-item col-xl-3 col-lg-4 col-md-6 col-12 development"
            >
                <div class="portfolio-gallery-item">
                    <div class="item-img">
                        <div class="portfolio-img-gallery">
                            <a
                                href="{{asset('theme/client/assets/images/portfolio/portfolio_img_7.jpg')}}"
                                class="portfolio-img-gallery"
                                title="Title Come here"
                                ><img
                                    src="{{asset('theme/client/assets/images/portfolio/portfolio_img_7.jpg')}}"
                                    class="rounded"
                                    alt
                            /></a>
                            <div class="img-over">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <a
                            href="portfolio-single.html"
                            class="arrow"
                            ><i class="srn-arrow-right"></i
                        ></a>
                    </div>
                    <div class="item-content">
                        <h6>
                            <a href="portfolio-single.html"
                                >How To Blow Through Capital At An
                                Incredible Rate</a
                            >
                        </h6>
                        <div class="sub-head">
                            It Services & Consultancy
                        </div>
                        <p>
                            We use the latest technologies it
                            voluptatem accusantium We do this by
                            discerning the ships
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="gallery-item col-xl-3 col-lg-4 col-md-6 col-12 design"
            >
                <div class="portfolio-gallery-item">
                    <div class="item-img">
                        <div class="portfolio-img-gallery">
                            <a
                                href="{{asset('theme/client/assets/images/portfolio/portfolio_img_8.jpg')}}"
                                class="portfolio-img-gallery"
                                title="Title Come here"
                                ><img
                                    src="{{asset('theme/client/assets/images/portfolio/portfolio_img_8.jpg')}}"
                                    class="rounded"
                                    alt
                            /></a>
                            <div class="img-over">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <a
                            href="portfolio-single.html"
                            class="arrow"
                            ><i class="srn-arrow-right"></i
                        ></a>
                    </div>
                    <div class="item-content">
                        <h6>
                            <a href="portfolio-single.html"
                                >Global revenue</a
                            >
                        </h6>
                        <div class="sub-head">
                            It Services & Consultancy
                        </div>
                        <p>
                            We use the latest technologies it
                            voluptatem accusantium We do this by
                            discerning the ships
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="gallery-item col-xl-3 col-lg-4 col-md-6 col-12 technology"
            >
                <div class="portfolio-gallery-item">
                    <div class="item-img">
                        <div class="portfolio-img-gallery">
                            <a
                                href="{{asset('theme/client/assets/images/portfolio/portfolio_img_9.jpg')}}"
                                class="portfolio-img-gallery"
                                title="Title Come here"
                                ><img
                                    src="{{asset('theme/client/assets/images/portfolio/portfolio_img_9.jpg')}}"
                                    class="rounded"
                                    alt
                            /></a>
                            <div class="img-over">
                                <i class="bi bi-plus-lg"></i>
                            </div>
                        </div>
                        <a
                            href="portfolio-single.html"
                            class="arrow"
                            ><i class="srn-arrow-right"></i
                        ></a>
                    </div>
                    <div class="item-content">
                        <h6>
                            <a href="portfolio-single.html"
                                >Design Studios That Everyone Should
                                Know About?</a
                            >
                        </h6>
                        <div class="sub-head">
                            It Services & Consultancy
                        </div>
                        <p>
                            We use the latest technologies it
                            voluptatem accusantium We do this by
                            discerning the ships
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection