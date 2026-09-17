<?php

/**
 * Customer review request email
 *
 * New in WooCommerce (Settings > Emails > "Review request"): sent a set
 * number of days after an order is marked Completed, linking the customer
 * to a "Review your order" page for the products they bought.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-review-request.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * NOTE: WooCommerce's "Review request" email is currently in beta and the
 * exact template variables may shift between releases. This template relies
 * on $order (available on every version so far) and falls back gracefully
 * if a review URL isn't supplied.
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

if (isset($order) && is_a($order, 'WC_Order')) {
	$review_url = isset($review_url) ? $review_url : add_query_arg('review-your-order', $order->get_order_key(), $order->get_view_order_url());
} else {
	$review_url = isset($review_url) ? $review_url : '';
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
							<?php esc_html_e('We hope you\'re loving what you ordered! It only takes a minute to leave a review, and it really helps other customers &mdash; and us.', 'e-mail-strings'); ?> </td>
						</tr>
						<tr>
							<td height="10" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>

						<?php if (isset($order) && is_a($order, 'WC_Order')) : ?>
						<tr>
							<td height="20" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>
						<tr>
							<td>
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<?php foreach ($order->get_items() as $item) :
										$product = $item->get_product();
										if (!$product) {
											continue;
										}
									?>
									<tr>
										<td style="border-bottom:1px solid #EFEFF3;padding:12px 0;font-family: 'Outfit', sans-serif;font-size:15px;color:#1F2548;font-weight:600;">
											<?php echo esc_html($item->get_name()); ?>
										</td>
									</tr>
									<?php endforeach; ?>
								</table>
							</td>
						</tr>
						<?php endif; ?>

						<tr>
							<td height="30" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>

						<?php if ($review_url) : ?>
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
    width: auto' href="<?php echo esc_url($review_url); ?>"> <?php esc_html_e('Leave a Review', 'e-mail-strings') ?>
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
