<?php

/**
 * Customer abandoned cart recovery email
 *
 * New in WooCommerce: sent to a customer who added items to their cart
 * (or started checkout) and left without completing the order, with a
 * link back to their cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-abandoned-cart-recovery.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * NOTE: this feature is newer and its exact variable names can vary by
 * version; this template checks for $cart_items and $recovery_url defensively.
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

$recovery_url = isset($recovery_url) ? $recovery_url : (isset($cart_recovery_url) ? $cart_recovery_url : wc_get_cart_url());
$cart_items   = isset($cart_items) && is_array($cart_items) ? $cart_items : array();
$first_name   = isset($billing_first_name) ? $billing_first_name : '';
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
								Hello<?php echo $first_name ? ' ' . esc_html($first_name) : ''; ?>, </td>
						</tr>
						<tr>
							<td height="10" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>
						<tr>
							<td class="nopad" style="font-family: 'Outfit', sans-serif;font-size:17px;text-align:center;color:#1F2548;font-weight:400;line-height: 25px;">
							<?php esc_html_e('You left something behind! Your cart is saved and ready whenever you are.', 'e-mail-strings'); ?> </td>
						</tr>
						<tr>
							<td height="20" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>

						<?php if (!empty($cart_items)) : ?>
						<tr>
							<td>
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<?php foreach ($cart_items as $cart_item) :
										$item_name = is_array($cart_item) ? ($cart_item['name'] ?? '') : (is_object($cart_item) && method_exists($cart_item, 'get_name') ? $cart_item->get_name() : '');
										if (!$item_name) {
											continue;
										}
									?>
									<tr>
										<td style="border-bottom:1px solid #EFEFF3;padding:12px 0;font-family: 'Outfit', sans-serif;font-size:15px;color:#1F2548;font-weight:600;">
											<?php echo esc_html($item_name); ?>
										</td>
									</tr>
									<?php endforeach; ?>
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
    width: auto' href="<?php echo esc_url($recovery_url); ?>"> <?php esc_html_e('Complete Your Order', 'e-mail-strings') ?>
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
