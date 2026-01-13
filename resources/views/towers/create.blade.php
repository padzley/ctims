@extends('layouts.app')

@section('title', 'Tambah Tower')

@section('content')
<h3>Tambah Tower</h3>

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="{{ route('towers.store') }}">
    @csrf

    <div class="mb-3">
        <label class="form-label">Kod Tower</label>
        <input type="text" name="tower_code"
               class="form-control"
               value="{{ old('tower_code') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Tower</label>
        <input type="text" name="tower_name"
               class="form-control"
               value="{{ old('tower_name') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select">
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
        </select>
    </div>

    <button class="btn btn-success">Simpan</button>
    <a href="{{ route('towers.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
