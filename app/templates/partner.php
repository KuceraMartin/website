<?
/**
 * pro výpis partnerů z jednoho místa
 * (používá se v app a na blogu)
 *
 * Mimo Nette je třeba mít v proměnné $basePath správnou URL, aby fungovali obrázky!
 */


$partnersDefinition = array(
	'main'    => array(
		'name' => 'Děkujeme našim partnerům',
		'headerTag' => 'h2',
	),
	'media'   => array(
		'name' => 'Mediální partneři',
		'headerTag' => 'h2',
	),
	'support' => array(
		'name' => 'Podporovatelé',
		'headerTag' => 'h3',
	),
	'others'  => array(
		'name' => 'Spolupracujeme',
		'headerTag' => 'h3',
	),
);

$partnersText = array(
	'main' => array(
		array(
			'url' => "http://nadacevodafone.cz/",
			'alt' => "Nadace Vodafone",
			'smallImage' => "nadace-vodafone-small.png",
			'desktopImage' => "nadace-vodafone.png"
		),
		array(
			'url' => "http://www.nic.cz/",
			'alt' => "CZ.NIC",
			'smallImage' => "cznic-small.png",
			'desktopImage' => "cznic.png"
		),

		array(
			'url' => "http://flowmedia.cz/",
			'alt' => "Flow Media",
			'smallImage' => "flow-small.png",
			'desktopImage' => "flow.png"
		),

		array(
			'url' => "http://www.fakturoid.cz/",
			'alt' => "Fakturoid",
			'smallImage' => "fakturoid-small.png",
			'desktopImage' => "fakturoid.png"
		),
	),

	'media' => array(

		array(
			'url' => "http://respekt.ihned.cz/",
			'alt' => "Respekt.cz",
			'smallImage' => "respekt-small.png",
			'desktopImage' => "respekt.png"
		),

		array(
			'url' => "http://www.lupa.cz/",
			'alt' => "Lupa.cz",
			'smallImage' => "lupa-small.png",
			'desktopImage' => "lupa.png"
		),

		array(
			'url' => "http://www.root.cz/",
			'alt' => "Root.cz",
			'smallImage' => "root-small.png",
			'desktopImage' => "root.png"
		),

		array(
			'url' => "http://www.slunecnice.cz/",
			'alt' => "Slunečnice.cz",
			'smallImage' => "slunecnice-small.png",
			'desktopImage' => "slunecnice.png"
		),

		array(
			'url' => "http://www.ubuntu.cz/",
			'alt' => "Ubuntu.cz",
			'smallImage' => "ubuntu-small.png",
			'desktopImage' => "ubuntu.png"
		),
	),

	'support' => array(

		array(
			'url' => "http://www.peoplecomm.cz/",
			'alt' => "Peoplecomm",
			'smallImage' => "peoplecomm-small.png",
			'desktopImage' => "peoplecomm.png"
		),
	),

	'others' => array(

		array(
			'url' => "http://www.ceskyzavinac.cz/",
			'alt' => "Český zavináč",
			'smallImage' => "cesky-zavinac-small.png",
			'desktopImage' => "cesky-zavinac.png"
		),

		array(
			'url' => "http://www.isss.cz/",
			'alt' => "ISSS",
			'smallImage' => "isss-small.png",
			'desktopImage' => "isss.png"
		),

		array(
			'url' => "http://www.jsi.cz/",
			'alt' => "Jednota školských informatiků",
			'smallImage' => "jsi-small.png",
			'desktopImage' => "jsi.png"
		),

		array(
			'url' => "http://bizit.cz/",
			'alt' => "Business IT Club",
			'smallImage' => "bizit-small.png",
			'desktopImage' => "bizit.png"
		),
	)
);



?>

<div role="complementary" class="content clearfix tertiary partners">

	<div class="inner">
		<?php foreach($partnersText as $sectionName => $sectionData): ?>
		<<?php echo $partnersDefinition[$sectionName]['headerTag']; ?>><span><?php echo $partnersDefinition[$sectionName]['name']; ?></span></<?php echo $partnersDefinition[$sectionName]['headerTag']; ?>>

		<div class="partners-<?php echo $sectionName; ?> clearfix">
			<?php foreach ($sectionData as $p): ?>
			<div class="partner">
				<a href="<?php echo $p['url']; ?>">
					<div data-picture data-alt="<?php echo $p['alt']; ?>">
						<div data-src="<?php echo $basePath; ?>/img/partners/<?php echo $p['smallImage']; ?>"></div>
						<div data-src="<?php echo $basePath; ?>/img/partners/<?php echo $p['desktopImage']; ?>" data-media="(max-width: 599px) and (-webkit-min-device-pixel-ratio: 1.5), (max-width: 599px) and (min--moz-device-pixel-ratio: 1.5), (max-width: 599px) and (min-device-pixel-ratio: 1.5)"></div>
						<div data-src="<?php echo $basePath; ?>/img/partners/<?php echo $p['desktopImage']; ?>" data-media="(min-width: 600px)"></div>

						<!--[if (lt IE 9) & (!IEMobile)]>
						  <div data-src="<?php echo $basePath; ?>/img/partners/<?php echo $p['desktopImage']; ?>"></div>
						<![endif]-->

						<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
						<noscript>
							<img src="<?php echo $basePath; ?>/img/partners/<?php echo $p['smallImage']; ?>" alt="<?php echo $p['alt']; ?>">
						</noscript>
					</div>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
		<?php endforeach; ?>

	</div>

</div><!-- / content -->
