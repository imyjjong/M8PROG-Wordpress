<footer class="footer">
    <?php if ( is_active_sidebar( 'ref-id' ) ) : ?>
        <?php dynamic_sidebar( 'ref-id' ); ?>
    <?php endif; ?>
    <div class="footerWrapper">
        <h3 class="footerWrapper__logo"></h3>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
