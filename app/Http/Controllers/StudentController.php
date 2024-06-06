<?php
namespace App\Http\Controllers;

use App\Models\Student; // Importation du modèle Student
use App\Models\Classe; // Importation du modèle Classe
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() // Affiche la liste de tous les élèves et des classes
    {
        $students = Student::all(); // Récupère tous les étudiants
        $classes = Classe::all(); // Récupère toutes les classes
        return view('index', compact('students', 'classes'));
    }

    public function create() // Affiche le formulaire de création d'un élève avec la liste des classes
    {
        $classes = Classe::all(); // Récupère toutes les classes
        return view('create', compact('classes'));
    }

    public function store(Request $request) // Enregistre un nouvel élève dans la base de données
    {
        $request->validate([
            'first_name' => 'required',
            'family_name' => 'required',
            'birth_date' => 'required|date',
            'adress' => 'required',
            'class_id' => 'required|exists:classes,id', // Valide que la classe existe dans la table classes
        ]);
Student::create($request->all()); // Crée un nouvel étudiant avec les données validées
return redirect()->route('students.index'); // Redirige vers la liste des étudiants
    }
}