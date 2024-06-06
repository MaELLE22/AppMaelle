<?php
namespace App\Http\Controllers;
use App\Models\Classe; // Importation du modèle Classe
class ClasseController extends Controller
{
public function show($id) // Affiche uniquement les élèves d'une classe précise
{
    $classe = Classe::with('students')->findOrFail($id);
    return view('show', compact('classe'));
}
}