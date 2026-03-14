<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensori Smart Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background-color: #f5f6fa; }
        .sensor-card {
            border-left: 5px solid #0d6efd;
        }
        .sensor-danger {
            border-left: 5px solid #dc3545;
        }
        .sensor-warning {
            border-left: 5px solid #ffc107;
        }
        .sensor-ok {
            border-left: 5px solid #28a745;
        }
    </style>
</head>

<body>

<div class="container py-5">

    <h2 class="mb-4">📡 Sensori della Casa</h2>
    <p class="text-muted mb-4">Elenco dei sensori installati nella casa, con posizione e funzione.</p>

    <div class="row g-4">

        <!-- TEMPERATURA -->
        <div class="col-md-6">
            <div class="card shadow-sm sensor-card p-3">
                <h5>🌡️ Sensore Temperatura</h5>
                <p><strong>Posizione:</strong> Soggiorno</p>
                <p><strong>Compito:</strong> Misura la temperatura ambiente per garantire comfort e rilevare anomalie termiche.</p>
                <h4>22.5°C</h4>
                <p class="text-muted">Ultimo aggiornamento: 2 min fa</p>
            </div>
        </div>

        <!-- UMIDITÀ -->
        <div class="col-md-6">
            <div class="card shadow-sm sensor-card p-3">
                <h5>💧 Sensore Umidità</h5>
                <p><strong>Posizione:</strong> Bagno</p>
                <p><strong>Compito:</strong> Rileva il livello di umidità per prevenire muffe e garantire un ambiente sano.</p>
                <h4>48%</h4>
                <p class="text-muted">Ultimo aggiornamento: 2 min fa</p>
            </div>
        </div>

        <!-- QUALITÀ ARIA -->
        <div class="col-md-6">
            <div class="card shadow-sm sensor-warning p-3">
                <h5>🌫️ Sensore Qualità Aria (MQ135)</h5>
                <p><strong>Posizione:</strong> Camera da Letto</p>
                <p><strong>Compito:</strong> Misura la presenza di sostanze nocive e CO₂ per garantire aria pulita.</p>
                <h4>Qualità: Media</h4>
                <p class="text-muted">Ultimo aggiornamento: 2 min fa</p>
            </div>
        </div>

        <!-- FUMO / INCENDIO -->
        <div class="col-md-6">
            <div class="card shadow-sm sensor-danger p-3">
                <h5>🔥 Sensore Fumo / Incendio (MQ135)</h5>
                <p><strong>Posizione:</strong> Cucina</p>
                <p><strong>Compito:</strong> Rileva fumo e gas pericolosi e attiva l’allarme incendio.</p>
                <h4 class="text-danger">⚠ Fumo rilevato!</h4>
                <p class="text-muted">Ultimo aggiornamento: 1 min fa</p>
            </div>
        </div>

        <!-- POMPA ANTINCENDIO -->
        <div class="col-md-12">
            <div class="card shadow-sm sensor-ok p-3">
                <h5>🚒 Pompa Antincendio</h5>
                <p><strong>Posizione:</strong> Sistema centrale antincendio</p>
                <p><strong>Compito:</strong> Attivarsi automaticamente in caso di incendio per irrorare acqua nella stanza interessata.</p>
                <h4>Stato: Attiva</h4>
                <p class="text-muted">Attivata automaticamente dopo rilevamento fumo</p>
            </div>
        </div>

    </div>

    <div class="mt-4">
        <a href="../dashboard/index.php" class="btn btn-secondary">⬅ Torna alla Dashboard</a>
    </div>

</div>

</body>
</html>
