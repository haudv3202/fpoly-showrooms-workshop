@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">History</h4>

                {{-- <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Grid Js</li>
                    </ol>
                </div> --}}

            </div>
        </div>
    </div>

    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0 flex-grow-1">Projects</h4>
                </div><!-- end card header -->
                    <div class="card-header border-0">

                        <div class="row g-4 align-items-center">
                            <div class="col-sm-3">
                                <div class="search-box">
                                    <input type="text" class="form-control search" placeholder="Search for...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <div class="col-sm-auto ms-auto">
                                <div class="hstack gap-2">
                                    {{-- <button class="btn btn-soft-danger" id="remove-actions" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="table-responsive table-card">
                                <table class="table align-middle" id="customerTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                </div>
                                            </th>
    
                                            <th class="sort"  data-sort="name">Name</th>
                                            <th class="sort" data-sort="description">Description</th>
                                            <th class="sort" data-sort="deploy_link">Deploy link</th>
                                            <th class="sort" data-sort="level">Level</th>
                                            <th class="sort" data-sort="added_by">Added</th>
                                            <th class="sort" data-sort="date_create">Create</th>
                                            <th class="sort" data-sort="date_update">Updated</th>
                                            <th class="sort" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        @foreach($projects as $project)
                                      
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                </div>
                                            </th>
                                            <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">1</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0"  style="display: none">
                                                        <img src="{{asset('theme/admin/assets/images/users/avatar-10.jpg')}}" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 name">{{$project->name}}</div>
                                                </div>
                                            </td>
                                            <td class="description">{{$project->description}}</td>
                                            <td class="deploy_link">{{$project->deploy_link}}</td>
                                            <td class="level">{{$project->level_name}}</td>
                                            <td class="added_by">{{$project->added_by_name}}</td>
                                            <td class="date_create">{{$project->created_at}}
                                            </td>
                                            <td class="date_update">{{$project->updated_at}}
                                            </td>
                                            <td>
                                                <ul class="list-inline hstack gap-2 mb-0"> 
                                                    {{-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View" data-bs-original-title="View">
                                                        <a href="javascript:void(0);"><i class="ri-eye-fill align-bottom text-muted"></i></a>
                                                    </li> --}}
                                                    {{-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                        <a class="edit-item-btn" href="{{ route('project.edit',$project ) }}">
                                                            <i class="ri-pencil-fill align-bottom text-muted"></i>
                                                        </a>
                                                        
                                                    </li> --}}
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Redirect">
                                                        <a class="edit-item-btn" href="{{ route('redirect', $project->id ) }}"
                                                            onclick="return confirm('Xác nhận khôi phục project ?');">
                                                            <i class=" ri-download-cloud-2-fill align-bottom text-muted"></i>
                                                            </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ leads We did not find any leads for you search.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                <div class="pagination-wrap hstack gap-2">
                                    {{$projects->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>

    <!-- end row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0 flex-grow-1">Image</h4>
                </div><!-- end card header -->
                    <div class="card-header border-0">

                        <div class="row g-4 align-items-center">
                            <div class="col-sm-3">
                                <div class="search-box">
                                    <input type="text" class="form-control search" placeholder="Search for...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <div class="col-sm-auto ms-auto">
                                <div class="hstack gap-2">
                                    <button class="btn btn-soft-danger" id="remove-actions" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="table-responsive table-card">
                                <table class="table align-middle" id="customerTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                </div>
                                            </th>
    
                                            <th class="sort"  data-sort="name">Name Project</th>
                                            <th class="sort" data-sort="description">image</th>
                                            <th class="sort" data-sort="date_create">Create</th>
                                            <th class="sort" data-sort="date_update">Updated</th>
                                            <th class="sort" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        @foreach($images as $image)
                                      
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                </div>
                                            </th>
                                            <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">1</a></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0"  style="display: none">
                                                        <img src="{{asset('theme/admin/assets/images/users/avatar-10.jpg')}}" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 name">{{$image->name}}</div>
                                                </div>
                                            </td>
                                            <td class="description">{{$image->image}}</td>
                                            
                                            <td class="date_create">{{$image->created_at}}
                                            </td>
                                            <td class="date_update">{{$image->updated_at}}
                                            </td>
                                            <td>
                                                <ul class="list-inline hstack gap-2 mb-0"> 
                                                    {{-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View" data-bs-original-title="View">
                                                        <a href="javascript:void(0);"><i class="ri-eye-fill align-bottom text-muted"></i></a>
                                                    </li> --}}
                                                    {{-- <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                        <a class="edit-item-btn" href="{{ route('project.edit',$project ) }}">
                                                            <i class="ri-pencil-fill align-bottom text-muted"></i>
                                                        </a>
                                                        
                                                    </li> --}}
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Redirect">
                                                        <a class="edit-item-btn" href="{{ route('redirect_image', $image->id ) }}"
                                                            onclick="return confirm('Xác nhận khôi phục image ?');">
                                                            <i class=" ri-download-cloud-2-fill align-bottom text-muted"></i>
                                                            </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                   
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ leads We did not find any leads for you search.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                <div class="pagination-wrap hstack gap-2">
                                    {{$images->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    
    <!-- end row -->
</div>
@endsection