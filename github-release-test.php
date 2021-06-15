<?php
/**
 * Plugin name: github actionsテスト
 * Description: github actionsの動作確認プラグインです
 * Version: 0.0.0.10
 * Author: mgn Inc.,
 * Author URI: https://rui-jin-en.com/
 * License: GPL-2.0+
 *
 * @package github-release-test
 */

define( 'TEST_BASENAME', plugin_basename( __FILE__ ) );    // このプラグインのベースネーム

// 自動アップデート.
require_once plugin_dir_path( __FILE__ ) . 'inc/auto-update.php';