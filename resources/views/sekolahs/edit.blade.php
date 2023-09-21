@extends('template.default')

@php
$title = 'Data Siswa';
$pretitle = 'Edit Data Siswa';
@endphp

@section('body')
<div class="card">
    <div class="card-body">
        <form action="{{ route('sekolahs.update', $sekolah->id) }}" class="" method="post">
            @csrf
            @method('PUT')
                <div class="mb-3">
                <label class="form-label">Nama Sekolah</label>
                <input type="text" name="namasekolah" class="form-control" name="example-text-input" placeholder="Nama Lengkap" value="{{ $sekolah->namasekolah}}">
                </div>

                <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" name="example-text-input" placeholder="Alamat" value="{{ $sekolah->alamat}}">
                </div>

                <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" name="example-text-input" placeholder="Jurusan" value="{{ $sekolah->jurusan}}">
                </div>

                <div class="mb-3">
                <label class="form-label">Jumlah Guru</label>
                <input type="text" name="jumlahguru" class="form-control" name="example-text-input" placeholder="Jumlah Guru" value="{{ $sekolah->jumlahguru}}">
                </div>

            <div class="mb-3">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>    
        </form>
    </div>
</div>
@endsection