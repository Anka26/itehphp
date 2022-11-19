<?php

class Attraction
{
    public $id;
    public $countryid;
    public $name;
    public $location;
    public $description;
    public $best_visited;

    public function __construct(
        $id,
        $countryid,
        $name,
        $location,
        $description,
        $best_visited
    ) {
        $this->id = $id;
        $this->countryid = $countryid;
        $this->name = $name;
        $this->location = $location;
        $this->description = $description;
        $this->best_visited = $best_visited;
    }

    public function createAttraction()
    {
        $host = 'localhost';
        $user = 'admin';
        $password = 'admin';
        $database = 'turisticattractions';
        $conn = mysqli_connect($host, $user, $password, $database);

        $query = "INSERT INTO attraction(countryid, name, location, 
            description, best_visited)
        VALUES('$this->countryid', '$this->name', '$this->location',
            '$this->description', '$this->best_visited')";

        if (mysqli_query($conn, $query)) {
            header('Location: index.php');
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}

function returnAllLocations()
{
    $host = 'localhost';
    $user = 'admin';
    $password = 'admin';
    $database = 'turisticattractions';
    $conn = mysqli_connect($host, $user, $password, $database);

    $query = "SELECT * FROM attraction";
    $result = mysqli_query($conn, $query);
    $attractions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);

    $locations = [];

    foreach ($attractions as $attraction) {
        $locations[] = $attraction['location'];
    }

    return $locations;
}
