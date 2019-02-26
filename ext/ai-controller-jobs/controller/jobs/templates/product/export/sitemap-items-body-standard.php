<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2015-2018
 */

$enc = $this->encoder();

$detailTarget = $this->config( 'client/html/catalog/detail/url/target' );
$detailCntl = $this->config( 'client/html/catalog/detail/url/controller', 'catalog' );
$detailAction = $this->config( 'client/html/catalog/detail/url/action', 'detail' );
$detailConfig = $this->config( 'client/html/catalog/detail/url/config', [] );

$freq = $enc->xml( $this->get( 'siteFreq', 'daily' ) );

?>
<?php foreach( $this->get( 'siteItems', [] ) as $id => $item ) : ?>
<?php
		$date = str_replace( ' ', 'T', $item->getTimeModified() ) . date( 'P' );
		$params = array( 'd_name' => $item->getName( 'url' ), 'd_prodid' => $id );
		$url = $this->url( $detailTarget, $detailCntl, $detailAction, $params, [], $detailConfig );
?>
	<url><loc><?php echo $enc->xml( $url ); ?></loc><lastmod><?php echo $date; ?></lastmod><changefreq><?php echo $freq; ?></changefreq></url>
<?php endforeach; ?>
