@extends('admin.layouts.app')
@section('title',' Edit Video')
@section('content')
 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Edit Video</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Edit Video</a></li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create Video</h4>
                    </div>
                    <form method="POST" action="{{ route('service.update', $single_video->id ) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 my-2">
                                    <label for="" class="form-label">Select Category</label>
                                    <select name="category_id" id="" class="form-control">
                                        <option value=""> If you want to category update, Select category </option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : ""}}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 my-2">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Title</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="title" name="title" value="{{ $single_video->title }}" required>
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 my-2">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Video Link (Upload your video in youtube than submit link here)</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="video link" name="video_link" value="{{ $single_video->video_link }}" required>
                                        @error('video_link')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 my-2">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Video (Here is direct video upload)</label>
                                        <input type="file" class="form-control" id="field-2" placeholder="video" name="video" value="{{ old('video'); }}" disabled>
                                        @error('video')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 my-2">
                                    <div class="form-group">
                                        <label for="" class="control-label">Video Description</label><br>
                                        <textarea class="form-control" name="long_description" id="" cols="30" rows="10">{{ $single_video->long_description }}</textarea>
                                        @error('long_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('service.index') }}" type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save Now</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
@section('footer_script')
    <script>
        jQuery(document).ready(function(){
            $('.summernote').summernote({
                height: 250,              // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                 // set focus to editable area after initializing summernote
            });
            $('.inline-editor').summernote({
                airMode: true
            });
        });
    </script>
@endsection

