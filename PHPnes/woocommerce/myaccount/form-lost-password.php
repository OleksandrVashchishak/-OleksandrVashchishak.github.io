<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.2
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_lost_password_form' );
?>
<div class="page-container">
	<form method="post" class="woocommerce-ResetPassword lost_reset_password">

	<h2> <?php echo pll__( 'Забули пароль?', 'woocommerce'); ?></h2>

	<p><?php echo apply_filters( 'woocommerce_lost_password_message', esc_html(pll__( 'Будь ласка, введіть ваш логін або адресу електронної пошти. Ви отримаєте електронною поштою посилання для створення нового паролю.', 'woocommerce' ) ) ); ?></p><?php // @codingStandardsIgnoreLine ?>

		<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
			<input placeholder='<?php echo pll__( "Ім’я користувача чи адреса електронної пошти", "woocommerce" ); ?>' class="woocommerce-Input woocommerce-Input--text input-text form__input lost_password_input" type="text" name="user_login" id="user_login" autocomplete="username" />
		</p>

		<div class="clear"></div>

		<?php do_action( 'woocommerce_lostpassword_form' ); ?>

		<p class="woocommerce-form-row form-row">
			<input type="hidden" name="wc_reset_password" value="true" />
			<button type="submit" class="woocommerce-Button btn button" value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>"><?php esc_html_e( 'Reset password', 'woocommerce' ); ?></button>
		</p>

		<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>

	</form>
</div>
<?php
do_action( 'woocommerce_after_lost_password_form' );
