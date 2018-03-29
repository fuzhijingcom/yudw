<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<?php function tpl_global_header_mobile($searchparams, $srchotquery) {
global $_G;?><?php
$__FORMHASH = FORMHASH;$__CURMODULE = CURMODULE;$return = <<<EOF


EOF;
 if(1) { 
$return .= <<<EOF

<div id="scbar" class="
EOF;
 if($_G['setting']['srchhotkeywords'] && count($_G['setting']['srchhotkeywords']) > 5) { 
$return .= <<<EOF
scbar_narrow 
EOF;
 } 
$return .= <<<EOF
cl">
<form id="scbar_form" method="get" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="{$searchparams['url']}" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="search" />
<input type="hidden" name="formhash" value="{$__FORMHASH}" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="{$_G['fid']}" />
<input type="hidden" name="srhlocality" value="{$_G['basescript']}::{$__CURMODULE}" />
EOF;
 if(is_array($searchparams['params'])) foreach($searchparams['params'] as $key => $value) { 
$return .= <<<EOF
<input type="hidden" name="{$key}" value="{$value}" />

EOF;
 } 
$return .= <<<EOF

<input type="hidden" name="source" value="txt.form_
EOF;
 if($_G['setting']['mobile']['mobilesimpletype']) { 
$return .= <<<EOF
sim
EOF;
 } else { 
$return .= <<<EOF
nor
EOF;
 } 
$return .= <<<EOF
.a" />
<input type="hidden" name="wap" value="yes" />
<input type="hidden" name="fId" value="{$_G['fid']}" />
<div style="display: none; position: absolute; top:37px; left:44px;" id="sg">
<div id="st_box" cellpadding="2" cellspacing="0"></div>
</div>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td><input type="text" class="txt xg1" name="q" id="scbar_txt" value="" autocomplete="off" /></td>
<td align="center" width="46" class="scbar_btn_td"><input type="submit" name="btnsubmit" id="scbar_btn" class="pn pnc" value="搜索"></td>
</tr>
<tr>

EOF;
 if($_G['setting']['srchhotkeywords'] && CURMODULE == 'index') { 
$return .= <<<EOF

<td class="scbar_hot_td" colspan="3">
<div id="scbar_hot">
<strong class="xw1">热搜: </strong>
EOF;
 if(is_array($_G['setting']['srchhotkeywords'])) foreach($_G['setting']['srchhotkeywords'] as $val) { if($encodeval=rawurlencode(trim($val))) { if(!empty($searchparams['url'])) { 
$return .= <<<EOF

<a href="{$searchparams['url']}?q={$encodeval}&source=txt.hotsearch_
EOF;
 if($_G['setting']['mobile']['mobilesimpletype']) { 
$return .= <<<EOF
sim
EOF;
 } else { 
$return .= <<<EOF
nor
EOF;
 } 
$return .= <<<EOF
.a{$srchotquery}&wap=yes" target="_blank" class="xi2" sc="1">{$val}</a>

EOF;
 } else { 
$return .= <<<EOF

<a href="search.php?mod=forum&amp;srchtxt={$encodeval}&amp;formhash={$__FORMHASH}&amp;searchsubmit=true&amp;source=txt.hotsearch_
EOF;
 if($_G['setting']['mobile']['mobilesimpletype']) { 
$return .= <<<EOF
sim
EOF;
 } else { 
$return .= <<<EOF
nor
EOF;
 } 
$return .= <<<EOF
.a&amp;wap=yes" target="_blank" class="xi2" sc="1">{$val}</a>

EOF;
 } } } 
$return .= <<<EOF

</div>
</td>

EOF;
 } 
$return .= <<<EOF

</tr>
</table>
</form>
</div>
<ul id="scbar_type_menu" class="p_pop" style="display: none;">
EOF;
 echo implode('', $slist);; 
$return .= <<<EOF
</ul>

EOF;
 } 
$return .= <<<EOF


EOF;
?><?php return $return;?><?php }?>