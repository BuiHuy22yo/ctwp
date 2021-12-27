<?php
/**
* Header
*
* @package ctwp
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
<!--    <script id="wpcp_disable_Right_Click" type="text/javascript">-->
<!--        document.ondragstart = function() { return false;}-->
<!--        function nocontext(e) {-->
<!--        return false;-->
<!--        }-->
<!--        document.oncontextmenu = nocontext;-->
<!--    </script>-->
<!--    <script id="wpcp_css_disable_selection" type="text/javascript">-->
<!--    var e = document.getElementsByTagName('body')[0];-->
<!--    if(e)-->
<!--    {-->
<!--        e.setAttribute('unselectable',on);-->
<!--    }-->
<!--    </script>-->
<!--    <style>-->
<!--        .m-image-intro__image {-->
<!--    position: relative;-->
<!--    display: flex;-->
<!--}-->
<!--.m-image-intro__image img.image__img {-->
<!--    position: absolute;-->
<!--    top: 0;-->
<!--    left: 0;-->
<!--    width: 100%;-->
<!--    height: 100%;-->
<!--    object-fit: cover;-->
<!--}-->
<!--        .m-image-intro__image:before {-->
<!--    content: "";-->
<!--    padding-top: 53.86666667%;-->
<!--    display: block;-->
<!--}-->
<!--    </style>-->
</head>
<body <?php body_class() ?>>
    <!-- <div class="preloader">
        <div class="spinner"></div>
    </div> -->
    <?php
        do_action('before_header');

        do_action('ctwp_header');

        do_action('after_header');

        ?>
