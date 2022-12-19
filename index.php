<?php
require_once(__DIR__ . '/includes/header.php');
// TODO require_once(__DIR__ . '/includes/aside.php');
?>

<main id="index-main">
    <header id="index-main-header">
        <h1 id="index-main-title">
            Sites Web <span class="highlight">professionnels</span>, et <span class="highlight">accessibles</span> !
        </h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, ipsum debitis provident voluptatem aperiam quidem perferendis suscipit eius deleniti recusandae quibusdam, et natus unde consectetur?</p>
    </header>
    <section id="index-newsletter">
        <p>Restez informés avec notre Newsletter !</p>
        <form action="#">
            <input type="mail" placeholder="Entrez votre mail...">
            <input type="submit" value="Je reste informé !">
        </form>
    </section>
    <section id="index-worklist">
        <div class="work-card">
            <img class="img-worklist" src="assets/images/logo2.png" alt="img prestation">
            <h3>Web Design</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis deserunt esse ipsum officia quas maiores.</p>
        </div>
        <div class="work-card">
            <img class="img-worklist" src="assets/images/logo2.png" alt="img prestation">
            <h3>Website Maintenance</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium voluptates laboriosam adipisci possimus officia cumque.</p>
        </div>
        <div class="work-card">
            <img class="img-worklist" src="assets/images/logo2.png" alt="img prestation">
            <h3>Website Hosting</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo officiis saepe ipsum harum eaque. Iste.</p>
        </div>
    </section>

</main>

<?php
require_once(__DIR__ . '/includes/footer.php');
?>