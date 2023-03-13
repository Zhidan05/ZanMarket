@extends('template.main')
@section('judul', 'Detail Surat Keluar')
@section('send', 'active')
@section('konten')

<div class="product-card shadow col-12">
    <div class="row">
        <div class="col">
            <table class="table">
                <tr>
                    <th>No. Agenda</th>
                    <td>:</td>
                    <td>{{ $send->no_agenda }}</td>
                </tr>
                <tr>
                    <th>Jenis Surat</th>
                    <td>:</td>
                    <td>{{ $send->jenis_surat }}</td>
                </tr>
                <tr>
                    <th>Tanggal Kirim</th>
                    <td>:</td>
                    <td>{{ Carbon\Carbon::create($send->tanggal_kirim)->format('d F y') }}</td>
                </tr>
                <tr>
                    <th>No. Surat</th>
                    <td>:</td>
                    <td>{{ $send->no_surat }}</td>
                </tr>
                <tr>
                    <th>Pengirim</th>
                    <td>:</td>
                    <td>{{ $send->pengirim }}</td>
                </tr>
                <tr>
                    <th>Perihal</th>
                    <td>:</td>
                    <td>{{ $send->perihal }}</td>
                </tr>
            </table>
            <div class="d-inline float-end">
                <a href="/send" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </div>
    </div>
</div>

@endsection
