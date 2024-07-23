<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('customers');
    }

    public function register(Request $request)
    {
        // Validación de los datos del formulario
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|min:6',
            'confirmPassword' => 'required|string|min:6|same:password',
        ], [
            'email.unique' => 'El correo electrónico ya está en uso.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ]);

        // Si la validación falla, retornar los errores
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        // Crear un nuevo cliente en la base de datos
        $customer = Customers::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Verificar si el cliente fue creado exitosamente
        if ($customer) {
            return response()->json(['success' => true, 'customer' => $customer], 201);
        } else {
            return response()->json(['error' => 'Error al crear el usuario.'], 500);
        }
    }
}
