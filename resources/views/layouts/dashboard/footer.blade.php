 <footer class="main-footer">
    <strong>Développé par <a href="https://ikaedigital.com/">Ikae Digital</a> 2022
        </strong>
    <div class="float-right d-none d-sm-inline-block">
        Mentions légales | Termes et conditions
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- daterangepicker -->

 <!-- Bootstrap4 Duallistbox -->
 <script src="{{asset('assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>

 <script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
 <script src="{{asset('assets/plugins/inputmask/jquery.inputmask.min.js')}}"></script>

<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/dist/js/pages/dashboard.js')}}"></script>

 <!-- dropzonejs -->
 <script src="{{asset('assets/plugins/dropzone/min/dropzone.min.js')}}"></script>
 <script src="{{asset('assets/plugins/fullcalendar/main.js')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>

     <script>
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Voulez-vous supprimer?",
                  text: "Une fois supprimé, ce sera définitivement supprimé!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Données sécurisées!");
                  }
                });
            });

    </script>

     <script>
  $(function () {
    $("#example1").DataTable({
        "language": {
            "sProcessing": "Traitement en cours ...",
            "sLengthMenu": "Spectacle _MENU_ entrées",
            // "sZeroRecords": "Aucun résultat trouvé",
            "sEmptyTable": "Aucune donnée disponible",
            // "sInfo": "Lignes _START_ à _END_ sur _TOTAL_",
            "sInfoEmpty": "Aucune ligne affichée",
            "sInfoFiltered": "(Filtrer un maximum de_MAX_)",
            "sInfoPostFix": "",
            "sSearch": "Rechercher:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Chargement...",
            "oPaginate": {
                "sFirst": "Premier", "sLast": "Dernier", "sNext": "Suivant", "sPrevious": "Précédent"
            },
            "oAria": {
                "sSortAscending": ": Trier par ordre croissant", "sSortDescending": ": Trier par ordre décroissant"
            }
        },
      "responsive": true, "lengthChange": true, "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  $('#reservationdatetime').datetimepicker({
      icons: { time: 'far fa-clock' },
      locale: 'fr'
  });
</script>
 <script>
     function goBack() {
         window.history.back();
     }
 </script>
 <script>
     $(function () {
         // Summernote
         $('#summernote').summernote({
             lang: 'fr'
         })
         $('#summernote1').summernote({
             lang: 'fr'
         })
         $('#summernote2').summernote({
             lang: 'fr'
         })
         $('#summernote3').summernote({
             lang: 'fr'
         })
         $('#summernote4').summernote({
             lang: 'fr'
         })
         $('#summernote5').summernote({
             lang: 'fr'
         })
         $('#summernote6').summernote({
             lang: 'fr'
         })
         $('#summernote7').summernote({
             lang: 'fr'
         })
         $('#summernote8').summernote({
             lang: 'fr'
         })

         // CodeMirror
         CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
             mode: "htmlmixed",
             theme: "monokai"
         });
     })
 </script>
 <!-- Page specific script -->
 <script>
     $(function () {
         //Initialize Select2 Elements
         $('.select2').select2()

         //Initialize Select2 Elements
         $('.select2bs4').select2({
             theme: 'bootstrap4'
         })


     })
 </script>
 @yield('script')
</body>
</html>
