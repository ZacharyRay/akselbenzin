</div>
</div>
<?php
wp_footer();
$some_footer = get_field('footer_some', 'option');
?>
<footer>
    <!-- four column block -->
    <div class="service_wrapper">
        <div class="services_grid">
            <div class="service_one">
                <h5>Montørassistance 24/7/365</h5>
                <p>Uanset hvor i Danmark du har brug for os, er vi fremme senest 3 timer efter, du har ringet. 24 timer i døgnet, 365 dage om året.</p>
            </div>
            <div class="service_two">
                <h5>Dag til dag levering</h5>
                <p>Undgå driftsstop og spildtid. Vi har altid dag til dag levering i hele Danmark, hvis du bestiller inden klokken 13.</p>
            </div>
                <div class="service_three">
                <h5>One Stop Shop</h5>
                <p>Vores lager ved Randers har alt fra trådsold til sliddele på hylderne, så du kun behøver at handle ét sted.</p>
            </div>
            <div class="service_four">
                <h5>Kompetent rådgivning</h5>
                <p>Vi har mere end 50 års viden og solid erfaring. Så ring hvis du har brug for hjælp og rådgivning.</p>
            </div>
        </div>
    </div>

    <!-- product footer -->
    <div class="product-footer">
        <div class="products-footer-grid">
            <div class="products_one">
                <h5>Knuseanlæg</h5>
                <?php   wp_nav_menu(
                    array(
                        'theme_location' => 'footer-knuseanlaeg'
                    )
                ); ?>
            </div>
            <div class="products_two">
                <h5>Neddelingsanlæg</h5>
                <?php   wp_nav_menu(
                    array(
                        'theme_location' => 'footer-neddelingsanlaeg'
                    )
                ); ?>
            </div>
            <div class="products_three">
                <h5>Sorteringsanlæg</h5>
                <?php   wp_nav_menu(
                    array(
                        'theme_location' => 'footer-sorteringsanlaeg'
                    )
                ); ?>
            </div>
        </div>
    </div>

    <!-- so-me footer -->
    <div class="so_me">
        <div class="so_me_flex">
            <div class="so_me_text">
                <h5>Sociale medier</h5>
                <p>Følg os på de sociale medier</p>
            </div>
            <div class="so_me_icons">
                <div class="facebook">
                    <a href="<?= $some_footer['footer_so_me_facebook'] ?>" class="fa fa-facebook"></a>
                    <p>Facebook</p>
                </div>
                <div class="youtube">
                    <a href="<?= $some_footer['footer_so_me_youtube'] ?>" class="fa fa-youtube"></a>
                    <p>Youtube</p>
                </div>
            </div>
        </div>
    </div>

    <!-- credits footer -->
    <div class="credit">
        <div class="credit_flex">
            <div class="copyright">
                <p><?php
                    echo date("Y");
                    ?> © Aksel Benzin A/S / CVR 20447389</p>
            </div>
            <div class="privacy">
                <?php   wp_nav_menu(
                    array(
                        'theme_location' => 'footer-privacy'
                    )
                ); ?>
            </div>
        </div>
    </div>
</footer>
</body>
</html>