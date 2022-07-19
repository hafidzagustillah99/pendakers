@extends('layout.v_template')
@section('title', 'Kota Samarinda')

@section('content')
<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('samarinda.create') }}"><i class="fa fa-plus">Tambah Data</i>
</a>
<p>Cari Data Perjanjian :</p>
<form method="GET" action="{{ url('samarinda') }}">
	<input type="text" name="keyword" value="{{ $keyword }}" />
	<button type="submit">Search</button>
</form>
<br>

<a href="/samarinda.cetak" target="_blank" class="btn btn-primary btn-sm">Cetak</a> <br> <br>



<div class="section-body">
<div class="card">
<div class="card-body">
<div class="table table-responsive">
<table class="table table-bordered table-striped">
            <tr>
        <th>No</th>
        <th>Tentang</th>
        <th>No. MOU</th>
        <th>No. PKS</th>
        <th>Tanggal</th>
        <th>Jangka Waktu</th>
        <th>Unit Kerja</th>
        <th>Mitra Kerja</th>
        <th>Tahapan</th>
        <th>Tahun</th>
        <th colspan="2">Action</th>
            </tr>
            <tbody>
            <?php $no = 1; ?>
        @foreach($samarinda as $item)
            <tr>
            <td>{{ $no ++}}</td>
            <td>{{ $item->tentang }}</td>
            <td>{{ $item->mou }}</td>
            <td>{{ $item->pks }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->jangka_waktu }}</td>
            <td>{{ $item->unitkerja }}</td>
            <td>{{ $item->mitrakerja }}</td>
            <td>{{ $item->tahapan }}</td>
            <td>{{ $item->tahun }}</td>

            <td><a href="{{ route('samarinda.edit', [$item->id]) }}" class='btn btn-success'><i class="fa fa-edit">edit</i></a></td>

            <td>
            <form action="{{ url('samarinda/'.$item->id) }}" method="POST">
                @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger" type="submit"><i class="fa fa-trash">delete</i></button>
            </form>
        </td>
            </tr>
        @endforeach
       
    </table>
    {{ $samarinda->links() }}
    </section>
</div>
</section>
@endsection