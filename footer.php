<?php
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// Globale Einstellungen werden geladen

$global_social		= get_field('opt_socialmedia', 'option') ?: false;
$global_contact		= get_field('opt_contact', 'option') ?: false;
$global_support		= get_field('opt_support', 'option') ?: false;

$global_logos 		= get_field('opt_logos', 'option') ?: false;
$global_footer 		= get_field('opt_footer', 'option') ?: false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$override_logos		= get_field('override_logos') ? get_field('instance_logos')['opt_logos'] : false;
$override_footer	= get_field('override_footer') ? get_field('instance_footer')['opt_footer'] : false;
$override_support	= get_field('override_support') ? get_field('instance_support')['opt_support'] : false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$page_logos		= $override_logos ?: $global_logos;
$page_footer	= $override_footer ?: $global_footer;
$page_support	= $override_support ?: $global_support;

// ----------------------------------------------------------------------
?>

<footer id="footer">
    <a href="#header" class="scroll-to-top">
        <svg xmlns="http://www.w3.org/2000/svg" width="20.729" height="20.703" viewBox="0 0 20.729 20.703">
            <path id="arrow-left" d="M24.982,14.633h-13.1l5.7-5.679A1.733,1.733,0,1,0,15.127,6.5L6.5,15.134a1.784,1.784,0,0,0,0,2.451l8.63,8.63a1.733,1.733,0,1,0,2.451-2.451l-5.7-5.679h13.1a1.726,1.726,0,1,0,0-3.452Z" transform="translate(26.725 -6.005) rotate(90)" fill="#fff"/>
        </svg>
    </a>
    <div class="logo-wrapper">
        <svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 114.3 54.8" style="enable-background:new 0 0 114.3 54.8;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#FFFFFF;}
</style>
            <g transform="translate(-1.351 -183.918)">
                <g>
                    <g transform="translate(1.351 183.918)">
                        <path class="st0" d="M13.4,7.2c0,3.9-2.3,7.3-6.8,7.3C2.3,14.4,0,11.3,0,7.2C0,3.2,2.5,0,6.8,0C10.8,0,13.4,3,13.4,7.2 M2.7,7.2
				c0,2.8,1.3,5.1,4,5.1c2.9,0,4-2.4,4-5.1c0-2.8-1.2-5-4-5S2.7,4.4,2.7,7.2"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <path class="st0" d="M16.1,14.3v-14h3.3c1.8,3.2,5.5,9.3,6.2,10.9l0,0c-0.1-1.6-0.1-3.9-0.1-6.2V0.2h2.4v14h-3.1
				c-1.6-2.8-5.5-9.7-6.3-11.3l0,0c0.1,1.4,0.1,4.1,0.1,6.6v4.7L16.1,14.3L16.1,14.3z"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <path class="st0" d="M31.4,0.3H34v11.8h7.1l-0.3,2.2h-9.4V0.3z"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <rect x="43" y="0.3" class="st0" width="2.6" height="14"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <path class="st0" d="M49.1,14.3v-14h3.3c1.8,3.2,5.5,9.3,6.2,10.9l0,0c-0.1-1.6-0.1-3.9-0.1-6.2V0.2h2.4v14h-3.1
				c-1.6-2.8-5.5-9.7-6.3-11.3l0,0c0.1,1.4,0.1,4.1,0.1,6.6v4.7L49.1,14.3L49.1,14.3z"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <path class="st0" d="M73.8,8.1H67v4h7.5l-0.3,2.2h-9.7v-14h9.7v2.2H67v3.4h6.8V8.1z"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <path class="st0" d="M12.9,28.5c0-2.6,0-5.3,0.1-6.8h-0.1C12.3,24,10,30.1,8.4,34.5H6.7c-1.2-3.6-3.6-10.4-4.2-12.8H2.4
				c0.1,1.6,0.1,4.8,0.1,7.2v5.6H0.8V20.4h2.8c1.6,4.4,3.6,10,4.1,11.8l0,0c0.3-1.4,2.6-7.6,4.3-11.8h2.7v14.1h-1.8V28.5L12.9,28.5z
				"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <path class="st0" d="M20.3,30.3l-1.5,4.3H17l5-14.1h2.3l5.2,14.1h-2l-1.6-4.3H20.3z M25.5,28.7C24.2,25,23.4,23,23.1,22l0,0
				c-0.3,1.2-1.2,3.6-2.2,6.7H25.5z"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <path class="st0" d="M33.6,28.3v6.2h-1.8V20.4h5.5c2.9,0,4.4,1.6,4.4,3.8c0.1,1.5-0.9,2.9-2.4,3.3c1.2,0.3,2.2,1.2,2.2,3.6v0.6
				c-0.1,0.9,0,1.9,0.2,2.8h-1.8c-0.2-1-0.3-2-0.3-3v-0.3c0-2-0.6-2.9-3.1-2.9L33.6,28.3L33.6,28.3z M33.6,26.8h3
				c2.2,0,3.1-0.8,3.1-2.4c0-1.5-1-2.3-2.9-2.3h-3.3v4.7H33.6z"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <path class="st0" d="M44.9,20.4h1.8v6.9c1.1-1.1,4.7-4.7,6.9-6.9h2.3l-6.1,6l6.4,8.1H54l-5.4-7l-1.8,1.6v5.3H45L44.9,20.4
				L44.9,20.4z"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <path class="st0" d="M66.8,27.9h-7v5h7.7l-0.2,1.6H58V20.4h9.2V22h-7.4v4.3h7L66.8,27.9z"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <path class="st0" d="M73.5,22H69v-1.6h11V22h-4.5v12.5h-1.9L73.5,22z"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <rect x="82" y="20.4" class="st0" width="1.9" height="14.1"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <path class="st0" d="M87.7,34.5V20.4h2.5c2,3.3,6.4,10.3,7.2,11.8l0,0c-0.1-1.8-0.1-4-0.1-6.3v-5.5h1.8v14.1h-2.3
				c-1.9-3-6.5-10.6-7.3-12.2l0,0c0.1,1.6,0.1,4,0.1,6.6v5.6H87.7L87.7,34.5z"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <path class="st0" d="M114.2,34.5h-1.4c-0.1-0.6-0.2-1.3-0.2-1.9c-1,1.4-2.6,2.3-4.4,2.1c-4.1,0-6.2-3.1-6.2-7.1
				c0-4.2,2.3-7.4,6.6-7.4c3.3,0,5.3,1.8,5.7,4.3h-1.9c-0.5-1.8-2.1-2.9-3.9-2.8c-3.3,0-4.5,2.6-4.5,5.8c0,2.9,1.3,5.6,4.5,5.6
				s4-2.1,4-4.5v-0.1h-4v-1.6h5.8L114.2,34.5z"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <path class="st0" d="M0.8,40.7h1.9v12.5H10l-0.3,1.6H0.8V40.7z"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <rect x="12.1" y="40.7" class="st0" width="1.9" height="14.1"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <path class="st0" d="M26.7,48.2h-7v5h7.7l-0.2,1.6h-9.3V40.7H27v1.6h-7.4v4.3h7L26.7,48.2z"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <path class="st0" d="M29.9,40.7h5.4c3,0,4.4,1.6,4.4,3.5c0.1,1.4-0.7,2.6-2,3.1c1.5,0.4,2.5,1.8,2.5,3.4c0,2.6-2,4.1-4.7,4.1H30
				L29.9,40.7L29.9,40.7z M34.9,46.6c2.1,0,2.8-0.8,2.8-2.2c0-1.2-0.9-2.1-2.6-2.1h-3.5v4.3H34.9z M31.7,53.3h3.5c1.8,0,3-0.8,3-2.6
				c0-1.5-1-2.6-3.4-2.6h-3.1L31.7,53.3z"/>
                    </g>
                </g>
                <g>
                    <g transform="translate(1.351 183.918)">
                        <path class="st0" d="M51.8,48.2h-7v5h7.7l-0.2,1.6H43V40.7h9.2v1.6h-7.4v4.3h7V48.2z"/>
                    </g>
                </g>
            </g>
</svg>
    </div>
    <div class="footer-container">
        <div class="footer-left">
            <div class="socials">
                <a href="https://www.linkedin.com/in/sandravieth/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path id="linkedin-brands" d="M22.286,32H1.709A1.722,1.722,0,0,0,0,33.73V54.27A1.722,1.722,0,0,0,1.709,56H22.286A1.726,1.726,0,0,0,24,54.27V33.73A1.726,1.726,0,0,0,22.286,32ZM7.254,52.571H3.7V41.118H7.259V52.571ZM5.475,39.554a2.062,2.062,0,1,1,2.063-2.062A2.063,2.063,0,0,1,5.475,39.554ZM20.587,52.571H17.03V47c0-1.329-.027-3.038-1.848-3.038-1.854,0-2.137,1.446-2.137,2.941v5.668H9.488V41.118H12.9v1.564h.048a3.747,3.747,0,0,1,3.37-1.848c3.6,0,4.27,2.373,4.27,5.459Z" transform="translate(0 -32)" fill="#fff"/>
                    </svg>
                </a>
                <a href="https://coaches.xing.com/profile/Sandra_Vieth" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23.054" height="24" viewBox="0 0 23.054 24">
                        <path id="xing-square-brands" d="M20.584,32H2.47A2.523,2.523,0,0,0,0,34.571V53.429A2.523,2.523,0,0,0,2.47,56H20.584a2.523,2.523,0,0,0,2.47-2.571V34.571A2.523,2.523,0,0,0,20.584,32ZM7.225,47.439h-2.4a.36.36,0,0,1-.309-.552l2.537-4.645c.005,0,.005-.005,0-.011L5.439,39.339a.34.34,0,0,1,.309-.541h2.4a.765.765,0,0,1,.664.466l1.642,2.962L7.873,46.952A.758.758,0,0,1,7.225,47.439ZM18.531,35.97l-5.29,9.68v.011l3.371,6.375a.343.343,0,0,1-.309.541H13.9a.738.738,0,0,1-.664-.466l-3.4-6.445q.178-.329,5.321-9.766a.739.739,0,0,1,.643-.466h2.414a.341.341,0,0,1,.309.536Z" transform="translate(0 -32)" fill="#fff"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/onlinemarketingliebe/?hl=de" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path id="instagram-square-brands" d="M12,41.143A2.858,2.858,0,1,0,14.859,44,2.857,2.857,0,0,0,12,41.143Zm6.681-2.2a2.893,2.893,0,0,0-1.629-1.629c-1.125-.444-3.8-.344-5.052-.344s-3.924-.1-5.052.344a2.893,2.893,0,0,0-1.629,1.629c-.444,1.125-.344,3.806-.344,5.053s-.1,3.925.347,5.054A2.893,2.893,0,0,0,6.95,50.682c1.125.444,3.8.344,5.052.344s3.924.1,5.052-.344a2.893,2.893,0,0,0,1.629-1.629c.447-1.125.344-3.806.344-5.053s.1-3.925-.344-5.053ZM12,48.393a4.388,4.388,0,1,1,3.108-1.285A4.393,4.393,0,0,1,12,48.393Zm4.574-7.945a1.02,1.02,0,1,1,.727-.3,1.025,1.025,0,0,1-.727.3ZM21.429,32H2.571A2.571,2.571,0,0,0,0,34.571V53.429A2.571,2.571,0,0,0,2.571,56H21.429A2.571,2.571,0,0,0,24,53.429V34.571A2.571,2.571,0,0,0,21.429,32Zm-.917,15.536a5.1,5.1,0,0,1-1.385,3.589,5.1,5.1,0,0,1-3.589,1.385c-1.415.08-5.657.08-7.071,0a5.107,5.107,0,0,1-3.589-1.385,5.082,5.082,0,0,1-1.385-3.589c-.08-1.415-.08-5.658,0-7.071a5.081,5.081,0,0,1,1.385-3.589,5.109,5.109,0,0,1,3.589-1.381c1.415-.08,5.657-.08,7.071,0a5.1,5.1,0,0,1,3.589,1.385,5.1,5.1,0,0,1,1.385,3.592C20.591,41.881,20.591,46.119,20.511,47.536Z" transform="translate(0 -32)" fill="#fff"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="menu-wrapper">
            <?php echo wp_nav_menu(array('menu' => 'Footer')); ?>
        </div>
    </div>
</footer>


<div class="modal micromodal-slide" id="dyn-modal" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="dyn-modal-title">
            <header class="modal__header">
                <p>
                    <strong class="modal__title" id="dyn-modal-title"></strong>
                    <span class="modal__title" id="dyn-modal-subtitle"></span>
                </p>
                <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main class="modal__content" id="dyn-modal-content">
            </main>
            <?php /*
            <footer class="modal__footer">
                <button class="w-btn">Continue</button>
                <button class="w-btn" data-micromodal-close aria-label="Close this dialog window">Close</button>
            </footer> */ ?>
        </div>
    </div>
</div>

<?php

include 'tpl/partials/offcanvas.php';
wp_footer() ;
?>

</body>
</html>
