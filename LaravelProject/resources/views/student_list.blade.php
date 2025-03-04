<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>
    <h1>Student List</h1>
    <ul>
        @foreach ($students as $student)
            <li><a href="{{ url('student/' . $student['id']) }}">{{ $student['name'] }}</a></li>
        @endforeach
    </ul>
</body>
</html>