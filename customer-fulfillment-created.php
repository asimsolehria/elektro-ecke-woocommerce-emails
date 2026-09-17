<?php

/**
 * Customer fulfillment created email
 *
 * New in WooCommerce (Order Fulfillments feature): sent when a shipment /
 * fulfillment record is created for an order, separate from the order
 * status itself. Carries tracking number, carrier and tracking URL where set.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-fulfillment-created.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * NOTE: Order Fulfillments is a newer WooCommerce feature. This template
 * reads tracking data from the standard fulfillment meta keys
 * (_tracking_number, _tracking_url, _shipment_provider) but if your
 * installed version exposes different accessors, adjust the block below.
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

$tracking_number = '';
$tracking_url    = '';
$shipment_provider = '';
if (isset($fulfillment) && is_object($fulfillment) && method_exists($fulfillment, 'get_meta')) {
	$tracking_number   = $fulfillment->get_meta('_tracking_number', true);
	$tracking_url      = $fulfillment->get_meta('_tracking_url', true);
	$shipment_provider = $fulfillment->get_meta('_shipment_provider', true);
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
								Hello <?php echo isset($order) ? $order->get_billing_first_name() : ''; ?>, </td>
						</tr>
						<tr>
							<td height="10" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>
						<tr>
							<td class="nopad" style="font-family: 'Outfit', sans-serif;font-size:17px;text-align:center;color:#1F2548;font-weight:400;line-height: 25px;">
							<?php printf(esc_html__('Good news &mdash; part (or all) of your order #%s is on its way!', 'e-mail-strings'), isset($order) ? esc_html($order->get_order_number()) : ''); ?> </td>
						</tr>
						<tr>
							<td height="20" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>

						<?php if ($tracking_number || $tracking_url || $shipment_provider) : ?>
						<tr>
							<td>
								<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color:#EFEFF3;border-radius:12px;">
									<tr>
										<td style="padding:18px 20px;font-family: 'Outfit', sans-serif;font-size:14px;color:#1F2548;line-height:22px;">
											<?php if ($shipment_provider) : ?>
												<strong><?php esc_html_e('Carrier:', 'e-mail-strings'); ?></strong> <?php echo esc_html($shipment_provider); ?><br>
											<?php endif; ?>
											<?php if ($tracking_number) : ?>
												<strong><?php esc_html_e('Tracking Number:', 'e-mail-strings'); ?></strong> <?php echo esc_html($tracking_number); ?><br>
											<?php endif; ?>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td height="20" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>
						<?php endif; ?>

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
    width: auto' href="<?php echo esc_url($tracking_url ? $tracking_url : (isset($order) ? $order->get_view_order_url() : '#')); ?>"> <?php echo $tracking_url ? esc_html__('Track Your Shipment', 'e-mail-strings') : esc_html__('View Order Status', 'woocommerce'); ?>
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

if (isset($order)) {
	/*
	 * @hooked WC_Emails::order_details() Shows the order details table.
	 */
	do_action('woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email);
}

/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action('woocommerce_email_footer', $email);
