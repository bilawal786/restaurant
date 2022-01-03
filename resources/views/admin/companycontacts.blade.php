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
                            <li class="breadcrumb-item active">Creez votre cantine digitale</li>
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
                                <h3 class="card-title">Creez votre cantine digitale</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Nom de l'entreprise</th>
                                        <th>Adresse de l'entreprise</th>
                                        <th>Adresse mail professionnelle</th>
                                        <th>Nom du contact au sein de l'entreprise</th>
                                        <th>Nombre de salariés dans l'entreprise</th>
                                        <th>Numéro de téléphone</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($companycontacts as $row)
                                        <tr>
                                            <td>{{$row->company_name}}</td>
                                            <td>{{$row->company_address}}</td>
                                            <td>{{$row->email}}</td>
                                            <td>{{$row->contact_name}}</td>
                                            <td>{{$row->employes}}</td>
                                            <td>{{$row->phone}}</td>
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
@endsection
