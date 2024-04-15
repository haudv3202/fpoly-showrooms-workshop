@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Update directory</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('directory.index')}}">Directorys</a></li>
                        <li class="breadcrumb-item active">Update directory</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <form action="{{route('layout-update',$level)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="card">

                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="project-title-input">Directory Title</label>
                            <input type="hidden" name="id" value="{{$directorys[0]->id}}"  id="">
                            <input type="text" class="form-control" name="name" id="project-title-input" value="{{$directorys[0]->name}}" placeholder="Enter project title">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address 1</label>
                            <div>
                                <textarea name="address1" style="height: 200px; width: 100%;">
                                    {{$directorys[0]->address1}}
                                </textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address 2</label>
                            <div>
                                <textarea name="address2" style="height: 200px; width: 100%;">
                                    {{$directorys[0]->address2}}
                                </textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Number Phone</label>
                            <div>
                                <textarea name="numberPhone" style="height: 200px; width: 100%;">
                                    {{$directorys[0]->numberPhone}}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <!-- end card -->
                <!-- end card -->

                <div class="text-end mb-4">
                    <button type="submit" class="btn btn-success w-sm">Update</button>
                </div>
            </div>
            <!-- end col -->

            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3 mb-lg-0 mt-3">
                            <label for="datepicker-deadline-input" class="form-label">Update at</label>
                            <input type="datetime-local" readonly="readonly" class="form-control" name="updated_at" id="datepicker-deadline-input" value="<?php echo now()->timezone('Asia/Ho_Chi_Minh')->format('Y-m-d\TH:i'); ?>" placeholder="Enter Deploy link">
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
