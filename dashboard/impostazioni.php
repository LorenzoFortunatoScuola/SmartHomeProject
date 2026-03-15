<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impostazioni Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: #f0f3f7;
            font-family: 'Segoe UI', sans-serif;
        }

        .profile-card {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            border-left: 8px solid #0d6efd;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.15);
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #0d6efd;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .profile-img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        h3 {
            font-weight: 700;
            color: #0d6efd;
        }

        .form-label {
            font-weight: 500;
        }

        .btn-custom {
            background: linear-gradient(90deg, #0d6efd, #6610f2);
            color: #fff;
            border: none;
            transition: background 0.3s;
        }

        .btn-custom:hover {
            background: linear-gradient(90deg, #6610f2, #0d6efd);
            color: #fff;
        }

        .btn-danger {
            transition: transform 0.2s;
        }

        .btn-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }
    </style>
</head>

<body>

<div class="container py-5">

    <div class="card profile-card">
        <h3 class="text-center mb-4"><i class="fas fa-user-cog"></i> Impostazioni Account</h3>

        <!-- FOTO PROFILO -->
        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/150" class="profile-img" alt="Foto profilo">
        </div>

        <!-- INFO UTENTE -->
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" value="Mario Rossi" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" value="mario@example.com" disabled>
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
            <a href="index.php" class="btn btn-custom"><i class="fas fa-arrow-left"></i> Torna alla Dashboard</a>
            <a href="../lib/logout.php" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>

</div>

</body>
</html>