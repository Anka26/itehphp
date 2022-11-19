<?php

include('config/db_connect.php');
include('ajax/countries.php');
include('models/Attraction.php');
include('models/Country.php');

$name = $country = $location = $description = $best_visited = '';

$errors = [
    'name' => '', 'country' => '', 'location' => '',
    'description' => '', 'best_visited' => ''
];

if (isset($_POST['add'])) {

    if (empty($_POST['name'])) {
        $errors['name'] = 'Attractions name is required!';
    } else {
        $name = $_POST['name'];
    }

    if (empty($_POST['country'])) {
        $errors['country'] = 'Country is required!';
    } else {
        $country = $_POST['country'];
        if (!in_array($country, $countryNames)) {
            $errors['country'] = 'No such country exists!';
            $country = '';
        }
    }

    if (empty($_POST['location'])) {
        $errors['location'] = 'Attractions location is required!';
    } else {
        $location = $_POST['location'];
    }

    if (empty($_POST['description'])) {
        $errors['description'] = 'Attractions description is required!';
    } else {
        $description = $_POST['description'];
    }


    include('ajax/seasons.php');
    if (empty($_POST['best_visited'])) {
        $errors['best_visited'] = 'Best visited season is required!';
    } else {
        $best_visited = $_POST['best_visited'];
        if (!in_array($best_visited, $seasons)) {
            $errors['best_visited'] = 'No such season exists!';
            $best_visited = '';
        }
    }


    if (!array_filter($errors)) {
        $countryid = returnCountryId($_POST['country']);
        $name = $_POST['name'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $best_visited = $_POST['best_visited'];


        $newAttraction = new Attraction(
            null,
            $countryid,
            $name,
            $location,
            $description,
            $best_visited,
        );

        $newAttraction->createAttraction();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<section class="container">

    <form style="margin-top:50px;" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="white form" method="POST">
        <label for="name">Attraction name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($name) ?>">
        <div class="red-text"><?php echo $errors['name']; ?></div>

        <label for="country">Country:</label>
        <input type="text" name="country" value="<?php echo htmlspecialchars($country) ?>" onkeyup="suggestCountry(this.value)">
        <div class="red-text"><?php echo $errors['country']; ?></div>
        <p><span id="countrySuggest"></span></p>

        <label for="location">Location:</label>
        <input type="text" name="location" value="<?php echo htmlspecialchars($location) ?>" onkeyup="suggestLocation(this.value)">
        <div class="red-text"><?php echo $errors['location']; ?></div>
        <p><span id="locationSuggest"></span></p>

        <label for="description">Description:</label>
        <input type="text" name="description" value="<?php echo htmlspecialchars($description) ?>">
        <div class="red-text"><?php echo $errors['description']; ?></div>

        <label for="best_visited">Best visited in:</label>
        <input type="text" name="best_visited" value="<?php echo htmlspecialchars($best_visited) ?>" onkeyup="suggestSeason(this.value)">
        <div class="red-text"><?php echo $errors['best_visited']; ?></div>
        <p><span id="seasonSuggest"></span></p>

        <div class="center">
            <input type="submit" name="add" value="Insert an attraction" class="btn deep-orange accent-2 z-depth-0">
        </div>
    </form>

</section>

<?php include('templates/footer.php'); ?>

<script>
    function suggestCountry(str = "") {
        if (str.length == 0) {
            document.getElementById("countrySuggest").innerHTML = "";
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("countrySuggest").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "ajax/countries.php?query=" + str, true);
            xmlhttp.send();
        }
    }
</script>

<script>
    function suggestLocation(str = "") {
        if (str.length == 0) {
            document.getElementById("locationSuggest").innerHTML = "";
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("locationSuggest").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "ajax/locations.php?query=" + str, true);
            xmlhttp.send();
        }
    }
</script>

<script>
    function suggestSeason(str = "") {
        if (str.length == 0) {
            document.getElementById("seasonSuggest").innerHTML = "";
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("seasonSuggest").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "ajax/seasons.php?query=" + str, true);
            xmlhttp.send();
        }
    }
</script>

</html>