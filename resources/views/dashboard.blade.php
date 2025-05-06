<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard</title>
  <style>
    body {
        margin: 0;
        font-family: 'Segoe UI', sans-serif;
        background: #f3f4f6;
    }

    .container {
        display: flex;
        height: 100vh;
    }

    .sidebar {
        width: 220px;
         background: #ffffff;
         border-right: 1px solid #e5e7eb;
         padding: 20px;
        display: flex;
        flex-direction: column;
    }
    .logo {
        font-weight: bold;
        font-size: 1.4em;
        margin-bottom: 30px;
    }
    .sidebar nav a {
        display: block;
        padding: 10px;
        color: #333;
        text-decoration: none;
        border-radius: 8px;
        margin-bottom: 8px;
    }

    .sidebar nav a.active,
    .sidebar nav a:hover {
        background: #e0e7ff;
        color: #1d4ed8;
    }
    .logout {
        margin-top: auto;
        font-size: 0.9em;
        color: #777;
        cursor: pointer;
    }
    .content {
        flex: 1;
        padding: 20px;
    }
    .main {
        background: white;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
  </style>
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <div class="logo">BPM FASILKOM</div>
      <nav>
        <a href="#" class="active">Dashboard</a>
        <a href="{{route('pengelolaan', ['username' => $username ])}}">Pengelolaan Barang</a>
        <a href="{{route('profil', ['username' => $username ])}}">Profil</a>
      </nav>
      <div class="logout">🚪 Logout</div>
    </aside>

    <main class="content">
      <section class="main">
        <div class="card text-white bg-primary mb-3 mx-auto" style="max-width: 30rem;">
          <div class="card-body text-center">
            <h4 class="card-title">Selamat datang, {{ $username }}! 👋</h4>
            <p class="card-text">Catat inventaris secara berkala!!!</p>
          </div>
        </div>
      </section>
    </main>
  </div>
</body>
</html>
