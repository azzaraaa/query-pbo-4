@extends('layouts.base')
@section('content')
@include('_partials.navbar')
@section('container')
    <div class="card mt-5 bg-secondary text-white">
        <div class="card-header">
            <h6>Form Tambah Masyarakat</h6>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="/" method="post">
                @csrf
                <label for="nama_lengkap" class="form-label">Nama</label>
                <input type="text" name="nama_lengkap" class="form-control">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control">
                <label for="password" class="form-label">password</label>
                <input type="password" name="password" class="form-control">
                <label for="telp" class="form-label">Telepon</label>
                <input type="text" name="telp" class="form-control">
                <button type="submit" class="btn btn-dark mt-3">Tambah</button>
            </form>
        </div>
    </div>

    <table class="table table-success table-striped-columns table-bordered mt-3">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Telepon</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($masyarakat as $key => $get)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $get->nama_lengkap }}</td>
                <td>{{ $get->username }}</td>
                <td>{{ $get->telp }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
