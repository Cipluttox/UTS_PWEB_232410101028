<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BPM FASILKOM</title>
  <style>
  body {
    margin: 0;
    background-color: #0a0a0a;
    font-family: Arial, sans-serif;
    margin: 10px;
  }

  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 40px;
    background-color: rgba(0, 0, 0, 0.85);
  }

  .logo {
    font-size: 20px;
    font-weight: bold;
    justify-content: center;
    color: white;
    margin-top: 2px;
    margin-left: 20px;
  }

  .nav-links a {
    margin: 0 15px;
    color: white;
    text-decoration: none;
    font-weight: 500;
  }

  .nav-links a:hover,
  .nav-links a.active {
    color: #1e90ff; /* Warna biru seperti di gambar */
  }

  .login-button a {
    padding: 6px 12px;
    border: 1px solid #1e90ff;
    border-radius: 4px;
    color: white;
    text-decoration: none;
    transition: background-color 0.3s ease;
    margin-right: 20px;
  }

  .login-button a:hover {
    background-color: #1e90ff;
  }
  </style>
</head>
<body>
  <header>
    <div class="navbar">
      <div class="logo">BPM FASILKOM</div>
      <div class="login-button">
        <a href="{{ route('login') }}">Login</a>
      </div>
    </div>
  </header>
</body>
</html>
