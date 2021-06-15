<?php
/**
 * Plugin name: github actionsテスト
 * Description: github actionsの動作確認プラグインです
 * Version: 0.0.0.13
 * Author: mgn Inc.,
 * Author URI: https://rui-jin-en.com/
 * License: GPL-2.0+
 *
 * @package github-release-test
 */

define( 'TEST_HOGE_BASENAME', plugin_basename( __FILE__ ) );    // このプラグインのベースネーム
define( 'TEST_HOGE_AUTO_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'TEST_HOGE_AUTO_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );

//コンポーザーの読み込み
require_once TEST_HOGE_AUTO_PATH . '/vendor/autoload.php';

// 自動アップデート.
require_once TEST_HOGE_AUTO_PATH . '/inc/auto-update.php';
