@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Ourteeams list</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('ourteams.index')}}">Ourteeams</a></li>
                        <li class="breadcrumb-item active">Ourteeams list</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row g-4 mb-3">
        <div class="col-sm-auto">
            <div>
                <a href="{{ route('ourteams.create') }}" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> Add New</a>
            </div>
        </div>
        <div class="col-sm">
            <div class="d-flex justify-content-sm-end gap-2">
                <div class="search-box ms-2">
                    <input type="text" class="form-control" placeholder="Search...">
                    <i class="ri-search-line search-icon"></i>
                </div>
            </div>
        </div>
    </div>
    @php
        $count = 0;
    @endphp

    @foreach($ourteam as $item)
        @if($count == 0)
            <div class="row">
                @endif
                    <div class="col-xxl-3 col-sm-6 project-card">
                        <div class="card card-height-100">
                            <div class="card-body">
                                <div class="d-flex flex-column h-100">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted mb-4"></p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="d-flex gap-1 align-items-center">
                                                <div class="dropdown">
                                                    <button class="btn btn-link text-muted p-1 mt-n2 py-0 text-decoration-none fs-15" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-sm"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                    </button>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="{{ route('ourteams.show',$item) }}"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="{{ route('ourteams.edit',$item) }}"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-sm">
                                <span class="avatar-title bg-warning-subtle rounded p-2">
                                    <img src="{{ asset('theme/admin/assets/images/brands/slack.png') }}" alt="" class="img-fluid p-1">
                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1 fs-15"><a href="{{ route('ourteams.show',$item) }}" class="text-body">{{$item->name}}</a></h5>
                                            <p class="text-muted text-truncate-two-lines mb-3"></p>
                                        </div>
                                    </div>
                                    <div class="mt-auto">
                                        <div class="d-flex mb-2">
                                            <div class="flex-grow-1">
                                                <div></div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div><i class="ri-list-check align-bottom me-1 text-muted"></i></div>
                                            </div>
                                        </div>
                                        <div class="progress progress-sm animated-progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div><!-- /.progress-bar -->
                                        </div><!-- /.progress -->
                                    </div>
                                </div>

                            </div>
                            <!-- end card body -->
                            <div class="card-footer bg-transparent border-top-dashed py-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="avatar-group">
                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Darline Williams" data-bs-original-title="Darline Williams">
                                                <div class="avatar-xxs">
                                                </div>
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="Add Members">
                                                <div class="avatar-xxs">

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="text-muted">
                                            <i class="ri-calendar-event-fill me-1 align-bottom"></i> {{$item->created_at}}
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- end card footer -->
                        </div>
                        <!-- end card -->
                    </div>


                @if($count == 3)
            </div>
            @php
                $count = -1; // Gán -1 để sau khi tăng sẽ được 0
            @endphp
        @endif

        @php
            $count++;
        @endphp
    @endforeach


    <!-- end row -->
    {{$ourteam->links()}}
</div>
@endsection
