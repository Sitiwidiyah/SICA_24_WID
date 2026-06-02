<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>login dulu bro</title>

<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet">
<link href="<?= base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">

<style>
.bg-login-3d {
    perspective: 1000px;
    overflow: hidden;
}

/* GAMBAR BARU */
.bg-login-3d-inner {
    width: 100%;
    height: 100%;
    background: url('https://th.bing.com/th/id/OIP.zT8QbtrALgISgAB_2nWMuwHaHa?r=0&o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3');
    background-size: cover;
    background-position: center;
    animation: auto3d 7s infinite ease-in-out;
    transform-style: preserve-3d;
}

/* ANIMASI AUTO */
@keyframes auto3d {
    0%   { transform: rotateX(0deg) rotateY(0deg) scale(1); }
    20%  { transform: rotateX(6deg) rotateY(-6deg) scale(1.05); }
    40%  { transform: rotateX(-5deg) rotateY(5deg) scale(1.04); }
    60%  { transform: rotateX(4deg) rotateY(-4deg) scale(1.03); }
    80%  { transform: rotateX(-3deg) rotateY(3deg) scale(1.02); }
    100% { transform: rotateX(0deg) rotateY(0deg) scale(1); }
}
</style>

</head>

<body class="bg-gradient-primary">

<div class="container">
<div class="row justify-content-center">
<div class="col-xl-10 col-lg-12 col-md-9">

<div class="card o-hidden border-0 shadow-lg my-5">
<div class="card-body p-0">

<div class="row">

<!-- KIRI (AUTO GERAK 3D) -->
<div class="col-lg-6 d-none d-lg-block bg-login-3d">
    <div class="bg-login-3d-inner"></div>
</div>

<!-- KANAN (FORM) -->
<div class="col-lg-6">
<div class="p-5">

<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
</div>

<?php if ($this->session->flashdata('error')): ?>
<div class="alert alert-danger text-center">
    <?= $this->session->flashdata('error'); ?>
</div>
<?php endif; ?>

<form class="user" method="post" action="<?= site_url('login/proses');?>">

<div class="form-group">
    <input type="text" name="username" class="form-control form-control-user" placeholder="Username" required>
</div>

<div class="form-group">
    <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
</div>

<div class="form-group">
    <div class="custom-control custom-checkbox small">
        <input type="checkbox" class="custom-control-input" id="remember">
        <label class="custom-control-label" for="remember">Remember Me</label>
    </div>
</div>

<button type="submit" class="btn btn-primary btn-user btn-block">
    Login
</button>

</form>

<hr>

<div class="text-center">
    <a class="small" href="#">Forgot Password?</a>
</div>

<div class="text-center">
    <a class="small" href="#">Create an Account!</a>
</div>

</div>
</div>

</div>
</div>
</div>

</div>
</div>
</div>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

</body>
</html>