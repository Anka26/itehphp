<?php

include('config/db_connect.php');

$query = "SELECT * FROM attraction ORDER BY name ASC";
$result = mysqli_query($conn, $query);
$attractions = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);


?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<div class="container">
    <div class="row">
        <?php foreach ($attractions as $attraction) : ?>
            <div class="col s12 m6 l4 xl3">
                <div class="card z-depth-0 radius-card">
                    <img src="img/icon.png" alt="pl" class="icon-card">
                    <div class="card-content center">
                        <h5><?php echo htmlspecialchars($attraction['name']); ?></h5>
                    </div>
                    <div class="card-action right-align radius-card">
                        <a href="attraction.php?id=<?php echo $attraction['id']; ?>" class="deep-orange-text accent-2 text-darken-2">
                            More Info
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include('templates/footer.php'); ?>

</html>