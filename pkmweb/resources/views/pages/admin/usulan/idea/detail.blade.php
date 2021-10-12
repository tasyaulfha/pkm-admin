@extends('layouts.admin')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid p-4">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="mb-3 font-weight-bold" style="color: #093697">Data {{$item->user->name}}</h3>
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
                <h5 class="mb-0 " style="color: #093697">Data Pengusul</h5>
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
                    <th>Fakultas</th>
                    <td>{{$item->user->fakultas}}</td>
                </tr>
                <tr>
                    <th>Nomor HP</th>
                    <td>{{$item->user->no_hp}}</td>
                </tr>
                </tr>
            </table>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="mb-0 " style="color: #093697">Data Proposal</h5>
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
            <h5 class="mb-0 " style="color: #093697">Data Dosen Pembimbing</h5>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>NIDN Dosen</th>
                    <td>{{$item->nidn_dosen}}</td>
                <tr>
                    <th>Nama Dosen</th>
                    <td>{{$item->nama_dosen}}</td>
                </tr>

                </tr>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection