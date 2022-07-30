@extends('layout.v_template')
@section('title', 'Users')

@section('content')
<form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">

    <form method="POST" action="{{ route('user.index') }}">
        @csrf
    <div class="content">       
    <div class="section-body">
        

        <div class="form-group col-sm-6">
        <label for="name">Nama</label>
         <input type="text" name="name" class="form-control" id="name" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="email">Email</label>
         <input type="text" name="email" class="form-control" id="email" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="password">Password</label>
         <input type="text" name="password" class="form-control" id="password" required>
        </div>



    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save">Simpan</i></button>
        <a href="{{ route('user.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
        </form>
</form>
    </div>
</div>
@endsection