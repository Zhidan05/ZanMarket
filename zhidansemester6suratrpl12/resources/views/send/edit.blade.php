@extends('template.main')
@section('judul', 'Edit Surat Keluar')
@section('send', 'active')
@section('konten')

<div class="product-card shadow title-section-content col-12">
    <form action="/send/{{$send->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="">No. Agenda</label>
            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
            <input value="{{ $send->no_agenda }}" type="text" name="no_agenda" id=""
                class="form-control @error('no_agenda') is-invalid @enderror">
            @error('no_agenda')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Jenis Surat</label>
            <input value="{{ $send->jenis_surat }}" type="text" name="jenis_surat" id=""
                class="form-control @error('jenis_surat') is-invalid @enderror">
            @error('jenis_surat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Tanggal Kirim</label>
            <input value="{{ $send->tanggal_kirim }}" type="date" name="tanggal_kirim" id=""
                class="form-control @error('tanggal_kirim') is-invalid @enderror">
            @error('tanggal_kirim')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">No. Surat</label>
            <input value="{{ $send->no_surat }}" type="text" name="no_surat" id=""
                class="form-control @error('no_surat') is-invalid @enderror">
            @error('no_surat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Pengirim</label>
            <input value="{{ $send->pengirim }}" type="text" name="pengirim" id=""
                class="form-control @error('pengirim') is-invalid @enderror">
            @error('pengirim')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Perihal</label>
            <input value="{{ $send->perihal }}" type="text" name="perihal" id=""
                class="form-control @error('perihal') is-invalid @enderror">
            @error('perihal')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <div class="float-end">
                <a class="btn btn-secondary" href="/send">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <div class="btn"></div>
        </div>
    </form>
</div>

@endsection
