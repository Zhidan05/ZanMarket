@extends('template.main')
@section('judul', 'Edit Disposisi')
@section('disposition', 'active')
@section('konten')

<div class="product-card shadow title-section-content col-12">
    <form action="/disposition/{{$disposition->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="">Pilih Surat Masuk</label>
            <select class="form-control @error('id_suratmasuk') is-invalid @enderror" name="id_suratmasuk" id="">
                <option value="{{ $disposition->id_suratmasuk }}">--Pilih Jika Diubah</option>
                @foreach ($sumuk as $x)
                <option value="{{$x->id}}">{{$x->no_surat}}</option>                            
                @endforeach
            </select>
            @error('id_suratmasuk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">No. Disposisi</label>
            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
            <input value="{{ $disposition->no_disposisi }}" type="text" name="no_disposisi" id=""
                class="form-control @error('no_disposisi') is-invalid @enderror">
            @error('no_disposisi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">No. Agenda</label>
            <input value="{{ $disposition->no_agenda }}" type="text" name="no_agenda" id=""
                class="form-control @error('no_agenda') is-invalid @enderror">
            @error('no_agenda')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">No Surat</label>
            <input value="{{$disposition->no_surat}}" name="no_surat" type="text"
                class="form-control @error('no_surat') is-invalid @enderror">
            @error('no_surat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>                
        <div class="mb-3">
            <label for="">Kepada</label>
            <input value="{{$disposition->kepada}}" name="kepada" type="text"
                class="form-control @error('kepada') is-invalid @enderror">
            @error('kepada')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>                                           
        <div class="mb-3">
            <label for="">Status Surat</label>
            <select name="status_surat" id="" class="form-control @error('status_surat') is-invalid @enderror">
                <option value="{{ $disposition->status_surat }}">--Pilih Jika Diubah</option>
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
            <input value="{{$disposition->tanggapan}}" name="tanggapan" type="text"
                class="form-control @error('tanggapan') is-invalid @enderror">
            @error('tanggapan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <a class="btn btn-secondary" href="/disposition">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

@endsection
