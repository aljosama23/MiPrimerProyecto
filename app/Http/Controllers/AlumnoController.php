<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function index(){
        $alumnos = Alumno::all();
        
        return view('hola', compact('alumnos'));
    }

    public function create(){
        return view('crear');
    }

    public function store(Request $request){
        $nvoAlumno = new Alumno();
        $nvoAlumno->nombre = $request->input('nombre');
        $nvoAlumno->apellido = $request->input('apellido');
        $nvoAlumno->correo = $request->input('correo');
        $nvoAlumno->telefono = $request->input('telefono');
        $nvoAlumno->direccion = $request->input('direccion');
        $nvoAlumno->codigoCarrera = $request->input('codigoClase');
        $nvoAlumno -> save();

        return redirect('/');

    }

    public function editar($id){
        $alumno = Alumno::find($id);
        return view('editar', compact('alumno'));
    }

    public function actualizar(Request $request, $id){
        $alumno = Alumno::find($id);
        $alumno->nombre = $request->input('nombre');
        $alumno->apellido = $request->input('apellido');
        $alumno->correo = $request->input('correo');
        $alumno->telefono = $request->input('telefono');
        $alumno->direccion = $request->input('direccion');
        $alumno->codigoCarrera = $request->input('codigoClase');
        $alumno -> save();

        return redirect('/');
    }

    public function eliminar($id){
        $alumno = Alumno::find($id);
        return view('eliminar', compact('alumno'));
    }

    public function destroy($id){
        $alumno = Alumno::find($id);
        $alumno->delete();

        return redirect('/');
    }
}
