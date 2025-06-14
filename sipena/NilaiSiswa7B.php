<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa - SIM Akademik</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body class="biodatasiswa-page">

    <div class="navbar">
        <div class="navbar-left">
            <img src="smpn4saradan.png" alt="Logo SMP">
            <div>
                <div class="navbar-title">SIPENA – SMP NEGERI 4 SARADAN</div>
                <div class="navbar-menu">
                    <a href="berandasiswa.php">Beranda</a>
                    <a href="pilihnilaikehadiransiswa.php">Akademik</a>
                </div>
            </div>
        </div>
        <div class="navbar-right">
            <a href="notifikasisiswa.php"class="bell">🔔</a>
            <a href="biodatasiswa.php" class="profile-icon">A</a>
        </div>
    </div>
  </header>

  <main>
    <h2>DAFTAR NILAI</h2>
    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Mata Pelajaran</th>
            <th>Semester Ganjil</th>
            <th>Semester Genap</th>
            <th>Rata-rata</th>
            <th>Predikat</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>Agama</td>
            <td>80</td>
            <td>86</td>
            <td>83,5</td>
            <td>AB</td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Matematika</td>
            <td>74</td>
            <td>78</td>
            <td>75</td>
            <td>B</td>
          </tr>
          <tr>
            <td>3.</td>
            <td>Bahasa Inggris</td>
            <td>90</td>
            <td>87</td>
            <td>88</td>
            <td>A</td>
          </tr>
          <tr>
            <td>4.</td>
            <td>Bahasa Indonesia</td>
            <td>83</td>
            <td>85</td>
            <td>81,5</td>
            <td>AB</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>