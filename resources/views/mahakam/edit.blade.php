@extends('layout.v_template')
@section('title', 'Update')

@section('content')
<form action="{{route('mahakam.update', $mahakam->id)}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">       
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row">
               

        <div class="form-group col-sm-6">
        <label for="tentang">Tentang</label>
         <input type="text" name="tentang" value="{{ $mahakam->tentang }}" class="form-control" id="tentang" required>
        </div>

        
</div>

        <div class="form-group col-sm-6">
        <label for="mou">MOU</label>
         <input type="text" name="mou" value="{{ $mahakam->mou }}" class="form-control" id="mou" required>
        </div>


        <div class="form-group col-sm-6">
        <label for="pks">No. PKS</label>
         <input type="text" name="pks" value="{{ $mahakam->pks }}" class="form-control" id="pks" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="tanggal">Tanggal</label>
         <input type="date" name="tanggal" value="{{ $mahakam->tanggal }}" class="form-control" id="tanggal" required>
        </div>

       

        <div class="form-group col-sm-6">
        <label for="jangka_waktu">Jangka Waktu</label>
         <input type="text" name="jangka_waktu" value="{{ $mahakam->jangka_waktu }}" class="form-control" id="jangka_waktu" required>
        </div>
        
        <div class="form-group col-sm-6">
        <label for="unitkerja">Unit Kerja</label>
         <input type="text" name="unitkerja" value="{{ $mahakam->unitkerja }}" class="form-control" id="unitkerja" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="mitrakerja">Mitra Kerja</label>
         <input type="text" name="mitrakerja" value="{{ $mahakam->mitrakerja }}" class="form-control" id="mitrakerja" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="tahapan">Tahapan</label>
         <input type="text" name="tahapan" value="{{ $mahakam->tahapan }}" class="form-control" id="tahapan" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="file">FILE</label>
         <input type="file" name="file" value="{{ $mahakam->file }}" class="form-control" id="file" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="tahun">Tahun</label>
         <input type="text" name="tahun" value="{{ $mahakam->tahun }}" class="form-control" id="tahun" required>
        </div>

        
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('mahakam.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
        </form>
    </div>
</div>
@endsection