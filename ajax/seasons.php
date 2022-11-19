<?php

$seasons[] = 'Winter';
$seasons[] = 'Spring';
$seasons[] = 'Summer';
$seasons[] = 'Fall';


if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];
    $suggestion = "";

    if ($query !== "") {
        $query = strtolower($query);
        $length = strlen($query);

        foreach ($seasons as $season) {
            if (stristr($query, substr($season, 0, $length))) {
                if ($suggestion == "") {
                    $suggestion = $season;
                } else {
                    $suggestion .= ", $season";
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
