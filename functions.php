<?php
if ( ! function_exists( 'mi_portafolio_blog_assets' ) ) {
    /**
     * Enlaza los archivos CSS y JS del tema.
     */
    function mi_portafolio_blog_assets() {
        // Carga la hoja de estilos principal.
        wp_enqueue_style( 'mi-portafolio-blog-style', get_stylesheet_uri(), array(), '1.0.0' );

        // Carga scripts JS.
        // Para la mejor performance, pon los scripts en el footer.
        wp_enqueue_script( 'mi-portafolio-blog-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
    }
}
add_action( 'wp_enqueue_scripts', 'mi_portafolio_blog_assets' );


?>