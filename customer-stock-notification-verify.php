<?php

/**
 * Customer stock notification &mdash; verify email
 *
 * New in WooCommerce (back-in-stock notifications, double opt-in step):
 * sent right after a customer signs up to be notified about a specific
 * out-of-stock product, asking them to confirm the request.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-stock-notification-verify.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * NOTE: this feature is newer and its exact variable names can vary by
 * version; this template checks for $product and $verification_url defensively.
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

$product_name = isset($product) && is_a($product, 'WC_Product') ? $product->get_name() : '';
$verify_url   = isset($verification_url) ? $verification_url : (isset($verify_url) ? $verify_url : '');
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
								<?php esc_html_e('One quick step', 'e-mail-strings'); ?> </td>
						</tr>
						<tr>
							<td height="10" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>
						<tr>
							<td class="nopad" style="font-family: 'Outfit', sans-serif;font-size:17px;text-align:center;color:#1F2548;font-weight:400;line-height: 25px;">
							<?php
								if ($product_name) {
									printf(esc_html__('Please confirm you\'d like us to email you when %s is back in stock.', 'e-mail-strings'), '<strong>' . esc_html($product_name) . '</strong>'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
								} else {
									esc_html_e('Please confirm you\'d like us to email you when this item is back in stock.', 'e-mail-strings');
								}
							?> </td>
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
    width: auto' href="<?php echo esc_url($verify_url); ?>"> <?php esc_html_e('Confirm Notification', 'e-mail-strings') ?>
				</a>
			</div>
		</td>
	</tr>
						<tr>
							<td height="20" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>
						<tr>
							<td class="nopad" style="font-family: 'Outfit', sans-serif;font-size:13px;text-align:center;color:#696969;font-weight:400;line-height: 20px;">
								<?php esc_html_e('If you didn\'t request this, you can safely ignore this email.', 'e-mail-strings'); ?>
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
