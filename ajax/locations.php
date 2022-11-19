<?php

include('../models/Attraction.php');
$locations = returnAllLocations();


if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];
    $suggestion = "";

    if ($query !== "") {
        $query = strtolower($query);
        $length = strlen($query);

        foreach ($locations as $location) {
            if (stristr($query, substr($location, 0, $length))) {
                if ($suggestion == "") {
                    $suggestion = $location;
                } else {
                    $suggestion .= ", $location";
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
