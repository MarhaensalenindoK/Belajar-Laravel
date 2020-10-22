@extends('layout.main')
@section('title','Daftar Siswa')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Siswa</h1>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $sw)
                    <tr>
                        <th scope="row"> {{$loop->iteration}} </th>
                        <td> {{$sw->nama}} </td>
                        <td>{{$sw->nis}}</td>
                        <td>{{$sw->email}}</td>
                        <td>{{$sw->jurusan}}</td>
                        <td>
                            <a href="" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection