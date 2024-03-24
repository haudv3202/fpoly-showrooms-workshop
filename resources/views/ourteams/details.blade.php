@extends('layouts.admin')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Team</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Team</li>
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
                            <button type="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false"
                                class="btn btn-soft-info btn-icon fs-14"><i class="ri-more-2-fill"></i></button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1" style="">
                                <li><a class="dropdown-item" href="#">All</a></li>
                                <li><a class="dropdown-item" href="#">Last Week</a></li>
                                <li><a class="dropdown-item" href="#">Last Month</a></li>
                                <li><a class="dropdown-item" href="#">Last Year</a></li>
                            </ul>
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

        <div class="row">
            <div class="col-lg-12">
                <div>

                    <div id="teamlist">
                        <div class="team-list row grid-view-filter" id="team-member-list">
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
                                                            <li><a class="dropdown-item edit-list" href="#addmemberModal"
                                                                    data-bs-toggle="modal" data-edit-id="12"><i
                                                                        class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item remove-list"
                                                                    href="#removeMemberModal" data-bs-toggle="modal"
                                                                    data-remove-id="12"><i
                                                                        class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="team-profile-img">
                                                    <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0"><img
                                                            src="{{asset('theme/admin/assets/images/users/avatar-2.jpg')}}" alt=""
                                                            class="member-img img-fluid d-block rounded-circle"></div>
                                                    <div class="team-content"> <a class="member-name"
                                                            data-bs-toggle="offcanvas" href="#member-overview"
                                                            aria-controls="member-overview">
                                                            <h5 class="fs-16 mb-1">Nancy Martino</h5>
                                                        </a>
                                                        <p class="text-muted member-designation mb-0">Team Leader &amp; HR
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="row text-muted text-center">
                                                    <div class="col-6 border-end border-end-dashed">
                                                        <h5 class="mb-1 projects-num">225</h5>
                                                        <p class="text-muted mb-0">Projects</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="mb-1 tasks-num">197</h5>
                                                        <p class="text-muted mb-0">Tasks</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col">
                                                <div class="text-end"> <a href="pages-profile.html"
                                                        class="btn btn-light view-btn">View Profile</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card team-box">
                                    <div class="team-cover"> <img src="{{asset('theme/admin/assets/images/small/img-12.jpg')}}" alt=""
                                            class="img-fluid"> </div>
                                    <div class="card-body p-4">
                                        <div class="row align-items-center team-row">
                                            <div class="col team-settings">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="flex-shrink-0 me-2"> <button type="button"
                                                                class="btn btn-light btn-icon rounded-circle btn-sm favourite-btn active">
                                                                <i class="ri-star-fill fs-14"></i> </button> </div>
                                                    </div>
                                                    <div class="col text-end dropdown"> <a href="javascript:void(0);"
                                                            data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                                class="ri-more-fill fs-17"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#addmemberModal"
                                                                    data-bs-toggle="modal" data-edit-id="11"><i
                                                                        class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item remove-list"
                                                                    href="#removeMemberModal" data-bs-toggle="modal"
                                                                    data-remove-id="11"><i
                                                                        class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="team-profile-img">
                                                    <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0">
                                                        <div
                                                            class="avatar-title border bg-light text-primary rounded-circle text-uppercase">
                                                            HB</div>
                                                    </div>
                                                    <div class="team-content"> <a class="member-name"
                                                            data-bs-toggle="offcanvas" href="#member-overview"
                                                            aria-controls="member-overview">
                                                            <h5 class="fs-16 mb-1">Henry Baird</h5>
                                                        </a>
                                                        <p class="text-muted member-designation mb-0">Full Stack Developer
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="row text-muted text-center">
                                                    <div class="col-6 border-end border-end-dashed">
                                                        <h5 class="mb-1 projects-num">352</h5>
                                                        <p class="text-muted mb-0">Projects</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="mb-1 tasks-num">376</h5>
                                                        <p class="text-muted mb-0">Tasks</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col">
                                                <div class="text-end"> <a href="pages-profile.html"
                                                        class="btn btn-light view-btn">View Profile</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card team-box">
                                    <div class="team-cover"> <img src="{{asset('theme/admin/assets/images/small/img-11.jpg')}}" alt=""
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
                                                            data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                                class="ri-more-fill fs-17"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#addmemberModal"
                                                                    data-bs-toggle="modal" data-edit-id="10"><i
                                                                        class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item remove-list"
                                                                    href="#removeMemberModal" data-bs-toggle="modal"
                                                                    data-remove-id="10"><i
                                                                        class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="team-profile-img">
                                                    <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0"><img
                                                            src="{{asset('theme/admin/assets/images/users/avatar-3.jpg')}}" alt=""
                                                            class="member-img img-fluid d-block rounded-circle"></div>
                                                    <div class="team-content"> <a class="member-name"
                                                            data-bs-toggle="offcanvas" href="#member-overview"
                                                            aria-controls="member-overview">
                                                            <h5 class="fs-16 mb-1">Frank Hook</h5>
                                                        </a>
                                                        <p class="text-muted member-designation mb-0">Project Manager</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="row text-muted text-center">
                                                    <div class="col-6 border-end border-end-dashed">
                                                        <h5 class="mb-1 projects-num">164</h5>
                                                        <p class="text-muted mb-0">Projects</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="mb-1 tasks-num">182</h5>
                                                        <p class="text-muted mb-0">Tasks</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col">
                                                <div class="text-end"> <a href="pages-profile.html"
                                                        class="btn btn-light view-btn">View Profile</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card team-box">
                                    <div class="team-cover"> <img src="{{asset('theme/admin/assets/images/small/img-1.jpg')}}" alt=""
                                            class="img-fluid"> </div>
                                    <div class="card-body p-4">
                                        <div class="row align-items-center team-row">
                                            <div class="col team-settings">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="flex-shrink-0 me-2"> <button type="button"
                                                                class="btn btn-light btn-icon rounded-circle btn-sm favourite-btn active">
                                                                <i class="ri-star-fill fs-14"></i> </button> </div>
                                                    </div>
                                                    <div class="col text-end dropdown"> <a href="javascript:void(0);"
                                                            data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                                class="ri-more-fill fs-17"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#addmemberModal"
                                                                    data-bs-toggle="modal" data-edit-id="9"><i
                                                                        class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item remove-list"
                                                                    href="#removeMemberModal" data-bs-toggle="modal"
                                                                    data-remove-id="9"><i
                                                                        class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="team-profile-img">
                                                    <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0"><img
                                                            src="{{asset('theme/admin/assets/images/users/avatar-8.jpg')}}" alt=""
                                                            class="member-img img-fluid d-block rounded-circle"></div>
                                                    <div class="team-content"> <a class="member-name"
                                                            data-bs-toggle="offcanvas" href="#member-overview"
                                                            aria-controls="member-overview">
                                                            <h5 class="fs-16 mb-1">Jennifer Carter</h5>
                                                        </a>
                                                        <p class="text-muted member-designation mb-0">UI/UX Designer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="row text-muted text-center">
                                                    <div class="col-6 border-end border-end-dashed">
                                                        <h5 class="mb-1 projects-num">241</h5>
                                                        <p class="text-muted mb-0">Projects</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="mb-1 tasks-num">204</h5>
                                                        <p class="text-muted mb-0">Tasks</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col">
                                                <div class="text-end"> <a href="pages-profile.html"
                                                        class="btn btn-light view-btn">View Profile</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card team-box">
                                    <div class="team-cover"> <img src="{{asset('theme/admin/assets/images/small/img-10.jpg')}}" alt=""
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
                                                            data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                                class="ri-more-fill fs-17"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#addmemberModal"
                                                                    data-bs-toggle="modal" data-edit-id="8"><i
                                                                        class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item remove-list"
                                                                    href="#removeMemberModal" data-bs-toggle="modal"
                                                                    data-remove-id="8"><i
                                                                        class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="team-profile-img">
                                                    <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0">
                                                        <div
                                                            class="avatar-title border bg-light text-primary rounded-circle text-uppercase">
                                                            ME</div>
                                                    </div>
                                                    <div class="team-content"> <a class="member-name"
                                                            data-bs-toggle="offcanvas" href="#member-overview"
                                                            aria-controls="member-overview">
                                                            <h5 class="fs-16 mb-1">Megan Elmore</h5>
                                                        </a>
                                                        <p class="text-muted member-designation mb-0">Team Leader &amp; Web
                                                            Developer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="row text-muted text-center">
                                                    <div class="col-6 border-end border-end-dashed">
                                                        <h5 class="mb-1 projects-num">201</h5>
                                                        <p class="text-muted mb-0">Projects</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="mb-1 tasks-num">263</h5>
                                                        <p class="text-muted mb-0">Tasks</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col">
                                                <div class="text-end"> <a href="pages-profile.html"
                                                        class="btn btn-light view-btn">View Profile</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card team-box">
                                    <div class="team-cover"> <img src="{{asset('theme/admin/assets/images/small/img-2.jpg')}}" alt=""
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
                                                            data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                                class="ri-more-fill fs-17"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#addmemberModal"
                                                                    data-bs-toggle="modal" data-edit-id="7"><i
                                                                        class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item remove-list"
                                                                    href="#removeMemberModal" data-bs-toggle="modal"
                                                                    data-remove-id="7"><i
                                                                        class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="team-profile-img">
                                                    <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0"><img
                                                            src="{{asset('theme/admin/assets/images/users/avatar-4.jpg')}}" alt=""
                                                            class="member-img img-fluid d-block rounded-circle"></div>
                                                    <div class="team-content"> <a class="member-name"
                                                            data-bs-toggle="offcanvas" href="#member-overview"
                                                            aria-controls="member-overview">
                                                            <h5 class="fs-16 mb-1">Alexis Clarke</h5>
                                                        </a>
                                                        <p class="text-muted member-designation mb-0">Backend Developer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="row text-muted text-center">
                                                    <div class="col-6 border-end border-end-dashed">
                                                        <h5 class="mb-1 projects-num">132</h5>
                                                        <p class="text-muted mb-0">Projects</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="mb-1 tasks-num">147</h5>
                                                        <p class="text-muted mb-0">Tasks</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col">
                                                <div class="text-end"> <a href="pages-profile.html"
                                                        class="btn btn-light view-btn">View Profile</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card team-box">
                                    <div class="team-cover"> <img src="{{asset('theme/admin/assets/images/small/img-4.jpg')}}" alt=""
                                            class="img-fluid"> </div>
                                    <div class="card-body p-4">
                                        <div class="row align-items-center team-row">
                                            <div class="col team-settings">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="flex-shrink-0 me-2"> <button type="button"
                                                                class="btn btn-light btn-icon rounded-circle btn-sm favourite-btn active">
                                                                <i class="ri-star-fill fs-14"></i> </button> </div>
                                                    </div>
                                                    <div class="col text-end dropdown"> <a href="javascript:void(0);"
                                                            data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                                class="ri-more-fill fs-17"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#addmemberModal"
                                                                    data-bs-toggle="modal" data-edit-id="6"><i
                                                                        class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item remove-list"
                                                                    href="#removeMemberModal" data-bs-toggle="modal"
                                                                    data-remove-id="6"><i
                                                                        class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="team-profile-img">
                                                    <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0">
                                                        <div
                                                            class="avatar-title border bg-light text-primary rounded-circle text-uppercase">
                                                            NC</div>
                                                    </div>
                                                    <div class="team-content"> <a class="member-name"
                                                            data-bs-toggle="offcanvas" href="#member-overview"
                                                            aria-controls="member-overview">
                                                            <h5 class="fs-16 mb-1">Nathan Cole</h5>
                                                        </a>
                                                        <p class="text-muted member-designation mb-0">Front-End Developer
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="row text-muted text-center">
                                                    <div class="col-6 border-end border-end-dashed">
                                                        <h5 class="mb-1 projects-num">352</h5>
                                                        <p class="text-muted mb-0">Projects</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="mb-1 tasks-num">376</h5>
                                                        <p class="text-muted mb-0">Tasks</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col">
                                                <div class="text-end"> <a href="pages-profile.html"
                                                        class="btn btn-light view-btn">View Profile</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card team-box">
                                    <div class="team-cover"> <img src="{{asset('theme/admin/assets/images/small/img-7.jpg')}}" alt=""
                                            class="img-fluid"> </div>
                                    <div class="card-body p-4">
                                        <div class="row align-items-center team-row">
                                            <div class="col team-settings">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="flex-shrink-0 me-2"> <button type="button"
                                                                class="btn btn-light btn-icon rounded-circle btn-sm favourite-btn active">
                                                                <i class="ri-star-fill fs-14"></i> </button> </div>
                                                    </div>
                                                    <div class="col text-end dropdown"> <a href="javascript:void(0);"
                                                            data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                                class="ri-more-fill fs-17"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#addmemberModal"
                                                                    data-bs-toggle="modal" data-edit-id="5"><i
                                                                        class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item remove-list"
                                                                    href="#removeMemberModal" data-bs-toggle="modal"
                                                                    data-remove-id="5"><i
                                                                        class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="team-profile-img">
                                                    <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0"><img
                                                            src="{{asset('theme/admin/assets/images/users/avatar-6.jpg')}}" alt=""
                                                            class="member-img img-fluid d-block rounded-circle"></div>
                                                    <div class="team-content"> <a class="member-name"
                                                            data-bs-toggle="offcanvas" href="#member-overview"
                                                            aria-controls="member-overview">
                                                            <h5 class="fs-16 mb-1">Joseph Parker</h5>
                                                        </a>
                                                        <p class="text-muted member-designation mb-0">Full Stack Developer
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="row text-muted text-center">
                                                    <div class="col-6 border-end border-end-dashed">
                                                        <h5 class="mb-1 projects-num">64</h5>
                                                        <p class="text-muted mb-0">Projects</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="mb-1 tasks-num">93</h5>
                                                        <p class="text-muted mb-0">Tasks</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col">
                                                <div class="text-end"> <a href="pages-profile.html"
                                                        class="btn btn-light view-btn">View Profile</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card team-box">
                                    <div class="team-cover"> <img src="{{asset('theme/admin/assets/images/small/img-3.jpg')}}" alt=""
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
                                                            data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                                class="ri-more-fill fs-17"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#addmemberModal"
                                                                    data-bs-toggle="modal" data-edit-id="4"><i
                                                                        class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item remove-list"
                                                                    href="#removeMemberModal" data-bs-toggle="modal"
                                                                    data-remove-id="4"><i
                                                                        class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="team-profile-img">
                                                    <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0"><img
                                                            src="{{asset('theme/admin/assets/images/users/avatar-5.jpg')}}" alt=""
                                                            class="member-img img-fluid d-block rounded-circle"></div>
                                                    <div class="team-content"> <a class="member-name"
                                                            data-bs-toggle="offcanvas" href="#member-overview"
                                                            aria-controls="member-overview">
                                                            <h5 class="fs-16 mb-1">Erica Kernan</h5>
                                                        </a>
                                                        <p class="text-muted member-designation mb-0">Web Designer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="row text-muted text-center">
                                                    <div class="col-6 border-end border-end-dashed">
                                                        <h5 class="mb-1 projects-num">345</h5>
                                                        <p class="text-muted mb-0">Projects</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="mb-1 tasks-num">298</h5>
                                                        <p class="text-muted mb-0">Tasks</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col">
                                                <div class="text-end"> <a href="pages-profile.html"
                                                        class="btn btn-light view-btn">View Profile</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card team-box">
                                    <div class="team-cover"> <img src="{{asset('theme/admin/assets/images/small/img-5.jpg')}}" alt=""
                                            class="img-fluid"> </div>
                                    <div class="card-body p-4">
                                        <div class="row align-items-center team-row">
                                            <div class="col team-settings">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="flex-shrink-0 me-2"> <button type="button"
                                                                class="btn btn-light btn-icon rounded-circle btn-sm favourite-btn active">
                                                                <i class="ri-star-fill fs-14"></i> </button> </div>
                                                    </div>
                                                    <div class="col text-end dropdown"> <a href="javascript:void(0);"
                                                            data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                                class="ri-more-fill fs-17"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#addmemberModal"
                                                                    data-bs-toggle="modal" data-edit-id="3"><i
                                                                        class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item remove-list"
                                                                    href="#removeMemberModal" data-bs-toggle="modal"
                                                                    data-remove-id="3"><i
                                                                        class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="team-profile-img">
                                                    <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0">
                                                        <div
                                                            class="avatar-title border bg-light text-primary rounded-circle text-uppercase">
                                                            DP</div>
                                                    </div>
                                                    <div class="team-content"> <a class="member-name"
                                                            data-bs-toggle="offcanvas" href="#member-overview"
                                                            aria-controls="member-overview">
                                                            <h5 class="fs-16 mb-1">Donald Palmer</h5>
                                                        </a>
                                                        <p class="text-muted member-designation mb-0">Wed Developer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="row text-muted text-center">
                                                    <div class="col-6 border-end border-end-dashed">
                                                        <h5 class="mb-1 projects-num">97</h5>
                                                        <p class="text-muted mb-0">Projects</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="mb-1 tasks-num">135</h5>
                                                        <p class="text-muted mb-0">Tasks</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col">
                                                <div class="text-end"> <a href="pages-profile.html"
                                                        class="btn btn-light view-btn">View Profile</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card team-box">
                                    <div class="team-cover"> <img src="{{asset('theme/admin/assets/images/small/img-8.jpg')}}" alt=""
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
                                                            data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                                class="ri-more-fill fs-17"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#addmemberModal"
                                                                    data-bs-toggle="modal" data-edit-id="2"><i
                                                                        class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item remove-list"
                                                                    href="#removeMemberModal" data-bs-toggle="modal"
                                                                    data-remove-id="2"><i
                                                                        class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="team-profile-img">
                                                    <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0"><img
                                                            src="{{asset('theme/admin/assets/images/users/avatar-7.jpg')}}" alt=""
                                                            class="member-img img-fluid d-block rounded-circle"></div>
                                                    <div class="team-content"> <a class="member-name"
                                                            data-bs-toggle="offcanvas" href="#member-overview"
                                                            aria-controls="member-overview">
                                                            <h5 class="fs-16 mb-1">Jack Gough</h5>
                                                        </a>
                                                        <p class="text-muted member-designation mb-0">React Js Developer
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="row text-muted text-center">
                                                    <div class="col-6 border-end border-end-dashed">
                                                        <h5 class="mb-1 projects-num">87</h5>
                                                        <p class="text-muted mb-0">Projects</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="mb-1 tasks-num">121</h5>
                                                        <p class="text-muted mb-0">Tasks</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col">
                                                <div class="text-end"> <a href="pages-profile.html"
                                                        class="btn btn-light view-btn">View Profile</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card team-box">
                                    <div class="team-cover"> <img src="{{asset('theme/admin/assets/images/small/img-6.jpg')}}" alt=""
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
                                                            data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                                class="ri-more-fill fs-17"></i> </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item edit-list" href="#addmemberModal"
                                                                    data-bs-toggle="modal" data-edit-id="1"><i
                                                                        class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a>
                                                            </li>
                                                            <li><a class="dropdown-item remove-list"
                                                                    href="#removeMemberModal" data-bs-toggle="modal"
                                                                    data-remove-id="1"><i
                                                                        class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="team-profile-img">
                                                    <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0">
                                                        <div
                                                            class="avatar-title border bg-light text-primary rounded-circle text-uppercase">
                                                            MW</div>
                                                    </div>
                                                    <div class="team-content"> <a class="member-name"
                                                            data-bs-toggle="offcanvas" href="#member-overview"
                                                            aria-controls="member-overview">
                                                            <h5 class="fs-16 mb-1">Marie Ward</h5>
                                                        </a>
                                                        <p class="text-muted member-designation mb-0">Backend Developer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col">
                                                <div class="row text-muted text-center">
                                                    <div class="col-6 border-end border-end-dashed">
                                                        <h5 class="mb-1 projects-num">145</h5>
                                                        <p class="text-muted mb-0">Projects</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="mb-1 tasks-num">210</h5>
                                                        <p class="text-muted mb-0">Tasks</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col">
                                                <div class="text-end"> <a href="pages-profile.html"
                                                        class="btn btn-light view-btn">View Profile</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <a href="javascript:void(0);" class="text-success"><i
                                    class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load More </a>
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
                                    <form autocomplete="off" id="memberlist-form" class="needs-validation"
                                        novalidate="">
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
                                                                            <div class="avatar-xs">
                                                                                <div
                                                                                    class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                                                    <i class="ri-image-fill"></i>
                                                                                </div>
                                                                            </div>
                                                                        </label>
                                                                        <input class="form-control d-none" value=""
                                                                            id="cover-image-input" type="file"
                                                                            accept="image/png, image/gif, image/jpeg">
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
                                                                <div class="avatar-xs">
                                                                    <div
                                                                        class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                                        <i class="ri-image-fill"></i>
                                                                    </div>
                                                                </div>
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
                                                    <label for="teammembersName" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="teammembersName"
                                                        placeholder="Enter name" required="">
                                                    <div class="invalid-feedback">Please Enter a member name.</div>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="designation" class="form-label">Designation</label>
                                                    <input type="text" class="form-control" id="designation"
                                                        placeholder="Enter designation" required="">
                                                    <div class="invalid-feedback">Please Enter a designation.</div>
                                                </div>
                                                <input type="hidden" id="project-input" class="form-control"
                                                    value="">
                                                <input type="hidden" id="task-input" class="form-control"
                                                    value="">

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

                    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="member-overview">
                        <!--end offcanvas-header-->
                        <div class="offcanvas-body profile-offcanvas p-0">
                            <div class="team-cover">
                                <img src="{{asset('theme/admin/assets/images/small/img-9.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <div class="p-3">
                                <div class="team-settings">
                                    <div class="row">
                                        <div class="col">
                                            <button type="button"
                                                class="btn btn-light btn-icon rounded-circle btn-sm favourite-btn "> <i
                                                    class="ri-star-fill fs-14"></i> </button>
                                        </div>
                                        <div class="col text-end dropdown">
                                            <a href="javascript:void(0);" id="dropdownMenuLink14"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill fs-17"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownMenuLink14">
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-star-line me-2 align-middle"></i>Favorites</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <div class="p-3 text-center">
                                <img src="{{asset('theme/admin/assets/images/users/avatar-2.jpg')}}" alt=""
                                    class="avatar-lg img-thumbnail rounded-circle mx-auto profile-img">
                                <div class="mt-3">
                                    <h5 class="fs-15 profile-name">Nancy Martino</h5>
                                    <p class="text-muted profile-designation">Team Leader &amp; HR</p>
                                </div>
                                <div class="hstack gap-2 justify-content-center mt-4">
                                    <div class="avatar-xs">
                                        <a href="javascript:void(0);"
                                            class="avatar-title bg-secondary-subtle text-secondary rounded fs-16">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </div>
                                    <div class="avatar-xs">
                                        <a href="javascript:void(0);"
                                            class="avatar-title bg-success-subtle text-success rounded fs-16">
                                            <i class="ri-slack-fill"></i>
                                        </a>
                                    </div>
                                    <div class="avatar-xs">
                                        <a href="javascript:void(0);"
                                            class="avatar-title bg-info-subtle text-info rounded fs-16">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </div>
                                    <div class="avatar-xs">
                                        <a href="javascript:void(0);"
                                            class="avatar-title bg-danger-subtle text-danger rounded fs-16">
                                            <i class="ri-dribbble-fill"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 text-center">
                                <div class="col-6">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1 profile-project">124</h5>
                                        <p class="text-muted mb-0">Projects</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1 profile-task">81</h5>
                                        <p class="text-muted mb-0">Tasks</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="p-3">
                                <h5 class="fs-15 mb-3">Personal Details</h5>
                                <div class="mb-3">
                                    <p class="text-muted text-uppercase fw-semibold fs-12 mb-2">Number</p>
                                    <h6>+(256) 2451 8974</h6>
                                </div>
                                <div class="mb-3">
                                    <p class="text-muted text-uppercase fw-semibold fs-12 mb-2">Email</p>
                                    <h6>nancymartino@email.com</h6>
                                </div>
                                <div>
                                    <p class="text-muted text-uppercase fw-semibold fs-12 mb-2">Location</p>
                                    <h6 class="mb-0">Carson City - USA</h6>
                                </div>
                            </div>
                            <div class="p-3 border-top">
                                <h5 class="fs-15 mb-4">File Manager</h5>
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0 avatar-xs">
                                        <div class="avatar-title bg-danger-subtle text-danger rounded fs-16">
                                            <i class="ri-image-2-line"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1"><a href="javascript:void(0);">Images</a></h6>
                                        <p class="text-muted mb-0">4469 Files</p>
                                    </div>
                                    <div class="text-muted">
                                        12 GB
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0 avatar-xs">
                                        <div class="avatar-title bg-secondary-subtle text-secondary rounded fs-16">
                                            <i class="ri-file-zip-line"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1"><a href="javascript:void(0);">Documents</a></h6>
                                        <p class="text-muted mb-0">46 Files</p>
                                    </div>
                                    <div class="text-muted">
                                        3.46 GB
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0 avatar-xs">
                                        <div class="avatar-title bg-success-subtle text-success rounded fs-16">
                                            <i class="ri-live-line"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1"><a href="javascript:void(0);">Media</a></h6>
                                        <p class="text-muted mb-0">124 Files</p>
                                    </div>
                                    <div class="text-muted">
                                        4.3 GB
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 avatar-xs">
                                        <div class="avatar-title bg-primary-subtle text-primary rounded fs-16">
                                            <i class="ri-error-warning-line"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1"><a href="javascript:void(0);">Others</a></h6>
                                        <p class="text-muted mb-0">18 Files</p>
                                    </div>
                                    <div class="text-muted">
                                        846 MB
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end offcanvas-body-->
                        <div class="offcanvas-foorter border p-3 hstack gap-3 text-center position-relative">
                            <button class="btn btn-light w-100"><i class="ri-question-answer-fill align-bottom ms-1"></i>
                                Send Message</button>
                            <a href="pages-profile.html" class="btn btn-primary w-100"><i
                                    class="ri-user-3-fill align-bottom ms-1"></i> View Profile</a>
                        </div>
                    </div>
                    <!--end offcanvas-->
                </div>
            </div><!-- end col -->
        </div>
        <!--end row-->
    </div>
@endsection