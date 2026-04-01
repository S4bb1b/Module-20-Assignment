public function index() {
    $totalProducts = \App\Models\Product::count();
    $totalCustomers = \App\Models\Customer::count();
    $totalSales = \App\Models\Invoice::sum('total_amount');

    return view('dashboard', compact('totalProducts', 'totalCustomers', 'totalSales'));
}