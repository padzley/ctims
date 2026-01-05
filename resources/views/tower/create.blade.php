<!DOCTYPE html>
<html>
<head>
    <title class="text-5xl">Tambah Tower</title>
</head>
<body>

<h1>Tambah Tower</h1>

<form method="POST" action="{{ route('towers.store') }}">
    @csrf

    <label>Kod Tower</label><br>
    <input type="text" name="tower_code"><br><br>

    <label>Nama Tower</label><br>
    <input type="text" name="tower_name"><br><br>

    <label>Status</label><br>
    <select name="status">
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
    </select><br><br>

    <button type="submit">Simpan</button>
</form>

<br>
<a href="{{ route('towers.index') }}">Kembali</a>

</body>
</html>
