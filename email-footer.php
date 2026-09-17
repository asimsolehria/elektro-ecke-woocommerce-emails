<?php

/**
 * Email Footer
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-footer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 7.4.0
 */

defined('ABSPATH') || exit;

// Dynamic base path for icons that ship in this theme's
// woocommerce/emails/img/ folder — resolves to whatever domain the site
// is running on instead of a hardcoded URL.
$email_img_url = trailingslashit(get_stylesheet_directory_uri()) . 'woocommerce/emails/img/';
?>
<tr>
	<td height="20" style="line-height:1px;font-size:1px;">&nbsp;</td>
</tr>
<tr>
	<td style="border-radius:  12px 12px 12px 12px" bgcolor="#f8f8f8">
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
									<td style="line-height:1px;font-size:1px;" class="em_hide" height="25">&nbsp;</td>
								</tr>
								<tr>
									<td>
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td width="200" class="em_wrapper_two">
													<table width="200" border="0" cellspacing="0" cellpadding="0" class="em_wrapper" align="center">
														<tr align="center">
															<td align="center">
																<a target="_blank" style="text-decoration: none;color: #425d74;" href="https://3sixtyprint.co.uk/">
																	<img alt="logo" src="http://elektro-ecke.com/wp-content/uploads/2026/06/ChatGPT-Image-Jun-23-2026-11_42_13-PM-e1782240430909.png" width="180" height="52" style="" />
																</a>
															</td>
														</tr>
														<tr>
															<td height="15" style="line-height:1px;font-size:1px;">
																&nbsp;</td>
														</tr>
														<tr>
															<td class="em_grey_txt" style="font-family: 'Outfit', sans-serif;font-size:14px;text-align:center;padding-left:0px;padding-right:0px;color:#696969;line-height:20px;font-weight:400;">
															Follow us on socials:

															</td>
														</tr>
														<tr>
															<td height="10" style="line-height:1px;font-size:1px;">
																&nbsp;</td>
														</tr>
														
                                                                            <tr>
                                                                                <td>
                                                                                    <table align="left" border="0"
                                                                                        cellpadding="0" cellspacing="0">
                                                                                        <tr>
                                                                                            
                                                                                            
                                                                                            <td style="background-color:#54C97A; border-radius:50%;" width="30" height="30" align="center">
                                                                                                <a target="_blank"
                                                                                                    href="https://www.facebook.com/3sixtysigns"
                                                                                                    class="modimg"
                                                                                                    style="color:#ffffff;">
                                                                                                    <img src="<?php echo esc_url($email_img_url . 'facebook.png'); ?>"
                                                                                                        width="20"
                                                                                                        height="20"
                                                                                                        style="max-width:25px;border: none;"
                                                                                                        border="0"
                                                                                                        alt="fax" />
                                                                                                </a>
                                                                                            </td>
                                                                                            <td width="15"></td>
                                                                                    <td style="background-color:#54C97A; border-radius:50%;" width="30" height="30" align="center">
                                                                                                <a target="_blank"
                                                                                                    href="https://www.instagram.com/3SixtySignsUK/?fbclid=IwY2xjawEXJTRleHRuA2FlbQIxMAABHRcspP-YuHLKCTNfHPBo9WBlbVQBw4g7dPERh_yEvlRb12flXNygcDYjFA_aem_Qrb2k0MaaViMwefONlyHBw"
                                                                                                    class="modimg"
                                                                                                    style="color:#ffffff;">
                                                                                                    <img src="<?php echo esc_url($email_img_url . 'instagram.png'); ?>"
                                                                                                        width="20"
                                                                                                        height="20"
                                                                                                        style="max-width:25px; border: none;"
                                                                                                        border="0"
                                                                                                        alt="em" />
                                                                                                </a>
                                                                                            </td>

                                                                                        </tr>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
																			<tr>
															<td height="10" style="line-height:1px;font-size:1px;">
																&nbsp;</td>
														</tr>
																			<tr>
																<td class="em_grey_txt" style="font-family: 'Outfit', sans-serif;font-size:14px;text-align:center;padding-left:0px;padding-right:0px;color:#696969;line-height:20px;font-weight:400;">
																© 2024 3Sixty Print | Part of the 3Sixty Group.

																</td>
															</tr>
															<tr>
																<td height="20" style="line-height:1px;font-size:1px;">
																	&nbsp;</td>
															</tr>
															

													</table>
												</td>

												<!-- <td class="em_wrapper_two" valign="middle">
													<table border="0" cellspacing="0" cellpadding="0" class="em_wrapper" align="center">
														<tr>
															<td class="em_grey_txt" style="font-family: 'Outfit', sans-serif;font-size:12px;text-align:left;padding-left:0px;padding-right:0px;color:#000000;line-height:19px;font-weight:400;">
																<span style="font-weight: 700;font-size: 14px;">Contact</span>
																<br>
																<a target="_blank" href="mailto:info@3sixtysigns.co.uk" class="modimg" style="font-weight:600; text-decoration:none; color:#54C97A;">
																info@3sixtysigns.co.uk
																			</a><br>
																



															</td>
														</tr>


													</table>
												</td> -->

												<td class="em_wrapper_two" valign="bottom">
													<table border="0" cellspacing="0" cellpadding="0" class="em_wrapper" align="center">
														<tr>
															<td class="em_grey_txt" style="font-family: 'Outfit', sans-serif;font-size:12px;text-align:left;padding-left:0px;padding-right:0px;color:#000000;line-height:19px;font-weight:400;">
																<span style="font-weight: 700;font-size: 18px; color: #000000;">Get in touch</span><br> <br> 
																<a href="tel:01691902936" target="_blank" style="color: #000000;text-decoration: none;font-size: 14px;"> <?php _e('01691 902936', 'woocommerce'); ?>
																</a><br><br>
																<a href="mailto:info@3sixtysigns.co.uk" target="_blank" style="color: #000000;text-decoration: none;font-size: 14px;"><?php _e('info@3sixtysigns.co.uk'); ?>
																</a><br><br>
																<p style="color: #696969;text-decoration: none;font-size: 14px;">
																Units 1A & 1B <br>
																Whittington Business Park <br>
																Oswestry, Shropshire <br>
																SY11 4ND</p>




															</td>
														</tr>


													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td class="em_hide" style="line-height:1px;font-size:1px;" height="35">&nbsp;</td>
								</tr>
								<tr>
									<td>
										<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#EFEFF3">
											<tr>
												<td height="1" style="line-height:1px;font-size:1px;">&nbsp;
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td height="15" style="line-height:1px;font-size:1px;">&nbsp;
									</td>
								</tr>
								

								<tr>
									<td height="15" style="line-height:1px;font-size:1px;">&nbsp;
									</td>
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


<tr>
	<td height="30" class="em_hide" style="line-height:1px;font-size:1px;">&nbsp;</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<div style="display:none; white-space:nowrap; font:20px courier; color:#ffffff; background-color:#ffffff;">- - - - -
	- - - - - - - - - - - - - - - - - -</div>
</body>

</html>