<html>
<head>
<title>Nilai Mahasiswa</title>
<style>
  table {
    color: #000000;
    border-collapse: collapse;
  }

  table, th, td {
    border: 1px solid #000000;
  }

  table td, table th {
    padding: 10px;
  }
</style>
</head>
<body align="center">
    <br>
    <h3>Table Nilai Mahasiswa</h1>
    <table align="center">
        <tr width="200px">
            <th rowspan="2">No</th>
            <th rowspan="2">Nama</th>
            <th rowspan="2">NIM</th>
            <th colspan="4">Nilai</th>
            <th rowspan="2">Nilai Akhir</th>
            <th rowspan="2">Nilai Huruf</th>
        </tr>
        <tr width="200px">
            <th>Tugas</th>
            <th>Kuis</th>
            <th>UTS</th>
            <th>UAS</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Faisal Khoiri Muzakki</td>
            <td>11220033</td>
            <td align="center">80</td>
            <td align="center">75</td>
            <td align="center">80</td>
            <td align="center">70</td>
            <td align="center">
                <?php
                $tugas = 80;
                $kuis = 75;
                $uts = 80;
                $uas = 70;
                $a = $tugas * 10/100;
                $b = $kuis * 15/100;
                $c = $uts * 30/100;
                $d = $uas * 45/100;
                $nilai = $a + $b + $c + $d;
                echo "$nilai";
                ?>
            </td>
            <td align="center">
                <?php
                $tugas = 80;
                $kuis = 75;
                $uts = 80;
                $uas = 70;
                $a = $tugas * 10/100;
                $b = $kuis * 15/100;
                $c = $uts * 30/100;
                $d = $uas * 45/100;
                $nilai = $a + $b + $c + $d;
                if($nilai >= 80){
                    echo "A";
                } else if ($nilai >= 70) {
                    echo "B";
                } else if ($nilai >= 60) {
                    echo "C";
                } else if ($nilai <= 59) {
                    echo "D";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Joko Susilo</td>
            <td>11002</td>
            <td align="center">80</td>
            <td align="center">85</td>
            <td align="center">80</td>
            <td align="center">85</td>
            <td align="center">
            <?php
                $tugas = 80;
                $kuis = 85;
                $uts = 80;
                $uas = 85;
                $a = $tugas * 10/100;
                $b = $kuis * 15/100;
                $c = $uts * 30/100;
                $d = $uas * 45/100;
                $nilai = $a + $b + $c + $d;
                echo "$nilai";
            ?>
            </td>
            <td align="center">
                <?php
                $tugas = 80;
                $kuis = 85;
                $uts = 80;
                $uas = 85;
                $a = $tugas * 10/100;
                $b = $kuis * 15/100;
                $c = $uts * 30/100;
                $d = $uas * 45/100;
                $nilai = $a + $b + $c + $d;
                if($nilai >= 80){
                    echo "A";
                } else if ($nilai >= 70) {
                    echo "B";
                } else if ($nilai >= 60) {
                    echo "C";
                } else if ($nilai <= 59) {
                    echo "D";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Susi Susanti</td>
            <td>11003</td>
            <td align="center">60</td>
            <td align="center">75</td>
            <td align="center">60</td>
            <td align="center">60</td>
            <td align="center">
            <?php
                $tugas = 60;
                $kuis = 75;
                $uts = 60;
                $uas = 60;
                $a = $tugas * 10/100;
                $b = $kuis * 15/100;
                $c = $uts * 30/100;
                $d = $uas * 45/100;
                $nilai = $a + $b + $c + $d;
                echo "$nilai";
            ?>
            </td>
            <td align="center">
                <?php
                $tugas = 60;
                $kuis = 75;
                $uts = 60;
                $uas = 60;
                $a = $tugas * 10/100;
                $b = $kuis * 15/100;
                $c = $uts * 30/100;
                $d = $uas * 45/100;
                $nilai = $a + $b + $c + $d;
                if($nilai >= 80){
                    echo "A";
                } else if ($nilai >= 70) {
                    echo "B";
                } else if ($nilai >= 60) {
                    echo "C";
                } else if ($nilai <= 59) {
                    echo "D";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>Yuli Handayani</td>
            <td>11004</td>
            <td align="center">50</td>
            <td align="center">55</td>
            <td align="center">50</td>
            <td align="center">60</td>
            <td align="center">
            <?php
                $tugas = 50;
                $kuis = 55;
                $uts = 50;
                $uas = 60;
                $a = $tugas * 10/100;
                $b = $kuis * 15/100;
                $c = $uts * 30/100;
                $d = $uas * 45/100;
                $nilai = $a + $b + $c + $d;
                echo "$nilai";
            ?>
            </td>
            <td align="center">
                <?php
                $tugas = 50;
                $kuis = 55;
                $uts = 50;
                $uas = 60;
                $a = $tugas * 10/100;
                $b = $kuis * 15/100;
                $c = $uts * 30/100;
                $d = $uas * 45/100;
                $nilai = $a + $b + $c + $d;
                if($nilai >= 80){
                    echo "A";
                } else if ($nilai >= 70) {
                    echo "B";
                } else if ($nilai >= 60) {
                    echo "C";
                } else if ($nilai <= 59) {
                    echo "D";
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>