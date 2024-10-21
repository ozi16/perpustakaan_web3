<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 mx-auto mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Selamat Datang di Perpus App</h5>
                                <p>Silahkan Login Dengan Akun Anda</p>
                            </div>
                            <form action="actionLogin.php" method="post">
                                <div class="form-group mb-3">
                                    <label for="" class="form-label">Email : </label>
                                    <input type="email" name="email" placeholder="Masukkan Email Anda" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="form-label">Password : </label>
                                    <input type="password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" class="form-control">
                                </div>
                                <div class="form-group mb-3 d-grid">
                                    <button type="submit" class="btn btn-primary" >Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>