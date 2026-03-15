<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>

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
            color: white;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            padding: 40px;
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .logo {
            font-size: 60px;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #a5b4fc, #f0abfc);
            -webkit-background-clip: text;
            color: transparent;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.08);
            border: none;
            border-radius: 14px;
            padding: 14px;
            color: white;
        }

        .form-control::placeholder {
            color: #cbd5f5;
        }

        .input-group-text {
            background: rgba(255, 255, 255, 0.08);
            border: none;
            color: #cbd5f5;
        }

        .btn-login {
            margin-top: 10px;
            padding: 14px;
            border: none;
            border-radius: 14px;
            font-weight: 600;
            background: linear-gradient(90deg, #6366f1, #ec4899);
            color: white;
        }
    </style>
</head>

<body>

    <div class="login-card">

        <div class="text-center mb-4">
            <i class="bi bi-person-plus logo"></i>
            <h3>Crea un account</h3>
            <p>Registrati per iniziare</p>
        </div>

        <form id="registerForm">

            <div class="mb-3">
                <label>Username</label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-person"></i>
                    </span>

                    <input type="text" id="username" class="form-control" placeholder="Inserisci username" required>
                </div>
            </div>

            <div class="mb-3">
                <label>Email</label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-envelope"></i>
                    </span>

                    <input type="email" id="email" class="form-control" placeholder="Inserisci email" required>
                </div>
            </div>

            <div class="mb-3">
                <label>Password</label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>

                    <input type="password" id="password" class="form-control" placeholder="Inserisci password" required>
                </div>
            </div>

            <div class="mb-3">
                <label>Conferma Password</label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-shield-lock"></i>
                    </span>

                    <input type="password" id="confirmPassword" class="form-control" placeholder="Conferma password"
                        required>
                </div>
            </div>

            <button type="submit" class="btn btn-login w-100">
                Registrati
            </button>

        </form>

        <hr>

        <div class="text-center">
            <p>Hai già un account?</p>
            <a href="login.php">Torna al login</a>
        </div>

    </div>

    <script>

        document.getElementById("registerForm").addEventListener("submit", function (e) {

            e.preventDefault();

            const username = document.getElementById("username").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirmPassword").value;

            if (username === "" || email === "" || password === "" || confirmPassword === "") {
                alert("Compila tutti i campi!");
                return;
            }

            if (password !== confirmPassword) {
                alert("Le password non coincidono!");
                return;
            }

            window.location.href = "../dashboard/index.php";

        });

    </script>

</body>

</html>