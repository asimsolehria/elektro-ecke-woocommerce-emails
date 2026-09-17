<?php

/**
 * Customer completed order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-completed-order.php.
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

if (!defined('ABSPATH')) {
	exit;
}

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
							<?php esc_html_e( 'We have finished processing your order.', 'woocommerce' ); ?> </td>
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



						<tr>
							<td height="30" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>


						<tr>
		<td align="center">
			<div style="width: 100%;">
				<table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="table-layout:fixed;width:100%;">
					<tr>
						<td>
							<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr>
								<td valign="middle" style="line-height:0;font-size:0;"><table width="100%" height="2" cellpadding="0" cellspacing="0" border="0"><tr><td height="2" style="font-size:1px;line-height:2px;mso-line-height-rule:exactly;">&nbsp;</td></tr></table></td>
								<td width="18" align="center" valign="middle"><table cellpadding="0" cellspacing="0" border="0" align="center"><tr><td width="18" height="18" style="background-color:#54C97A;border-radius:9px;font-size:1px;line-height:18px;">&nbsp;</td></tr></table></td>
								<td valign="middle" style="line-height:0;font-size:0;"><table width="100%" height="2" cellpadding="0" cellspacing="0" border="0"><tr><td height="2" style="font-size:1px;line-height:2px;background-color:#54C97A;mso-line-height-rule:exactly;">&nbsp;</td></tr></table></td>
							</tr></table>
						</td>
						<td>
							<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr>
								<td valign="middle" style="line-height:0;font-size:0;"><table width="100%" height="2" cellpadding="0" cellspacing="0" border="0"><tr><td height="2" style="font-size:1px;line-height:2px;background-color:#54C97A;mso-line-height-rule:exactly;">&nbsp;</td></tr></table></td>
								<td width="18" align="center" valign="middle"><table cellpadding="0" cellspacing="0" border="0" align="center"><tr><td width="18" height="18" style="background-color:#54C97A;border-radius:9px;font-size:1px;line-height:18px;">&nbsp;</td></tr></table></td>
								<td valign="middle" style="line-height:0;font-size:0;"><table width="100%" height="2" cellpadding="0" cellspacing="0" border="0"><tr><td height="2" style="font-size:1px;line-height:2px;background-color:#54C97A;mso-line-height-rule:exactly;">&nbsp;</td></tr></table></td>
							</tr></table>
						</td>
						<td>
							<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr>
								<td valign="middle" style="line-height:0;font-size:0;"><table width="100%" height="2" cellpadding="0" cellspacing="0" border="0"><tr><td height="2" style="font-size:1px;line-height:2px;background-color:#54C97A;mso-line-height-rule:exactly;">&nbsp;</td></tr></table></td>
								<td width="18" align="center" valign="middle"><table cellpadding="0" cellspacing="0" border="0" align="center"><tr><td width="18" height="18" style="background-color:#54C97A;border-radius:9px;font-size:1px;line-height:18px;">&nbsp;</td></tr></table></td>
								<td valign="middle" style="line-height:0;font-size:0;"><table width="100%" height="2" cellpadding="0" cellspacing="0" border="0"><tr><td height="2" style="font-size:1px;line-height:2px;mso-line-height-rule:exactly;">&nbsp;</td></tr></table></td>
							</tr></table>
						</td>
					</tr>
				</table>
				<div style="height: 10px;"></div>
				<table style="font-family: 'Outfit', sans-serif; border-collapse: collapse; border-spacing: 0; padding: 0; table-layout: fixed; vertical-align: top; width: 100%; text-align: center;">
					<tr style="padding: 0px; vertical-align: top">
						<td>
							<span style="
    font-weight: 400;
    font-size: 14px;
    line-height: 18px;
    color: #222222;"> Ordered
							</span> <span style="
    font-weight: 400;
    font-size: 14px;
    line-height: 18px;
    color: #595959;"> <br>on <?php
								$date = $order->get_date_created();
								$formatedDate = date("d-m-Y", strtotime($date));
								echo $formatedDate
								?>
							</span>
						</td>
						<td>
							<span style="
    font-weight: 400;
    font-size: 14px;
    line-height: 18px;
    color: #222222;">
								Processing
							</span>
						</td>
						<td>
							<span style="
    font-weight: 400;
    font-size: 14px;
    line-height: 18px;
    color: #222222;">
								<b> Shipped</b>
							</span> <span style="
    font-weight: 400;
    font-size: 14px;
    line-height: 18px;
    color: #595959;"> <br>on <?php
								$date = $order->get_date_completed();
								$formatedDate = date("d-m-Y", strtotime($date));
								echo $formatedDate
								?>
							</span>
						</td>
					</tr>
				</table>
			</div>
		</td>
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
    font-family: "Source Code Pro", monospace;
    font-size: 16px;
    font-weight: 500;
    line-height: 22px;
    min-width:48px;
    padding: 10px 18px;
    text-decoration-line:none;
    text-decoration:none;
    vertical-align:middle;
    width: auto' href="<?php echo $order->get_view_order_url(); ?>"> <?php echo esc_html__('View Order Status', 'woocommerce') ?>
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
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
do_action('woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email);

/*
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
// do_action('woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email);


/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action('woocommerce_email_footer', $email);
