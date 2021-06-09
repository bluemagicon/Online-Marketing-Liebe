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
    <div class="footer-container">
        <div class="footer-left">
            <div class="logo-wrapper">

            </div>
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

<?php
include 'tpl/partials/offcanvas.php';
wp_footer() ;
?>

</body>
</html>
