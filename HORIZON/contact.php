<?php
$title = "contact";
require_once(__DIR__ . '/includes/header.php');
?>
<section id="contact">
    <form action="" method="post">
        <label for="fname">Nom</label><br>
        <input type="text" id="fname" name="fname" placeholder="Nom"><br>
        <label for="lname">Prénom</label><br>
        <input type="text" id="lname" name="lname" placeholder="Prénom"><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" placeholder="@mail"><br>
        <label for="message">Message</label><br>
        <textarea id="message" name="message"></textarea><br>
        <input type="submit" value="Envoyer">
    </form>
</section>
<?php
require_once(__DIR__ . '/includes/footer.php');
?>