<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utenti Associati</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: #f0f3f7;
            font-family: 'Segoe UI', sans-serif;
        }

        h2 {
            font-weight: 700;
            color: #0d6efd;
        }

        .user-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            border-left: 8px solid #0d6efd;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .user-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.15);
        }

        .profile-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }

        .badge-config {
            background-color: #0d6efd;
        }

        .badge-view {
            background-color: #6c757d;
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
    </style>
</head>

<body>

<div class="container py-5">

    <h2 class="mb-3"><i class="fas fa-users"></i> Utenti Associati alla Casa</h2>

    <div class="row g-4">

        <!-- MARIO ROSSI -->
        <div class="col-md-6">
            <div class="card user-card">
                <div class="d-flex align-items-center">
                    <img src="https://via.placeholder.com/80" class="profile-img me-3">
                    <div>
                        <h5 class="mb-1">Mario Rossi</h5>
                        <span class="badge badge-config">Configuratore</span>
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
            <div class="card user-card">
                <div class="d-flex align-items-center">
                    <img src="https://via.placeholder.com/80" class="profile-img me-3">
                    <div>
                        <h5 class="mb-1">Luca Bianchi</h5>
                        <span class="badge badge-view">Visualizzatore</span>
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
        <a href="../dashboard/index.php" class="btn btn-custom"><i class="fas fa-arrow-left"></i> Torna alla Dashboard</a>
    </div>

</div>

</body>
</html>