<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Home Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f5f6fa; }
        .sidebar {
            height: 100vh;
            background: #1e272e;
            color: white;
            padding-top: 20px;
        }
        .sidebar a {
            color: #d2dae2;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
        }
        .sidebar a:hover {
            background: #485460;
            color: white;
        }
        .sensor-card {
            border-left: 5px solid #0d6efd;
        }
        .alert-fire {
            border-left: 5px solid #dc3545;
        }
        .room-box {
            border: 2px dashed #ced6e0;
            padding: 20px;
            border-radius: 10px;
            background: white;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-2 sidebar">
            <h4 class="text-center mb-4">Smart Home</h4>
            <a href="#">🏠 Dashboard</a>
            <a href="#">📊 Sensori</a>
            <a href="planimetria.php">🗺️ Planimetria</a>
            <a href="#">👥 Utenti</a>
            <a href="notifiche.php">🔔 Notifiche</a>
            <a href="impostazioni.php">⚙️ Impostazioni</a>
        </div>

        <!-- MAIN CONTENT -->
        <div class="col-10 p-4">

            <!-- NAVBAR -->
            <nav class="navbar navbar-light bg-white shadow-sm mb-4 p-3 rounded">
                <span class="navbar-brand mb-0 h4">Dashboard Smart Home</span>
                <div class="d-flex align-items-center">
                    <img src="https://via.placeholder.com/40" class="rounded-circle me-2">
                    <span>User</span>
                </div>
            </nav>

            <!-- ALERT INCENDIO -->
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <strong>🔥 Allarme incendio!</strong> Rilevato fumo nella stanza *Cucina*. Pompa attivata automaticamente.
            </div>

            <!-- SENSOR CARDS -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card sensor-card shadow-sm">
                        <div class="card-body">
                            <h5>🌡️ Temperatura</h5>
                            <h2>22.5°C</h2>
                            <p class="text-muted">Ultimo aggiornamento: 2 min fa</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card sensor-card shadow-sm">
                        <div class="card-body">
                            <h5>💧 Umidità</h5>
                            <h2>48%</h2>
                            <p class="text-muted">Ultimo aggiornamento: 2 min fa</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card sensor-card shadow-sm">
                        <div class="card-body">
                            <h5>🌫️ Qualità Aria (MQ135)</h5>
                            <h2>Buona</h2>
                            <p class="text-muted">Ultimo aggiornamento: 2 min fa</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PLANIMETRIA -->
            <h4 class="mb-3">Planimetria Casa</h4>
            <div class="room-box mb-4">
                <img src="https://via.placeholder.com/800x300?text=Planimetria+Casa" class="img-fluid">
            </div>

            <!-- UTENTI -->
            <h4 class="mb-3">Utenti Associati</h4>
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <img src="https://via.placeholder.com/300" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Mario Rossi</h5>
                            <p class="card-text">Configuratore</p>
                            <p class="text-muted">Email: mario@example.com</p>
                            <p class="text-muted">Telegram: @mario</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <img src="https://via.placeholder.com/300" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Luca Bianchi</h5>
                            <p class="card-text">Visualizzatore</p>
                            <p class="text-muted">Email: luca@example.com</p>
                            <p class="text-muted">Telegram: @luca</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- NOTIFICHE -->
            <h4 class="mb-3">Notifiche Recenti</h4>
            <ul class="list-group mb-4">
                <li class="list-group-item">🔥 Incendio rilevato in Cucina – Notifica inviata via Mail e Telegram</li>
                <li class="list-group-item">💧 Umidità alta in Bagno – Suggerita ventilazione</li>
                <li class="list-group-item">🌫️ Qualità aria bassa in Camera – Suggerito ricambio aria</li>
            </ul>

            <!-- STORICO -->
            <h4 class="mb-3">Storico Dati</h4>
            <table class="table table-striped">
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

</body>
</html>
