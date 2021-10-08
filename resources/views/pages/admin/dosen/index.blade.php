@extends('layouts.admin')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid p-4">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="mb-3 font-weight-bold" style="color: #093697">Data Dosen</h3>

    </div>


    <div class="card p-2">
        <div class="card card-info card-outline">
        </div>
        <div class="card-header">
            <a href="{{route('exportdosen')}}" class="btn btn-success">Export</a>
            <a href="{{route('dosen.create')}}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Dosen
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="dosen_table" class="table table-bordered" width="100%" cellspacing="0">
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

            </div>

        </div>




    </div>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" defer></script>
<script>
    $(document).ready(function() {
        $('#dosen_table').DataTable();
    });
</script>
@endsection