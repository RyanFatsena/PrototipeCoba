<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - App Name</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<div class="card shadow p-4" style="width: 22rem;">
<div class="text-center">
<img src="https://cdn-icons-png.flaticon.com/512/3975/3975090.png" alt="Ikon Bebek" width="100">
<h3 class="mt-3">Login - itiQ</h3>
</div>
<hr>

<form onsubmit="return handleLogin(event)">
<div class="mb-3">
  <select class="form-select" id="roleSelect" required>
    <option selected disabled value="">Pilih peran Anda</option>
    <option value="pembeli">Distributor/Pembeli</option>
    <option value="peternak">Peternak</option>
    <option value="toko">Toko</option>
    <option value="petani">Petani</option>
  </select>
</div>

<div class="mb-3">
<input type="" class="form-control" placeholder="Masukkan email Anda">
</div>
<div class="mb-3">
<input type="" class="form-control" placeholder="Masukkan password Anda">
</div>
<div class="d-flex justify-content-between">
<a href="register.html">Belum punya akun?</a>
<a href="#">Lupa password?</a>
</div>
<button type="submit" class="btn btn-success w-100 mt-3">Login</button>
</form>

<hr>
<button class="btn btn-outline-dark w-100">
<img src="https://img.icons8.com/color/16/000000/google-logo.png"/> Sign in with Google
</button>
</div>

<script>
function handleLogin(event) {
  // Mencegah form mengirim data secara default
  event.preventDefault(); 
  
  const roleSelect = document.getElementById('roleSelect');
  const selectedRole = roleSelect.value;
  
  // Jika tidak ada peran yang dipilih, beri peringatan
  if (!selectedRole) {
    alert('Silakan pilih peran Anda terlebih dahulu.');
    return false;
  }
  
  let destination = '';
  
  // Menentukan tujuan URL berdasarkan peran
  switch (selectedRole) {
    case 'pembeli':
      destination = 'distributor/dashboard_pembeli.html';
      break;
    case 'peternak':
      destination = 'peternak/dashboard_peternak.html';
      break;
    case 'toko':
      destination = 'toko/dashboard_toko.html';
      break;
    case 'petani':
      destination = 'petani/dashboard_petani.html';
      break;
  }
  
  // Mengarahkan pengguna ke halaman yang sesuai
  window.location.href = destination;
  return true;
}
</script>

</body>
</html>