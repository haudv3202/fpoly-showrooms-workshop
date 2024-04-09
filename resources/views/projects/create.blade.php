@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Create project</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('project.index')}}">Projects</a></li>
                        <li class="breadcrumb-item active">Create project</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <form action="{{route('project.store',$project)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="card">

                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="project-title-input">Project Title</label>
                            <input type="hidden" name="id"  id="">
                            <input type="text" class="form-control" name="name" id="project-title-input" placeholder="Enter project title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="project-thumbnail-img">Thumbnail Image</label>
                            <input
                              class="form-control"
                              id="project-thumbnail-img"
                              name="img[]"
                              type="file"
                              accept="image/png, image/gif, image/jpeg"
                              multiple
                            />
                          </div>
                          <div id="imagePreview" class="row mb-3"></div>
                          
                        <div class="mb-3">
                            <label class="form-label">Project Description</label>
                            <div>
                                <textarea name="description" style="height: 200px; width: 100%;">

                                </textarea>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3 mb-lg-0">
                                    <label for="choices-priority-input" class="form-label">Active</label>
                                    <select class="form-select" data-choices="" name="is_active" data-choices-search-0="" id="choices-priority-input">

                                        <option value="1" >Hoạt động</option>
                                        <option value="0" >Dừng hoạt động</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3 mb-lg-0">
                                    <label for="choices-status-input" class="form-label">highlight</label>
                                    <select class="form-select" data-choices="" name="is_highlight" data-choices-search-0="" id="choices-status-input">

                                        <option value="1" >Nổi bật</option>
                                        <option value="0" >Không nổi bật</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3 mb-lg-0 mt-3">
                                    <label for="datepicker-deadline-input" class="form-label">Deploy link</label>
                                    <input type="text" class="form-control" name="deploy_link" id="datepicker-deadline-input" placeholder="Enter Deploy link" >
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3 mb-lg-0 mt-3">
                                    <label for="datepicker-deadline-input" class="form-label">Domain link</label>
                                    <input type="text" class="form-control" name="domain_link" id="datepicker-deadline-input" placeholder="Enter Domain link" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3 mb-lg-0 mt-3">
                                    <label for="datepicker-deadline-input" class="form-label">Technical</label>
                                    <input type="text" class="form-control" name="technical" id="datepicker-deadline-input" placeholder="Enter Technical" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3 mb-lg-0 mt-3">
                                    <label for="datepicker-deadline-input" class="form-label">Create at</label>
                                    <input type="datetime-local" class="form-control" name="create_at" id="datepicker-deadline-input" value="<?php echo now()->timezone('Asia/Ho_Chi_Minh')->format('Y-m-d\TH:i'); ?>" placeholder="Enter Deploy link">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3 mb-lg-0 mt-3">
                                    <label for="datepicker-deadline-input" class="form-label">Update at</label>
                                    <input type="datetime-local" class="form-control" name="updated_at" id="datepicker-deadline-input" value="<?php echo now()->timezone('Asia/Ho_Chi_Minh')->format('Y-m-d\TH:i'); ?>" placeholder="Enter Deploy link">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                {{-- <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Attached files</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <p class="text-muted">Add Attached files here.</p>

                            <div class="dropzone dz-clickable">

                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                    </div>

                                    <h5>Drop files here or click to upload.</h5>
                                </div>
                            </div>

                            <ul class="list-unstyled mb-0" id="dropzone-preview">

                            </ul>
                            <!-- end dropzon-preview -->
                        </div>
                    </div>
                </div> --}}
                <!-- end card -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="text-end mb-4">
                    <button type="submit" class="btn btn-success w-sm">Create</button>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Level project</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <label for="choices-privacy-status-input" class="form-label">Levels</label>
                            <select class="form-select" name="level_id" >
                                @foreach($levels as $level)

                                <option value="{{$level->id}}" >{{$level->name}}</option>

                                <
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Added by</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <label for="choices-privacy-status-input" class="form-label">Users</label>
                            <select class="form-select" name="added_by" id="choices-privacy-status-input">
                                @foreach($users as $user)

                                <option  value="{{$user->id}}" >{{$user->name}}</option>


                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                {{-- <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Tags</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="choices-categories-input" class="form-label">Categories</label>
                            <select class="form-select" data-choices="" data-choices-search-0="" id="choices-categories-input">
                                <option value="Designing" selected="">Designing</option>
                                <option value="Development">Development</option>
                            </select>
                        </div>

                        <div>
                            <label for="choices-text-input" class="form-label">Skills</label>
                            <input class="form-control" id="choices-text-input" data-choices="" data-choices-limit="Required Limit" placeholder="Enter Skills" type="text" value="UI/UX, Figma, HTML, CSS, Javascript, C#, Nodejs">
                        </div>
                    </div>
                    <!-- end card body -->
                </div> --}}
                <!-- end card -->

                {{-- <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Members</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="choices-lead-input" class="form-label">Team Lead</label>
                            <select class="form-select" data-choices="" data-choices-search-0="" id="choices-lead-input">
                                <option value="Brent Gonzalez" selected="">Brent Gonzalez</option>
                                <option value="Darline Williams">Darline Williams</option>
                                <option value="Sylvia Wright">Sylvia Wright</option>
                                <option value="Ellen Smith">Ellen Smith</option>
                                <option value="Jeffrey Salazar">Jeffrey Salazar</option>
                                <option value="Mark Williams">Mark Williams</option>
                            </select>
                        </div>

                        <div>
                            <label class="form-label">Team Members</label>
                            <div class="avatar-group">
                                <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Brent Gonzalez" data-bs-original-title="Brent Gonzalez">
                                    <div class="avatar-xs">
                                        <img src="{{ asset('theme/admin/assets/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle img-fluid">
                                    </div>
                                </a>
                                <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="Sylvia Wright">
                                    <div class="avatar-xs">
                                        <div class="avatar-title rounded-circle bg-secondary">
                                            S
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Ellen Smith" data-bs-original-title="Ellen Smith">
                                    <div class="avatar-xs">
                                        <img src="{{ asset('theme/admin/assets/images/users/avatar-4.jpg') }}" alt="" class="rounded-circle img-fluid">
                                    </div>
                                </a>
                                <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="Add Members">
                                    <div class="avatar-xs" data-bs-toggle="modal" data-bs-target="#inviteMembersModal">
                                        <div class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                            +
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div> --}}
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
    </form>

    <!-- end row -->

</div>
@endsection
