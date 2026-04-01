public function index(Request $request)
{
    $query = DB::table('customers');

    if ($request->has('search')) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    $customers = $query->latest()->paginate(10);
    return view('customers.index', compact('customers'));
}

public function store(Request $request)
{
    $request->validate(['name' => 'required', 'phone' => 'required']);

    DB::table('customers')->insert([
        'name' => $request->name,
        'phone' => $request->phone,
        'address' => $request->address,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect()->back()->with('success', 'Customer created!');
}