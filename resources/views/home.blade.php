@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-8">
                        @if(Auth::user()->role == 1)
                            <h1 class="m-0">Bienvenue dans le tableau de bord d'administration</h1>
                        @else
                            <h1 class="m-0">Bienvenue dans le tableau de bord des utilisateurs</h1>
                        @endif
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Domicile</a></li>
                            <li class="breadcrumb-item active">Tableau de bord </li>
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
                @if(Auth::user()->role == 1)

                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>22</h3>

                                    <p>Client Total</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-folder-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>52</h3>

                                    <p>Produits totaux</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-folder-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>99</h3>

                                    <p>Nouvelles commandes</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-folder-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>25</h3>

                                    <p>Commandes terminées</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-folder-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
            @else
            @endif
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('script')
    <script src="https://www.gstatic.com/firebasejs/7.23.0/firebase.js"></script>
    <script>

        var firebaseConfig = {
            apiKey: "AIzaSyC_5Wl09LtYyCVNZq9mn5A9HstB_TzCijI",
            authDomain: "carwash-64763.firebaseapp.com",
            projectId: "carwash-64763",
            storageBucket: "carwash-64763.appspot.com",
            messagingSenderId: "720025103840",
            appId: "1:720025103840:web:f5c124ff8f5095fc424f85",
            measurementId: "G-E9C01SPTJC"
        };

        firebase.initializeApp(firebaseConfig);
        const messaging = firebase.messaging();

        function initFirebaseMessagingRegistration() {
            messaging
                .requestPermission()
                .then(function () {
                    return messaging.getToken()
                })
                .then(function(token) {
                    console.log(token);

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: '',
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            token: token
                        },
                        dataType: 'JSON',
                        success: function (response) {
                            alert('Les notifications push sactivent avec succès.');
                        },
                        error: function (err) {
                            console.log('Une erreur sest produite, contactez le développeur'+ err);
                        },
                    });

                }).catch(function (err) {
                console.log('Une erreur sest produite, contactez le développeur 1'+ err);
            });
        }

        messaging.onMessage(function(payload) {
            const noteTitle = payload.notification.title;
            const noteOptions = {
                body: payload.notification.body,
                icon: payload.notification.icon,
            };
            new Notification(noteTitle, noteOptions);
        });

    </script>

@endsection
