<article class="identityCard">
    <?= get_custom_logo() ?>
    <h1><?= get_bloginfo('name') ?></h1>
    <h2><?= get_bloginfo('description') ?></h2>
    <footer>
        <ul>
        <?php if ($url_twitter = get_theme_mod('url_twitter')) : ?>
                <li>
                    <a href="<?= esc_url($url_twitter) ?>"><?= esgi_getIcon('twitter') ?></a>
                </li>
            <?php endif; ?>
            <?php if ($url_facebook = get_theme_mod('url_facebook')) : ?>
                <li>
                    <a href="<?= esc_url($url_facebook) ?>"><?= esgi_getIcon('facebook') ?></a>
                </li>
            <?php endif; ?>
            <?php if ($url_google = get_theme_mod('url_google')) : ?>
                <li>
                    <a href="<?= esc_url($url_google) ?>"><?= esgi_getIcon('google') ?></a>
                </li>
            <?php endif; ?>
            <?php if ($url_linkedin = get_theme_mod('url_linkedin')) : ?>
                <li>
                    <a href="<?= esc_url($url_linkedin) ?>"><?= esgi_getIcon('linkedin') ?></a>
                </li>
            <?php endif; ?>
        </ul>
    </footer>
</article>