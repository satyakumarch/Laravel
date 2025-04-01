<!-- filepath: d:\Laravel\LaravelProject\resources\views\form.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>
    <h1>Submit Your Details</h1>
    <form action="{{ url('/submit-form') }}" method="POST">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
        <br><br>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>