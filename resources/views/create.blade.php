<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
<form method="POST" action="/students">
        @csrf
        <div>
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" required>
        </div>
        <div>
            <label for="family_name">Family Name:</label>
            <input type="text" name="family_name" id="family_name" required>
        </div>
        <div>
            <label for="birth_date">Birth date:</label>
            <input type="date" name="birth_date" id="birth_date" required>
        </div>
        <div>
            <label for="adress">Address :</label>
            <input type="text" name="adress" id="adress" required>
        </div>
        <div>
            <label for="class_id">Level :</label>
            <select name="class_id" id="class_id" required>
            @foreach($classes as $class)
                <option value="{{ $class->id}}">{{ $class->name }}</option>
            @endforeach
    </div>
    <br>
    <input type="submit" value="submit">
</form>
</body>
</html>
