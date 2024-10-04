<?php
/* Template Name: Salón de la Fama */
get_template_part('template-parts/header');
?>

<main>
    <h1>Salón de la Fama</h1>
    <!-- Aquí puedes incluir más contenido -->
    <section>
        <article>
            <h1>Hernadndex</h1>
            <p>Ganador de copa autonoma</p>
        </article>
    </section>
</main>
<?php get_template_part('template-parts/footer'); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
        inicio();

        function inicio() {
            $.ajax({
                url: '<?php echo get_template_directory_uri(); ?>/sc/loadMedallistas.php',
                type: 'POST',
                data: "",
                processData: false,
                contentType: false,
                success: function(res) {
                    console.log(res);
                },
                error: function() {

                }
            });
        }
    });
</script>