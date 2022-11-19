<?php

include('config/db_connect.php');

$query = "SELECT * FROM country ORDER BY name ASC";
$result = mysqli_query($conn, $query);
$countries = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);


?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<div class="container">
    <div class="row">
        <?php foreach ($countries as $country) : ?>
            <div class="col s12 m6 l4 xl3">
                <div class="card z-depth-0 radius-card">
                    <img src="<?php echo $country['img']; ?>" alt="country" class="icon-card">
                    <div class="card-content center">
                        <h5><?php echo htmlspecialchars($country['name']); ?></h5>
                    </div>
                    <div class="card-action right-align radius-card">
                        <a href="country.php?id=<?php echo $country['id']; ?>" class="deep-orange-text text-darken-2">
                            View Attractions
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?php include('templates/footer.php'); ?>

</html>