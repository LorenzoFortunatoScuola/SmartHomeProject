<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensori Smart Home</title>
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

        .sensor-card {
            border-radius: 15px;
            padding: 1.5rem;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            border-left: 8px solid #0d6efd;
            background: #ffffff;
        }

        .sensor-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.15);
        }

        .sensor-danger {
            border-left-color: #dc3545;
        }

        .sensor-warning {
            border-left-color: #ffc107;
        }

        .sensor-ok {
            border-left-color: #28a745;
        }

        .sensor-value {
            font-size: 2rem;
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

<div class="container py-5">

    <h2 class="mb-3"><i class="fas fa-home"></i> Sensori della Casa</h2>
    <p class="text-muted mb-4">Monitoraggio intelligente dei sensori per un ambiente sicuro e confortevole.</p>

    <div class="row g-4">

        <!-- TEMPERATURA -->
        <div class="col-md-6">
            <div class="card sensor-card">
                <h5>🌡️ Sensore Temperatura</h5>
                <p><strong>Posizione:</strong> Soggiorno</p>
                <p><strong>Compito:</strong> Misura la temperatura ambiente per garantire comfort e rilevare anomalie termiche.</p>
                <p class="sensor-value">22.5°C</p>
                <p class="text-muted">Ultimo aggiornamento: 2 min fa</p>
            </div>
        </div>

        <!-- UMIDITÀ -->
        <div class="col-md-6">
            <div class="card sensor-card">
                <h5>💧 Sensore Umidità</h5>
                <p><strong>Posizione:</strong> Bagno</p>
                <p><strong>Compito:</strong> Rileva il livello di umidità per prevenire muffe e garantire un ambiente sano.</p>
                <p class="sensor-value">48%</p>
                <p class="text-muted">Ultimo aggiornamento: 2 min fa</p>
            </div>
        </div>

        <!-- QUALITÀ ARIA -->
        <div class="col-md-6">
            <div class="card sensor-card sensor-warning">
                <h5>🌫️ Sensore Qualità Aria (MQ135)</h5>
                <p><strong>Posizione:</strong> Camera da Letto</p>
                <p><strong>Compito:</strong> Misura la presenza di sostanze nocive e CO₂ per garantire aria pulita.</p>
                <p class="sensor-value">Qualità: Media</p>
                <p class="text-muted">Ultimo aggiornamento: 2 min fa</p>
            </div>
        </div>

        <!-- FUMO / INCENDIO -->
        <div class="col-md-6">
            <div class="card sensor-card sensor-danger">
                <h5>🔥 Sensore Fumo / Incendio (MQ135)</h5>
                <p><strong>Posizione:</strong> Cucina</p>
                <p><strong>Compito:</strong> Rileva fumo e gas pericolosi e attiva l’allarme incendio.</p>
                <p class="sensor-value text-danger"><i class="fas fa-exclamation-triangle"></i> Fumo rilevato!</p>
                <p class="text-muted">Ultimo aggiornamento: 1 min fa</p>
            </div>
        </div>

        <!-- POMPA ANTINCENDIO -->
        <div class="col-12">
            <div class="card sensor-card sensor-ok">
                <h5>🚒 Pompa Antincendio</h5>
                <p><strong>Posizione:</strong> Sistema centrale antincendio</p>
                <p><strong>Compito:</strong> Attivarsi automaticamente in caso di incendio per irrorare acqua nella stanza interessata.</p>
                <p class="sensor-value">Stato: Attiva</p>
                <p class="text-muted">Attivata automaticamente dopo rilevamento fumo</p>
            </div>
        </div>

    </div>

    <div class="mt-4">
        <a href="../dashboard/index.php" class="btn btn-custom"><i class="fas fa-arrow-left"></i> Torna alla Dashboard</a>
    </div>

</div>

</body>
</html>