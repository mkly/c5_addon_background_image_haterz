<?php defined('C5_EXECUTE') or die('Access Denied.');

class BackgroundImageHaterzPackage extends Package {

	protected $pkgHandle = "background_image_haterz";
	protected $appVersionRequired = "5.5";
	protected $pkgVersion = "1.0";

	public function getPackageName() {
		return t('Background Image Haterz');
	}

	public function getPackageDescription() {
		return t('If you hate the background image and everything it stands for install me.');
	}

	public function on_start() {
		define('WHITE_LABEL_DASHBOARD_BACKGROUND_SRC', '/packages/background_image_haterz/images/white.png');
	}
	
}

