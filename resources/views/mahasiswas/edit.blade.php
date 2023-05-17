@extends('mahasiswas.layout')

@section('content')
    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Mahasiswa
    </div>

    <div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="{{ route('mahasiswas.update', $Mahasiswa->nim) }}" id="myForm">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nim">Nim</label>
        <input type="text" name="nim" class="form- control" id="nim" value="{{ $Mahasiswa->nim }}" aria- describedby="nim" >
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form- control" id="nama" value="{{ $Mahasiswa->nama }}" aria- describedby="nama" >
    </div>

    <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="kelas" name="kelas" class="form- control" id="kelas" value="{{ $Mahasiswa->kelas }}" aria- describedby="kelas" >
    </div>

    <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <input type="jurusan" name="jurusan" class="form- control" id="jurusan" value="{{ $Mahasiswa->jurusan }}" aria- describedby="jurusan" >
    </div>

    <div class="form-group">
        <label for="noHp">No_Handphone</label>
        <input type="noHp" name="noHp" class="form- control" id="noHp" value="{{ $Mahasiswa->noHp }}" aria- describedby="noHp" >
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form- control" id="email" aria-describedby="email" >
    </div>

    <div class="form-group">
        <label for="tanggalLahir">Tanggal Lahir</label>
        <input type="tanggalLahir" name="tanggalLahir" class="form- control" id="tanggalLahir" aria-describedby="tanggalLahir" >
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection




