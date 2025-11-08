<?php
// customize

namespace NainoiaInc/ABCMS_Test;

class ABCMS_Test {

	public function __construct() {
		echo "Hello World! I am ABCMS_Test.";
    }

	public function initialize(): void {
		echo "Hello World! I am ABCMS_Test->initialize().";
		require __DIR__ . "initialize.php";
    }

    public function cron(): void {
		echo "Hello World! I am ABCMS_Test->cron().";
		require __DIR__ . "cron.php";
    }
}