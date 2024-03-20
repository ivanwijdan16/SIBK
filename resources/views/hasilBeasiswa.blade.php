@extends('layouts.index')

@section('title', 'Hasil Beasiswa')

@section('content')

<style>

    .content-about {
        width: 100%;
        max-width: 736px;
        height: auto;
        flex-shrink: 0;
        margin: 0 auto;
    }

    .status {
        background-color: #fff3cd !important;
        border-radius: 50px !important;
        text-align: center !important;
        font-weight: 600 !important;
        color: #D48E06 !important;
    }

    table th, table td {
        text-align: center;
    }

</style>

<div class="container-lg mt-8">
    <div class="text-center">
        <h1 class="my-5 text-primary" style="font-weight: 800;">Hasil Beasiswa</h1>
        <img src="images/logo.png" alt="logo" height="100px">
    </div>

    <!-- Check if session success exists and display it -->
    @if(session('success'))
    <div id="success-message" class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Email</th>
                            <th scope="col">No. HP</th>
                            <th scope="col">Semester</th>
                            <th scope="col">IPK Terakhir</th>
                            <th scope="col">Jenis Beasiswa</th>
                            <th scope="col">Berkas</th>
                            <th scope="col">Status Ajuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($applications as $application)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $application->nama }}</td>
                            <td>{{ $application->nim }}</td>
                            <td>{{ $application->email }}</td>
                            <td>{{ $application->nomor_hp }}</td>
                            <td>{{ $application->semester }}</td>
                            <td>{{ $application->ipk }}</td>
                            <td>{{ $application->beasiswa }}</td>
                            <td><a href="{{ asset('uploads/' . $application->berkas) }}">{{ $application->berkas }}</a></td>
                            <td class="status">{{ $application->status_ajuan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
