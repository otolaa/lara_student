@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 mr-2">{{ $group->title  }}</h1>
                    <a class="btn btn-success btn-sm mr-1" href="{{ route('admin.groups.edit', $group->id)  }}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <form action="{{ route('admin.groups.delete', $group->id)  }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $group->id  }}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ $group->title  }}</td>
                                </tr>
                                <tr>
                                    <th>Slug</th>
                                    <td>{{ $group->slug  }}</td>
                                </tr>
                                <tr>
                                    <th>Created</th>
                                    <td>{{ $group->created_at  }}</td>
                                </tr>
                                <tr>
                                    <th>Updated</th>
                                    <td>{{ $group->updated_at  }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
