@extends('layouts.admin')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Dosen</h1>
    </div>


    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
            <li> {{$error}}</li>
             @endforeach
        </ul>
    </div>
    @endif
    <div class="card shadow">
        <div class="card-body">
            <form action="{{route ('dosen.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_dosen">Nama Dosen</label>
                    <input type="text" class="form-control" name="nama_dosen" placeholder="Nama Dosen" value="{{old('nama_dosen')}}">
                </div>
                <div class="form-group">
                    <label for="nidn_dosen">NIDN Dosen</label>
                    <input type="text" class="form-control" name="nidn_dosen" placeholder="NIDN" value="{{old('nidn_dosen')}}">
                </div>
                <div class="form-group">
                    <label for="nomorhp">Nomor HP</label>
                    <input type="text" class="form-control" name="no_hp" placeholder="NomorHp" value="{{old('no_hp')}}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan  
                </button>
            </form>
        </div>
    </div>
</div>

@endsection