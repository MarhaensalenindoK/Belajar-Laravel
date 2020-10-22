@extends('layout.main')
@section('title','Daftar Siswa')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Siswa</h1>
            <a href="/students/create" class="btn btn-info my-3">Tambah Data Siswa</a>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            

            <ul class="list-group">
                <!-- Looping db students -->
                @foreach($students as $student)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$student->nama}}
                <a href="/students/{{$student->id}}" class="badge badge-info">Detail</a>
            </li>
            @endforeach
</ul>
           
        </div>
    </div>
</div>
@endsection