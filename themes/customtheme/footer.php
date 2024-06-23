<footer class="footer">
    <?php if ( is_active_sidebar( 'ref-id' ) ) : ?>
        <?php dynamic_sidebar( 'ref-id' ); ?>
    <?php endif; ?>
    <div class="container">
        <span class="text-muted">birds of a feather we should stick together</span>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
