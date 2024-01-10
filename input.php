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
                <h3 class="card-title">Sistem Casemix</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""> -->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Register</label>
                    <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ruang</label>
                    <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Penjamin</label>
                    <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Diagnosis Masuk</label>
                    <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                  </div>
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
                      <td><input type="text" class="form-control" id="dx1" placeholder=""></td>
                      <td><input type="text" class="form-control" id="pendukung1" placeholder=""></td>
                      <td><input type="text" class="form-control" id="tindakan1" placeholder=""></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" id="dx2" placeholder=""></td>
                      <td><input type="text" class="form-control" id="pendukung2" placeholder=""></td>
                      <td><input type="text" class="form-control" id="tindakan2" placeholder=""></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" id="dx3" placeholder=""></td>
                      <td><input type="text" class="form-control" id="pendukung3" placeholder=""></td>
                      <td><input type="text" class="form-control" id="tindakan3" placeholder=""></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" id="dx4" placeholder=""></td>
                      <td><input type="text" class="form-control" id="pendukung4" placeholder=""></td>
                      <td><input type="text" class="form-control" id="tindakan4" placeholder=""></td>
                    </tr>
                  </tbody>
                </table>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
<!-- AdminLTE for demo purposes -->
<!-- <script src="js/demo.js"></script> -->
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
