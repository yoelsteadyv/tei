<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\LapBarangKeluarController;
use App\Http\Controllers\LapBarangMasuk;
use App\Http\Controllers\LapBarangMasukController;
use App\Http\Controllers\MainCustomerController;
use App\Http\Controllers\MainSupplierController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




// auth
Route::middleware(["guest"])->group(function () {
    Route::get("/", [SesiController::class, "index"])->name("login");
    Route::post("/", [SesiController::class, "login"]);
});
Route::get("/logout", [SesiController::class, "logout"]);
Route::middleware("auth")->group(function () {

    Route::get('/dashboard', [DashboardController::class, "index"]);
});
// Route::get('/login', function () {
//     return view('page.auth.login');
// });

// user
Route::get('/user', function () {
    if (Auth::user()->role == 'marketing' || Auth::user()->role == 'material') {
        return redirect('/dashboard');
    }
    return app(UserController::class)->index();
});
Route::post('/user', [UserController::class, 'store']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);


// jenis_barang
Route::get('/jenisbarang', function () {
    if (Auth::user()->role == 'manager' || Auth::user()->role == 'marketing') {
        return redirect('/dashboard');
    }
    return app(JenisController::class)->index();
});
Route::post('/jenisbarang', [JenisController::class, 'store']);
Route::put('/jenisbarang/{id}', [JenisController::class, 'update']);
Route::delete('/jenisbarang/{id}', [JenisController::class, 'destroy']);

// satuan_barang
Route::get('/satuanbarang', function () {
    if (Auth::user()->role == 'manager' || Auth::user()->role == 'marketing') {
        return redirect('/dashboard');
    }
    return app(SatuanController::class)->index();
});
Route::post('/satuanbarang', [SatuanController::class, 'store']);
Route::put('/satuanbarang/{id}', [SatuanController::class, 'update']);
Route::delete('/satuanbarang/{id}', [SatuanController::class, 'destroy']);

// barang
Route::get('/barang', function () {
    if (Auth::user()->role == 'manager' || Auth::user()->role == 'marketing') {
        return redirect('/dashboard');
    }
    return app(BarangController::class)->index();
});
Route::post('/barang', [BarangController::class, 'store']);
Route::put('/barang/{id}', [BarangController::class, 'update']);
Route::delete('/barang/{id}', [BarangController::class, 'destroy']);
// ajax request getbarangnykode
Route::get('/barang/{kode_barang}', [BarangController::class, 'getBarangByKode']);


// mainsupplier
Route::get('/mainsupplier', function () {
    if (Auth::user()->role == 'material') {
        return redirect('/dashboard');
    }
    return app(MainSupplierController::class)->index();
});
Route::post('/mainsupplier', [MainSupplierController::class, 'store']);
Route::put('/mainsupplier/{id}', [MainSupplierController::class, 'update']);
Route::delete('/mainsupplier/{id}', [MainSupplierController::class, 'destroy']);

// maincustomer
Route::get('/maincustomer', function () {
    if (Auth::user()->role == 'material') {
        return redirect('/dashboard');
    }
    return app(MainCustomerController::class)->index();
});
Route::post('/maincustomer', [MainCustomerController::class, 'store']);
Route::put('/maincustomer/{id}', [MainCustomerController::class, 'update']);
Route::delete('/maincustomer/{id}', [MainCustomerController::class, 'destroy']);
// ajax request getAlamatbyNamaCustomer
Route::get('/maincustomer/{nama_customer}', [MainCustomerController::class, 'getCustomerByName']);


// barangkeluar
Route::get('/barangkeluar', function () {
    if (Auth::user()->role == 'manager' || Auth::user()->role == 'marketing') {
        return redirect('/dashboard');
    }
    return app(BarangKeluarController::class)->index();
});
Route::get('/barangkeluar/tambah', [BarangKeluarController::class, 'tambah']);
Route::post('/barangkeluar', [BarangKeluarController::class, 'store']);
Route::put('/barangkeluar/{id}', [BarangKeluarController::class, 'update']);
Route::delete('/barangkeluar/{id}', [BarangKeluarController::class, 'destroy']);



// barangmasuk
Route::get('/barangmasuk', function () {
    if (Auth::user()->role == 'manager' || Auth::user()->role == 'marketing') {
        return redirect('/dashboard');
    }
    return app(BarangMasukController::class)->index();
});
Route::get('/barangmasuk/tambah', [BarangMasukController::class, 'tambah']);
Route::post('/barangmasuk', [BarangMasukController::class, 'store']);
Route::put('/barangmasuk/{id}', [BarangMasukController::class, 'update']);
Route::delete('/barangmasuk/{id}', [BarangMasukController::class, 'destroy']);







    // Route::get('/jenisbarang', function () {
    //     return view('page.masterbarang.jenisbarang.index');
    // });

    // 
;

Route::get('/laporanmasuk', function () {
    if (Auth::user()->role == 'marketing' || Auth::user()->role == 'material') {
        return redirect('/dashboard');
    }
    return app(LapBarangMasukController::class)->index();
});

Route::get('/laporankeluar', function () {
    if (Auth::user()->role == 'marketing' || Auth::user()->role == 'material') {
        return redirect('/dashboard');
    }
    return app(LapBarangKeluarController::class)->index();
});


// Route::get('/laporanmasuk', function () {
//     return view('page.laporan.laporanmasuk.index');
// });

// Route::get('/laporankeluar', function () {
//     return view('page.laporan.laporankeluar.index');
// });
Route::get('/stok', function () {
    return view('page.laporan.stok.index');
});
// Route::get('/barangmasuk/tambah', function () {
//     return view('page.barangmasuk.tambah');
// });


// Route::get('/barangkeluar', function () {
//     return view('page.barangkeluar.index');
// });

// Route::get('/barangmasuk/{id}/edit', function ($id) {
//     $item = App\Models\BarangMasuk::find($id);
//     return view('page.barangmasuk.edit', compact('item'));
// })->name('barangmasuk.edit');
