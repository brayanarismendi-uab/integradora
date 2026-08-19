<?php

use App\Models\Producto;
use App\Models\Libro;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('/productos', function () {

    $productos = Producto::all();

    return view('productos', [
        'productos' => $productos
    ]);
});


Route::get('/productos/nuevo', function () {
    return view('productos-nuevo');
})->middleware('auth');

Route::post('/productos', function () {

    Producto::create([
        'nombre' => request('nombre'),
        'precio' => request('precio'),
    ]);

    return redirect('/productos');

})->middleware('auth');


Route::post('/pedido', function () {

    $nombre = request('nombre');
    $correo = request('correo');
    $pedido = request('pedido');

    return view('pedido-recibido', [
        'nombre' => $nombre,
        'correo' => $correo,
        'pedido' => $pedido
    ]);
});
Auth::routes(['register' => false]);




Route::get('/libros', function () {
    $libros = Libro::all();

    return view('libros', compact('libros'));
});

Route::get('/libros/nuevo', function () {
    return view('libros-nuevo');
});

Route::post('/libros/nuevo', function () {
    $datos = request()->validate([
        'titulo' => 'required',
        'precio' => 'required|integer'
    ], [
        'titulo.required' => 'falta el titulo del libro',
        'precio.required' => 'falta el precio del libro',
        'precio.integer' => 'ese precio no es un número entero'
    ]);

    Libro::create([
        'titulo' => $datos['titulo'],
        'precio' => $datos['precio']
    ]);

    return redirect('/libros');
});