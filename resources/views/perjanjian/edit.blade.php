@extends('layout.v_template')
@section('title', 'Perjanjian')

@section('content')
<form action="{{route('perjanjian.update', $perjanjian->id)}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">       
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row">
               

        <div class="form-group col-sm-6">
        <label for="bidang_kerjasama">Bidang Kerjasama</label>
         <input type="text" name="bidang_kerjasama" value="{{ $perjanjian->bidang_kerjasama }}" class="form-control" id="bidang_kerjasama" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="">Nama Daerah</label>
        <select name="id_nama_daerah" id="" class="form-control">
            <option value="">--pilih Daerah--</option>
        @foreach($kota as $item)
            <option value="{{$item->id}}">{{$item->nama_daerah}}</option>
        @endforeach
        </select>
</div>

        <div class="form-group col-sm-6">
        <label for="tanggal">Tanggal</label>
         <input type="date" name="tanggal" value="{{ $perjanjian->tanggal }}" class="form-control" id="tanggal" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="mou">MOU</label>
         <input type="text" name="mou" value="{{ $perjanjian->mou }}" class="form-control" id="mou" required>
        </div>


        <div class="form-group col-sm-6">
        <label for="pks">No. PKS</label>
         <input type="text" name="pks" value="{{ $perjanjian->pks }}" class="form-control" id="pks" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="jangka_waktu">Jangka Waktu</label>
         <input type="text" name="jangka_waktu" value="{{ $perjanjian->jangka_waktu }}" class="form-control" id="jangka_waktu" required>
        </div>
        
        <div class="form-group col-sm-6">
        <label for="pihak">Pihak</label>
         <input type="text" name="pihak" value="{{ $perjanjian->pihak }}" class="form-control" id="pihak" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="instansi">Instansi</label>
         <input type="text" name="instansi" value="{{ $perjanjian->instansi }}" class="form-control" id="instansi" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="keterangan">Keterangan</label>
         <input type="text" name="keterangan" value="{{ $perjanjian->keterangan }}" class="form-control" id="keterangan" required>
        </div>


        <div class="form-group col-sm-6">
        <label for="catatan">Tahun</label>
         <input type="text" name="catatan" value="{{ $perjanjian->catatan }}" class="form-control" id="catatan" required>
        </div>

        
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('perjanjian.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
        </form>
    </div>
</div>
@endsection