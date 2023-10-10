@extends('admin.layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add</h1>
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
            {{--<div class="col-12">--}}
                {{--<a href="#" type="button" class="btn btn-success">Добавить</a>--}}
            {{--</div>--}}
            <div class="col-6">
                <div class="card card-primary">
                    <form method="POST" action="{{ route('admin.statuses.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputTitle1">Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputTitle1"
                                       value="{{ old('title') }}"
                                       placeholder="title">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputSlug1">Slug</label>
                                <input type="text" name="slug" class="form-control" id="exampleInputSlug1"
                                       value="{{ old('slug') }}"
                                       placeholder="">
                                @error('slug')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Добавить">
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
