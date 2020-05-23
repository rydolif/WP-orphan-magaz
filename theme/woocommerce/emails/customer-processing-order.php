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
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates/Emails
 * @version 3.5.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>
<?php /* translators: %s: Customer first name */ ?>
<p><?php printf( esc_html__( 'Доброго дня, %s,', 'woocommerce' ), esc_html( $order->get_billing_first_name() ) ); ?></p>
Ваше замовлення наразі опрацьовується.
<?php /* translators: %s: Order number */ ?>
<p><?php printf( esc_html__( 'Просто чтобы вы знали - мы получили ваш заказ #%s, и сейчас он обрабатывается:', 'woocommerce' ), esc_html( $order->get_order_number() ) ); ?></p>

<?php
/*
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );



/*
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );


/*
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

?>

<p><b>
<?php esc_html_e( 'Якщо у Вас є питання, Ви можете написати нам на пошту - office@orphan-club.com або зателефонувати за номером телефону +3 8 067 820 75 50', 'woocommerce' ); ?>
</p></b>
<?php

/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );
