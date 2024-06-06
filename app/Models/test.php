<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
use HasFactory;
// Déclaration des colonnes de la table
protected $fillable = ['name'];
// Définition de la relation entre Classe et Student
public function students()
{
// Une classe comporte plusieurs étudiants
return $this->hasMany(Student::class, 'group_id');
}
}