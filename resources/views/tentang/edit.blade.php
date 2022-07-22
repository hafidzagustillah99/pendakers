@extends('layout.v_template')
@section('title', 'Edit History')

@section('content')
<form action="{{route('tentang.update', $tentang->id)}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">       
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row">
               

        <div class="form-group col-sm-6">
        <label for="">Nama Daerah</label>
        <select name="daerahku" id="" class="form-control">
            <option value="">--pilih Daerah--</option>
        @foreach($kota as $item)
            <option value="{{$item->id}}">{{$item->daftar}}</option>
        @endforeach
        </select>
</div>

        <div class="form-group col-sm-6">
        <label for="kepala_daerah">Kepala Daerah</label>
         <input type="text" name="kepala_daerah" value="{{ $tentang->kepala_daerah }}" class="form-control" id="kepala_daerah" required>
        </div>


        <div class="form-group col-sm-6">
        <label for="history">History</label>
         <input type="text" name="history" value="{{ $tentang->history }}" class="form-control" id="history" required>
        </div>

        

        
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('perjanjian.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
        </form>
    </div>
</div>
@endsection