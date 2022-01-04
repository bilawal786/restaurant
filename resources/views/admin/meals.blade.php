@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <!-- <h1>DataTables</h1> -->
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Domicile</a></li>
                            <li class="breadcrumb-item active">Repas</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Repas</h3>
                                <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-sm float-right">Ajouter un nouveau</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Voir le PDF</th>
                                        <th>Supprimer</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($meals as $row)
                                        <tr>
                                            <td>{{$row->title}}</td>
                                            <td><a target="_blank" href="{{asset($row->pdf)}}">Voir le PDF</a></td>
                                            <td>
                                                <a href="{{route('meal.delete', ['id' => $row->id])}}"><button class="btn btn-danger btn-sm">Supprimer</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter une nouvelle Repas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="{{route('meal.store')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
                        @csrf

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Image</b><span class="text-danger">*</span></label>
                                <input type="file" accept="image/*"  name="pdf" required placeholder="Nom de catégorie" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Description</b><span class="text-danger">*</span></label>
                                <textarea name="title" class="form-control" id="summernote" cols="30" rows="10"></textarea>
                            </div>
                        </div>


                        <div class="col-md-12 pull-right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Sauvegarder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



        </div>

    </div></div>

@endsection
