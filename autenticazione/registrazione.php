<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registrati</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
            background: radial-gradient(circle at 20% 20%, #4f46e5, #020617 60%);
            overflow: hidden;
            color: white;
        }

        /* sfondo glow */

        body::before {
            content: "";
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, #6366f1, #9333ea);
            filter: blur(120px);
            animation: move1 12s infinite alternate;
        }

        body::after {
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, #ec4899, #8b5cf6);
            filter: blur(120px);
            right: -150px;
            bottom: -150px;
            animation: move2 14s infinite alternate;
        }

        @keyframes move1 {
            from {
                transform: translate(-100px, -50px);
            }

            to {
                transform: translate(200px, 100px);
            }
        }

        @keyframes move2 {
            from {
                transform: translate(0, 0);
            }

            to {
                transform: translate(-200px, -100px);
            }
        }

        /* card */

        .register-card {
            position: relative;
            width: 100%;
            max-width: 450px;
            padding: 40px;
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.6);
            transition: 0.4s;
        }

        .register-card:hover {
            transform: translateY(-8px) scale(1.01);
        }

        /* logo */

        .logo {
            font-size: 60px;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #a5b4fc, #f0abfc);
            -webkit-background-clip: text;
            color: transparent;
        }

        /* input */

        .form-control {
            background: rgba(255, 255, 255, 0.08);
            border: none;
            border-radius: 14px;
            padding: 14px;
            color: white;
            caret-color: white;
            cursor: text;
        }

        .form-control::placeholder {
            color: #cbd5f5;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.12);
            box-shadow: 0 0 0 2px #6366f1;
            color: white;
        }

        .input-group-text {
            background: rgba(255, 255, 255, 0.08);
            border: none;
            color: #cbd5f5;
            border-radius: 14px 0 0 14px;
        }

        /* button */

        .btn-register {
            margin-top: 10px;
            padding: 14px;
            border: none;
            border-radius: 14px;
            font-weight: 600;
            background: linear-gradient(90deg, #6366f1, #ec4899);
            transition: 0.3s;
            color: white;
        }

        .btn-register:hover {
            transform: scale(1.04);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.6);
        }

        /* text */

        .subtitle {
            color: #cbd5f5;
            font-size: 14px;
        }

        a {
            color: #a5b4fc;
            text-decoration: none;
        }

        a:hover {
            color: white;
        }

        hr {
            border-color: rgba(255, 255, 255, 0.2);
        }
    </style>

</head>

<body>

    <div class="register-card">

        <div class="text-center mb-4">
            <i class="bi bi-person-plus logo"></i>

            <h3>Crea un account</h3>

            <p class="subtitle">Registrati per continuare</p>
        </div>

        <form>

            <div class="mb-3">
                <label class="form-label">Username</label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-person"></i>
                    </span>

                    <input type="text" class="form-control" placeholder="Inserisci username" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-envelope"></i>
                    </span>

                    <input type="email" class="form-control" placeholder="Inserisci email" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>

                    <input type="password" class="form-control" placeholder="Inserisci password" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Conferma Password</label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-shield-lock"></i>
                    </span>

                    <input type="password" class="form-control" placeholder="Conferma password" required>
                </div>
            </div>

            <a href="../dashboard/index.php" class="btn btn-register w-100">
                Registrati
            </a>

        </form>

        <hr>

        <div class="text-center">
            <p class="subtitle mb-1">Hai già un account?</p>

            <a href="login.php" class="fw-bold">
                Torna al login
            </a>
        </div>

    </div>

</body>

</html>