@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add brand</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            Add category
            <form action="{{ route('brand.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>
                        <input type="text" name="title" class="form-control" placeholder="Brand name">
                    </label>
                    <input type="submit" value="Create" class="btn btn-primary">
                </div>
            </form>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
