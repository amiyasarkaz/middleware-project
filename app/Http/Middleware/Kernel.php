<?php 
Route::get('/admin/panel', function () {
    return view('admin.panel');
})->middleware('admin'); // Solo admins pueden acceder
