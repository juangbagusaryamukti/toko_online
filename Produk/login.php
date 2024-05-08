<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .card {
            width: 320px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 12px;
            font-size: 14px;
        }

        .password-toggle-icon {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
        }

        .btn-primary {
            background-color: #C3E956;
            border-color: #C3E956;
            color: #333333;
            font-weight: bold;
            transition: background-color 0.3s, border-color 0.3s, color 0.3s;
            border-radius: 5px;
            padding: 12px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-primary:hover {
            background-color: #ADB64E;
            border-color: #ADB64E;
            color: #fff !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-primary i {
            margin-right: 8px;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            color: #333333;
            margin-bottom: 20px;
        }

        .card-subtitle {
            font-size: 14px;
            text-align: center;
            color: #6c757d;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="card">
        <h3 class="card-title">Login Toko Online</h3>
        <h6 class="card-subtitle mb-4">Silakan masukkan username dan password</h6>
        <form action="proses_login.php" method="post">
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="mb-3 position-relative">
                <input type="password" name="password" class="form-control" placeholder="Password" required id="passwordInput">
                <i class="fas fa-eye password-toggle-icon" onclick="togglePasswordVisibility()"></i>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-block">
                <i class="fas fa-sign-in-alt"></i> Login
            </button>
        </form>
        <div class="links">
            Apakah anda Petugas?<a href="../petugas/login.php">login disini</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('passwordInput');
            const passwordToggleIcon = document.querySelector('.password-toggle-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordToggleIcon.classList.remove('fa-eye');
                passwordToggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                passwordToggleIcon.classList.remove('fa-eye-slash');
                passwordToggleIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>