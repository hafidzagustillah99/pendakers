@extends('layout.v_template')
@section('title', 'Nama Daerah')

@section('content')
    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('kota.create') }}"><i class="fa fa-plus">Tambah </i></a></h1>

<div class="section-body">
<div class="card">
<div class="card-body">
<div class="table table-responsive">
<table class="table table-bordered table-striped">
            <tr>
        <th>No</th>
        <th>Nama Daerah</th>
        <th colspan="2">Action</th>
            </tr>
            <tbody>
                <?php $no = 1; ?>
        @foreach($kota as $kota)
            <tr>
            <td>{{ $no ++}}</td>
            <td>{{ $kota->nama_daerah}}</td>
           
            <td><a href="{{ route('kota.edit', [$kota->id]) }}" class='btn btn-success'><i class="fa fa-edit">edit</i></a></td>

            
            </tr>
            
        @endforeach

       
        </tbody>
    </table>
</div>
@endsection