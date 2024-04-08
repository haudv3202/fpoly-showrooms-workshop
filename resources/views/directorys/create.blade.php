@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Create directory</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('directory.index')}}">Directory</a></li>
                        <li class="breadcrumb-item active">Create directory</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <form action="{{route('directory.store',$level)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="card">

                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="project-title-input">Directory Title</label>
                            <input type="hidden" name="id"  id="">
                            <input type="text" class="form-control" name="name" id="project-title-input" placeholder="Enter project title">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Directory Description</label>
                            <div>
                                <textarea name="description" style="height: 200px; width: 100%;">

                                </textarea>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- end card -->
                <!-- end card -->
                <div class="text-end mb-4">
                    <button type="submit" class="btn btn-success w-sm">Create</button>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
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
            <!-- end col -->
        </div>
    </form>

    <!-- end row -->

</div>
@endsection
