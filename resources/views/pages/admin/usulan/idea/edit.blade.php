@extends('layouts.admin')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid p-4">

    <!-- Page Heading -->
    <h3 class="mb-3 font-weight-bold" style="color: #093697">
        Update Status
    </h3>

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
            <form action="{{route ('idea.update', $item->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="status_usulan">Status</label>
                    <select name="status_usulan" required class="form-control">
                        <option value="{{$item->status_usulan}}">
                            ({{$item->status_usulan}})
                        </option>
                        <option value="TERKIRIM">Terkirim</option>
                        <option value="PROSES REVIEW">Proses Review</option>
                        <option value="DITERIMA">Diterima</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Ubah
                </button>
            </form>
        </div>
    </div>
</div>

@endsection