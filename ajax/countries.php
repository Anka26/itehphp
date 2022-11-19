<?php

$host = 'localhost';
$user = 'admin';
$password = 'admin';
$database = 'turisticattractions';
$conn = mysqli_connect($host, $user, $password, $database);

$query = "SELECT * FROM country";
$result = mysqli_query($conn, $query);
$countries = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);

$countryNames = [];

foreach ($countries as $country) {
    $countryNames[] = $country['name'];
}

if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];
    $suggestion = "";

    if ($query !== "") {
        $query = strtolower($query);
        $length = strlen($query);

        foreach ($countryNames as $country) {
            if (stristr($query, substr($country, 0, $length))) {
                if ($suggestion == "") {
                    $suggestion = $country;
                } else {
                    $suggestion .= ", $country";
                }
            }
        }
    }
    if ($suggestion == "") {
        echo 'No suggestions';
    } else {
        echo $suggestion;
    }
}
