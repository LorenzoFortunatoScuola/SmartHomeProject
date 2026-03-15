<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planimetria Casa</title>
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

        .plan-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            border-left: 8px solid #0d6efd;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .plan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.15);
        }

        .plan-card h4 {
            color: #6c757d;
            font-weight: 500;
        }

        .plan-img {
            border-radius: 12px;
            margin-top: 1rem;
            max-width: 100%;
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

    <h2 class="mb-3"><i class="fas fa-map"></i> Planimetria Casa</h2>

    <div class="row">
        <div class="col-12">
            <div class="plan-card">
                <h4>La planimetria sarà disponibile qui</h4>
                <img src="https://via.placeholder.com/800x300?text=Planimetria+Casa+in+arrivo" class="plan-img">
            </div>
        </div>
    </div>

    <div class="mt-4">
        <a href="../dashboard/index.php" class="btn btn-custom"><i class="fas fa-arrow-left"></i> Torna alla Dashboard</a>
    </div>

</div>

</body>
</html>