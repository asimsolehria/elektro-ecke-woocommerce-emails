<?php

/**
 * Customer POS refunded order email (receipt)
 *
 * New in WooCommerce: sent when an in-person sale via WooCommerce
 * Point of Sale is refunded (fully or partially) in-store.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-pos-refunded-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 10.x
 */

defined('ABSPATH') || exit;

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action('woocommerce_email_header', $email_heading, $email); ?>


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
							<td class="em_grey_txt" style="font-family: 'Outfit', sans-serif;font-size:15px;text-align:center;padding-left:0px;padding-right:0px;color:#1F2548;line-height:27px;font-weight:600;">
								(<?php echo wc_format_datetime($order->get_date_created()); ?>)
							</td>
						</tr>
						<tr>
							<td class="resize" style=" font-family: 'Outfit', sans-serif;font-size:31px;text-align:center;color:#1F2548;font-weight:700;line-height: 45px;">
								Hello <?php echo $order->get_billing_first_name(); ?>, </td>
						</tr>
						<tr>
							<td height="10" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>
						<tr>
							<td class="nopad" style="font-family: 'Outfit', sans-serif;font-size:17px;text-align:center;color:#1F2548;font-weight:400;line-height: 25px;">
							<?php
									if (!empty($partial_refund)) {
										printf(esc_html__('Your in-store order on %s has been partially refunded. Here\'s your updated receipt for the record:', 'e-mail-strings'), wp_specialchars_decode(get_option('blogname'), ENT_QUOTES)); // phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped
									} else {
										printf(esc_html__('Your in-store order on %s has been refunded. Here\'s your updated receipt for the record:', 'e-mail-strings'), wp_specialchars_decode(get_option('blogname'), ENT_QUOTES)); // phpcs:ignore WordPress.XSS.EscapeOutput.OutputNotEscaped
									}
									?></td>
						</tr>
						<tr>
							<td height="10" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>
						<tr>
							<td class="em_grey_txt" style="font-family: 'Outfit', sans-serif;font-size:19px;text-align:center;padding-left:0px;padding-right:0px;color:#1F2548;line-height:27px;font-weight:600;">
								<?php esc_html_e('Your order number is:', 'e-mail-strings'); ?> <?php echo $order->get_order_number(); ?>,
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
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
do_action('woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email);

/*
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action('woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email);

do_action('woocommerce_pos_email_footer', $order, $sent_to_admin, $plain_text, $email);

/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action('woocommerce_email_footer', $email);
