<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 10px; text-align: center; }
    </style>
</head>
<body>
    <h2>Enter a Number</h2>
    <form method="post" action="/multiplication">
        @csrf
        <input type="number" name="number" required>
        <button type="submit">Generate Table</button>
    </form>

    @if(isset($num))
        <h3>Multiplication Table of {{ $num }}</h3>
        <table>
            @for ($i = 1; $i <= 10; $i++)
                <tr>
                    <td>{{ $num }} × {{ $i }} = {{ $num * $i }}</td>
                </tr>
            @endfor
        </table>
    @endif
</body>
</html>
