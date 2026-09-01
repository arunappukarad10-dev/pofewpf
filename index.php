<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
$phone    = niqaa_phone_raw();
$tel      = 'tel:' . $phone;
$wa       = niqaa_whatsapp_link();
$brand    = niqaa_opt( 'niqaa_brand', 'نِقاء' );
$headline = niqaa_opt( 'niqaa_headline', 'تنظيف شامل يلمّع بيتك' );
$subline  = niqaa_opt( 'niqaa_subline', 'فريق موثوق يصلك في نفس اليوم. حجز خلال دقيقتين ونتكفّل بالباقي.' );
$phone_display = trim( chunk_split( ltrim( $phone, '+' ), 3, ' ' ) );

$services = array(
	array( '01', 'تنظيف المنازل', 'غرف، مطابخ وحمامات بإتقان', 'p' ),
	array( '02', 'فلل وشقق', 'تنظيف عميق شامل بالكامل', 'a' ),
	array( '03', 'مجالس وكنب', 'كنب ومجالس وسجاد بعمق', 'p' ),
	array( '04', 'خزانات المياه', 'غسيل وتعقيم آمن وصحي', 'a' ),
);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl" lang="ar">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="خدمات تنظيف منازل، فلل، شقق، مجالس، كنب، سجاد، وخزانات مياه. حجز سريع عبر واتساب أو اتصال.">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
	<div class="wrap">
		<div class="brand"><?php echo esc_html( $brand ); ?></div>
		<a class="header-phone" href="<?php echo esc_url( $tel ); ?>">+<?php echo esc_html( $phone_display ); ?></a>
	</div>
</header>

<main>
	<section class="hero wrap rise">
		<div class="badge"><span class="dot"></span> متاحة اليوم في منطقتك</div>
		<h1><?php echo esc_html( $headline ); ?></h1>
		<p><?php echo esc_html( $subline ); ?></p>
		<div class="cta-stack">
			<a class="btn btn-primary" href="<?php echo esc_url( $wa ); ?>" rel="noopener" target="_blank"><?php echo niqaa_icon_whatsapp(); ?> احجز عبر واتساب</a>
			<a class="btn btn-outline" href="<?php echo esc_url( $tel ); ?>"><?php echo niqaa_icon_phone(); ?> اتصال مباشر</a>
		</div>
	</section>

	<section class="hero-media wrap rise" style="animation-delay:.15s">
		<div class="frame">
			<img src="<?php echo esc_url( niqaa_hero_url() ); ?>" alt="غرفة معيشة نظيفة ومشمسة بعد التنظيف" width="1080" height="864">
		</div>
	</section>

	<section class="trust wrap rise" style="animation-delay:.25s">
		<div class="trust-grid">
			<div class="cell"><div class="num">+500</div><div class="lbl">عميل</div></div>
			<div class="cell mid"><div class="num">4.9</div><div class="lbl">تقييم</div></div>
			<div class="cell"><div class="num">24س</div><div class="lbl">استجابة</div></div>
		</div>
	</section>

	<section class="services wrap">
		<h2 class="rise" style="animation-delay:.3s">خدماتنا</h2>
		<div class="services-grid">
			<?php $d = 0.35; foreach ( $services as $s ) : ?>
				<div class="service rise" style="animation-delay:<?php echo esc_attr( $d ); ?>s">
					<div class="n <?php echo esc_attr( $s[3] ); ?>"><?php echo esc_html( $s[0] ); ?></div>
					<h3><?php echo esc_html( $s[1] ); ?></h3>
					<p><?php echo esc_html( $s[2] ); ?></p>
				</div>
			<?php $d += 0.05; endforeach; ?>
		</div>
	</section>

	<section class="why wrap rise" style="animation-delay:.55s">
		<div class="why-card">
			<div class="why-kicker">لماذا <?php echo esc_html( $brand ); ?></div>
			<h3>معدّات حديثة، مواد آمنة، وسعر واضح قبل البدء</h3>
			<ul>
				<li>فريق مدرّب وموثّق الهوية ويعمل بتعهد جودة</li>
				<li>مواد معتمدة آمنة على الأطفال والحيوانات الأليفة</li>
				<li>ضمان إعادة تنظيف مجاني خلال 24 ساعة</li>
			</ul>
		</div>
	</section>

	<section class="final wrap rise" style="animation-delay:.6s">
		<div class="final-card">
			<h3>جاهز تبدأ؟</h3>
			<p>أرسل لنا عبر واتساب واحصل على موعد اليوم</p>
			<a class="btn" href="<?php echo esc_url( $wa ); ?>" rel="noopener" target="_blank"><?php echo niqaa_icon_whatsapp(); ?> تواصل الآن</a>
		</div>
	</section>
</main>

<div class="floating">
	<a class="call" href="<?php echo esc_url( $tel ); ?>" aria-label="اتصال"><?php echo niqaa_icon_phone(); ?></a>
	<a class="wa" href="<?php echo esc_url( $wa ); ?>" aria-label="واتساب" rel="noopener" target="_blank"><?php echo niqaa_icon_whatsapp(); ?></a>
</div>

<footer class="site-footer">© <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php echo esc_html( $brand ); ?></footer>

<?php wp_footer(); ?>
</body>
</html>
