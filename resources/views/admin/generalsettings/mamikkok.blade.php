@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Domicile</a></li>
                            <li class="breadcrumb-item active">Réglages Généraux</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Réglages Généraux</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{route('content.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Image 1</label>
                                        <input type="file" name="image_12" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <img style="height: 100px" src="{{asset($content->image_12)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="d_6" class="form-control" id="summernote" cols="30" rows="10">{{$content->d_6}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Heading</label>
                                        <input type="text" name="d_11" value="{{$content->d_11}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input type="file" name="image_13" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <img style="height: 100px" src="{{asset($content->image_13)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="d_7" class="form-control" id="summernote1" cols="30" rows="10">{{$content->d_7}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input type="file" name="image_14" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <img style="height: 100px" src="{{asset($content->image_14)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="d_8" class="form-control" id="summernote2" cols="30" rows="10">{{$content->d_8}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input type="file" name="image_15" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <img style="height: 100px" src="{{asset($content->image_15)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="d_9" class="form-control" id="summernote3" cols="30" rows="10">{{$content->d_9}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input type="file" name="image_16" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <img style="height: 100px" src="{{asset($content->image_16)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="d_10" class="form-control" id="summernote4" cols="30" rows="10">{{$content->d_10}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Heading</label>
                                        <input type="text" name="d_12" value="{{$content->d_12}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input type="file" name="image_17" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <img style="height: 100px" src="{{asset($content->image_17)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="d_13" class="form-control" id="summernote5" cols="30" rows="10">{{$content->d_13}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input type="file" name="image_18" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <img style="height: 100px" src="{{asset($content->image_18)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="d_14" class="form-control" id="summernote6" cols="30" rows="10">{{$content->d_14}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input type="file" name="image_19" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <img style="height: 100px" src="{{asset($content->image_19)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="d_15" class="form-control" id="summernote7" cols="30" rows="10">{{$content->d_15}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Sauvegarder</button>
                        </div>
                    </form>
                    <!-- /.card -->

                    <!-- /.container-fluid -->
        </section>
    </div>
@endsection
