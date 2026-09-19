<?php

/**
 * Customer new account email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-new-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 6.0.0
 */

defined('ABSPATH') || exit;

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
								Hello <?php echo $user_login; ?>, </td>
						</tr>
						<tr>
							<td height="10" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
						</tr>
						<tr>
							<td class="nopad" style="font-family: 'Outfit', sans-serif;font-size:17px;text-align:center;color:#1F2548;font-weight:400;line-height: 25px;">
							<?php printf(esc_html__('Thanks for creating an account on %1$s. Your username is %2$s. You can access your account area to view orders, change your password, and more at:', 'woocommerce'), esc_html($blogname), '<strong>' . esc_html($user_login) . '</strong>'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                    ?> </td>
						</tr>
						<tr>
							<td height="10" style="line-height:1px;font-size:1px;">
								&nbsp;</td>
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
    width: auto' href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>"> <?php esc_html_e('Visit Account', 'woocommerce'); ?>
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


<tr>
	<td height="45" style="border-collapse: collapse; mso-line-height-rule: exactly; line-height: 1px; font-size: 1px;">
		&nbsp;</td>
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
																<br>Go to your Elektro Ecke <br>dashboard
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
																			<a href="https://elektro-ecke.com/mein-konto/" target="_blank" style="text-decoration:none;color:#ffffff;display:block;line-height: 35px">Dashboard
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
																			<a href="https://elektro-ecke.com/shop/" target="_blank" style="text-decoration:none;color:#ffffff;display:block;line-height: 35px">Special Offers
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
																<span style="font-weight: 700">Elektro Ecke</span>
																<br>Elektro Ecke <br> Düsseldorf
																
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
																			<a href="https://elektro-ecke.com/kontakt/" target="_blank" style="text-decoration:none;color:#ffffff;display:block;line-height: 35px">Contact Us
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

<?php


do_action('woocommerce_email_footer', $email);
