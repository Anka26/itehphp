<?php

include('config/db_connect.php');

if (isset($_GET['id'])) {
    $countryid = mysqli_real_escape_string($conn, $_GET['id']);
}

$query = "SELECT * FROM country WHERE id = $countryid";
$result = mysqli_query($conn, $query);
$country = mysqli_fetch_assoc($result);
mysqli_free_result($result);

$query = "SELECT * FROM attraction WHERE countryid='$countryid'";
$result = mysqli_query($conn, $query);
$attractions = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<?php if ($country == null) : ?>

    <h1 class="center">There is no country with that ID!</h1>
    <div class="center">
        <a href="index.php" class="btn center deep-orange darken-2">Return</a>
    </div>

<?php else : ?>

    <?php if ($attractions == null) { ?>

        <div class="container center">
            <h3 class="center">No attractions in <?php echo $country['name'] ?> in database! </h3>
            <a href="add.php" class="btn center deep-orange darken-2">
                Add some
            </a>
        </div>



    <?php } else {; ?>

        <div class="container">
            <h4 class="center">Attractions in <?php echo $country['name'] ?>:</h4>
            <div class="row">
                <?php foreach ($attractions as $attraction) : ?>
                    <div class="col s12 m6 l4">
                        <div class="card z-depth-0 radius-card">
                            <img src="<?php echo $country['img']; ?>" alt="icon" class="icon-card">
                            <div class="card-content center">
                                <h5><?php echo htmlspecialchars($attraction['name']); ?></h5>
                            </div>
                            <div class="card-action right-align radius-card">
                                <a href="attraction.php?id=<?php echo $attraction['id']; ?>" class="deep-orange-text text-darken-2">
                                    More Info
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    <?php }; ?>

<?php endif; ?>

<?php include('templates/footer.php'); ?>

</html>