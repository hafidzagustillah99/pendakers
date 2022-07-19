@extends('layout.v_template')
@section('title', 'Update')

@section('content')
<form action="{{route('samarinda.update', $perjanjian->id)}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">       
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row">
               

        <div class="form-group col-sm-6">
        <label for="tentang">Tentang</label>
         <input type="text" name="tentang" value="{{ $samarinda->tentang }}" class="form-control" id="tentang" required>
        </div>

        
</div>

        <div class="form-group col-sm-6">
        <label for="mou">MOU</label>
         <input type="text" name="mou" value="{{ $samarinda->mou }}" class="form-control" id="mou" required>
        </div>


        <div class="form-group col-sm-6">
        <label for="pks">No. PKS</label>
         <input type="text" name="pks" value="{{ $samarinda->pks }}" class="form-control" id="pks" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="tanggal">Tanggal</label>
         <input type="date" name="tanggal" value="{{ $samarinda->tanggal }}" class="form-control" id="tanggal" required>
        </div>

       

        <div class="form-group col-sm-6">
        <label for="jangka_waktu">Jangka Waktu</label>
         <input type="text" name="jangka_waktu" value="{{ $samarinda->jangka_waktu }}" class="form-control" id="jangka_waktu" required>
        </div>
        
        <div class="form-group col-sm-6">
        <label for="unitkerja">Unit Kerja</label>
         <input type="text" name="unitkerja" value="{{ $samarinda->unitkerja }}" class="form-control" id="unitkerja" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="mitrakerja">Mitra Kerja</label>
         <input type="text" name="mitrakerja" value="{{ $samarinda->mitrakerja }}" class="form-control" id="mitrakerja" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="tahapan">Tahapan</label>
         <input type="text" name="tahapan" value="{{ $samarinda->tahapan }}" class="form-control" id="tahapan" required>
        </div>


        <div class="form-group col-sm-6">
        <label for="tahun">Tahun</label>
         <input type="text" name="catatan" value="{{ $samarinda->tahun }}" class="form-control" id="tahun" required>
        </div>

        
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('samarinda.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
        </form>
    </div>
</div>
@endsection