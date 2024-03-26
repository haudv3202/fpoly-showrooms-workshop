@extends('layouts.admin')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Banners</h4>
    
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('banner.index')}}">Banners</a></li>
                            <li class="breadcrumb-item active">List banners</li>
                        </ol>
                    </div>
    
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex align-items-center mb-4">
                    <div class="flex-grow-1">
                        <p class="text-muted fs-14 mb-0">Banner: {{$bannerCount}}</p>
                    </div>
                    <div class="flex-grow-2">
                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" ><a class="text-white" href="{{route('banner.create')}}">
                            <i class="ri-add-line align-bottom me-1"></i> Add Bnner</a></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1">
            @foreach ($banners as $banner)
            <div class="col list-element w-100 h-50">
                <div class="card explore-box card-animate ">
                    <div class="explore-place-bid-img "> 
                        <input type="hidden" class="form-control" id="1">
                        <div class="d-none">undefined</div> 
                        <img src="{{ asset($banner->image) }}" alt="" class="card-img-top explore-img">

                        <div class="bg-overlay"></div>
                        <div class="d-flex justify-content-between place-bid-btn">
                            <div class="me-2">
                                <form action="{{ route('banner.update', $banner->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-success">
                                        @if($banner->is_active==0)
                                        Hoạt động
                                        @else
                                        Ngưng hoạt động
                                        @endif
                                    </button>
                                </form>
                            </div>
                            
                            <div class="ms-2">
                                <form action="{{ route('banner.destroy', $banner->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-success">Xoá banner</button>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            @endforeach
           
        </div>
        <!-- end row -->
        <div class="py-4 text-center" id="noresult" style="display: none;">
            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px"></lord-icon>
            <h5 class="mt-4">Sorry! No Result Found</h5>
        </div>
        
    </div>
@endsection
