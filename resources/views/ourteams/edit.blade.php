@extends('layouts.admin')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Ourteeams edit</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('ourteams.index')}}">Ourteeams</a></li>
                            <li class="breadcrumb-item active">Ourteeams edit</li>
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
                        <h5 class="card-title mb-0">Create New Ourteam</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('ourteams.update',$technical->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row g-3">

                                <div class="col-lg-12">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$technical->name}}" placeholder="Enter user name">
                                </div><!--end col-->
                                <div class="col-lg-12">
                                    <label for="externalLink" class="form-label">Project</label>
                                    <select class="form-select" name="project_id" aria-label="Default select example">
                                        @foreach($projectsInTechnical as $pr)
                                            <option value="{{$pr->id}}" selected>{{$pr->name}}</option>
                                        @endforeach
                                        @foreach($project as $pro)
                                            <option value="{{ $pro->id }}" {{ $pro->id == $technical->project_id ? 'selected' : '' }}>{{ $pro->name }}</option>
                                        @endforeach
                                    </select>
                                </div><!--end col-->
                                <!--end col-->
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Create Item</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->

    </div>
@endsection
