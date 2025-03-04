<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>
    @if ($student)
        <p>ID: {{ $student['id'] }}</p>
        <p>Name: {{ $student['name'] }}</p>
        <p>Email: {{ $student['email'] }}</p>
        <p>Image:</p>
        <img src="{{ asset($student['image']) }}" alt="{{ $student['name'] }}">
    @else
        <p>Student not found.</p>
    @endif
</body>
</html>