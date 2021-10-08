@extends('layouts.admin')


@section('content')
<!-- Begin Page Content -->
<!-- Begin Page Content -->
<div class="container-fluid p-4">

    <!-- Page Heading -->
    <h5 class="mb-3 font-weight-bold" style="color: #093697">
        PKM Camp
    </h5>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="camp_table" class="table table-bordered" width="100%" cellspacing="0">
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
                            <td>{{ $item->users}}</td>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" defer></script>
<script>
    $(document).ready( function () {
        $('#camp_table').DataTable();
    } );
</script>

@endsection



