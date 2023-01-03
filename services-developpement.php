<?php
$title = "Services - Développement";
require_once(__DIR__ . '/includes/header.php');
?>
<section class="services" id="developpement-forfaits">
    <?php
    $sth = $conn->prepare("SELECT * FROM developpement");
    $sth->execute();
    $fetch_result = $sth->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($fetch_result);
    for ($i = 0; $i < count($fetch_result); $i++):
    ?>
        <div class="forfait-wrapper">
            <h2><span class="highlight"><?= $fetch_result[$i]['name_forfait']; ?></span></h2>
            <br>
            <?= $fetch_result[$i]['description']; ?>
            <button class="btn-services">Prendre rendez-vous</button>
        </div>
    <?php endfor; ?>
</section>
<?php
require_once(__DIR__ . '/includes/footer.php');
?>