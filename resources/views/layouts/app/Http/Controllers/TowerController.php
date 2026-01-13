public function store(Request $request)
{
    $validated = $request->validate([
        'tower_code' => 'required|unique:towers,tower_code',
        'tower_name' => 'required',
        'status' => 'required',
    ]);

    Tower::create($validated);
    return redirect()->route('towers.index');
}
public function update(Request $request, Tower $tower)
{
    $validated = $request->validate([
        'tower_code' => 'required|unique:towers,tower_code,' . $tower->id,
        'tower_name' => 'required',
        'status' => 'required',
    ]);

    $tower->update($validated);
    return redirect()->route('towers.index');
}
