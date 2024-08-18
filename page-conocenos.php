<?php
/* Template Name: Conócenos */
get_template_part('template-parts/header');
?>

<main>
    <h1>Conócenos</h1>
    <section>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus reprehenderit veritatis in sint maxime adipisci neque accusantium officiis labore perferendis aperiam illum, soluta at nobis consequuntur? Rem impedit assumenda reiciendis.</p>
    </section>

    <!-- Feed de Facebook -->
    <div class="facebook-feed">
        <!-- Pega aquí el código de embed proporcionado por Facebook -->
        <div class="fb-page" data-href="https://www.facebook.com/uaqdeportes" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/uaqdeportes" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/uaqdeportes">UAQ Deportes</a></blockquote>
        </div>
    </div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0" nonce="Tj4H5kMi"></script>
</main>

<?php get_template_part('template-parts/footer'); ?>