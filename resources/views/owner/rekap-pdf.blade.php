<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Booking {{ $month }} - {{ $year }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Rekap Booking Bulan {{ DateTime::createFromFormat('!m', $month)->format('F') }} {{ $year }}</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Lapangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $index => $booking)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->date }}</td>
                    <td>{{ $booking->time->time_slot }}</td>
                    <td>{{ $booking->futsal_court->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
