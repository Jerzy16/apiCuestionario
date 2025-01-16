<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Http\Requests\Usuario\StoreRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try{
            $validated = $request->validated();

            $validated['PassUsu'] = $validated['DocUsu'];
            $validated['RegUsu'] = now();

            Usuario::create($validated);

            return response()->json(['message' => "Usuario creado exitosamente"]);

        }catch(\Exception $e){
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $user = Usuario::find($id);

    if (!$user) {
        return response()->json([
            'message' => 'Usuario no encontrado.'
        ], 404); 
    }

    $userRol = DB::table('usuarios_rol')->where('CodUsu', $id)->exists();
    $userCuestions = DB::table('preguntas')->where('CodUsu', $id)->exists();

    if ($userRol || $userCuestions) {
        return response()->json([
            'message' => 'No se puede eliminar el usuario porque tiene registros asociados.'
        ], 400); 
    }

    $user->delete();

    return response()->json([
        'message' => 'Usuario eliminado exitosamente.'
    ], 200);
}

}
