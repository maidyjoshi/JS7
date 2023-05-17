@extends('mahasiswas.layout')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header"> Detail Mahasiswa
    </div>

    <div class="card-body">
        <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>nim: </b>{{$Mahasiswa->nim}}</li>
        <li class="list-group-item"><b>nama: </b>{{$Mahasiswa->nama}}</li>
        <li class="list-group-item"><b>kelas: </b>{{$Mahasiswa->kelas}}</li>
        <li class="list-group-item"><b>jurusan: </b>{{$Mahasiswa->jurusan}}</li>
        <li class="list-group- item"><b>noHp: </b>{{$Mahasiswa->noHp}}</li>
        <li class="list-group- item"><b>email: </b>{{$Mahasiswa->email}}</li>
        <li class="list-group- item"><b>tanggalLahir: </b>{{$Mahasiswa->tanggalL}}</li>

        </ul>
    </div>
        <a class="btn btn-success mt-3" href="{{ route('mahasiswas.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection


