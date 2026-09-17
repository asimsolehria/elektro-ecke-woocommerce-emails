<?php

/**
 * Email Addresses
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-addresses.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 5.6.0
 */

if (!defined('ABSPATH')) {
	exit;
}

$text_align   = is_rtl() ? 'right' : 'left';
$address      = $order->get_formatted_billing_address();
$shipping     = $order->get_formatted_shipping_address();

// Billing always has the chance of 2 extra meta lines (phone + email); shipping
// only ever gets a phone line (WooCommerce has no shipping email). Work out the
// gap so we can pad the shorter box with fixed-height spacer rows and keep both
// boxes the same number of lines — a fixed px height is honoured by every email
// client (including Outlook desktop), unlike percentage-based box heights.
$billing_meta_lines  = ($order->get_billing_phone() ? 1 : 0) + ($order->get_billing_email() ? 1 : 0);
$shipping_meta_lines = $order->get_shipping_phone() ? 1 : 0;
$meta_line_gap       = $billing_meta_lines - $shipping_meta_lines;

$show_shipping_box = (!wc_ship_to_billing_address_only() && $order->needs_shipping_address() && $shipping);

// Box chrome, defined once so billing/shipping always stay visually identical.
$box_border  = '1px solid #dddddd';
$box_radius  = '12px';
$box_padding = '26px 24px 30px 24px';

// Dynamic base path for the icons that ship in this theme's
// woocommerce/emails/img/ folder — resolves to whatever domain the site
// is running on instead of a hardcoded URL.
$email_img_url = trailingslashit(get_stylesheet_directory_uri()) . 'woocommerce/emails/img/';

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
							<td>
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td valign="top" class="em_wrapper_two" width="<?php echo $show_shipping_box ? '48%' : '100%'; ?>">
											<table width="100%" border="0" cellspacing="0" cellpadding="0">
												<tr>
													<td style="border: <?php echo esc_attr($box_border); ?>; border-radius: <?php echo esc_attr($box_radius); ?>; padding: <?php echo esc_attr($box_padding); ?>;">
														<table width="100%" border="0" cellspacing="0" cellpadding="0">
															<tr>
																<td style="font-family: 'Outfit', sans-serif;font-size:16px;text-align:left; color:#1F2548;line-height:24px;font-weight:700;">
																	<?php esc_html_e('Billing Address:', 'e-mail-strings'); ?>
																</td>
																<td>&nbsp;
																</td>
																<td width="24">
																	<img alt="billing" src="<?php echo esc_url($email_img_url . 'truck.png'); ?>" width="24" height="24" style="max-width:24px;display:block;" />
																</td>
															</tr>
															<tr>
																<td colspan="3" height="14" style="line-height:1px;font-size:1px;">
																	&nbsp;
																</td>
															</tr>
															<tr>
																<td colspan="3" style="font-family: 'Outfit', sans-serif;font-size:14px;text-align:left; color:#282828;line-height:24px;font-weight:400;">
																	<?php echo wp_kses_post($address ? $address : esc_html__('N/A', 'woocommerce')); ?>
																	<?php if ($order->get_billing_phone()) : ?>
																		<br /><?php echo wc_make_phone_clickable($order->get_billing_phone()); ?>
																	<?php endif; ?>
																	<?php if ($order->get_billing_email()) : ?>
																		<br /><?php echo esc_html($order->get_billing_email()); ?>
																	<?php endif; ?>
																</td>
															</tr>
															<?php if ($show_shipping_box && $meta_line_gap < 0) : ?>
																<?php for ($i = 0; $i < abs($meta_line_gap); $i++) : ?>
																	<tr>
																		<td colspan="3" height="24" style="line-height:24px;font-size:1px;">
																			&nbsp;
																		</td>
																	</tr>
																<?php endfor; ?>
															<?php endif; ?>
														</table>
													</td>
												</tr>
											</table>
										</td>

										<?php if ($show_shipping_box) : ?>
											<td width="24" class="em_hide">&nbsp;
											</td>
											<td valign="top" class="em_wrapper_two em_pad_top" width="48%">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
													<tr>
														<td style="border: <?php echo esc_attr($box_border); ?>; border-radius: <?php echo esc_attr($box_radius); ?>; padding: <?php echo esc_attr($box_padding); ?>;">
															<table width="100%" border="0" cellspacing="0" cellpadding="0">
																<tr>
																	<td style="font-family: 'Outfit', sans-serif;font-size:16px;text-align:left; color:#1F2548;line-height:24px;font-weight:700;">
																		<?php esc_html_e('Shipping Address:', 'e-mail-strings'); ?>
																	</td>
																	<td>&nbsp;
																	</td>
																	<td width="24">
																		<img alt="shipping" src="<?php echo esc_url($email_img_url . 'truck.png'); ?>" width="24" height="24" style="max-width:24px;display:block;" />
																	</td>
																</tr>
																<tr>
																	<td colspan="3" height="14" style="line-height:1px;font-size:1px;">
																		&nbsp;
																	</td>
																</tr>
																<tr>
																	<td colspan="3" style="font-family: 'Outfit', sans-serif;font-size:14px;text-align:left; color:#282828;line-height:24px;font-weight:400;">
																		<?php echo wp_kses_post($shipping); ?>
																		<?php if ($order->get_shipping_phone()) : ?>
																			<br /><?php echo wc_make_phone_clickable($order->get_shipping_phone()); ?>
																		<?php endif; ?>
																	</td>
																</tr>
																<?php if ($meta_line_gap > 0) : ?>
																	<?php for ($i = 0; $i < $meta_line_gap; $i++) : ?>
																		<tr>
																			<td colspan="3" height="24" style="line-height:24px;font-size:1px;">
																				&nbsp;
																			</td>
																		</tr>
																	<?php endfor; ?>
																<?php endif; ?>
															</table>
														</td>
													</tr>
												</table>
											</td>
										<?php endif; ?>
									</tr>
								</table>
							</td>
						</tr>


						<tr>
							<td height="35" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>
					</table>
				</td>
				<td width="50" class="em_hide">&nbsp;</td>
			</tr>
		</table>
	</td>
</tr>
