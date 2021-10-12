@extends('layouts.admin')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Internal {{$item->user->name}}</h1>
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
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Data Pengusul</h1>
    </div>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <td>{{$item->id}}</td>
                <tr>
                        <th>Nama</th>
                        <td>{{$item->user->name}}</td>
                    </tr>
                    <tr>
                        <th>Jurusan</th>
                        <td>{{$item->user->prodi}}</td>
                    </tr>
                    <tr>
                        <th>Nomor HP</th>
                        <td>{{$item->user->no_hp}}</td>
                    </tr>
                </tr>
            </table>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Data Proposal</h1>
    </div>
    <table class="table table-bordered">
                <tr>
                    <th>Judul Usulan</th>
                    <td>{{$item->judul_usulan}}</td>
                <tr>
                        <th>Skema</th>
                        <td>{{$item->skema_usulan}}</td>
                    </tr>
                    <tr>
                        <th>Abstrak</th>
                        <td>{{$item->abstrak}}</td>
                    </tr>
                    <tr>
                        <th>Proposal</th>
                        <td>{{$item->url_usulan}}</td>
                    </tr>
                </tr>
            </table>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Data Dosen Pembimbing</h1>
    </div>
    <table class="table table-bordered">
                <tr>
                    <th>NIDN Dosen</th>
                    <td>{{$item->nidn_dosen}}</td>
                <tr>
                        <th>Skema</th>
                        <td>{{$item->skema_usulan}}</td>
                    </tr>
                    
                    </tr>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection