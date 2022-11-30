@extends('admin.layouts.app')
@section('title',' Video list')
@section('content')

 <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Video </h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item"><a href="">Video List</a></li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Offer List</b></h4>

                    <div class="table-responsive">
                        <table class="table table-hover m-0 table-actions-bar">

                            <thead>
                            <tr>
                                <th>SI NO.</th>
                                <th>User Name</th>
                                <th>Video Title</th>
                                <th>Video Link</th>
                                <th>Description</th>
                                <th>Published</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>
                                            <h5>{{ $loop->index + 1 }}</h5>
                                        </td>
                                        <td>
                                            <h5>{{ $service->user->name }}</h5>
                                        </td>
                                        <td>
                                            <h5>
                                                {{ Str::limit($service->title, 15, $end='...') }}
                                            </h5>
                                        </td>
                                        <td>
                                            <h5>
                                                <a target="_blank" href="{{ $service->video_link }}">{{ $service->video_link }}</a>
                                            </h5>
                                        </td>
                                        <td>
                                            <h5>
                                                {{ Str::limit($service->long_description, 20, $end='...') }}
                                            </h5>
                                        </td>
                                        <td>
                                            <h5 class="badge badge-info">
                                                @if ($service->status == 1)
                                                    Active
                                                    @else
                                                    DeActive
                                                @endif
                                            </h5>
                                        </td>
                                        <form method="POST" action="{{ route('service.destroy', $service->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('service.edit', $service->id) }}" class="table-action-btn"> <i class="far fa-edit"></i> </a>
                                                <button onclick="blogDelete()" style="border: none; background:none; cursor:pointer;" type="submit" name="submit" class="table-action-btn"><i class="mdi mdi-close"></i></button>
                                            </td>
                                        </form>
                                    </tr>
                                    @empty($service)
                                        <div class="alert alert-info">
                                            Nothing to show any Video !
                                        </div>
                                    @endempty
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('footer_script')
    <script>
        function blogDelete(){
            alert('Are you shure ? You want to delete this Video !')
        }
    </script>
@endsection
