@extends('layouts.admin')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Explore Now</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">NFT Marketplace</a></li>
                            <li class="breadcrumb-item active">Explore Now</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex align-items-center">
                            <h5 class="card-title mb-0 flex-grow-1">Explore Product</h5>
                            <div>
                                <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample"><i
                                        class="ri-filter-2-line align-bottom"></i> Filters</a>
                            </div>
                        </div>
                        <div class="collaps show" id="collapseExample">
                            <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1 mt-3 g-3">
                                <div class="col">
                                    <h6 class="text-uppercase fs-12 mb-2">Search</h6>
                                    <input type="text" class="form-control" placeholder="Search product name"
                                        autocomplete="off" id="searchProductList">
                                </div>
                                <div class="col">
                                    <h6 class="text-uppercase fs-12 mb-2">Select Category</h6>
                                    <select class="form-control" data-choices="" name="select-category"
                                        data-choices-search-false="" id="select-category">
                                        <option value="">Select Category</option>
                                        <option value="Artwork">Artwork</option>
                                        <option value="3d Style">3d Style</option>
                                        <option value="Photography">Photography</option>
                                        <option value="Collectibles">Collectibles</option>
                                        <option value="Crypto Card">Crypto Card</option>
                                        <option value="Games">Games</option>
                                        <option value="Music">Music</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <h6 class="text-uppercase fs-12 mb-2">File Type</h6>
                                    <select class="form-control" data-choices="" name="file-type"
                                        data-choices-search-false="" id="file-type">
                                        <option value="">File Type</option>
                                        <option value="jpg">Images</option>
                                        <option value="mp4">Video</option>
                                        <option value="mp3">Audio</option>
                                        <option value="gif">Gif</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <h6 class="text-uppercase fs-12 mb-2">Sales Type</h6>
                                    <select class="form-control" data-choices="" name="all-sales-type"
                                        data-choices-search-false="" id="all-sales-type">
                                        <option value="">All Sales Type</option>
                                        <option value="On Auction">On Auction</option>
                                        <option value="Has Offers">Has Offers</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <h6 class="text-uppercase fs-12 mb-4">Price</h6>
                                    <div class="slider" id="range-product-price"></div>
                                    <input class="form-control" type="hidden" id="minCost" value="0">
                                    <input class="form-control" type="hidden" id="maxCost" value="1000">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="d-flex align-items-center mb-4">
                    <div class="flex-grow-1">
                        <p class="text-muted fs-14 mb-0">Result: 8745</p>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <a class="text-muted fs-14 dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                All View
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1" id="explorecard-list">
            <div class="col list-element">
                <div class="card explore-box card-animate">
                    <div class="explore-place-bid-img"> <input type="hidden" class="form-control" id="1">
                        <div class="d-none">undefined</div> <img
                            src="https://img.themesbrand.com/velzon/images/img-3.gif"
                            alt="" class="card-img-top explore-img">
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn"> <a href="#!" class="btn btn-success"><i
                                    class="ri-auction-fill align-bottom me-1"></i> Place Bid</a> </div>
                    </div>
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2"> <button type="button"
                            class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i
                                class="mdi mdi-cards-heart fs-16"></i></button> </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 37.41k
                        </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Walking On Air</a></h5>
                        <p class="text-muted mb-0">Artwork</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14"> <i
                                    class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span
                                    class="fw-medium">10.35ETH</span> </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">14.167ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col list-element">
                <div class="card explore-box card-animate">
                    <div class="explore-place-bid-img"> <input type="hidden" class="form-control" id="2">
                        <div class="d-none">On Auction</div> <img
                            src="{{ asset('theme/admin/assets/images/nft/img-03.jpg') }}" alt=""
                            class="card-img-top explore-img">
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn"> <a href="#!" class="btn btn-success"><i
                                    class="ri-auction-fill align-bottom me-1"></i> Place Bid</a> </div>
                    </div>
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2"> <button type="button"
                            class="btn btn-icon " data-bs-toggle="button" aria-pressed="true"><i
                                class="mdi mdi-cards-heart fs-16"></i></button> </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 19.29k
                        </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Creative Filtered Portrait</a></h5>
                        <p class="text-muted mb-0">Photography</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14"> <i
                                    class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span
                                    class="fw-medium">75.3ETH</span> </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">67.36ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col list-element">
                <div class="card explore-box card-animate">
                    <div class="explore-place-bid-img"> <input type="hidden" class="form-control" id="3">
                        <div class="d-none">Has Offers</div> <img
                            src="{{ asset('theme/admin/assets/images/nft/img-02.jpg') }}" alt=""
                            class="card-img-top explore-img">
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn"> <a href="#!" class="btn btn-success"><i
                                    class="ri-auction-fill align-bottom me-1"></i> Place Bid</a> </div>
                    </div>
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2"> <button type="button"
                            class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i
                                class="mdi mdi-cards-heart fs-16"></i></button> </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 23.63k
                        </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">The Chirstoper</a></h5>
                        <p class="text-muted mb-0">Music</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14"> <i
                                    class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span
                                    class="fw-medium">412.30ETH</span> </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">394.7ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col list-element">
                <div class="card explore-box card-animate">
                    <div class="explore-place-bid-img"> <input type="hidden" class="form-control" id="4">
                        <div class="d-none">Has Offers</div> <img
                            src="https://img.themesbrand.com/velzon/images/img-4.gif"
                            alt="" class="card-img-top explore-img">
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn"> <a href="#!" class="btn btn-success"><i
                                    class="ri-auction-fill align-bottom me-1"></i> Place Bid</a> </div>
                    </div>
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2"> <button type="button"
                            class="btn btn-icon " data-bs-toggle="button" aria-pressed="true"><i
                                class="mdi mdi-cards-heart fs-16"></i></button> </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 15.93k
                        </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Evolved Reality</a></h5>
                        <p class="text-muted mb-0">Video</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14"> <i
                                    class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span
                                    class="fw-medium">2.75ETH</span> </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">3.167ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col list-element">
                <div class="card explore-box card-animate">
                    <div class="explore-place-bid-img"> <input type="hidden" class="form-control" id="5">
                        <div class="d-none">Has Offers</div> <img
                            src="{{ asset('theme/admin/assets/images/nft/img-01.jpg') }}" alt=""
                            class="card-img-top explore-img">
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn"> <a href="#!" class="btn btn-success"><i
                                    class="ri-auction-fill align-bottom me-1"></i> Place Bid</a> </div>
                    </div>
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2"> <button type="button"
                            class="btn btn-icon " data-bs-toggle="button" aria-pressed="true"><i
                                class="mdi mdi-cards-heart fs-16"></i></button> </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 14.85k
                        </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Abstract Face Painting</a></h5>
                        <p class="text-muted mb-0">Collectibles</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14"> <i
                                    class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span
                                    class="fw-medium">122.34ETH</span> </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">97.8ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col list-element">
                <div class="card explore-box card-animate">
                    <div class="explore-place-bid-img"> <input type="hidden" class="form-control" id="6">
                        <div class="d-none">On Auction</div> <img
                            src="{{ asset('theme/admin/assets/images/nft/img-05.jpg') }}" alt=""
                            class="card-img-top explore-img">
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn"> <a href="#!" class="btn btn-success"><i
                                    class="ri-auction-fill align-bottom me-1"></i> Place Bid</a> </div>
                    </div>
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2"> <button type="button"
                            class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i
                                class="mdi mdi-cards-heart fs-16"></i></button> </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 64.10k
                        </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Long-tailed Macaque</a></h5>
                        <p class="text-muted mb-0">Artwork</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14"> <i
                                    class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span
                                    class="fw-medium">874.01ETH</span> </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">745.14ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col list-element">
                <div class="card explore-box card-animate">
                    <div class="explore-place-bid-img"> <input type="hidden" class="form-control" id="7">
                        <div class="d-none">On Auction</div> <img
                            src="{{ asset('theme/admin/assets/images/nft/img-06.jpg') }}" alt=""
                            class="card-img-top explore-img">
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn"> <a href="#!" class="btn btn-success"><i
                                    class="ri-auction-fill align-bottom me-1"></i> Place Bid</a> </div>
                    </div>
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2"> <button type="button"
                            class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i
                                class="mdi mdi-cards-heart fs-16"></i></button> </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k
                        </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                        <p class="text-muted mb-0">Artwork</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14"> <i
                                    class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span
                                    class="fw-medium">41.658 ETH</span> </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">34.81ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col list-element">
                <div class="card explore-box card-animate">
                    <div class="explore-place-bid-img"> <input type="hidden" class="form-control" id="8">
                        <div class="d-none">On Auction</div> <img
                            src="https://img.themesbrand.com/velzon/images/img-2.gif"
                            alt="" class="card-img-top explore-img">
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn"> <a href="#!" class="btn btn-success"><i
                                    class="ri-auction-fill align-bottom me-1"></i> Place Bid</a> </div>
                    </div>
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2"> <button type="button"
                            class="btn btn-icon " data-bs-toggle="button" aria-pressed="true"><i
                                class="mdi mdi-cards-heart fs-16"></i></button> </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 94.1k
                        </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Trendy Fashion Portraits</a></h5>
                        <p class="text-muted mb-0">3d Style</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14"> <i
                                    class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span
                                    class="fw-medium">674.92 ETH</span> </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">563.81ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col list-element">
                <div class="card explore-box card-animate">
                    <div class="explore-place-bid-img"> <input type="hidden" class="form-control" id="9">
                        <div class="d-none">Has Offers</div> <img
                            src="{{ asset('theme/admin/assets/images/nft/img-04.jpg') }}" alt=""
                            class="card-img-top explore-img">
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn"> <a href="#!" class="btn btn-success"><i
                                    class="ri-auction-fill align-bottom me-1"></i> Place Bid</a> </div>
                    </div>
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2"> <button type="button"
                            class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i
                                class="mdi mdi-cards-heart fs-16"></i></button> </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 34.12k
                        </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Smillevers Crypto</a></h5>
                        <p class="text-muted mb-0">Crypto Card</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14"> <i
                                    class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span
                                    class="fw-medium">41.658 ETH</span> </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">34.81ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col list-element">
                <div class="card explore-box card-animate">
                    <div class="explore-place-bid-img"> <input type="hidden" class="form-control" id="10">
                        <div class="d-none">On Auction</div> <img
                            src="https://img.themesbrand.com/velzon/images/img-1.gif"
                            alt="" class="card-img-top explore-img">
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn"> <a href="#!" class="btn btn-success"><i
                                    class="ri-auction-fill align-bottom me-1"></i> Place Bid</a> </div>
                    </div>
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2"> <button type="button"
                            class="btn btn-icon " data-bs-toggle="button" aria-pressed="true"><i
                                class="mdi mdi-cards-heart fs-16"></i></button> </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 8.42k
                        </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Patterns Arts &amp; Culture</a></h5>
                        <p class="text-muted mb-0">Artwork</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14"> <i
                                    class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span
                                    class="fw-medium">9.64ETH</span> </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">14.167ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col list-element">
                <div class="card explore-box card-animate">
                    <div class="explore-place-bid-img"> <input type="hidden" class="form-control" id="11">
                        <div class="d-none">On Auction</div> <img
                            src="{{ asset('theme/admin/assets/images/nft/img-03.jpg') }}" alt=""
                            class="card-img-top explore-img">
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn"> <a href="#!" class="btn btn-success"><i
                                    class="ri-auction-fill align-bottom me-1"></i> Place Bid</a> </div>
                    </div>
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2"> <button type="button"
                            class="btn btn-icon " data-bs-toggle="button" aria-pressed="true"><i
                                class="mdi mdi-cards-heart fs-16"></i></button> </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 19.29k
                        </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Creative Filtered Portrait</a></h5>
                        <p class="text-muted mb-0">Video</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14"> <i
                                    class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span
                                    class="fw-medium">75.3ETH</span> </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">267.36ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col list-element">
                <div class="card explore-box card-animate">
                    <div class="explore-place-bid-img"> <input type="hidden" class="form-control" id="12">
                        <div class="d-none">Has Offers</div> <img
                            src="https://img.themesbrand.com/velzon/images/img-4.gif"
                            alt="" class="card-img-top explore-img">
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn"> <a href="#!" class="btn btn-success"><i
                                    class="ri-auction-fill align-bottom me-1"></i> Place Bid</a> </div>
                    </div>
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2"> <button type="button"
                            class="btn btn-icon " data-bs-toggle="button" aria-pressed="true"><i
                                class="mdi mdi-cards-heart fs-16"></i></button> </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 15.93k
                        </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Evolved Reality</a></h5>
                        <p class="text-muted mb-0">Artwork</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14"> <i
                                    class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span
                                    class="fw-medium">2.75ETH</span> </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">324.26ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col list-element">
                <div class="card explore-box card-animate">
                    <div class="explore-place-bid-img"> <input type="hidden" class="form-control" id="13">
                        <div class="d-none">Has Offers</div> <img
                            src="{{ asset('theme/admin/assets/images/nft/img-01.jpg') }}" alt=""
                            class="card-img-top explore-img">
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn"> <a href="#!" class="btn btn-success"><i
                                    class="ri-auction-fill align-bottom me-1"></i> Place Bid</a> </div>
                    </div>
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2"> <button type="button"
                            class="btn btn-icon " data-bs-toggle="button" aria-pressed="true"><i
                                class="mdi mdi-cards-heart fs-16"></i></button> </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 14.85k
                        </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Abstract Face Painting</a></h5>
                        <p class="text-muted mb-0">Photography</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14"> <i
                                    class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span
                                    class="fw-medium">122.34ETH</span> </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">245.8ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col list-element">
                <div class="card explore-box card-animate">
                    <div class="explore-place-bid-img"> <input type="hidden" class="form-control" id="14">
                        <div class="d-none">On Auction</div> <img
                            src="{{ asset('theme/admin/assets/images/nft/img-05.jpg') }}" alt=""
                            class="card-img-top explore-img">
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn"> <a href="#!" class="btn btn-success"><i
                                    class="ri-auction-fill align-bottom me-1"></i> Place Bid</a> </div>
                    </div>
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2"> <button type="button"
                            class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i
                                class="mdi mdi-cards-heart fs-16"></i></button> </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 64.10k
                        </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Long-tailed Macaque</a></h5>
                        <p class="text-muted mb-0">Collectibles</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14"> <i
                                    class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span
                                    class="fw-medium">874.01ETH</span> </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">340.14ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col list-element">
                <div class="card explore-box card-animate">
                    <div class="explore-place-bid-img"> <input type="hidden" class="form-control" id="15">
                        <div class="d-none">On Auction</div> <img
                            src="{{ asset('theme/admin/assets/images/nft/img-06.jpg') }}" alt=""
                            class="card-img-top explore-img">
                        <div class="bg-overlay"></div>
                        <div class="place-bid-btn"> <a href="#!" class="btn btn-success"><i
                                    class="ri-auction-fill align-bottom me-1"></i> Place Bid</a> </div>
                    </div>
                    <div class="bookmark-icon position-absolute top-0 end-0 p-2"> <button type="button"
                            class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i
                                class="mdi mdi-cards-heart fs-16"></i></button> </div>
                    <div class="card-body">
                        <p class="fw-medium mb-0 float-end"><i class="mdi mdi-heart text-danger align-middle"></i> 36.42k
                        </p>
                        <h5 class="mb-1"><a href="apps-nft-item-details.html">Robotic Body Art</a></h5>
                        <p class="text-muted mb-0">Photography</p>
                    </div>
                    <div class="card-footer border-top border-top-dashed">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 fs-14"> <i
                                    class="ri-price-tag-3-fill text-warning align-bottom me-1"></i> Highest: <span
                                    class="fw-medium">41.658 ETH</span> </div>
                            <h5 class="flex-shrink-0 fs-14 text-primary mb-0">121.81ETH</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="py-4 text-center" id="noresult" style="display: none;">
            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px"></lord-icon>
            <h5 class="mt-4">Sorry! No Result Found</h5>
        </div>
        <div class="text-center mb-3">
            <button class="btn btn-link text-success mt-2" id="loadmore"><i
                    class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load More </button>
        </div>
    </div>
@endsection
