<?php

/**
 * Customer fulfillment deleted email
 *
 * New in WooCommerce (Order Fulfillments feature): sent when a shipment /
 * fulfillment record is removed from an order (e.g. a shipment was
 * cancelled or logged in error).
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-fulfillment-deleted.php.
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
							<td class="resize" style=" font-family: 'Outfit', sans-serif;font-size:31px;text-align:center;color:#1F2548;font-weight:700;line-height: 45px;">
								Hello <?php echo isset($order) ? $order->get_billing_first_name() : ''; ?>, </td>
						</tr>
						<tr>
							<td height="10" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>
						<tr>
							<td class="nopad" style="font-family: 'Outfit', sans-serif;font-size:17px;text-align:center;color:#1F2548;font-weight:400;line-height: 25px;">
							<?php printf(esc_html__('A shipment previously logged against order #%s has been removed. If you were expecting tracking details, please get in touch and we\'ll confirm the latest status for you.', 'e-mail-strings'), isset($order) ? esc_html($order->get_order_number()) : ''); ?> </td>
						</tr>
						<tr>
							<td height="30" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>

						<?php if (isset($order)) : ?>
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
    width: auto' href="<?php echo esc_url($order->get_view_order_url()); ?>"> <?php esc_html_e('View Order Status', 'woocommerce') ?>
				</a>
			</div>
		</td>
	</tr>
						<?php endif; ?>

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
