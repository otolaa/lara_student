@extends('admin.layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit</h1>
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
            <div class="col-6">
                <div class="card card-primary">
                    <form method="POST" action="{{ route('admin.sgcwts.update', $sgcwt->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputTitle1">Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputTitle1"
                                       value="{{ $sgcwt->title  }}"
                                       placeholder="title">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputSlug1">Slug</label>
                                <input type="text" name="slug" class="form-control" id="exampleInputSlug1"
                                       value="{{ $sgcwt->slug  }}"
                                       placeholder="title">
                                @error('slug')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Statuses</label>
                                <select name="status_id" class="form-control">
                                    @foreach($statuses as $status)
                                        <option value="{{ $status->id }}"
                                            {{ $status->id == $sgcwt->status_id ? ' selected':'' }}
                                        >{{ $status->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="hidden" name="sgcwt_id" value="{{ $sgcwt->id }}">
                            <input type="submit" class="btn btn-primary" value="Изменить">
                        </div>
                    </form>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
