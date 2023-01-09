<?php
$title = "about";
require_once(__DIR__ . '/includes/header.php');
?>
<section id="about-entreprise">
    <div class="about-img">
        <img src="assets/images/logo2.png" alt="Logo de l'entreprise">
    </div>
    <div class="about-txt">
        <h2>Notre entreprise, votre projet</h2>
        <p>Notre entreprise offre des services de développement web de qualité pour aider les entreprises à atteindre leurs objectifs en ligne. Nous travaillons avec des technologies de pointe pour créer des applications et de sites web performants et attrayants. Nous proposons également des services de maintenance et de mise à jour pour assurer la pérennité de votre projet. Nous sommes passionnés par notre métier et nous nous engageons à fournir un travail de qualité à chaque étape du processus de développement. N'hésitez pas à nous contacter pour discuter de votre projet et de la façon dont nous pouvons vous aider à le réaliser.</p>
    </div>
</section>
<section id="about-team">
    <div class="equipe-content">
        <?php 
        $sth = $conn->prepare("SELECT * FROM workteam");
        $sth->execute();
        $fetch = $sth->fetchAll(PDO::FETCH_ASSOC);
        for($i = 0; $i < count($fetch); $i++):?>
        <div class="blog-card">
            <div class="user user1">
                <div class="photo" style="background-image: url(assets/images/<?= $fetch[$i]['photo_profil']?>);"></div>
                <ul class="details">
                    <li class="author"><a href="#"><?= $fetch[$i]['prenom']; ?> <?= $fetch[$i]['nom']; ?></a></li>
                    <li class="date"><?= $fetch[$i]['date_entree']; ?></li>
                    <li class="tags">
                        <ul>
                            <li><a href="https://fr.wikipedia.org/wiki/C%2B%2B" target="_blank">C++</a></li>
                            <li>
                                <a href="https://fr.wikipedia.org/wiki/Python_(langage)" target="_blank">Python</a>
                            </li>
                            <li>
                                <a href="https://fr.wikipedia.org/wiki/Java_(langage)" target="_blank">Java</a>
                            </li>
                            <li>
                                <a href="https://fr.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="description">
                <h1>Learning to Code in python</h1>
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto
                    obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis,
                    sit.
                </p>
                <p class="read-more">
                    <a href="#">Read More</a>
                </p>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</section>



<?php
require_once(__DIR__ . '/includes/footer.php');
?>