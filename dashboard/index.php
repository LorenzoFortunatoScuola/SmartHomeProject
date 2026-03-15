<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Home Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: #f0f3f7;
            font-family: 'Segoe UI', sans-serif;
        }

        /* SIDEBAR */
        .sidebar {
            height: 100vh;
            background: #1e272e;
            color: white;
            padding-top: 20px;
            position: sticky;
            top: 0;
        }

        .sidebar a {
            color: #d2dae2;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background: #485460;
            color: white;
        }

        .sidebar h4 {
            font-weight: 700;
            color: #0d6efd;
        }

        /* NAVBAR */
        .navbar-custom {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
        }

        .navbar-custom img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        /* CARD SENSORI */
        .sensor-card {
            border-left: 8px solid #0d6efd;
            border-radius: 15px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .sensor-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.15);
        }

        /* ALERT INCENDIO */
        .alert-fire {
            border-left: 8px solid #dc3545;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.08);
        }

        /* ROOM PLAN */
        .room-box {
            border: 2px dashed #ced6e0;
            padding: 20px;
            border-radius: 15px;
            background: #ffffff;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
        }

        /* UTENTI */
        .user-card {
            border-left: 8px solid #0d6efd;
            border-radius: 15px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .user-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.15);
        }

        .user-card img {
            border-radius: 50%;
            object-fit: cover;
            width: 100%;
            height: 200px;
        }

        /* NOTIFICHE */
        .notification-card {
            border-left: 8px solid #0d6efd;
            border-radius: 15px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            padding: 1rem;
            margin-bottom: 1rem;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .notification-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.15);
        }

        .notification-fire { border-left-color: #dc3545; }
        .notification-warning { border-left-color: #ffc107; }
        .notification-success { border-left-color: #28a745; }

        /* BOTTONI */
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

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-2 sidebar">
            <h4 class="text-center mb-4">Smart Home</h4>
            <a href="sensori.php">📊 Sensori</a>
            <a href="planimetria.php">🗺️ Planimetria</a>
            <a href="utenti.php">👥 Utenti</a>
            <a href="notifiche.php">🔔 Notifiche</a>
            <a href="impostazioni.php">⚙️ Impostazioni</a>
        </div>

        <!-- MAIN CONTENT -->
        <div class="col-10 p-4">

            <!-- NAVBAR -->
            <nav class="navbar navbar-light navbar-custom mb-4 p-3">
                <span class="navbar-brand mb-0 h4">Dashboard Smart Home</span>
                <div class="d-flex align-items-center">
                    <img src="https://via.placeholder.com/40" alt="User">
                    <span class="ms-2">User</span>
                </div>
            </nav>

            <!-- ALERT INCENDIO -->
            <div class="alert-fire d-flex align-items-center p-3 mb-4">
                <i class="fas fa-fire me-2"></i>
                <strong>Allarme incendio!</strong> Rilevato fumo nella stanza Cucina. Pompa attivata automaticamente.
            </div>

            <!-- SENSOR CARDS -->
            <div class="row mb-4">
                <div class="col-md-4 mb-3">
                    <div class="card sensor-card p-3">
                        <h5>🌡️ Temperatura</h5>
                        <h2>22.5°C</h2>
                        <p class="text-muted">Ultimo aggiornamento: 2 min fa</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card sensor-card p-3">
                        <h5>💧 Umidità</h5>
                        <h2>48%</h2>
                        <p class="text-muted">Ultimo aggiornamento: 2 min fa</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card sensor-card p-3">
                        <h5>🌫️ Qualità Aria</h5>
                        <h2>Buona</h2>
                        <p class="text-muted">Ultimo aggiornamento: 2 min fa</p>
                    </div>
                </div>
            </div>

            <!-- PLANIMETRIA -->
            <h4 class="mb-3">Planimetria Casa</h4>
            <div class="room-box mb-4">
                <img src="https://via.placeholder.com/800x300?text=Planimetria+Casa" class="img-fluid rounded">
            </div>

            <!-- UTENTI -->
            <h4 class="mb-3">Utenti Associati</h4>
            <div class="row mb-4">
                <div class="col-md-3 mb-3">
                    <div class="user-card p-3">
                        <img src="https://via.placeholder.com/300" alt="Mario Rossi">
                        <div class="mt-3">
                            <h5>Mario Rossi</h5>
                            <p>Configuratore</p>
                            <p class="text-muted">Email: mario@example.com</p>
                            <p class="text-muted">Telegram: @mario</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="user-card p-3">
                        <img src="https://via.placeholder.com/300" alt="Luca Bianchi">
                        <div class="mt-3">
                            <h5>Luca Bianchi</h5>
                            <p>Visualizzatore</p>
                            <p class="text-muted">Email: luca@example.com</p>
                            <p class="text-muted">Telegram: @luca</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- NOTIFICHE -->
            <h4 class="mb-3">Notifiche Recenti</h4>
            <div class="notification-card notification-fire">
                🔥 Incendio rilevato in Cucina – Notifica inviata via Mail e Telegram
            </div>
            <div class="notification-card notification-warning">
                💧 Umidità alta in Bagno – Suggerita ventilazione
            </div>
            <div class="notification-card notification-warning">
                🌫️ Qualità aria bassa in Camera – Suggerito ricambio aria
            </div>

            <!-- STORICO -->
            <h4 class="mb-3">Storico Dati</h4>
            <div class="card p-3 rounded shadow-sm">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Stanza</th>
                            <th>Temperatura</th>
                            <th>Umidità</th>
                            <th>Qualità Aria</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>14/03/2026 15:00</td>
                            <td>Cucina</td>
                            <td>23°C</td>
                            <td>52%</td>
                            <td>Media</td>
                        </tr>
                        <tr>
                            <td>14/03/2026 15:00</td>
                            <td>Camera</td>
                            <td>21°C</td>
                            <td>45%</td>
                            <td>Buona</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

</body>
</html>