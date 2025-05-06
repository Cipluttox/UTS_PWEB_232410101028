<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pengelolaan</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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

.header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
}

.header input {
  width: 100%;
  padding: 10px;
  border-radius: 8px;
  border: 1px solid #ccc;
}

.user {
  display: flex;
  align-items: center;
  gap: 10px;
}

.avatar {
  border-radius: 50%;
  width: 36px;
  height: 36px;
}

.main {
  background: white;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.title-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.btn-primary {
  background: #4f46e5;
  color: white;
  border: none;
  padding: 10px 14px;
  border-radius: 8px;
  cursor: pointer;
}

table {
  width: 100%;
  border-collapse: collapse;
}

thead {
  background: #f9fafb;
  font-weight: bold;
}

td, th {
  padding: 12px 10px;
  border-bottom: 1px solid #e5e7eb;
  text-align: left;
}

.badge {
  padding: 4px 10px;
  border-radius: 20px;
  font-size: 0.8em;
  font-weight: 500;
}

.badge.pending {
  background: #fef3c7;
  color: #b45309;
}

.badge.active {
  background: #d1fae5;
  color: #047857;
}

.badge.inactive {
  background: #fee2e2;
  color: #b91c1c;
}

  </style>
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <div class="logo">BPM FASILKOM</div>
      <nav class="nav">
        <a href="{{route('dashboard', ['username' => $username ])}}">Dashboard</a>
        <a href="#" class="active">Pengelolaan barang</a>
        <a href="{{route('profil', ['username' => $username ])}}">Profil</a>
      </nav>
      <div class="logout">🚪 Log out</div>
    </aside>

    <main class="content">
      <header class="header">
        <input class="text" type="text" placeholder="Cari Barang" />
        <div class="right-icons">
          <button><i class="bi bi-bell"></i></button>
        </div>
      </header>

      <section class="main">
        <div class="top-bar">
          <h2>Inventaris</h2>
        </div>

        <table>
          <thead>
            <tr>
              <th>Nama Barang</th>
              <th>Jumlah</th>
              <th>Satuan</th>
              <th>No Surat</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>cinderamata BPM PSSI UNEJ
                dari UKM M</td>
              <td>1</td>
              <td>pcs</td>
              <td>15.BPMF/2022/001</td>
              <td><span class="badge baik">Baik</span></td>
            </tr>
            <tr>
              <td>Karpet</td>
              <td>2</td>
              <td>buah</td>
              <td>15.BPMF/2025/001</td>
              <td><span class="badge baik">Baik</span></td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </section>
    </main>
  </div>
</body>
</html>

