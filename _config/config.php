<?php

$_CONFIG['gl_pr_cr'] = getenv('LIVE_PR_CR');
$_CONFIG['gl_lzid'] = getenv('LIVE_LZID');
$_CONFIG['b64'] = false;

$_CONFIG[0]['gl_db_host'] = getenv('LIVE_DB_HOST');
$_CONFIG[0]['gl_db_user'] = getenv('LIVE_DB_USER');
$_CONFIG[0]['gl_db_ext'] = getenv('LIVE_DB_EXT');
$_CONFIG[0]['gl_db_eng'] = getenv('LIVE_DB_ENG');
$_CONFIG[0]['gl_db_pass'] = getenv('LIVE_DB_PASS');
$_CONFIG[0]['gl_db_name'] = getenv('LIVE_DB_NAME');
$_CONFIG[0]['gl_db_prefix'] = getenv('LIVE_DB_PREFIX');

?>