<?php get_header() ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                <div class="container mt-4">
                        <h1>Contexte entreprenarial en France en 2021</h1>
                        <p>21% des Français (soit 11 millions de personnes) déclarent avoir envie de créer une entreprise, d’en reprendre une ou de se mettre à leur compte en 2021. 58% d’entre eux (3,7 millions de personnes) déclarent vouloir concrétiser leur projet dans les deux ans à venir, soit une augmentation de 4 points par rapport à janvier 2020
                                Des futurs entrepreneurs bien préparés. 34% des entrepreneurs potentiels déclarent cette année avoir un projet bien préparé à court terme, soit une augmentation de 3 points par rapport à la précédente édition du baromètre. Ce sont ainsi 7% des Français qui ont un projet d’entrepreneuriat prêt à débuter dans les deux ans. Autre signal positif, cette proportion reste dans la moyenne observée au cours des années passées (entre 5% et 7% depuis 2016). Des jeunes toujours séduits par l’aventure entrepreneuriale. Le baromètre démontre également le maintien de l’intérêt des jeunes pour les perspectives d’entrepreneuriat, et ce même avant leur entrée sur le marché du travail. Ce sont ainsi 36% des étudiants qui déclarent vouloir créer leur entreprise en 2021.
                        </p>
                </div>

                <div class="container mt-2">
                        <h2>Qu'est ce que sont les méthodes</h2>
                        <p>Avec de tel chiffre pour l'entreprenariat il serai dangereux de croire que l'adventure est facile. La méthodologie est l'étude de l'ensemble des méthodes scientifiques. Elle peut être considérée comme la science de la méthode, ou « méthode des méthodes ». Wikipédia</p>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto mt-2">
                        <div class="row mt-2 mb-2">
                                <div class="col-4">
                                        <a href="
                                <?= get_home_url() ?>/pourquoi-des-methodes" class="btn btn-danger">Pourquoi des méthodes</a>
                                </div>
                                <div class="col-4">
                                        <a href="<?= get_home_url() ?>/quelques-methodes" class="btn btn-danger">Quelques méthodes</a>
                                </div>
                                <div class="col-4">
                                        <a href="<?= get_home_url() ?>/appliquer-les-methodes" class="btn btn-danger">Appliquer des méthodes</a>
                                </div>
                        </div>
                </div>


                <div class="d-grid gap-2 col-6 mx-auto mt-2">
                        <div class="row mt-2">
                                <a href="<?= get_post_type_archive_link('post') ?>" class="btn btn-primary">Voir les archives</a>
                        </div>
                </div>


                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam deleniti ipsum, nisi maxime voluptatem quos explicabo illum neque, alias eum mollitia dolores animi porro, temporibus sit. Aperiam vero dicta quaerat. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, voluptas nam! Quae quisquam fugiat molestiae dolore provident adipisci quam ratione sapiente dicta quod. Cum, voluptatibus cupiditate eius error maiores inventore.
                Error, eaque exercitationem soluta, nisi fuga quibusdam ad vel tenetur accusantium quaerat doloribus voluptas provident. Voluptas ut rem sed molestiae veniam atque! Blanditiis inventore illo qui, asperiores quas distinctio obcaecati?
                Nemo ipsa, nihil mollitia nostrum explicabo quam sunt quis enim officiis eius quos iste est asperiores quae provident saepe corporis. Repudiandae magnam veritatis nobis quas sit hic aut quis nesciunt?
                Laborum asperiores esse porro earum hic maiores qui impedit at blanditiis, veritatis illo doloremque ullam iure placeat? Earum quis, omnis a totam natus maxime ipsa dolorem nostrum ipsam ratione recusandae?
                Saepe autem dolorum quidem aspernatur vitae aliquam nisi quis ea voluptate pariatur ratione quibusdam in minima unde quia, ipsum, repellendus repudiandae ipsa. Maiores quos velit aliquam est doloremque et omnis?
                Et repudiandae sapiente officiis quas ad labore aut voluptatem autem nemo eum inventore nihil, illum minima quibusdam numquam voluptatum! Excepturi laudantium praesentium tempora est dolorem fugiat ab molestias suscipit fugit.
                Accusamus cupiditate aperiam eligendi, qui blanditiis fugiat aliquam! Fuga rem magnam omnis aspernatur molestiae quod accusamus, blanditiis amet ut recusandae sint, aperiam provident cupiditate quae. Dolores error tenetur saepe fugit.
                Enim ratione atque magnam nesciunt eos possimus delectus doloribus impedit architecto? Saepe, fuga! Fugiat consequuntur voluptates dicta nostrum laudantium maiores eos voluptas, quae eveniet exercitationem voluptatibus id, consequatur vitae ratione!
                Nam, placeat iusto facilis magni similique impedit distinctio odio. Quam dicta voluptatem, exercitationem quaerat dolores sequi recusandae eligendi assumenda perspiciatis qui, dolorem reiciendis quibusdam? Perferendis unde nobis magnam temporibus recusandae.
                Beatae rerum, recusandae alias inventore saepe doloremque eligendi quod architecto! Dignissimos, quis. Quas repellendus repudiandae sed perspiciatis sint? Modi minus voluptatum voluptate natus doloribus ipsa nostrum in quo doloremque repellendus!</p>

<?php endwhile;
endif;
wp_reset_postdata(); ?>
</div>



<?php get_footer() ?>