@extends('layouts.admin')


@section('content')

<!-- Begin Page Content -->
<div class="container-fluid p-4">

    <!-- Page Heading -->
    <h2 class="mb-3 font-weight-bold" style="color: #093697">
        PKM Idea Challange
    </h2>

    <div class="card">
        <div class="card-body">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered tablesorter" id="idea_table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">Ketua</th>
                                <th style="text-align: center;">Judul</th>
                                <th style="text-align: center;">Skema</th>
                                <th style="text-align: center;">Tanggal Submit</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item )
                            @if ($item->type == 'PKM Idea Challange')
                            <tr>
                                <td style="text-align: center;">{{ $no++}}</td>
                                <td style="text-align: center;">{{ $item->judul_usulan }}</td>
                                <td style="text-align: center;">{{ $item->user->name}}</td>
                                <td style="text-align: center;">{{ $item->skema_usulan }}</td>
                                <td style="text-align: center;">{{ date('d-m-Y', strtotime($item->created_at))}}</td>
                                <td style="text-align: center;">
                                    @if($item->status_usulan=='TERKIRIM' )
                                    <span class="badge badge-info">
                                        @elseif($item->status_usulan=='PROSES REVIEW' )
                                        <span class="badge badge-primary">
                                            @elseif($item->status_usulan=='DITERIMA' )
                                            <span class="badge badge-success">
                                                @else
                                                <span>
                                                    @endif
                                                    {{$item->status_usulan}}
                                </td>
                                <td>
                                    <a style="text-align: center;" href="{{route('usulan.idea.edit', $item->id)}}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <a href="{{route('usulan.idea.show', $item->id)}}" class="btn btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <form action="{{route('usulan.idea.destroy', $item->id)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @else
                            <div></div>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" defer></script>
<script>
    $(document).ready(function() {
        $('#idea_table').DataTable();
    });
</script>
@endsection