@extends('layouts.index')

@section('title', 'Daftar Beasiswa')

@section('content')

<style>

    .content-about {
        width: 100%;
        max-width: 736px;
        height: auto;
        flex-shrink: 0;
        margin: 0 auto;
        overflow-x: auto;
    }
</style>


    <div class="container-lg mt-8">
        <div class="text-center">
            <h1 class="my-5 text-primary" style="font-weight: 800;">Daftar Beasiswa</h1>
            <img src="images/logo.png" alt="logo" height="100px">
        </div>

        <div class="content-about mt-5 ">
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}
                    <button type="button" class="btn-close text-right" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form method="POST" action="{{ route('beasiswa.store') }}" enctype="multipart/form-data">
                @csrf <!-- CSRF Token -->
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-md-12">
                      <div class="form-group row mb-5">
                        <label for="nama" class="col-sm-3 col-form-label fw-bold">Masukkan Nama</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                        </div>
                      </div>
                      <div class="form-group row mb-5">
                        <label for="nim" class="col-sm-3 col-form-label fw-bold">Masukkan NIM</label>
                        <div class="col-sm-9">
                          <input type="tel" class="form-control" id="nim" name="nim" placeholder="NIM">
                        </div>
                      </div>
                      <div class="form-group row mb-5">
                        <label for="email" class="col-sm-3 col-form-label fw-bold">Masukkan Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row mb-5">
                        <label for="nomor_hp" class="col-sm-3 col-form-label fw-bold">Nomor HP</label>
                        <div class="col-sm-9">
                          <input type="tel" class="form-control" id="nomor_hp" name="nomor_hp" placeholder="No. HP">
                        </div>
                      </div>
                      <div class="form-group row mb-5">
                        <label for="semester" class="col-sm-3 col-form-label fw-bold">Semester Saat Ini</label>
                        <div class="col-sm-9">
                          <select class="form-control" id="semester" name="semester">
                            <option value="">Pilih Semester</option>
                            <option value="1">Semester 1</option>
                            <option value="2">Semester 2</option>
                            <option value="3">Semester 3</option>
                            <option value="4">Semester 4</option>
                            <option value="5">Semester 5</option>
                            <option value="6">Semester 6</option>
                            <option value="7">Semester 7</option>
                            <option value="8">Semester 8</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row mb-5">
                        <label for="ipk" class="col-sm-3 col-form-label fw-bold">IPK Terakhir</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="ipk" name="ipk" value="3.01" disabled>
                        </div>
                      </div>
                      <div class="form-group row mb-5">
                        <label for="beasiswa" class="col-sm-3 col-form-label fw-bold">Pilihan Beasiswa</label>
                        <div class="col-sm-9">
                          <select class="form-control" id="beasiswa" name="beasiswa">
                            <option value="">Pilih Jenis Beasiswa</option>
                            <option value="akademik">Beasiswa Akademik</option>
                            <option value="non_akademik">Beasiswa Non Akademik</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row mb-5">
                        <label for="berkas" class="col-sm-3 col-form-label fw-bold">Upload Berkas</label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control-file" id="berkas" name="berkas">
                        </div>
                      </div>
                      <div class="form-group row mb-5">
                        <div class="col-sm-6 text-center mt-3">
                            <button type="submit" class="btn btn-lg btn-primary btn-block fw-bold mx-auto px-10" href="hasil">Daftar</button>
                          </div>
                        <a class="col-sm-6 text-center mt-3">
                          <button type="button" class="btn btn-lg btn-danger btn-block fw-bold px-10" href="/">Batal</button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
        </div>
    </div>

@endsection


