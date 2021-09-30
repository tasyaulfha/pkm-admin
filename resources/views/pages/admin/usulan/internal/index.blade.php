@extends('layouts.admin')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Seleksi Internal</h1>
       
    </div>


    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ketua</th>
                            <th>Judul</th>
                            <th>Tanggal Submit</th>
                            <th>Status</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item )
                        <tr>

                            <td>{{ $item->id}}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->judul_usulan }}</td>
                            <td>{{ date('d-m-Y', strtotime($item->created_at))}}</td>
                            <td>
                                @if($item->status_usulan=='TERKIRIM' )
                                <span class="badge badge-info">
                                @elseif($item->status_usulan=='PROSES REVIEW' )
                                <span class="badge badge-info">
                                @elseif($item->status_usulan=='DITERIMA' )
                                <span class="badge badge-success">
                                @else
                                <span>
                                @endif 
                                {{$item->status_usulan}}
                            </td>
                            <td>
                               
                            <a href="{{route('usulan.internal.show', $item->id)}}" class="btn btn-primary">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <form action="{{route('usulan.internal.destroy', $item->id)}}" method="post"
                                     class="d-inline">
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
            </div>
        </div>
    </div>


</div>


@endsection



