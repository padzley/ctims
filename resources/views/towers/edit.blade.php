@extends('layouts.app')

@section('title', 'Edit Tower')

@section('content')
<h3>Edit Tower</h3>

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="{{ route('towers.update', $tower->id) }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Kod Tower</label>
        <input type="text" name="tower_code"
               class="form-control"
               value="{{ old('tower_code', $tower->tower_code) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Tower</label>
        <input type="text" name="tower_name"
               class="form-control"
               value="{{ old('tower_name', $tower->tower_name) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select">
            <option value="Active" {{ $tower->status=='Active'?'selected':'' }}>Active</option>
            <option value="Inactive" {{ $tower->status=='Inactive'?'selected':'' }}>Inactive</option>
        </select>
    </div>

    <button class="btn btn-success">Kemaskini</button>
    <a href="{{ route('towers.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
