
<!DOCTYPE html>
<html>
<head>
<title>Liste des élèves</title>
<style>
body {
padding: 5%;
}
</style>
</head>
<body>
<h1>Liste des élèves</h1>
<ul>
{{-- Boucle qui affiche tous les étudiants et leurs infos --}}
@foreach ($students as $student)
<li>{{ $student->first_name }} {{ $student->family_name }} | {{ $student->birth_date
}} | {{ $student->adress }}</li>
@endforeach
</ul>
{{-- Vue en tableau --}}
<table>
<thead>
<tr>
<th>Prénom</th>
<th>Nom</th>
<th>Date de naissance</th>
<th>Adresse</th>
<th>Classe</th>
</tr>
</thead>
<tbody>
{{-- Boucle qui affiche tous les étudiants et leurs infos --}}
@foreach ($students as $student)
<tr>
<td>{{ $student->first_name }}</td>
<td>{{ $student->family_name }}</td>
<td>{{ $student->birth_date }}</td>
<td>{{ $student->adress }}</td>
<td>{{ $student->class_id }}</td>
</tr>
@endforeach
</tbody>
</table>
{{-- Lien vers le formulaire de création d'un nouvel élève --}}
<a href="{{ route('students.create') }}">
<button>Ajouter un élève</button>
</a>
<h2>Classes</h2>
{{-- Bouton pour chaque classe qui mène vers sa page --}}
@foreach($classes as $classe)
<a href="{{ route('groups.show', $classe->id) }}">
<button>{{ $classe->name }}</button>
</a>
@endforeach
</body>
</html>