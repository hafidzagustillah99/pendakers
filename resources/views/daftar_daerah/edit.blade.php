@extends('layout.v_template')
@section('title', 'Edit Daerah')

@section('content')
<form action="{{route('kota.update', $kota->id)}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">       
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row">
               

        

        <div class="form-group col-sm-6">
        <label for="daftar">Nama Daerah</label>
         <input type="text" name="daftar" value="{{ $daftar_daerah->daftar }}" class="form-control" id="daerah" required>
        </div>

        
        
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('daftar_daerah.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
        </form>
    </div>
</div>
@endsection