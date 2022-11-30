@extends('admin.layouts.app')
@section('title',' Create New Video')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Create New</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Create Video</a></li>
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
                    <form method="POST" action="{{ route('service.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 my-2">
                                    <label for="" class="form-label">Select Category</label>
                                    <select name="category_id" id="" class="form-control">
                                        <option value="">--- Select One Category ---</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : ""}}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 my-2">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Title</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="title" name="title" value="{{ old('title'); }}" required>
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 my-2">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Video Link (Upload your video in youtube than submit link here)</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="video link" name="video_link" value="{{ old('video_link'); }}" required>
                                        @error('video_link')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 my-2">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Select Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1">Published</option>
                                            <option value="2">Deactive</option>
                                        </select>
                                        @error('status')
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
                                        <textarea class="form-control" name="long_description" id="" cols="30" rows="10">{{ old('long_description') }}</textarea>
                                        @error('long_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('service.index') }}" type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-info waves-effect waves-light">Published Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

