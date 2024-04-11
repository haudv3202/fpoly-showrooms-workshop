@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <style>
        .table .sort::after {
            display: none !important;
        }
        .table .sort::before {
            display: none !important;
        }
    </style>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Grid Js</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Grid Js</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0 flex-grow-1">Base Example</h4>
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
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('update'))
                    <div class="alert alert-success">
                        {{ session('update') }}
                    </div>
                @endif
                @if(session('delete'))
                    <div class="alert alert-success">
                        {{ session('delete') }}
                    </div>
                @endif
                    <div class="card-body">
                        <div>
                            <div class="table-responsive table-card">
                                <table class="table align-middle" id="customerTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="sort"  data-sort="name">Column</th>
                                            <th class="sort" data-sort="description">Name</th>
                                            <th class="sort" data-sort="deploy_link">Address1</th>
                                            <th class="sort" data-sort="date_create">Address2</th>
                                            <th class="sort" data-sort="date_update">Number Phone</th>
                                            <th class="sort" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($layouts as $lo)
                                            <tr>
                                                <td>{{$lo->col}}</td>
                                                <td>{{$lo->name}}</td>
                                                <td>{{$lo->address1}}</td>
                                                <td>{{$lo->address1}}</td>
                                                <td>{{$lo->numberPhone}}</td>
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                            <a class="edit-item-btn" href="{{route('layout.edit',$lo->id)}}"><i class="ri-pencil-fill align-bottom text-muted"></i></a>
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
                                    <a class="page-item pagination-prev disabled" href="#">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"><li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a></li></ul>
                                    <a class="page-item pagination-next" href="#">
                                        Next
                                    </a>
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
