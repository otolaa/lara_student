@extends('admin.layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 d-flex align-items-center">
                <h1 class="m-0 mr-2">Назначение</h1>
                <a href="{{ route('admin.sgcwts.create') }}" type="button" class="btn btn-sm btn-success">
                    <i class="fas fa-plus"></i>
                </a>
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
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Teacher</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sgcwts as $sgcwt)
                            <tr>
                                <td>{{ $sgcwt->id }}</td>
                                <td>{{ $sgcwt->title }}</td>
                                <td>
                                    @if (isset($sgcwt->status_id) && isset($statuses) && is_array($statuses))
                                        {{ $statuses[$sgcwt->status_id] }}
                                    @endif
                                </td>
                                <td>
                                    @if (isset($sgcwt->teacher_id) && isset($teachers) && is_array($teachers))
                                        {{ $teachers[$sgcwt->teacher_id] }}
                                    @endif
                                </td>
                                <td>{{ $sgcwt->created_at }}</td>
                                <td>{{ $sgcwt->updated_at }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.sgcwts.show', $sgcwt->id)  }}"><i class="far fa-eye"></i></a>
                                    <a class="btn btn-success btn-sm" href="{{ route('admin.sgcwts.edit', $sgcwt->id)  }}"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="{{ route('admin.sgcwts.delete', $sgcwt->id)  }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
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
