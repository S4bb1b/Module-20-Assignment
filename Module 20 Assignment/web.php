use App\Http\Controllers\ProductController;

Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // Add other protected routes here
});