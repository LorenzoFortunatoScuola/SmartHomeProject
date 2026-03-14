<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utenti Associati</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background-color: #f5f6fa; }
        .user-card {
            border-left: 5px solid #0d6efd;
        }
        .profile-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>

<body>

<div class="container py-5">

    <h2 class="mb-4">👥 Utenti Associati alla Casa</h2>

    <div class="row g-4">

        <!-- MARIO ROSSI -->
        <div class="col-md-6">
            <div class="card shadow-sm user-card p-3">
                <div class="d-flex align-items-center">
                    <img src="https://via.placeholder.com/80" class="profile-img me-3">
                    <div>
                        <h5 class="mb-1">Mario Rossi</h5>
                        <span class="badge bg-primary">Configuratore</span>
                    </div>
                </div>
                <div class="mt-3">
                    <p class="mb-1"><strong>Email:</strong> mario@example.com</p>
                    <p class="mb-0"><strong>Telegram:</strong> @mario</p>
                </div>
            </div>
        </div>

        <!-- LUCA BIANCHI -->
        <div class="col-md-6">
            <div class="card shadow-sm user-card p-3">
                <div class="d-flex align-items-center">
                    <img src="https://via.placeholder.com/80" class="profile-img me-3">
                    <div>
                        <h5 class="mb-1">Luca Bianchi</h5>
                        <span class="badge bg-secondary">Visualizzatore</span>
                    </div>
                </div>
                <div class="mt-3">
                    <p class="mb-1"><strong>Email:</strong> luca@example.com</p>
                    <p class="mb-0"><strong>Telegram:</strong> @luca</p>
                </div>
            </div>
        </div>

    </div>

    <div class="mt-4">
        <a href="../dashboard/index.php" class="btn btn-secondary">⬅ Torna alla Dashboard</a>
    </div>

</div>

</body>
</html>
