<?php ?>

        </main>
        <!-- end of .site-content -->


        <footer class="site-footer" id="site-footer">

            <div class="footer-wrapper">
                
                <div class="attribute">
                    <p>References of Images in Home:</p>

                    <ul>
                        <li>Work by <a href="https://unsplash.com/@markusspiske?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Markus Spiske</a> on <a href="https://unsplash.com/s/photos/coder?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></li>
                    
                        <li>Featured by <a href="https://unsplash.com/@fresh_studio?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Zoran Borojevic</a> on <a href="https://unsplash.com/s/photos/diary?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></li>

                        <li>About by <a href="https://unsplash.com/@iamfelicia?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Felicia Buitenwerf</a> on <a href="https://unsplash.com/s/photos/who-i-am?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a></li>
                    </ul>
                </div>

                <div class="sns">

                    <p>Connect with me on:</p>

                    <!-- Social Menu Location -->
                    <?php    
                        wp_nav_menu(array(
                            'theme_location' => 'menu-social',
                            'menu_class' => 'social-menu',
                            'link_before' => '<span class="screen-reader-text">',
                            'link_after' => '</span>',
                        )); 
                    ?>

                </div>
            </div>
            

        </footer>

    </div>
    <!-- end of .page #page -->

    <?php wp_footer(); ?>
</body>
</html>