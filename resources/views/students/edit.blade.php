@extends('layout.main')
@section('title','Form Ubah Data Siswa')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Siswa</h1>
            <form method="post" action="/students/{{$student->id}}">
                @method('patch')
            @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" aria-describedby="Masukan Nama..." name="nama" value="{{$student->nama}}">
                        @error('nama')
                        <div class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" aria-describedby="Masukan nis..." name="nis" value="{{$student->nis}}">
                        @error('nis')
                        <div class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="Masukan email..." name="email" value="{{$student->email}}">
                        @error('email')
                        <div class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" aria-describedby="Masukan jurusan..." name="jurusan" value="{{$student->jurusan}}">
                        @error('jurusan')
                        <div class="invalid-feedback"> {{$message}} </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
</form>
           
        </div>
    </div>
</div>
@endsection