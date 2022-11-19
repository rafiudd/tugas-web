<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Web Programming Materi 9</title>
</head>
<style>
  pre {
    background: #f4f4f4;
    border: 1px solid #ddd;
    border-left: 3px solid #f36d33;
    color: #666;
    page-break-inside: avoid;
    font-family: monospace;
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 1em;
    max-width: 100%;
    overflow: auto;
    /* padding: 1em 1.5em; */
    display: block;
    word-wrap: break-word;
  }
</style>
<body>
  <section>
    <h1>1. Buatlah program menggunakan while, menampilkan perulangan 15 ke 10</h1>
    <pre>
      $angka = 15;

      while($angka > 10) {
        echo "The number is: $angka";
        $angka--;
      }
    </pre>
    <p>Output: </p>
    <p>
      <?php
        $angka = 15;

        while($angka > 10) {
          echo "The number is: $angka <br>";
          $angka--;
        }
      ?>
    </p>
  </section>

  <section>
    <h1>2. Buatlah program menggunakan for, menampilkan huruf A 3x, huruf B 4x</h1>
    <pre>
      for ($angka = 1; $angka <= 4; $angka++) {
        echo "A $angka";
      }

      for ($angka = 1; $angka <= 3; $angka++) {
        echo "B $angka";
      }
    </pre>
    <p>Output: </p>
    <p>
      <?php
        for ($angka = 1; $angka <= 4; $angka++) {
          echo "A $angka <br>";
        }

        for ($angka = 1; $angka <= 3; $angka++) {
          echo "B $angka <br>";
        }
      ?>
    </p>
  </section>
</body>
</html>