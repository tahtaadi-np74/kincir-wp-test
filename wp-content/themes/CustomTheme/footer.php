<footer>
    <div class="footer-widgets">
        <?php
        if (is_active_sidebar('footer-1')) {
            dynamic_sidebar('footer-1');
        }
        ?>
    </div>
    <div class="site-info">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>