@extends('template.main')
@section('judul', 'Tambah User')
@section('user', 'active')
@section('konten')

<div class="product-card shadow title-section-content col-12">
    <form action="/user" method="POST">
        @csrf
        <div class="mb-3">
            <label for="">Nama</label>
            <input value="{{ old('name') }}" type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input value="{{ old('email') }}" type="email" name="email" id="" class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Phone Number</label>
            <input value="{{ old('phone') }}" type="number" name="phone" id="" class="form-control @error('phone') is-invalid @enderror">
            @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Password</label>
            <input value="{{ old('password') }}" type="password" name="password" id="" class="form-control @error('password') is-invalid @enderror">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> 
        <div class="mb-3 d-inline float-end">
            <a class="btn btn-secondary" href="/user">Kembali</a>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
</div>

@endsection