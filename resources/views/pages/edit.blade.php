<?php

include_once "inc/header.php";
include_once './inc/settings.php';
include_once './db/models/Feedback.php';
include_once './db/Database.php';
include_once './inc/menu-white.php';

$db = new Database();
$feed = null;

?>

<div id="parallax" class="paralax" style="background-image: url('img/hero_inner_beer_02-scaled.jpg')">

    <?php
    include_once "./inc/menu-transparent.php";
    ?>

    <div class="paralax container">
        <div class="paralax-text black-text">
            <h1 style="
              font-family: 'Roboto Condensed';
              font-weight: 800;
              font-size: 3.1em;
              margin-bottom: 1em;
            ">
                FEEDBACK EDIT
            </h1>
        </div>
    </div>
</div>

<?php

if (isset($_GET['edit']) && isset($_GET['feedback_id'])) {
    $feed = Feedback::getByID($db, $_GET['feedback_id']);
}
if (isset($_POST['edited-submit']) && !is_null($feed)) {

    if (is_null($feed)) return;

    if ($_COOKIE['is-logged'] == $feed->getUserId()) {
        $sql
            = "UPDATE `feedbacks` SET `subject`='{$_POST['edited-feedback']}', `message` = '{$_POST['edited-message']}' WHERE `id` = {$_GET['feedback_id']}";
        Feedback::update($db, $sql);
    }
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
?>
<div class="white">
    <div class="containerr">

        <form action="#" method="POST" class="edit-feedback">
            <input type="text" name="edited-feedback" placeholder="EDIT TOPIC" value="<?php echo $feed->getSubject() ?>">
            <textarea name="edited-message" rows="10" placeholder="EDIT MESSAGE"><?php echo $feed->getMessage() ?></textarea>
            <button name="edited-submit" type="submit">SUBMIT</button>
        </form>
    </div>
</div>

<?php
include_once "./inc/paralax-no3.php";
include_once "./inc/footer.php";
?>