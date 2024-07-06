<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    
    // funcion que me permite obetener 
    // todos los productos de la base de datos
    public function index()
    {
        $productos = Producto::all();
        return view('producto.producto', compact('productos'));
    
    }

    // funcion que me permite editar un producto
    public function edit($id_producto)
    {
        // Buscar el producto por id_producto
        $producto = Producto::where('id_producto', $id_producto)->first();

        if (!$producto) {
            return redirect()->route('productos')->with('error', 'Producto no encontrado.');
        }

        return view('producto.editar', compact('producto'));
    }

    // funcion que me permite validar los datos del formlario de un producto
    public function update(Request $request, $id_producto)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'cantidad' => 'required|integer|min:0',
        ]);

        // Buscar el producto por id_producto
        $producto = Producto::where('id_producto', $id_producto)->first();

        if (!$producto) {
            return redirect()->route('productos')->with('error', 'Producto no encontrado.');
        }

        // Actualizar los datos del producto
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->save();

        // Redireccionar con mensaje de éxito (opcional)
        return redirect()->route('productos')->with('success', 'Producto actualizado correctamente.');
    }

    // dfuncion para elimnar un producto 
    public function destroy($id_producto)
    {
        // Buscar el producto por id_producto
        $producto = Producto::where('id_producto', $id_producto)->first();

        if (!$producto) {
            return redirect()->route('productos')->with('error', 'Producto no encontrado.');
        }

        // Eliminar el producto
        $producto->delete();

        // Redireccionar con mensaje de éxito (opcional)
        return redirect()->route('productos')->with('success', 'Producto eliminado correctamente.');
    }
}
