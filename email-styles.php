<?php

/**
 * Email Styles
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-styles.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 7.4.0
 */

if (!defined('ABSPATH')) {
	exit;
}
?>


.ReadMsgBody {
width: 100%;
background-color: #ffffff;
}

.ExternalClass {
width: 100%;
background-color: #ffffff;
}

.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
line-height: 100%;
}

html {
width: 100%;
}

table {
border-spacing: 0;
border-collapse: collapse;
mso-table-lspace: 0px;
mso-table-rspace: 0px;
margin: 0 auto;
}

table table table {
table-layout: auto;
}

img {
display: block !important;
overflow: hidden !important;
border: 0 !important;
outline: none !important;
}

body {
-ms-text-size-adjust: none;
margin: 0 auto !important;
padding: 0 !important;
-webkit-text-size-adjust: 100% !important;
-ms-text-size-adjust: 100% !important;
-webkit-font-smoothing: antialiased !important;
}

#MessageViewBody,
#MessageWebViewDiv {
width: 100% !important;
min-width: 100vw;
margin: 0 !important;
zoom: 1 !important;
}



span.preheader {
display: none !important;
}

p {
margin: 0px !important;
padding: 0px !important;
}

td,
a,
span {
border-collapse: collapse;
mso-line-height-rule: exactly;
}

.ExternalClass * {
line-height: 100%;
}

@media only screen and (max-width:650px) {
.em_main_table {
width: 100% !important;
}

.em_wrapper {
width: 100% !important;
max-width: 100% !important;
}

.em_wrapper_two {
width: 100% !important;
max-width: 100% !important;
display: block
}

.em_hide {
display: none !important;
}

.em_align_center {
text-align: center !important;
}

.em_pad_top {
padding-top: 20px !important;
}

.em_side_space {
padding-left: 20px !important;
padding-right: 20px !important;
}

.cussize {
font-size: 11px !important;
} .cussize_num {
font-size: 9px !important;
}

.em_bg_center {
background-position: center !important;
}

.nopad {
padding: 0 !important;
}

.em_full_width {
width: 100% !important;
height: auto !important;
max-width: 100% !important;
}
.em_size{
font-size: 20px !important;
line-height: 31px;
}
.em_pad_btm {
padding-bottom: 28px !important;
}

.showphone {
display: block !important;
mso-hide: none !important;
}

u+.em_body .em_full_wrap {
width: 100% !important;
width: 100vw !important;
}
}
<?php
