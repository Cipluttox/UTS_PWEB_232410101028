<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>BPM FASILKOM</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #ffffff;
      color: #333;
      line-height: 1.6;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 40px 20px;
      max-width: 1200px;
      margin: 0 auto;
      gap: 30px;
    }

    .text-section {
      max-width: 600px;
      text-align: center;
    }

    h1 {
      font-size: 2em;
      margin-bottom: 20px;
      font-weight: bold;
    }

    h1 .hitam {
      color: #000000;
      font-weight: bold;
    }

    h1 .dongker {
      color: #130071;
      font-weight: bold;
    }

    .text-section p {
      margin-bottom: 30px;
      color: #555;
    }

    .button {
      display: inline-block;
      padding: 12px 24px;
      background-color: #130071;
      color: white;
      border-radius: 25px;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #005bb5;
    }

    .image-section img {
        width: 100%;
        max-width: 300px; /* Batas maksimum gambar */
        height: auto;
        border-radius: 20px;
        filter: grayscale(50%);
    }

    @media (min-width: 768px) {
      .container {
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        text-align: left;
      }

      .text-section {
        flex: 1;
      }

      .image-section {
        flex: 1;
        display: flex;
        justify-content: center;
      }

      .image-section img {
        max-width: 50%;
        height: auto;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="text-section">
      <h1>
        <span class="hitam">Pengelolaan Inventaris</span>
        <br />
        <span class="dongker">Badan Perwakilan Mahasiswa</span>
      </h1>
      <p>
        Pengelolaan inventaris Badan Perwakilan Mahasiswa (BPM) adalah proses pencatatan, pengawasan, dan pemeliharaan aset/barang milik organisasi yang digunakan untuk mendukung kegiatan operasional dan program kerja BPM.
      </p>
      <a href="#" class="button">Selanjutnya →</a>
    </div>
    <div class="image-section">
      <img src="images/eval.jpg" alt="Ilustrasi Inventaris BPM" />
    </div>
  </div>
</body>
</html>
