<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->    
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">


  <style>
      .container{
          display: flex;
          justify-content: center;
      }
      .btnMargin{
          margin-left: 25%;;
      }
  </style>
</head>
<body>
    
@include('admin.includes.nav')
@include('admin.includes.sidebar')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="content-wrapper">

        <section class="content">
        <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Asset list</h3>
                <a href="/addproduct" class="btn btn-warning btnMargin">Add Product</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  <tr>
                  <th>Sno</th>
        <th>Name</th>
        <th>Asset Type</th>
        <th>Image</th>
        <th>Status</th>
        <th>Actions</th>
                  </tr>
            </tr>
                  </thead>
        <tbody>
        @php
    $sn=1;
    @endphp
    @foreach($data as $i)
    <tr>
    <td>{{$sn++}}</td>
    <td>{{$i->name}}</td>
    <td>{{$i->type}}</td>
    <td>
        <img src='{{url("uploads/$i->image")}}' height="50px" width="50px"/>
    </td>
   @if($i->status==1)
   <td class="text-success">Active</td>
   @else
   <td class="text-danger">Inactive</td>
   @endif
    <td>
    <a href="/showimg/{{$i->id}}"  class="btn btn-secondary">Images</a>
    <a href="/editpro/{{$i->id}}" class="btn btn-info">Edit</a>
    <button type="submit" onclick="return confirm('Do you really want to delete product!')" class="btn btn-danger"><a href="delepro/{{$i->id}}" class="text-decoration-none text-white">Delete</button>
    </td>
    </tr>
    @endforeach
                 
        </tbody>
    </table>
    {{$data->links()}}
</section>
</div>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example2").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv"]
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
