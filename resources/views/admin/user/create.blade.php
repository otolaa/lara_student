@extends('admin.layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Добавление</h1>
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
                    <form method="POST" action="{{ route('admin.user.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputTitle1">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputTitle1"
                                       value="{{ old('name') }}"
                                       placeholder="Name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                       value="{{ old('email') }}"
                                       placeholder="Email">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPass">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPass" placeholder="Password">
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputFile1">Photo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="photo" class="custom-file-input" onchange="showFile(this)" id="exampleInputPhoto1">
                                            <label class="custom-file-label" for="exampleInputPhoto1">Выберите файл</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Загрузите</span>
                                        </div>
                                    </div>
                                    @error('photo')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            <div class="form-group">
                                <label>Role</label>
                                <select name="role" class="form-control">
                                    @foreach($roles as $k=>$role)
                                        <option value="{{ $k }}"
                                            {{ $k == old('role') ? ' selected':'' }}
                                        >{{ $role }}</option>
                                    @endforeach
                                </select>
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
