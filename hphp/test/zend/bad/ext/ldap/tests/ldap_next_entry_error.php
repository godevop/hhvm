<?php
require "connect.inc";

$link = ldap_connect($host, $port);
var_dump(ldap_next_entry($link));
var_dump(ldap_next_entry($link, $link, "Additional data"));
var_dump(ldap_next_entry($link, $link));
?>
===DONE===
