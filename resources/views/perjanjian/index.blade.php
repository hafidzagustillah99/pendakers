@extends('layout.v_template')
@section('title', 'Perjanjian')

@section('content')
<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('perjanjian.create') }}"><i class="fa fa-plus">Tambah Data</i>
</a>
<p>Cari Data Perjanjian :</p>
<form method="GET" action="{{ url('perjanjian') }}">
	<input type="text" name="keyword" value="{{ $keyword }}" />
	<button type="submit">Search</button>
</form>
<br>

<a href="/perjanjian.cetakperjanjian" target="_blank" class="btn btn-primary btn-sm">Cetak</a> <br> <br>



<div class="section-body">
<div class="card">
<div class="card-body">
<div class="table table-responsive">
<table class="table table-bordered table-striped">
            <tr>
        <th>No</th>
        <th>Nama Daerah</th>
        <th>Bidang Kerjasama</th>
        <th>Tanggal</th>
        <th>MOU</th>
        <th>No. PKS</th>
        <th>Jangka Waktu</th>
        <th>Pihak</th>
        <th>Instansi</th>
        <th>Keterangan</th>
        <th>Tahun</th>
        <th colspan="2">Action</th>
            </tr>
            <tbody>
            <?php $no = 1; ?>
        @foreach($perjanjian as $item)
            <tr>
            <td>{{ $no ++}}</td>
            <td>{{ $item->kota->nama_daerah }}</td>
            <td>{{ $item->bidang_kerjasama }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->mou }}</td>
            <td>{{ $item->pks }}</td>
            <td>{{ $item->jangka_waktu }}</td>
            <td>{{ $item->pihak }}</td>
            <td>{{ $item->instansi }}</td>
            <td>{{ $item->keterangan }}</td>
            <td>{{ $item->catatan }}</td>

            <td><a href="{{ route('perjanjian.edit', [$item->id]) }}" class='btn btn-success'><i class="fa fa-edit">edit</i></a></td>

            <td>
            <form action="{{ url('perjanjian/'.$item->id) }}" method="POST">
                @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger" type="submit"><i class="fa fa-trash">delete</i></button>
            </form>
        </td>
            </tr>
        @endforeach
       
    </table>
    {{ $perjanjian->links() }}
    </section>
</div>
</section>
@endsection