<?php

include('config/db_connect.php');

if (isset($_GET['id'])) {
    $attractionid = mysqli_real_escape_string($conn, $_GET['id']);

    $query = "SELECT * FROM attraction WHERE id='$attractionid'";
    $result = mysqli_query($conn, $query);
    $attraction = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

    $query = "SELECT * FROM country WHERE id={$attraction['countryid']}";
    $result = mysqli_query($conn, $query);
    $country = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
}

if (isset($_POST['delete'])) {
    $attractionid = mysqli_real_escape_string($conn, $_POST['attractionid']);
    $countryid = mysqli_real_escape_string($conn, $_POST['countryid']);

    $query = "DELETE FROM attraction WHERE id = $attractionid AND countryid = $countryid";
    if (mysqli_query($conn, $query)) {
        header('Location: index.php');
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<?php if ($attraction == null) : ?>

    <h1 class="center">There is no such attraction in database!</h1>
    <div class="center">
        <a href="index.php" class="btn center deep-orange accent-2">Return</a>
    </div>

<?php else : ?>

    <div class="container center">
        <div class="card z-depth-0 radius-card" style="padding-bottom: 30px;">
            <img src="<?php echo $country['img']; ?>" alt="icon" class="icon-card">
            <h3><?php echo $attraction['name']; ?></h3>
            <h4>Location: <?php echo $attraction['location']; ?>, <?php echo $country['name']; ?></h4>
            <h4>Best visited in <?php echo $attraction['best_visited']; ?></h4>
            <p style="padding-left: 150px; padding-right:150px"><?php echo $attraction['description']; ?></p>

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" style="padding-top:20px">
                <input type="hidden" name="attractionid" value="<?php echo $attractionid; ?>">
                <input type="hidden" name="countryid" value="<?php echo $country['id']; ?>">
                <input type="submit" name="delete" value="delete" class="btn center deep-orange darken-2">
            </form>

        </div>
    </div>

<?php endif; ?>

<?php include('templates/footer.php'); ?>

</html>