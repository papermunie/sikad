<!-- resources/views/users/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user->email_user) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" value="{{ $user->password }}"><br>

        <label for="foto_profil">Foto Profil:</label><br>
        <input type="text" id="foto_profil" name="foto_profil" value="{{ $user->foto_profil }}"><br>

        <label for="role">Role:</label><br>
        <select id="role" name="role">
            <option value="Ketua DKM" @if($user->role == 'Ketua DKM') selected @endif>Ketua DKM</option>
            <option value="Bendahara" @if($user->role == 'Bendahara') selected @endif>Bendahara</option>
            <option value="Warga Sekolah" @if($user->role == 'Warga Sekolah') selected @endif>Warga Sekolah</option>
        </select><br><br>

        <button type="submit">Update User</button>
    </form>
</body>
</html>
