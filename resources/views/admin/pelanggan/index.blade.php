
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pelanggan</title>
</head>
<body>
    <h1>Data Pelanggan</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('pelanggan.create') }}">
        Tambah Pelanggan
    </a>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>No.</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataPelanggan as $pelanggan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pelanggan->first_name }}</td>
                    <td>{{ $pelanggan->last_name }}</td>
                    <td>{{ $pelanggan->birthday }}</td>
                    <td>{{ $pelanggan->gender }}</td>
                    <td>{{ $pelanggan->email }}</td>
                    <td>{{ $pelanggan->phone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
