<?php

/**
 * Order details table shown in emails.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-order-details.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

defined('ABSPATH') || exit;



?>


<?php
if ($sent_to_admin) {
	$before = '<a class="link" href="' . esc_url($order->get_edit_order_url()) . '" style="text-decoration:none;color:#ffffff;display:block;line-height: 43px">';
	$after  = '</a>';
} else {
	$before = '<a class="link" href="' . esc_url($order->get_view_order_url()) . '" style="text-decoration:none;color:#ffffff;display:block;line-height: 43px">';
	$after  = '';
}

// wp_kses_post($before . sprintf(__('[Order #%s]', 'woocommerce') . $after . ' (<time datetime="%s">%s</time>)', $order->get_order_number(), $order->get_date_created()->format('c'), ));
?>




<?php do_action('woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email); ?>

<!-- Order details section starts -->


<tr>
	<td>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="50" class="em_hide">&nbsp;</td>
				<td valign="top" class="em_side_space">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">



						<tr>
							<td class="em_grey_txt" style="font-family: 'Outfit', sans-serif; font-size:18px;text-align:left;padding-left:0px;padding-right:0px;color:#1F2548;line-height:35px;font-weight:600;">
								<?php esc_html_e('Order number', 'e-mail-strings'); ?> <?php echo $order->get_order_number(); ?> </td>
						</tr>
						<tr>
							<td height="20" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>
						<tr>
							<td>
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<th class="cussize" style="border-radius: 4px 0 0 0; background-color: #54C97A; color: #ffffff; font-family: 'Outfit', sans-serif; font-size: 14px; padding: 15px;text-align: left; " width="60%" bgcolor="#54C97A">Product</th>

										<th class="cussize" style="border-radius:  0 4px 0 0; background-color: #54C97A; color: #ffffff; font-family: 'Outfit', sans-serif; font-size: 14px; padding: 15px;text-align: center;" width="15%" bgcolor="#54C97A">Price</th>
									</tr>
									<!-- order items here -->
									<?php
									foreach ($order->get_items() as $item_id => $item) :
										$product       = $item->get_product();
										$sku           = '';
										$purchase_note = '';
										$image         = '';

										if (!apply_filters('woocommerce_order_item_visible', true, $item)) {
											continue;
										}

										if (is_object($product)) {
											$sku           = $product->get_sku();
											$purchase_note = $product->get_purchase_note();
											$image         = $product->get_image($image_size);
											$image_id  = $product->get_image_id();
											$image_url = wp_get_attachment_image_url($image_id, 'full');
										}

									?>




										<tr>
											<td class="cussize" style="border-bottom: 1px solid #DEE0E6; color: #282828;padding: 18px;  ">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
													<tr>
														<td valign="top">
															<img src="<?php echo $image_url; ?>" width="60" height="60" style="display:block;max-width:60px;" border="0" alt="Image">
														</td>
														<td valign="top" class="cussize" style=" color: #282828; font-family: 'Outfit', sans-serif; font-size: 14px; padding-left: 18px;text-align: left;line-height: 20px;">

															<?php

															echo wp_kses_post(apply_filters('woocommerce_order_item_name', $item->get_name(), $item, false));

															// SKU.
															if ($show_sku && $sku) {
																echo wp_kses_post(' (#' . $sku . ')');
															}

															// allow other plugins to add additional product information here.
															do_action('woocommerce_order_item_meta_start', $item_id, $item, $order, $plain_text);

															wc_display_item_meta(
																$item,
																array(
																	'label_before' => '<strong class="wc-item-meta-label" style="padding-right: 5px; float: ' . esc_attr($text_align) . '; margin-' . esc_attr($margin_side) . ': .25em; clear: both">',
																)
															);

															// allow other plugins to add additional product information here.
															do_action('woocommerce_order_item_meta_end', $item_id, $item, $order, $plain_text);


															?>
															<ul style="margin:0px">
																<li>
															<span style="font-weight: bold;color:#282828">Quantity:
																<?php
																$qty          = $item->get_quantity();
																$refunded_qty = $order->get_qty_refunded_for_item($item_id);

																if ($refunded_qty) {
																	$qty_display = '<del>' . esc_html($qty) . '</del> <ins>' . esc_html($qty - ($refunded_qty * -1)) . '</ins>';
																} else {
																	$qty_display = esc_html($qty);
																}
																echo wp_kses_post(apply_filters('woocommerce_email_order_item_quantity', $qty_display, $item));
																?>

															</span>
															</li>
															</ul>
														</td>
													</tr>
												</table>
											</td>

											<td class="cussize" style="border-bottom: 1px solid #DEE0E6; color: #1F2548; font-family: 'Outfit', sans-serif; font-size: 14px; padding: 10px;text-align: center;font-weight: 600;">

												<?php echo wp_kses_post($order->get_formatted_line_subtotal($item)); ?>
											</td>
										</tr>


										<?php

										if ($show_purchase_note && $purchase_note) {
										?>
											<tr>
												<td colspan="3" style="text-align:<?php echo esc_attr($text_align); ?>; vertical-align:middle; font-family: 'Outfit', sans-serif;">
													<?php
													echo wp_kses_post(wpautop(do_shortcode($purchase_note)));
													?>
												</td>
											</tr>
										<?php
										}
										?>

									<?php endforeach; ?>
								</table>
							</td>
						</tr>
						<tr>
							<td height="30" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>
						<tr>
							<td style="background: #E4E5E9;border-radius: 10px;padding: 25px;" class="em_side_space">
								<table border="0" cellspacing="0" cellpadding="0" align="right" class="em_wrapper">
									<?php
									$item_totals = $order->get_order_item_totals();

									if ($item_totals) {
										$i = 0;
										foreach ($item_totals as $total) {
											$i++;
									?>
											<tr>
												<td class="cussize" style=" color: #282828; font-family: 'Outfit', sans-serif; font-size: 14px; padding: 10px;text-align: left;font-weight: 600">
													<?php echo $total['label']; ?></td>
												<td class="cussize" style=" color: #282828; font-family: 'Outfit', sans-serif; font-size: 14px; padding: 10px;text-align: right;line-height: 24px;">
													<?php echo $total['value']; ?>
												</td>
											</tr>
										<?php
										}
									}
									if ($order->get_customer_note()) {
										?>
										<tr>
											<td class="cussize" style=" color: #282828; font-family: 'Outfit', sans-serif; font-size: 14px; padding: 10px;text-align: left;font-weight: 600">
												<?php echo 'Note:'; ?></td>
											<td class="cussize" style=" color: #282828; font-family: 'Outfit', sans-serif; font-size: 14px; padding: 10px;text-align: right;line-height: 24px;">
												<?php echo nl2br(wptexturize($order->get_customer_note())); ?>
											</td>
										</tr>
									<?php
									}
									?>



								</table>
							</td>
						</tr>
						
						<tr>
							<td class="em_grey_txt" style="font-family: 'Outfit', sans-serif;font-size:14px;text-align:center;padding-left:0px;padding-right:0px;color:#282828;line-height:24px;font-weight:400;">
							<br>
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
    width: auto' href="https://3sixtyprint.co.uk/my-account/orders/"> <?php echo esc_html__('View Order History', 'woocommerce') ?>
				</a>
								<br>
							</td>
						</tr>

						<tr>
							<td height="30" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>
					</table>
				</td>
				<td width="50" class="em_hide">&nbsp;</td>
			</tr>
		</table>
	</td>
</tr>


</table>
</td>
</tr>

<tr>
	<td bgcolor="#EFEFF3" style="border-radius:  0px 0px 12px 12px;box-shadow: 0px 18px 31px -26px #17224B;">
		<table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tbody>
				<tr>
					<td class="em_hide" width="50">&nbsp;</td>
					<td class="em_side_space" valign="top">
						<table width="100%" cellspacing="0" cellpadding="0" border="0">
							<tbody>
								<tr>
									<td style="line-height:1px;font-size:1px;" height="20">&nbsp;
									</td>
								</tr>
								<tr>
									<td style="line-height:1px;font-size:1px;" class="em_hide" height="20">&nbsp;</td>
								</tr>
								<tr>
									<td>
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td class="em_wrapper_two">
													<table border="0" cellspacing="0" cellpadding="0" class="em_wrapper" align="center">
														<tr>
															<td class="em_grey_txt" style="font-family: 'Outfit', sans-serif;font-size:11px;text-align:center;padding-left:0px;padding-right:0px;color:#17224B;line-height:18px;font-weight:400;">
																<span style="font-weight: 700">View My Dashboard</span>
																<br>Go to your 3Sixty Print <br>dashboard
																<br>
															</td>
														</tr>
														<tr>
															<td height="15" style="line-height:1px;font-size:1px;">
																&nbsp;</td>
														</tr>
														<tr>
															<td>
																<table width="130" border="0" cellspacing="0" cellpadding="0" align="left">
																	<tr>
																		<td valign="middle" bgcolor="#54C97A" height="35" style="font-family: 'Outfit', sans-serif;font-size:11px;font-weight: 600;text-align:center;border-radius:4px;color:#ffffff;">
																			<a href="https://3sixtyprint.co.uk/my-account/" target="_blank" style="text-decoration:none;color:#ffffff;display:block;line-height: 35px">Dashboard
																				&#187;</a>
																		</td>
																	</tr>
																</table>
															</td>
														</tr>

													</table>
												</td>

												<td class="em_wrapper_two">
													<table border="0" cellspacing="0" cellpadding="0" class="em_wrapper" align="center">
														<tr>
															<td class="em_grey_txt" style="font-family: 'Outfit', sans-serif;font-size:11px;text-align:center;padding-left:0px;padding-right:0px;color:#17224B;line-height:18px;font-weight:400;">
																<span style="font-weight: 700">Special Offers</span>
																<br>Click here for <br> special offers 
																<br>
															</td>
														</tr>
														<tr>
															<td height="15" style="line-height:1px;font-size:1px;">
																&nbsp;</td>
														</tr>
														<tr>
															<td>
																<table width="130" border="0" cellspacing="0" cellpadding="0" align="center">
																	<tr>
																		<td valign="middle" bgcolor="#54C97A" height="35" style="font-family: 'Outfit', sans-serif;font-size:11px;font-weight: 600;text-align:center;border-radius:4px;color:#ffffff;">
																			<a href="https://3sixtyprint.co.uk/product-category/special-offers" target="_blank" style="text-decoration:none;color:#ffffff;display:block;line-height: 35px">Special Offers
																				&#187;</a>
																		</td>
																	</tr>
																</table>
															</td>
														</tr>

													</table>
												</td>

												<td class="em_wrapper_two">
													<table border="0" cellspacing="0" cellpadding="0" class="em_wrapper" align="center">
														<tr>
															<td class="em_grey_txt" style="font-family: 'Outfit', sans-serif;font-size:11px;text-align:center;padding-left:0px;padding-right:0px;color:#17224B;line-height:18px;font-weight:400;">
																<span style="font-weight: 700">3Sixty Print</span>
																<br>Part of the <br> 3Sixty Group
																
															</td>
														</tr>
														<tr>
															<td height="15" style="line-height:1px;font-size:1px;">
																&nbsp;</td>
														</tr>
														<tr>
															<td>
																<table width="130" border="0" cellspacing="0" cellpadding="0" align="center">
																	<tr>
																		<td valign="middle" bgcolor="#54C97A" height="35" style="font-family: 'Outfit', sans-serif;font-size:11px;font-weight: 600;text-align:center;border-radius:4px;color:#ffffff;">
																			<a href="mailto:info@3sixtysigns.co.uk" target="_blank" style="text-decoration:none;color:#ffffff;display:block;line-height: 35px">Contact Us
																				&#187;</a>
																		</td>
																	</tr>
																</table>
															</td>
														</tr>

													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="line-height:1px;font-size:1px;" height="20">&nbsp;
									</td>
								</tr>
								<tr>
									<td style="line-height:1px;font-size:1px;" class="em_hide" height="20">&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</td>
					<td class="em_hide" width="50">&nbsp;</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>