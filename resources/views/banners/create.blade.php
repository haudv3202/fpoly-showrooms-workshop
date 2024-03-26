@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Create Banner</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('banner.index')}}">Banners</a></li>
                        <li class="breadcrumb-item active">Create banner</li>
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
                    <h5 class="card-title mb-0">Create New File</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-lg-12">
                                <h5 class="fw-semibold mb-3">Image, Video, Audio, or 3D Model</h5>
                                <div class="filepond--root filepond filepond-input-multiple filepond--hopper" data-style-button-remove-item-position="left" data-style-button-process-item-position="right" data-style-load-indicator-position="right" data-style-progress-indicator-position="right" data-style-button-remove-item-align="false" style="height: 76px;">
                                    <input class="filepond--browser" name="image" type="file" id="filepond--browser-y69agen2a" name="filepond" aria-controls="filepond--assistant-y69agen2a" aria-labelledby="filepond--drop-label-y69agen2a" multiple="">
                                    <a class="filepond--credits" aria-hidden="true" href="https://pqina.nl/" target="_blank" rel="noopener noreferrer" style="transform: translateY(68px);">Powered by PQINA</a>
                                    <div class="filepond--drop-label" style="transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                        <label for="filepond--browser-y69agen2a" id="filepond--drop-label-y69agen2a" aria-hidden="true">
                                            Drag &amp; Drop your files or 
                                            <span class="filepond--label-action" tabindex="0">Browse</span>
                                        </label>
                                    </div>
                                    <div class="filepond--list-scroller" style="transform: translate3d(0px, 60px, 0px);">
                                        <ul class="filepond--list" role="list">
                                        </ul>
                                    </div>
                                    <div class="filepond--panel filepond--panel-root" data-scalable="true">
                                        <div class="filepond--panel-top filepond--panel-root">
                                        </div>
                                        <div class="filepond--panel-center filepond--panel-root" style="transform: translate3d(0px, 8px, 0px) scale3d(1, 0.6, 1);">
                                        </div>
                                        <div class="filepond--panel-bottom filepond--panel-root" style="transform: translate3d(0px, 68px, 0px);">
                                        </div>
                                    </div>
                                    <span class="filepond--assistant" id="filepond--assistant-y69agen2a" role="status" aria-live="polite" aria-relevant="additions"></span>
                                    <div class="filepond--drip">
                                        </div>
                                        <fieldset class="filepond--data"></fieldset>
                                    </div>
                            </div><!--end col-->
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
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button class="btn btn-primary">Create Item</button>
                                </div>
                            </div>
                        </div><!--end row-->
                    </form>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->

</div>
@endsection
