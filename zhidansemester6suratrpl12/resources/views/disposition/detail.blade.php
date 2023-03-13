@extends('template.main')
@section('judul', 'Detail Disposisi')
@section('disposition', 'active')
@section('konten')

<div class="product-card shadow table-responsive col-12">
    <div class="row">
        <div class="col-6">
            <h5 class="mb-3"><ins>Inbox</ins></h5>
            <table class="table col-lg-6">
                <tr>
                    <th>No. Agenda</th>
                    <td>:</td>
                    <td>{{ $disposition->sumuk->no_agenda }}</td>
                </tr>
                <tr>
                    <th>Jenis Surat</th>
                    <td>:</td>
                    <td>{{ $disposition->sumuk->jenis_surat }}</td>
                </tr>
                <tr>
                    <th>Tanggal Kirim</th>
                    <td>:</td>
                    <td>{{ $disposition->sumuk->tanggal_kirim }}</td>
                </tr>
                <tr>
                    <th>Tanggal Terima</th>
                    <td>:</td>
                    <td>{{ $disposition->sumuk->tanggal_terima }}</td>
                </tr>
                <tr>
                    <th>No. Surat</th>
                    <td>:</td>
                    <td>{{ $disposition->sumuk->no_surat }}</td>
                </tr>
                <tr>
                    <th>Pengirim</th>
                    <td>:</td>
                    <td>{{ $disposition->sumuk->pengirim }}</td>
                </tr>
                <tr>
                    <th>Perihal</th>
                    <td>:</td>
                    <td>{{ $disposition->sumuk->perihal }}</td>
                </tr>
            </table>
        </div>

        <div class="col-6">
            <h5 class="mb-3"><ins>Disposisi</ins></h5>
            <table class="table col-lg-6">
                <tr>
                    <th>No. Disposisi</th>
                    <td>:</td>
                    <td>{{ $disposition->no_disposisi }}</td>
                </tr>
                <tr>
                    <th>No. Agenda</th>
                    <td>:</td>
                    <td>{{ $disposition->no_agenda }}</td>
                </tr>
                <tr>
                    <th>No. Surat</th>
                    <td>:</td>
                    <td>{{ $disposition->no_surat }}</td>
                </tr>
                <tr>
                    <th>Kepada</th>
                    <td>:</td>
                    <td>{{ $disposition->kepada }}</td>
                </tr>
                <tr>
                    <th>Status Surat</th>
                    <td>:</td>
                    <td>{{ $disposition->status_surat }}</td>
                </tr>
                <tr>
                    <th>Tanggapan</th>
                    <td>:</td>
                    <td>{{ $disposition->tanggapan }}</td>
                </tr>
            </table>
            <div class="d-inline float-end">
                <a href="/disposition" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </div>
    </div>
</div>

@endsection
