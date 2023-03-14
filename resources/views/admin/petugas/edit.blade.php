@extends('layouts.admin')
@section('title', 'Form Edit Petugas')

@section('css')
  <style>
    .text-primary:hover {
      text-decoration: underline;
    }

    .text-grey {
      color: #6c757d;
    }

    .text-grey:hover {
      color: #6c757d;
    }
  </style>
@endsection

@section('header')
  <a href="{{ route('petugas.index') }}" class="text-primary">Data Petugas</a>
  <a href="#" class="text-grey"></a>
  <a href="#" class="text-grey">Form Tambah Petugas</a>
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-6 col-12">
      <div class="card">
        <div class="card-header">
          Form Tambah Petugas
        </div>
        <div class="card-body">
          <form action="{{ route('petugas.update', $petugas->id_petugas) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <label for="nama_petugas">Nama Petugas</label>
              <input type="text" value="{{ $petugas->nama_petugas }}" name="nama_petugas" id="nama_petugas"
                class="form-control" required>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" value="{{ $petugas->username }}" name="username" id="username" class="form-control"
                required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="number">No Telepon</label>
              <input type="text" value="{{ $petugas->telp }}" name="telp" id="telp" class="form-control"
                required>
            </div>
            <div class="form-group">
              <label for="level">Level</label>
              <div class="input-group mb-3">
                <select name="level" id="level" class="custom-select">
                  @if ($petugas->level == 'admin')
                    <option selected value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                  @else
                    <option value="admin">Admin</option>
                    <option selected value="petugas">Petugas</option>
                  @endif
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-warning text-white" style="width: 100%;">Ubah</button>
          </form>
          <form action="{{ route('petugas.destroy', $petugas->id_petugas) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-2">Hapus</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
