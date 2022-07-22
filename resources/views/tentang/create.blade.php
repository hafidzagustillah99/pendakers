@extends('layout.v_template')
@section('title', 'Perjanjian')

@section('content')
<form action="{{route('tentang.store')}}" method="post" enctype="multipart/form-data">

    <form method="POST" action="{{ route('tentang.index') }}">
        @csrf
    <div class="content">       
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row">

        <div class="form-group col-sm-6">
        <label for="">Nama Daerah</label>
        <select name="daerahku" id="" class="form-control">
            <option value="">--Pilih Daerah Cok--</option>
        @foreach($daftar_daerah as $item)
            <option value="{{$item->id}}">{{$item->daftar}}</option>
        @endforeach
        </select>
        </div>

        <div class="form-group col-sm-6">
        <label for="kepala_daerah">Kepala Daerah</label>
         <input type="text" name="kepala_daerah" class="form-control" id="kepala_daerah" required>
        </div>

        
        <div class="form-group col-sm-6">
        <label for="history">History</label>
        <textarea input type="text" name="history" class="form-control" placeholder="Leave a comment here" id="history" required></textarea>
         
        </div>

        


    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save">Simpan</i></button>
        <a href="{{ route('tentang.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
        </form>
</form>
    </div>
</div>
@endsection