@extends('layouts.admin')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Usulan Seleksi Internal {{$item->user->name}}</h1>
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
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <td>{{ $item-> id }}</td>
                </tr>
                <tr>
                    <th>Ketua</th>
                    <td>{{ $item-> user-> name }}</td>
                </tr>
                <tr>
                    <th>Jenis Usulan</th>
                    <td>{{ $item-> type}}</td>
                </tr>
                <tr>
                    <th>Judul Usulan</th>
                    <td>{{ $item-> judul_usulan }}</td>
                </tr>
                <tr>
                    <th>Skema</th>
                    <td>{{ $item-> skema-> skema }}</td>
                </tr>
                <tr>
                    <th>Status Usulan</th>
                    <td>{{ $item-> status_usulan }}</td>
                </tr>
                <tr>
                    <th>Data Anggota</th>
                    <td>
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Jurusan</th>
                                <th>Fakultas</th>
                            </tr>
                        </table>
                    </td>
                </tr>
                @foreach ($item->details as $anggota )
                <tr>
                    <td>{{ $anggota->id }}</td>
                    <td>{{ $anggota->usulan_mahasiswas->name }}</td>
                    <td>{{ $anggota->usulan_mahasiswas->nim }}</td>
                    <td>{{ $anggota->usulan_mahasiswas->jurusan }}</td>
                    <td>{{ $anggota->usulan_mahasiswas->fakultas }}</td>
                </tr>


                @endforeach

            </table>
        </div>
    </div>
</div>

@endsection