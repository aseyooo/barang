
<?php
$dosen = ["Bapak Tholib Hariono, S.Kom, M.Kom.",];

$materi = [
  ["SATU", "Penjelasan Kontrak kuliah dan Pengantar Basis Data"],
  ["DUA", "Cara kerja DBMS"],
  ["TIGA", "Tipe Data"],
  ["EMPAT", "Entity Relationship Diagram (ERD)"],
  ["LIMA", "Entity Relationship Diagram (ERD)"],
  ["ENAM", "Derajat Relationship"],
  ["TUJUH", "Cardinalitas Relationship"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="main">
        <div class="container">
         <article id="main-col">
          <h1 class="page-title">Basis Data</h1>
          <ul id="services">
            <p>
              <a href="https://ibb.co/xsYBGKP"><img src="WhatsApp Image 2022-11-10 at 13.32.49 - Copy.jpeg" alt="IMG-20221028-153036" border="0"></a> 
              <br> Tholib Harono, S.Kom, M.Kom. <br>0709038301
            </p>
            <pre><alrt><h1>RANGKUMAN MATERI SEMESTER 1</h1></alrt>
            <?php foreach ($dosen as $dos) : ?>
            <?php foreach ($dosen as $dos) : ?>
                        <h4 class="text-center">DOSEN PENGAMPU : <?= $dos ?></h4>
                        <h4 class="text-center">NIDN : <i>0709038301</i></h4>
                    <?php endforeach; ?>

          </ul>
         </article>
        </div>
       </section>

       <button type="submit" class="button_1"><a href="matakuliah.php">BACK</a></button>

       <footer>
        <p>N.R Wahyuni design programing 2 0 2 3</p>
      </footer>

</body>
</html>