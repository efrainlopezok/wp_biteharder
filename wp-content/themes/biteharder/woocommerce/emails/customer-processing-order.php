<?php
/**
 * Customer processing order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-processing-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>


<p><?php _e( "Thank you for placing your order with BITEHARDER.com.  This email is to confirm that your order was received and entered for processing.  Your order information is shown below. Please save this information for your records.
<br /><br />
Unless otherwise noted, all orders are processed within 24 hours. Items ordered on a Saturday, Sunday or a Holiday will be processed the next business day.  You will be notified via email once your items have shipped.  A tracking number will be included.
<br /><br />
<strong>Our goal is 100% customer satisfaction!</strong>
<br /><br />
BITEHARDER® sharpening tools are precision grinding products manufactured to the highest quality standards, but like all grinding tools it will wear out over time. It is for this reason we can only process a return on products that have not been opened, and were purchased in the last 30 days.
<br /><br />
BITEHARDER® PolyTune(TM) Ring part numbers are determined from the information selected while placing your order and are sized to fit your specific suspensions geometry. Please follow all included instructions with regards to installation and how to easily identify your Polytune(TM) product.
<br /><br />
BITEHARDER® apparel and accessories can be returned by emailing us at support@biteharder.com, or contacting us directly at 1-855-294-2483.  Please provide your order number and description of the items being exchanged or returned.
<br /><br />
Please take a moment to review the “Product Use Instructions” included with your shipment. This information is key in getting the most out of your BITEHARDER® products! <br /><br />Your order details are shown below for your reference:", 'woocommerce' ); ?></p>


<?php

/**
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Emails::order_schema_markup() Adds Schema.org markup.
 * @since 2.5.0
 */
do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );
