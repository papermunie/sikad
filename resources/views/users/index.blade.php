<!-- resources/views/users/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="container mt-5">
        <h1>User List</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Tambah Data User</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Foto Profil</th>
                    <th scope="col">Role</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->email_user }}</td>
                    <td>{{ $user->password }}</td>
                    <td>
        @foreach(explode(',', $user->foto_profil) as $image)
        <img src="{{ asset('storage/' . $image) }}" alt="Foto Profil" class="img-fluid">
    @endforeach
    </td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->email_user) }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{ route('users.show', $user->email_user) }}" class="btn btn-info btn-sm">Detail</a>
                        <form action="{{ route('users.destroy', $user->email_user) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
