@extends('backend.layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mange About</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">About</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <h3>About List
                            <a class="btn btn-success float-right" href="{{ route('about.add') }}"><i
                                    class="fa fa-plus-circle"></i>Add About</a>
                        </h3>
                    </div><!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <div style="width: 100%;height:20px;background:gray;border-radius:10px;overflow:hidden">
                            <div
                                style="width:{{ $allData[0]['progress_width'] }}%;height:100%;background:blue;color:white;text-align:center;">
                                {{ $allData[0]['progress_width'] }}</div>
                        </div>
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width='2%'>SL.</th>
                                    <th width='18%'>Short_title</th>
                                    <th width='30%'>Long_title</th>
                                    <th width='35%'>Description</th>
                                    <th width='10%'>Image</th>
                                    <th width='10%'>Icon</th>
                                    <th width='5%'>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($users as $key => $user) --}}

                                @foreach ($allData as $key => $about)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>

                                        <td>{{ substr($about->short_title, 0, 120) }}</td>
                                        <td>{{ substr($about->long_title, 0, 120) }}</td>
                                        <td>{{ substr($about->description, 0, 120) }}</td>
                                        <td>
                                            @if ($about->image != null)
                                                <img class="profile-user-img img-fluid"
                                                    src="/upload/about_images/{{ $about->image }} "
                                                    alt="User profile picture">
                                            @else
                                                <img class="profile-user-img img-fluid img-circle"
                                                    src="/upload/no_image.png" alt="User profile picture">
                                            @endif
                                        </td>
                                        <td>
                                            {{-- @php echo str_replace('"', '', $about->icon); @endphp --}}
                                            <i class="{{ $about->icon }} fa-2x"></i>

                                        </td>
                                        <td>
                                            <a title="Edit" class="btn btn-sm btn-primary"
                                                href="{{ route('about.edit', $about->id) }}"><i
                                                    class="fa fa-edit"></i></a>
                                            <a title="Delete" id="delete" class="btn btn-sm btn-danger"
                                                href="{{ route('about.delete', $about->id) }}"><i class="fa fa-trash">
                                                </i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div><!-- /.card-body -->
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
