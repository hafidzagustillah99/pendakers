<!DOCTYPE html>
<html>
    <head>
        Halaman Historys
</head>

<table  align="center">
    <tr>
        <td><img src="{{asset('template/')}}/dist/img/pemprovkaltim.jpg"  width="70" height="70"></td>
        <td><center>
            <font size="4">Provinsi Kalimantan Timur</font><BR>
            <font size="5"><b>Kantor Gubernur</b></font><BR>
            <font size="2"><i>Jl. Gajah Mada Kota Samarinda</i></font><BR>
        </td>
    </tr>
    <tr>
        <td colspan="2"><hr> </td>
    </tr>
</table>

<table onload="window.print('');">
        <thead>
          <tr>
            <td>No</td>
            <th>Nama Daerah</th>
            <th>Kepala Daerah</th>
            <th>History</th>
          </tr>
        </thead>
        <tbody>
            <?php $no=1 ?>
          @foreach ($tentang as $data)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->daftar_daerah->daftar }}</td>
            <td>{{ $data->kepala_daerah }}</td>
            <td>{{ $data->history }}</td>
            
          </tr>
          @endforeach
          
          
        </tbody>
</table>
</body>
</html>