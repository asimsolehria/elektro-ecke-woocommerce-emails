<?php

/**
 * Admin payment gateway enabled email
 *
 * New in WooCommerce: sent to the shop admin when a payment gateway is
 * automatically enabled (e.g. by WooCommerce Payments recommendations or
 * a similar automated setup step). Unlike the other admin emails, this one
 * isn't tied to an order.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/admin-payment-gateway-enabled.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * NOTE: this feature is newer; this template reads the gateway title from
 * $gateway defensively so it degrades gracefully if that variable name
 * differs on your installed version.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 10.x
 */

defined('ABSPATH') || exit;

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action('woocommerce_email_header', $email_heading, $email);

$gateway_title = '';
if (isset($gateway) && is_object($gateway)) {
	$gateway_title = property_exists($gateway, 'title') ? $gateway->title : (method_exists($gateway, 'get_title') ? $gateway->get_title() : '');
}
?>


<tr>
	<td>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="50" class="em_hide">&nbsp;</td>
				<td valign="top" class="em_side_space">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td height="45" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>
						<tr>
							<td class="resize" style=" font-family: 'Outfit', sans-serif;font-size:31px;text-align:center;color:#1F2548;font-weight:700;line-height: 45px;">
								Hello, </td>
						</tr>
						<tr>
							<td height="10" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>
						<tr>
							<td class="nopad" style="font-family: 'Outfit', sans-serif;font-size:17px;text-align:center;color:#1F2548;font-weight:400;line-height: 25px;">
							<?php
								if ($gateway_title) {
									printf(esc_html__('Just a heads-up &mdash; the %s payment method has been automatically enabled on your store.', 'e-mail-strings'), '<strong>' . esc_html($gateway_title) . '</strong>'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
								} else {
									esc_html_e('Just a heads-up &mdash; a payment method has been automatically enabled on your store.', 'e-mail-strings');
								}
							?> </td>
						</tr>
						<tr>
							<td height="10" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>
						<tr>
							<td class="nopad" style="font-family: 'Outfit', sans-serif;font-size:15px;text-align:center;color:#696969;font-weight:400;line-height: 22px;">
							<?php esc_html_e('If this wasn\'t expected, review it under Payments in your WooCommerce settings.', 'e-mail-strings'); ?> </td>
						</tr>
						<tr>
							<td height="30" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>

						<tr>
		<td align="center">
			<div style="width: 100%;">
				<a style='background-color:#54C97A;
    border-bottom-left-radius:24px;
    border-bottom-right-radius:24px;
    border-top-left-radius:24px;
    border-top-right-radius:24px;
    border-width:2px;
    border-color: #54C97A;
    border-style:solid;
    box-sizing:border-box;
    color:#FFFFFF;
    display:inline-block;
    font-family: "Outfit", sans-serif;
    font-size: 16px;
    font-weight: 500;
    line-height: 22px;
    min-width:48px;
    padding: 10px 18px;
    text-decoration-line:none;
    text-decoration:none;
    vertical-align:middle;
    width: auto' href="<?php echo esc_url(admin_url('admin.php?page=wc-settings&tab=checkout')); ?>"> <?php esc_html_e('Review Payment Settings', 'e-mail-strings') ?>
				</a>
			</div>
		</td>
	</tr>

					</table>
				</td>
				<td width="50" class="em_hide">&nbsp;</td>
			</tr>
		</table>
	</td>
</tr>

<?php

/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action('woocommerce_email_footer', $email);
