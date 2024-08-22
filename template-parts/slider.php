<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <?php
    wp_head();
    wp_footer();
    ?>

    <style>
        .sliderContainer {
            position: relative;
            width: 100%;
            /* max-width: 800px; */
            margin: auto;
            overflow: hidden;
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
            position: relative;
        }

        .slider img {
            width: 100%;
            flex-shrink: 0;
            max-height: 500px;
            object-fit: cover;
        }

        button.prev,
        button.next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            z-index: 10;
            border-radius: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            /* Asegura que los botones estén por encima de las imágenes */
        }

        button.prev svg,
        button.next svg {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 28px;
        }

        button.prev {
            left: 10px;
        }

        button.next {
            right: 10px;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php
        function render_slider($images = array()) {
            if (empty($images)) return;
            ?>
            <section class="sliderContainer">
                <button class="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </button>
                <div class="slider">
                    <?php foreach ($images as $image) : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $image; ?>" alt="TRYOUTS UAQ" />
                    <?php endforeach; ?>
                </div>
                <button class="next">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </section>
            <?php
        }
    ?>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            let currentIndex = 0;
            const slides = $('.slider img');
            const totalSlides = slides.length;

            function moveSlide(index) {
                if (index < 0) {
                    currentIndex = totalSlides - 1;
                } else if (index >= totalSlides) {
                    currentIndex = 0;
                } else {
                    currentIndex = index;
                }
                const newTransform = -currentIndex * 100 + '%';
                $('.slider').css('transform', 'translateX(' + newTransform + ')');
            }

            $('.next').click(function() {
                moveSlide(currentIndex + 1);
            });

            $('.prev').click(function() {
                moveSlide(currentIndex - 1);
            });
        });
    </script>
</body>

</html>