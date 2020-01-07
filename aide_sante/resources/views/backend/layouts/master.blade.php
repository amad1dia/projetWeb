<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Allo Docteur - Dashbord</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset("vendor/vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('vendor/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/css/custom.css')}}" rel="stylesheet">

</head>

<body id="page-top">

   <div id="wrapper">

           @include('backend.layouts._side')

           <div id="content-wrapper" class="d-flex flex-column">
           <div id="content">
               @include('backend.layouts._topBarre')
           <div class="container-fluid">
                @include('backend.layouts._headingPage')
                @yield('content')
           </div>

           </div>

            @include('backend.layouts._footer')
       </div>
   </div>
<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('vendor/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
{{--<script src="{{asset('vendor/vendor/chart.js/Chart.min.js')}}"></script>--}}

<!-- Page level custom scripts -->
{{--<script src="{{asset('vendor/js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('vendor/js/demo/chart-pie-demo.js')}}"></script>--}}

   <script src="{{asset('vendor/vendor/datatables/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('vendor/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

   <!-- Page level custom scripts -->
   <script src="{{asset('vendor/js/demo/datatables-demo.js')}}"></script>
   <script src="{{asset('vendor/js/custom.js')}}"></script>
   <script src="https://cdn.tiny.cloud/1/rs0nsff07mb0zouslcn4r3il9ic6gk9buobsjxojjvyl2y29/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
{{--   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>--}}

   {{--<script type="text/javascript">

       /*$('.date').datepicker({

           format: 'yyyy-mm-dd',
           startDate:'-3d'

       });*/

<script src="https://cdn.tiny.cloud/1/rs0nsff07mb0zouslcn4r3il9ic6gk9buobsjxojjvyl2y29/tinymce/5/tinymce.min.js"></script>

   </script>--}}
   <script>tinymce.init({selector:'textarea'});</script>

   <script>
       $(document).ready(function () {
           $("#specialite").keyup(function () {
               var query = $(this).val();
               if (query != ''){
                   var _token = $('input[name="_token"]').val();
                   $.ajax({
                       url:"{{ route('autocomplete.fetch')}}",
                       method:"POST",
                       data:{query:query, _token:_token},
                       success:function (data) {
                           $('#specialiteList').fadeIn();
                           $('#specialiteList').html(data);
                       }
                   })
               }
           })

       });
   </script>
</body>

</html>
