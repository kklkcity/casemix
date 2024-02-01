
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Casemix Rawat Inap</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
  <link rel="stylesheet" href="css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/css/bootstrap-datepicker.min.css" />
  <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-sm">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="title">Sistem Informasi Casemix</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <!-- <form
              action="add.php"
              method="post"
              name="form1"
              enctype="multipart/form-data"> -->
              <table class="table table-bordered">
                <tr>
                  <td><label>Tanggal</label></td>
                  <td><input type="text" class="form-control" id="datepicker1" /></td>
                  <td><label>Real Cost</label></td>
                  <td><input type="text" class="form-control" value="0" disabled /></td>
                  <td><label>Tarif Inacbgs</label></td>
                  <td><input type="text" class="form-control"/></td>
                </tr>
                <tr>
                  <td><label>Register</label></td>
                  <td><input type="text" class="form-control" name="no_rm" id="no_rm" onchange="isi_otomatis()" autocomplete="off" placeholder="masukkan no rm"></td>
                  <!-- <td><button type="submit" class="btn btn-primary">Cari</button></td> -->
                </tr>
                <tr>
                  <td><label>Ruang</label></td>
                  <td><input type="text" class="form-control" name="ruang" id="ruang" autocomplete="off" readonly></td>
                  <td><label>Tarif Inacbg</label></td>
                  <td><input type="text" name="tarif_ina"  class="form-control"/></td>

                </tr>
                <tr>
                  <td><label>Nama</label></td>
                  <td><input type="text" class="form-control" name="nama" id="nama" autocomplete="off" readonly></td>
                  <td><label>Tarif Kls 1</label></td>
                  <td><input type="text" name="tarif_kls_1" class="form-control"/></td>
                  <td><label>Tarif Kls 2</label></td>
                  <td><input type="text" name="tarif_kls_2" class="form-control"/></td>

                </tr>
                <tr>
                  <td><label>Penjamin</label></td>
                  <td><input type="text" class="form-control" name="penjamin" id="penjamin" autocomplete="off" readonly></td>
                  <td><label>Kelas yg ditempati</label></td>
                  <td><input type="text" class="form-control"/></td>
                </tr>
                <tr>
                  <td><label>Diagnosis Masuk</label></td>
                  <td><input type="text" class="form-control" name="dx_masuk" id="dx_masuk" autocomplete="off" readonly></td>
                </tr>
              </table>
             
                  <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>DIAGNOSIS</th>
                      <th>PENDUKUNG & TERAPI</th>
                      <th>TINDAKAN</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="text" class="form-control" name="dx_1" id="dx_1" placeholder="Diagnosa"></td>
                      <td><input type="text" class="form-control" name="pendukung_1" id="pendukung1" placeholder="Pendukung & Terapi"></td>
                      <td><input type="text" class="form-control" name="tindakan_1" id="tindakan1" placeholder="Tindakan"></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" name="dx_2" id="dx_2" placeholder="Diagnosa"></td>
                      <td><input type="text" class="form-control" name="pendukung_2" id="pendukung2" placeholder="Pendukung & Terapi"></td>
                      <td><input type="text" class="form-control" name="tindakan_2" id="tindakan2" placeholder="Tindakan"></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" id="dx3" placeholder="Diagnosa"></td>
                      <td><input type="text" class="form-control" id="pendukung3" placeholder="Pendukung & Terapi"></td>
                      <td><input type="text" class="form-control" id="tindakan3" placeholder="Tindakan"></td>
                    </tr>
                    
                  </tbody>
                </table>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="Submit" class="btn btn-primary">
                </div>
              </form>
            </div> 
            <!-- /.card -->        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="js/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/tempusdominus-bootstrap-4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.1/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
    function isi_otomatis(){
        var no_rm = $("#no_rm").val();
        $.ajax({
            url: 'ajax.php',
            data:"no_rm="+no_rm ,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
            $('#no_rm').val(obj.no_rm);
            $('#ruang').val(obj.ruang);
            $('#nama').val(obj.nama);
            $('#penjamin').val(obj.penjamin);
            $('#dx_masuk').val(obj.dx_masuk);
            $('#dx_1').val(obj.dx_masuk);
        });
    }
</script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="js/demo.js"></script> -->
<!-- Page specific script -->
<script>
  $(function() {
  var date = new Date();
  var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
  var end = new Date(date.getFullYear(), date.getMonth(), date.getDate());

  $('#datepicker1').datepicker({
  format: "dd-mm-yyyy",
  todayHighlight: true,
  autoclose: true
    });
    $('#datepicker1').datepicker('setDate', today);
  });  
</script>
        
</body>
</html>
