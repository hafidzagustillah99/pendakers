<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Pendataan | Cetak Data</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('template/')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/')}}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('template/')}}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/')}}/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print('landscape');">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
        <img src="{{asset('template/')}}/dist/img/bontang.jpg" class="img-circle" alt="User Image" width="70" height="70"> Provinsi Kalimantan Timur | Kota Bontang
          <small class="pull-right">Date: {{ date('d M Y')}}</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    
      
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <td>No</td>
            <th>Tentang</th>
            <th>No. MOU</th>
            <th>No. PKS</th>
            <th>Tanggal</th>
            <th>Jangka Waktu</th>
            <th>Unit Kerja</th>
            <th>Mitra Kerja</th>
            <th>Tahapan</th>
            <th>Tahun</th>
            <th>File</th>
          </tr>
          </thead>
          <tbody>
            <?php $no=1 ?>
          @foreach ($bontang as $data)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->tentang }}</td>
            <td>{{ $data->mou }}</td>
            <td>{{ $data->pks }}</td>
            <td>{{ $data->tanggal }}</td>
            <td>{{ $data->jangka_waktu }}</td>
            <td>{{ $data->unitkerja }}</td>
            <td>{{ $data->mitrakerja}}</td>
            <td>{{ $data->tahapan }}</td>
            <td>{{ $data->tahun }}</td>
            <td>{{ $data->file }}</td>
            
          </tr>
          @endforeach
          
          
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
