@extends('template.main')
@section('judul', 'Tambah Disposisi')
@section('disposition', 'active')
@section('konten')

<div class="product-card shadow title-section-content col-12">
    <form action="/disposition" method="POST">
        @csrf
        <div class="mb-3">
            <label for="">Pilih Surat Masuk</label>
            <select name="id_suratmasuk" class="form-control @error('id_suratmasuk')
            is-invalid @enderror" id="">
                <option value="">--Pilih Surat Masuk--</option>
                @forelse ($sumuk as $x)
                <option value="{{$x->id}}">{{ $x->no_surat }}</option>
                @empty
                <option value="">Tidak Ada Surat Masuk</option>
                @endforelse
            </select>
            @error('id_suratmasuk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">No. Disposisi</label>
            <input value="{{ old('no_disposisi') }}" type="text" name="no_disposisi" id="" class="form-control @error('no_disposisi') is-invalid @enderror">
            @error('no_disposisi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">No. Agenda</label>
            <input value="{{ old('no_agenda') }}" type="text" name="no_agenda" id="" class="form-control @error('no_agenda') is-invalid @enderror">
            @error('no_agenda')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">No. Surat</label>
            <input value="{{ old('no_surat') }}" type="text" name="no_surat" id="" class="form-control @error('no_surat') is-invalid @enderror">
            @error('no_surat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Kepada</label>
            <input value="{{ old('kepada') }}" type="text" name="kepada" id="" class="form-control @error('kepada') is-invalid @enderror">
            @error('kepada')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Status Surat</label>
            <select name="status_surat" id="" class="form-control @error('status_surat')
                is-invalid
            @enderror">
                <option value="">--Status Surat--</option>
                <option value="Dipertimbangkan">Dipertimbangkan</option>
                <option value="Ditindaklanjuti">Ditindaklanjuti</option>
                <option value="Diarsipkan">Diarsipkan</option>
            </select>
            @error('status_surat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Tanggapan</label>
            <input value="{{ old('tanggapan') }}" type="text" name="tanggapan" id="" class="form-control @error('tanggapan') is-invalid @enderror">
            @error('tanggapan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <a class="btn btn-secondary" href="/disposition">Kembali</a>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>

@endsection