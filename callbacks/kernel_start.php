<?

exec('ps -e -F', $o, $res);
$regex = preg_quote('org.red5.server.Bootstrap');
$o = join("\n",$o);
if (!preg_match("/$regex/m", $o)) click_error("Red5 not running. Use red5.sh - ".RED5_SERVER_FPATH);
