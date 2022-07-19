@extends('layout.v_template')
@section('title', 'Perjanjian')

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
        <label for="nama_daerah">Nama Daerah</label>
         <input type="text" name="nama_daerah" value="{{ $kota->nama_daerah }}" class="form-control" id="nama_daerah" required>
        </div>

        
        
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('kota.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
        </form>
    </div>
</div>
@endsection