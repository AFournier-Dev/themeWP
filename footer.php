</div>


<nav class="navbar-nav navbar-expand-lg navbar-dark" style="background-color: #1c1f23;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="container-fluid ">
        <footer class="footer" id="footer">
            <div class="col-sm-10 mx-auto">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">                    
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php wp_nav_menu([
                        'theme_location' => 'footer',
                        'container' => false,
                        'menu_class' => 'navbar-nav mr-auto',
                    ]) ?>
                </div>
                
            </div>
        </footer>
    </div>
</nav>


<?php wp_footer() ?>
<!--permet d'inclure toutes les fonctions dans le footer -->
</body>

</html>