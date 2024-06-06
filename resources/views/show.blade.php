{{-- Page par classe qui affiche uniquement les élèves de la classe en question --}}
<!DOCTYPE html>
<html>
<head>
<title>Classe : {{ $classe->name }}</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
rel="stylesheet">
<style>
body {
padding: 5%;
}
</style>
</head>
<body>
<h1>Classe : {{ $classe->name }}</h1>
<ul>
{{-- Vue en liste --}}
@foreach ($classe->students as $student)
<li>{{ $student->first_name }} {{ $student->family_name }} | {{ $student->birth_date
}} | {{ $student->adress }} | {{ $student->classe->name}}</li>
@endforeach
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
@foreach ($classe->students as $student)
<tr>
<td>{{ $student->first_name }}</td>
<td>{{ $student->family_name }}</td>
<td>{{ $student->birth_date}}</td>
<td>{{ $student->adress }}</td>
<td>{{ $student->classe->name }}</td>
</tr>
@endforeach
</tbody>
</table>
</ul>
</body>
</html>