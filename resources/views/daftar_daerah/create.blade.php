@extends('layout.v_template')
@section('title', 'Nama Daerah')

@section('content')
<form action="{{route('daftar_daerah.store')}}" method="post" enctype="multipart/form-data">

    <form method="POST" action="{{ route('daftar_daerah.index') }}">
        @csrf
    <div class="content">       
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <div class="row">
        <div class="form-group col-sm-6">
        <label for="daftar">Nama Daerah</label>
         <input type="text" name="daftar" class="form-control" id="daftar" required>
        </div>
        
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save">Simpan</i></button>
        <a href="{{ route('daftar_daerah.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
        </form>
</form>
    </div>
</div>
@endsection