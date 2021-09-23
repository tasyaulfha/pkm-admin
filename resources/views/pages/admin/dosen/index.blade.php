@extends('layouts.admin')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Dosen</h1>
        <a href="{{route('dosen.create')}}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Dosen
        </a>
    </div>


    <div class="row">
        <div class="card card-info card-outline">
            <div class="card-header">
                <a href="{{route('exportdosen')}}" class="btn btn-success">Export</a>

                <a href="{{route('importdosen')}}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Import
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <!-- <th>No</th> -->
                                <th>NIDN Dosen</th>
                                <th>Nama Dosen</th>
                                <th>No Hp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dosen as $item )
                            <tr>
                                <!-- <td>{{$item->id}}</td> -->
                                <td>{{$item->nidn_dosen}}</td>
                                <td>{{$item->nama_dosen}}</td>
                                <td>{{$item->no_hp}}</td>
                                <td>
                                    <a href="{{route('dosen.edit', $item->id)}}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{route('dosen.destroy', $item->id)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    Data Kosong
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('importdosen')}}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="file" name="file" required="required">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Selesai</button>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
                </div>
           
            </div>

       
       
       
        </div>
        
    </div>
    

    @endsection