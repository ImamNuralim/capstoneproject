@extends('dashboard.layouts.main')
@section('container')
<div class="row justify-content-center mt-5">
    <h1 class="h3 mb-3 fw-normal text-center">Ubah Password</h1>
    <div class="col-lg-5">

      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if(session()->has('warning'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ session('warning') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <form action="/dashboard/changepassword" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="old_password" class="form-label">Password Lama</label>
          <input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" id="old_password" required>
          @error('old_password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password Baru</label>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
          @error('new_password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
          <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" required>
          @error('password_confirmation')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>

      </form>
    </div>
</div>
@endsection