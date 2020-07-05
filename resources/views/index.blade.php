@extends('layouts.master')

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Artikel</h1>

<div class="row">

    <div class="col-lg-12">

        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Artikel</h6>
            </div>

            <div class="card-body">
            <a href="{{ route('artikel.create')}}" class="btn btn-primary btn-sm">Tambah data</a> <br><br>
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($artikels as $artikel)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$artikel->judul}}</td>
                            <td>{{$artikel->isi}}</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm">Edit</a>
                                <a href="" class="btn btn-success btn-sm">detail</a>
                                <a href="" class="btn btn-danger btn-sm">delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush