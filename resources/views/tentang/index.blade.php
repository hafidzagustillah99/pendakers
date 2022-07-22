@extends('layout.v_template')
@section('title', 'Tentang Daerah')

@section('content')
<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('tentang.create') }}"><i class="fa fa-plus">Tambah Data</i>
</a>

<br>

<a href="/tentang.cetaksemua" target="_blank" class="btn btn-primary btn-sm">Cetak</a> <br> <br>



<div class="section-body">
<div class="card">
<div class="card-body">
<div class="table table-responsive">
<table class="table table-bordered table-striped">
            <tr>
        <th>No</th>
        <th>Nama Daerah</th>
        <th>Kepala Daerah</th>
        <th>History</th>
        
        <th colspan="2">Action</th>
            </tr>
            <tbody>
            <?php $no = 1; ?>
        @foreach($tentang as $item)
            <tr>
            <td>{{ $no ++}}</td>
            <td>{{ $item->daftar_daerah->daftar }}</td>
            <td>{{ $item->kepala_daerah }}</td>
            <td>{{ $item->history }}</td>
           

            <td><a href="{{ route('tentang.edit', [$item->id]) }}" class='btn btn-success'><i class="fa fa-edit">edit</i></a></td>
            <td><a href="/tentang.cetak" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-show">Show</i></a></td>
            <td>
            <form action="{{ url('tentang/'.$item->id) }}" method="POST">
                @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger" type="submit"><i class="fa fa-trash">delete</i></button>
            </form>
        </td>
            </tr>
        @endforeach
       
    </table>

    </section>
</div>
</section>
@endsection