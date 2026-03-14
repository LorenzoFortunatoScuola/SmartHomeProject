<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifiche Smart Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background-color: #f5f6fa; }
        .notification-card {
            border-left: 5px solid #0d6efd;
        }
        .notification-fire {
            border-left: 5px solid #dc3545;
        }
        .notification-warning {
            border-left: 5px solid #ffc107;
        }
        .notification-success {
            border-left: 5px solid #28a745;
        }
    </style>
</head>

<body>

<div class="container py-4">

    <h2 class="mb-4">🔔 Notifiche</h2>

    <!-- NOTIFICA INCENDIO -->
    <div class="card mb-3 shadow-sm notification-fire">
        <div class="card-body">
            <h5 class="card-title">🔥 Incendio rilevato in Cucina</h5>
            <p class="card-text">
                Sensore MQ135 ha rilevato presenza di fumo.  
                Pompa antincendio attivata automaticamente.  
                Notifica inviata via Mail e Telegram.
            </p>
            <p class="text-muted">14/03/2026 – 15:58</p>
        </div>
    </div>

    <!-- NOTIFICA UMIDITÀ ALTA -->
    <div class="card mb-3 shadow-sm notification-warning">
        <div class="card-body">
            <h5 class="card-title">💧 Umidità elevata in Bagno</h5>
            <p class="card-text">
                Umidità rilevata: 78%.  
                Suggerimento: attivare ventilazione o aprire finestra.
            </p>
            <p class="text-muted">14/03/2026 – 15:40</p>
        </div>
    </div>

    <!-- NOTIFICA ARIA SPORCA -->
    <div class="card mb-3 shadow-sm notification-warning">
        <div class="card-body">
            <h5 class="card-title">🌫️ Qualità dell’aria bassa in Camera</h5>
            <p class="card-text">
                Sensore MQ135 ha rilevato sostanze nocive sopra la soglia.  
                Suggerimento: ricambio d’aria consigliato.
            </p>
            <p class="text-muted">14/03/2026 – 15:20</p>
        </div>
    </div>

    <!-- NOTIFICA TEMPERATURA -->
    <div class="card mb-3 shadow-sm notification-card">
        <div class="card-body">
            <h5 class="card-title">🌡️ Temperatura non ottimale in Soggiorno</h5>
            <p class="card-text">
                Temperatura rilevata: 17°C.  
                Suggerimento: aumentare riscaldamento.
            </p>
            <p class="text-muted">14/03/2026 – 14:55</p>
        </div>
    </div>

    <!-- NOTIFICA SISTEMA -->
    <div class="card mb-3 shadow-sm notification-success">
        <div class="card-body">
            <h5 class="card-title">👤 Nuovo utente aggiunto</h5>
            <p class="card-text">
                L’utente <strong>Mario Rossi</strong> è stato aggiunto alla casa come Visualizzatore.
            </p>
            <p class="text-muted">14/03/2026 – 14:10</p>
        </div>
    </div>

    <!-- TORNA ALLA DASHBOARD -->
    <div class="mt-4">
        <a href="../dashboard/index.php" class="btn btn-secondary">⬅ Torna alla Dashboard</a>
    </div>

</div>

</body>
</html>
