@extends('layouts.app')

@section('title', 'Senarai Tower')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h3>Senarai Tower</h3>
    <a href="{{ route('towers.create') }}" class="btn btn-primary">Tambah Tower</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Kod Tower</th>
            <th>Nama Tower</th>
            <th>Status</th>
            <th width="180">Tindakan</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($towers as $tower)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $tower->tower_code }}</td>
            <td>{{ $tower->tower_name }}</td>
            <td>{{ $tower->status }}</td>
            <td>
                <a href="{{ route('towers.edit', $tower->id) }}" class="btn btn-sm btn-warning">Edit</a>

                <form action="{{ route('towers.destroy', $tower->id) }}"
                      method="POST"
                      class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger"
                            onclick="return confirm('Padam tower ini?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">Tiada data tower</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
