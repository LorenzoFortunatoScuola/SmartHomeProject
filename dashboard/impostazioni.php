<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impostazioni Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background-color: #f5f6fa; }
        .profile-card {
            max-width: 600px;
            margin: auto;
        }
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #0d6efd;
        }
    </style>
</head>

<body>

<div class="container py-5">

    <div class="card shadow-sm profile-card p-4">
        <h3 class="text-center mb-4">Impostazioni Account</h3>

        <!-- FOTO PROFILO -->
        <div class="text-center mb-3">
            <img src="https://via.placeholder.com/150" class="profile-img" alt="Foto profilo">
        </div>

        <!-- INFO UTENTE -->
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" value="Mario Rossi" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" value=" mario@example.com" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Telegram</label>
            <input type="text" class="form-control" value="@mario" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Ruolo</label>
            <input type="text" class="form-control" value="Configuratore" disabled>
        </div>

        <!-- BOTTONI -->
        <div class="d-flex justify-content-between mt-4">
            <a href="index.php" class="btn btn-secondary">⬅ Torna alla Dashboard</a>
            <a href="../lib/logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>

</div>

</body>
</html>
