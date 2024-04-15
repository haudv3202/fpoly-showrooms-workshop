@extends('layouts.admin')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Ourteeams detail</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('ourteams.index')}}">Ourteeams</a></li>
                            <li class="breadcrumb-item active">Ourteeams detail</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="card">
            <div class="card-body">
                <div class="row g-2">
                    <div class="col-sm-4">
                        <div class="search-box">
                            <input type="text" class="form-control" id="searchMemberList"
                                placeholder="Search for name or designation...">
                            <i class="ri-search-line search-icon"></i>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-sm-auto ms-auto">
                        <div class="list-grid-nav hstack gap-1">
                            <button type="button" id="grid-view-button"
                                class="btn btn-soft-info nav-link btn-icon fs-14 filter-button active"><i
                                    class="ri-grid-fill"></i></button>
                            <button type="button" id="list-view-button"
                                class="btn btn-soft-info nav-link btn-icon fs-14 filter-button"><i
                                    class="ri-list-unordered"></i></button>
                            <button class="btn btn-success addMembers-modal" data-bs-toggle="modal"
                                data-bs-target="#addmemberModal"><i class="ri-add-fill me-1 align-bottom"></i> Add
                                Members</button>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div>
        @if(session('delete'))
            <div class="alert alert-success">
                {{ session('delete') }}
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger">
                <ul>
                    <li>{{ Session::get('error') }}</li>
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div>

                    <div id="teamlist">
                        <div class="team-list row grid-view-filter" id="team-member-list">
                            @foreach($project_users as $us)
                                <div class="col">
                                    <div class="card team-box">
                                        <div class="team-cover"> <img src="{{asset('theme/admin/assets/images/small/img-9.jpg')}}" alt=""
                                                                      class="img-fluid"> </div>
                                        <div class="card-body p-4">
                                            <div class="row align-items-center team-row">
                                                <div class="col team-settings">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="flex-shrink-0 me-2"> <button type="button"
                                                                                                     class="btn btn-light btn-icon rounded-circle btn-sm favourite-btn ">
                                                                    <i class="ri-star-fill fs-14"></i> </button> </div>
                                                        </div>
                                                        <div class="col text-end dropdown"> <a href="javascript:void(0);"
                                                                                               data-bs-toggle="dropdown" aria-expanded="false" class="">
                                                                <i class="ri-more-fill fs-17"></i> </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" style="">
                                                                <li>
                                                                    <form action="{{route('ourteams.deleteMembers')}}" method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="project_id" value="{{$project_id}}">
                                                                        <input type="hidden" name="author_id" value="{{$us->id}}">
                                                                        <button type="submit" class="dropdown-item remove-list"
                                                                           href="#removeMemberModal" data-bs-toggle="modal"
                                                                           data-remove-id="12"><i
                                                                                class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</button>
                                                                    </form>

                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col">
                                                    <div class="team-profile-img">
                                                        <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0"><img
                                                                src="{{asset($us->avatar)}}"  alt=""
                                                                class="member-img img-fluid d-block rounded-circle"></div>
                                                        <div class="team-content"> <a class="member-name"
                                                                                      data-bs-toggle="offcanvas" href="#member-overview"
                                                                                      aria-controls="member-overview">
                                                                <h5 class="fs-16 mb-1">{{$us->name}}</h5>
                                                            </a>
                                                            <p class="text-muted member-designation mb-0">{{$us->email}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col">
                                                    <div class="text-end">
                                                        <form action="{{route('ourteams.deleteMembers')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="project_id" value="{{$project_id}}">
                                                            <input type="hidden" name="author_id" value="{{$us->id}}">
                                                            <button type="submit"
                                                               class="btn btn-light view-btn">Remove</button>
                                                        </form>
                                                         </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>

                    </div>
                    <div class="py-4 mt-4 text-center" id="noresult" style="display: none;">
                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                            colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px"></lord-icon>
                        <h5 class="mt-4">Sorry! No Result Found</h5>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="addmemberModal" tabindex="-1" style="display: none;"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0">

                                <div class="modal-body">
                                    <form action="{{route('ourteams.addMembers')}}" method="post" autocomplete="off" id="memberlist-form" class="needs-validation"
                                        novalidate="">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="hidden" id="memberid-input" class="form-control"
                                                    value="">
                                                <div class="px-1 pt-1">
                                                    <div
                                                        class="modal-team-cover position-relative mb-0 mt-n4 mx-n4 rounded-top overflow-hidden">
                                                        <img src="{{asset('theme/admin/assets/images/small/img-9.jpg')}}" alt=""
                                                            id="cover-img" class="img-fluid">
                                                        <div class="d-flex position-absolute start-0 end-0 top-0 p-3">
                                                            <div class="flex-grow-1">
                                                                <h5 class="modal-title text-white" id="createMemberLabel">
                                                                    Add New Members</h5>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="d-flex gap-3 align-items-center">
                                                                    <div>
                                                                        <label for="cover-image-input" class="mb-0"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            aria-label="Select Cover Image"
                                                                            data-bs-original-title="Select Cover Image">

                                                                        </label>

                                                                    </div>
                                                                    <button type="button"
                                                                        class="btn-close btn-close-white"
                                                                        id="createMemberBtn-close" data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center mb-4 mt-n5 pt-2">
                                                    <div class="position-relative d-inline-block">
                                                        <div class="position-absolute bottom-0 end-0">
                                                            <label for="member-image-input" class="mb-0"
                                                                data-bs-toggle="tooltip" data-bs-placement="right"
                                                                aria-label="Select Member Image"
                                                                data-bs-original-title="Select Member Image">

                                                            </label>
                                                            <input class="form-control d-none" value=""
                                                                id="member-image-input" type="file"
                                                                accept="image/png, image/gif, image/jpeg">
                                                        </div>
                                                        <div class="avatar-lg">
                                                            <div class="avatar-title bg-light rounded-circle">
                                                                <img src="{{asset('theme/admin/assets/images/users/user-dummy-img.jpg')}}"
                                                                    id="member-img"
                                                                    class="avatar-md rounded-circle h-auto">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="teammembersName" class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="teammembersName"
                                                        placeholder="Enter email" name="email" required="">
                                                </div>
                                                <input type="hidden" name="project_id" value="{{ $project_id }}">

                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success" id="addNewMember">Add
                                                        Member</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--end modal-content-->
                        </div>
                        <!--end modal-dialog-->
                    </div>
                    <!--end modal-->


                    <!--end offcanvas-->
                </div>
            </div><!-- end col -->
        </div>
        <!--end row-->
    </div>
@endsection
