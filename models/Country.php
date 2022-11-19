<?php

class Country
{
    public $id;
    public $name;
    public $img;

    public function __construct($id, $name, $img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->img = $img;
    }
}


function returnCountryId($country)
{
    $host = 'localhost';
    $user = 'admin';
    $password = 'admin';
    $database = 'turisticattractions';
    $conn = mysqli_connect($host, $user, $password, $database);

    $query = "SELECT * FROM country WHERE name='$country'";
    $result = mysqli_query($conn, $query);
    $country = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

    return $country['id'];
}
