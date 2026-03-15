<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifiche Smart Home</title>
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

        .notification-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            border-left: 8px solid #0d6efd;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 1rem;
        }

        .notification-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.15);
        }

        .notification-fire {
            border-left-color: #dc3545;
        }

        .notification-warning {
            border-left-color: #ffc107;
        }

        .notification-success {
            border-left-color: #28a745;
        }

        .card-title {
            font-weight: 600;
        }

        .text-muted {
            font-size: 0.9rem;
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

<div class="container py-4">

    <h2 class="mb-4"><i class="fas fa-bell"></i> Notifiche</h2>

    <!-- NOTIFICA INCENDIO -->
    <div class="notification-card notification-fire">
        <h5 class="card-title">🔥 Incendio rilevato in Cucina</h5>
        <p>
            Sensore MQ135 ha rilevato presenza di fumo.  
            Pompa antincendio attivata automaticamente.  
            Notifica inviata via Mail e Telegram.
        </p>
        <p class="text-muted">14/03/2026 – 15:58</p>
    </div>

    <!-- NOTIFICA UMIDITÀ ALTA -->
    <div class="notification-card notification-warning">
        <h5 class="card-title">💧 Umidità elevata in Bagno</h5>
        <p>
            Umidità rilevata: 78%.  
            Suggerimento: attivare ventilazione o aprire finestra.
        </p>
        <p class="text-muted">14/03/2026 – 15:40</p>
    </div>

    <!-- NOTIFICA ARIA SPORCA -->
    <div class="notification-card notification-warning">
        <h5 class="card-title">🌫️ Qualità dell’aria bassa in Camera</h5>
        <p>
            Sensore MQ135 ha rilevato sostanze nocive sopra la soglia.  
            Suggerimento: ricambio d’aria consigliato.
        </p>
        <p class="text-muted">14/03/2026 – 15:20</p>
    </div>

    <!-- NOTIFICA TEMPERATURA -->
    <div class="notification-card">
        <h5 class="card-title">🌡️ Temperatura non ottimale in Soggiorno</h5>
        <p>
            Temperatura rilevata: 17°C.  
            Suggerimento: aumentare riscaldamento.
        </p>
        <p class="text-muted">14/03/2026 – 14:55</p>
    </div>

    <!-- NOTIFICA SISTEMA -->
    <div class="notification-card notification-success">
        <h5 class="card-title">👤 Nuovo utente aggiunto</h5>
        <p>
            L’utente <strong>Mario Rossi</strong> è stato aggiunto alla casa come Visualizzatore.
        </p>
        <p class="text-muted">14/03/2026 – 14:10</p>
    </div>

    <!-- TORNA ALLA DASHBOARD -->
    <div class="mt-4">
        <a href="../dashboard/index.php" class="btn btn-custom"><i class="fas fa-arrow-left"></i> Torna alla Dashboard</a>
    </div>

</div>

</body>
</html>