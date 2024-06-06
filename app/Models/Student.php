<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Student extends Model
{
use HasFactory;
// Déclaration des colonnes de la table
protected $fillable = ['first_name', 'family_name', 'birth_date', 'adress', 'class_id'];
public $timestamps = false; // Désactive les colonnes timestamps automatiques
// Définition de la relation entre Student et Group
public function classe()
{
// Un étudiant appartient à une seule classe
return $this->belongsTo(Classe::class, 'class_id');
}
}