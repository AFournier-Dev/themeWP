</div>


<footer class="footer" id="footer">
</footer>

<!-- 
<div class="d-grid gap-2 col-6 mx-auto mt-2 mb-2">
    <a href="<?= get_home_url() ?>/mise-en-garde" class="btn btn-danger" type="button">Mise en garde</a>
    <a href="<?= get_home_url() ?>/politique-de-confidentialite" class="btn btn-primary" type="button">Politique de confidentialité</a>
</div>
-->




<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #FC0D0B;">
    <div class="col-sm-8 mx-auto">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu([
                'theme_location' => 'footer',
                'container' => true,
                'menu_class' => 'navbar-nav mr-auto',
            ]) ?>
        </div>
    </div>
</nav>



<?php wp_footer() ?>
<!--permet d'inclure toutes les fonctions dans le footer -->

</body>

</html>