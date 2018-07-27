<?php
/**
 * Template Name: Listado de Emprendedores
 */
get_header(); ?>

<!-- Wrapper start -->
<div class="main">

<!-- Post single start -->
<section class="page-module-content module">
    <div class="container">

        <div class="row">

            <!-- Content column start -->
            <div class="col-sm-8">
            <div class="post-header font-alt">
                <h2 class="post-title entry-title">
                    <a href="#" rel="bookmark">Listado de Emprendedores</a>
                </h2>
            </div>
            <?php
            $sites = get_sites();
            foreach ( $sites as $site ): switch_to_blog( $site->blog_id ); ?>
                <div><a href="<?php echo get_bloginfo( 'url' ); ?>" target="_blank"><?php echo get_bloginfo( 'name' ); ?></a></div>
            <?php endforeach; ?>

            </div>
            <!-- Content column end -->

        </div><!-- .row -->

    </div>
</section>
<!-- Post single end -->

<?php get_footer(); ?>