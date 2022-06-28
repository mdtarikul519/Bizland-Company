@extends('backend.layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mange Icon</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">Icon</li>
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
                        <h3>Icon List
                            <a class="btn btn-success float-right" href="{{ route('icon.add') }}"><i
                                    class="fa fa-plus-circle"></i>Add icon</a>
                        </h3>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>icon</th>
                                    <th>name</th>
                                    <th>number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($allData as $key => $icon)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><i class="{{ $icon->icon }} fa-2x"></i></td>
                                        <td>{{ $icon->name }}</td>
                                        <td>{{ $icon->number }}</td>
                                        <td>
                                            <a title="Edit" class="btn btn-sm btn-primary"
                                                href="{{ route('icon.edit', $icon->id) }}"><i class="fa fa-edit"></i></a>

                                            <a title="Delete" id="delete" class="btn btn-sm btn-danger"
                                                href="{{ route('icon.delete', $icon->id) }}"><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
