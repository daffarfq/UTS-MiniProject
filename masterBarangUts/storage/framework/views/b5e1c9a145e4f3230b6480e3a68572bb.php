<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
  <div class="container text-center my-5">
    <h1 class="text-primary mb-4 display-3 fw-bold">Selamat Datang</h1>
    <div class="card bg-info text-white shadow-lg">
      <div class="card-body">
        <p class="lead mb-4"><strong>Informasi Mahasiswa:</strong></p>
        <ul class="list-unstyled">
          <li><strong>Nama:</strong> Muhammad Daffa Rifqi</li>
          <li><strong>Kelas:</strong> SI 05-03</li>
          <li><strong>NIM:</strong> 1204220011</li>
          <li><strong>Prodi:</strong> Sistem Informasi</li>
          <li><strong>Kampus:</strong> University Telkom Surabaya</li>
        </ul>
      </div>
    </div>
    <a class="btn btn-outline-primary mt-4" href="<?php echo e(route('home')); ?>">Kembali ke Beranda</a>
  </div>  
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\Users\Administrator\masterBarangUts\resources\views/welcome.blade.php ENDPATH**/ ?>