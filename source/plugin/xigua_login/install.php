<?php
/**
 * Created by PhpStorm.
 * User: yangzhiguo
 * Date: 15/7/16
 * Time: 21:40
 */
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
    exit('Access Denied');
}

$pluginid = 'xigua_login';

$r2 = DB::fetch_first('SHOW COLUMNS FROM %t  where `Field`=\'mobile\'', array('common_member_wechat'), true);
if(!$r2){
    $sql = <<<SQL
ALTER TABLE `pre_common_member_wechat` ADD `mobile` VARCHAR(20) NOT NULL;
SQL;
    runquery($sql);
}

$sql = <<<SQL
CREATE TABLE IF NOT EXISTS `pre_xigua_login_unbind_log` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `uid` int(11) unsigned NOT NULL,
 `openid` char(32) NOT NULL DEFAULT '',
 `status` tinyint(1) NOT NULL DEFAULT '0',
 `isregister` tinyint(1) unsigned NOT NULL DEFAULT '0',
 `unionid` varchar(80) NOT NULL DEFAULT '',
 `mobile` varchar(20) NOT NULL,
 `crts` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `uid` (`uid`),
 KEY `openid` (`openid`)
) ENGINE=InnoDB;
SQL;
runquery($sql);


@unlink(DISCUZ_ROOT . './source/plugin/xigua_login/discuz_plugin_xigua_login.xml');
@unlink(DISCUZ_ROOT . './source/plugin/xigua_login/discuz_plugin_xigua_login_SC_GBK.xml');
@unlink(DISCUZ_ROOT . './source/plugin/xigua_login/discuz_plugin_xigua_login_SC_UTF8.xml');
@unlink(DISCUZ_ROOT . './source/plugin/xigua_login/discuz_plugin_xigua_login_TC_BIG5.xml');
@unlink(DISCUZ_ROOT . './source/plugin/xigua_login/discuz_plugin_xigua_login_TC_UTF8.xml');
@unlink(DISCUZ_ROOT . './source/plugin/xigua_login/install.php');
$finish = TRUE;
@unlink(DISCUZ_ROOT . './source/plugin/xigua_login/discuz_plugin_xigua_login.xml');
@unlink(DISCUZ_ROOT . './source/plugin/xigua_login/discuz_plugin_xigua_login_SC_GBK.xml');
@unlink(DISCUZ_ROOT . './source/plugin/xigua_login/discuz_plugin_xigua_login_SC_UTF8.xml');
@unlink(DISCUZ_ROOT . './source/plugin/xigua_login/discuz_plugin_xigua_login_TC_BIG5.xml');
@unlink(DISCUZ_ROOT . './source/plugin/xigua_login/discuz_plugin_xigua_login_TC_UTF8.xml');
@unlink(DISCUZ_ROOT . './source/plugin/xigua_login/install.php');


if(is_file(DISCUZ_ROOT.'./source/plugin/wechat/wechat.lib.class.php')){
    include_once DISCUZ_ROOT.'./source/plugin/wechat/wechat.lib.class.php';
    $updatedata = array(
        'receiveEvent::subscribe' => array(
            'plugin' => 'xigua_login',
            'include' => 'response.class.php', 'class' => 'LoginResponse', 'method' => 'subscribe'
        ),
        'receiveAllEnd' => array(
            'plugin' => 'xigua_login',
            'include' => 'response.class.php', 'class' => 'LoginResponse', 'method' => 'receiveAllEnd'
        ),
        'receiveEvent::scan' => array(
            'plugin' => 'xigua_login',
            'include' => 'response.class.php', 'class' => 'LoginResponse', 'method' => 'scan'
        ),
        'receiveMsg::text' => array(
            'plugin' => 'xigua_login',
            'include' => 'response.class.php', 'class' => 'LoginResponse', 'method' => 'text'
        ),
        'receiveEvent::click' => array(
            'plugin' => 'xigua_login',
            'include' => 'response.class.php', 'class' => 'LoginResponse', 'method' => 'click'
        ),
    );
    $responsehook = WeChatHook::updateResponse($updatedata, 552);
}