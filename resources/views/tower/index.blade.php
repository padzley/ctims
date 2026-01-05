<!DOCTYPE html>
<html>
<head> 
    <title>Senarai Tower</title>
</head>
<body>

<h1 class="text-3xl font-bold">Senarai Tower</h1>

<a href="{{ route('towers.create') }}">Tambah Tower</a>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>#</th>
            <th>Kod Tower</th>
            <th>Nama Tower</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($towers as $tower)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $tower->tower_code }}</td>
                <td>{{ $tower->tower_name }}</td>
                <td>{{ $tower->status }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Tiada data tower.</td>
            </tr>
        @endforelse
    </tbody>
</table>

</body>
</html>
