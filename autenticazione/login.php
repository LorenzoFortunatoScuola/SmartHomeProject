<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-login {
            border-radius: 10px;
            font-weight: 600;
        }

        .logo {
            font-size: 40px;
            color: #6c63ff;
        }
    </style>

</head>

<body>

    <div class="card login-card p-4">

        <div class="text-center mb-4">
            <i class="bi bi-person-circle logo"></i>
            <h3 class="mt-2">Accedi alla tua SmartHome</h3>
            <p class="text-muted">Inserisci le tue credenziali</p>
        </div>

        <form>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Inserisci email" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Inserisci password" required>
                </div>
            </div>

            <div class="d-flex justify-content-between mb-3">

                <a href="#" class="text-decoration-none"></a>

            </div>

            <button type="submit" class="btn btn-primary w-100 btn-login">
                Accedi
            </button>

        </form>

        <hr>

        <div class="text-center">
            <p class="mb-0">Non hai un account?</p>
            <a href="registrazione.php" class="text-decoration-none fw-bold">Registrati</a>
        </div>

    </div>

</body>

</html>