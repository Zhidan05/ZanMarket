@extends('template.main')
@section('judul', 'Edit Data Pengguna')
@section('user', 'active')
@section('konten')
<div class="product-card shadow title-section-content col-12">
    <form action="/user/{{$user->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="">Nama</label>
            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
            <input value="{{$user->name}}" name="name" type="text" class="form-control @error('name')
                ('name') is-invalid 
            @enderror">
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input value="{{$user->email}}" name="email" type="text" class="form-control @error('email')
                ('email') is-invalid 
            @enderror">
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Phone</label>
            <input value="{{$user->phone}}" name="phone" type="text" class="form-control @error('phone')
                ('phone') is-invalid 
            @enderror">
            @error('phone')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Role</label>
            <select name="role" id="" class="form-control @error('role') is-invalid @enderror">
                <option value="{{ $user->role }}">--Pilih Jika Diubah</option>
                <option value="Admin">Admin</option>
                <option value="User">User</option>
            </select>
            @error('role')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>  
        <div class="mb-3 d-inline float-end">
            <a href="/user" class="btn btn-secondary">kembali</a>
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
</div>
@endsection
