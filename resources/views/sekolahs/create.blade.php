@extends('template.default')

@section('body')
<div class="card">
    <div class="card-body">
        <form action="{{ route('sekolahs.store') }}" class="" method="post">
            @csrf
                <div class="mb-3">
                <label class="form-label">Nama Sekolah</label>
                <input type="text" name="namasekolah" class="form-control" name="example-text-input" placeholder="Nama Lengkap">
                </div>

                <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" name="example-text-input" placeholder="Alamat">
                </div>

                <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" name="example-text-input" placeholder="Jurusan">
                </div>

                <div class="mb-3">
                <label class="form-label">Jumlah Guru</label>
                <input type="text" name="jumlahguru" class="form-control" name="example-text-input" placeholder="Jumlah Guru">
                </div>

            <div class="mb-3">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>    
        </form>
    </div>
</div>
@endsection