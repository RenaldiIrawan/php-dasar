<?php
$multidimensi = [
    [ 
        "No" => 1,
        "Nim" => "D212111013",
        "Nama" => "Renaldi Irawan",
    ],
    [
        "No" => 2,
        "Nim" => "D212111033",
        "Nama" => "Novita Qadariah",
    ],
    [
        "No" => 3,
        "Nim" => "D212111034",
        "Nama" => "Rahmatia",
    ],
    [
        "No" => 4,
        "Nim" => "D212111032",
        "Nama" => "Wawan Jefriansyah",
    ],
    [
        "No" => 5,
        "Nim" => "D212111012",
        "Nama" => "Puspa Dewi Kusumawati",
    ],
    [
        "No" => 6,
        "Nim" => "D212111031",
        "Nama" => "Muhammad Reza Arddiansyah",
    ],
    [
        "No" => 7,
        "Nim" => "D212111015",
        "Nama" => "Rudi Loilatu",
    ],
    [
        "No" => 8,
        "Nim" => "D212111030",
        "Nama" => "Siti Nur Rohumah",
    ],
    [
        "No" => 9,
        "Nim" => "D212111003",
        "Nama" => "Dasima Septiani",
    ],
    [
        "No" => 10,
        "Nim" => "D212111029",
        "Nama" => "Ineu Rahmawati ",
    ],
];

echo "<table border='1' cellspacing= '0'>";
echo "<tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
     </tr>";

foreach ($multidimensi as $value) {
    echo "<tr>
            <td>{$value['No']}</td>
            <td>{$value['Nim']}</td>
            <td>{$value['Nama']}</td>
          </tr>";
}
echo "</table>";
?>