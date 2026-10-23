@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-secondary text-white border-0 shadow-lg p-4">
                <div class="text-center mb-4">
                    <div class="bg-danger text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 100px; height: 100px; fs-1;">
                        <i class="fs-1 fw-bold">GZ</i>
                    </div>
                    <h2 class="fw-bold">Profil Pengembang Web</h2>
                    <p class="text-light">GenZCatch+ Portal Film Lokal</p>
                </div>

                <hr class="border-light">

                <div class="row fs-5 g-3">
                    <div class="col-sm-4 text-light fw-bold">Nama Mahasiswa</div>
                    <div class="col-sm-8">: MUHAMMAD RIVASHA ARDA</div>

                    <div class="col-sm-4 text-light fw-bold">NIM</div>
                    <div class="col-sm-8">: 251011700401 (Digit Terakhir = 1)</div>

                    <div class="col-sm-4 text-light fw-bold">Program Studi</div>
                    <div class="col-sm-8">: Sistem Informasi S-1</div>

                    <div class="col-sm-4 text-light fw-bold">Perguruan Tinggi</div>
                    <div class="col-sm-8">: Universitas Pamulang</div>

                    <div class="col-sm-4 text-light fw-bold">Tema Proyek</div>
                    <div class="col-sm-8">: Portal Film Lokal (GenZCatch+)</div>
                </div>

                <div class="mt-4 text-center">
                    <a href="{{ route('movies.index') }}" class="btn btn-outline-light">&larr; Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection