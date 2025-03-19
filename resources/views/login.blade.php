<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
            padding: 20px;
            background-color: #6c757d;
            border-radius: 10px;
            color: white;
        }
        .form-control {
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center">Login</h2>
        <form>
            <div class="mb-3">
                <label for="nis" class="form-label">Nama Admin</label>
                <input type="text" class="form-control" id="nis" placeholder="Admin" required>
            </div>
            <div class="mb-3">
                <label for="floatingPassword" >Password</label>
                <input type="password" class="form-control" id="floatingPassword" placeholder="password">
               
            </div>
            <button type="submit" class="btn btn-light w-100"><a class="nav-link" href="dasboard">Masuk</a> </button>
        </form>
        <div class="text-center mt-3">
            <a href="#" class="text-white">Forgot Password?</a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>