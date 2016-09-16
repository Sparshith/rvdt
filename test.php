<?php


$simple = '
<deb_round knockout="no" repeatless="0">
  <motion>Round 1 Motion</motion>
  <debate venue="0">
    <team id="5" rankpts="4">
      <speaker id="0" points="0"/>
      <speaker id="1" points="0"/>
    </team>
    <team id="4" rankpts="4">
      <speaker id="0" points="0"/>
      <speaker id="1" points="0"/>
    </team>
    <team id="10" rankpts="4">
      <speaker id="0" points="0"/>
      <speaker id="1" points="0"/>
    </team>
    <team id="7" rankpts="4">
      <speaker id="0" points="0"/>
      <speaker id="1" points="0"/>
    </team>
  </debate>
  <debate venue="1">
    <team id="8" rankpts="4">
      <speaker id="0" points="0"/>
      <speaker id="1" points="0"/>
    </team>
    <team id="11" rankpts="4">
      <speaker id="0" points="0"/>
      <speaker id="1" points="0"/>
    </team>
    <team id="6" rankpts="4">
      <speaker id="0" points="0"/>
      <speaker id="1" points="0"/>
    </team>
    <team id="1" rankpts="4">
      <speaker id="0" points="0"/>
      <speaker id="1" points="0"/>
    </team>
  </debate>
  <debate venue="2">
    <team id="3" rankpts="4">
      <speaker id="0" points="0"/>
      <speaker id="1" points="0"/>
    </team>
    <team id="13" rankpts="4">
      <speaker id="0" points="0"/>
      <speaker id="1" points="0"/>
    </team>
    <team id="0" rankpts="4">
      <speaker id="0" points="0"/>
      <speaker id="1" points="0"/>
    </team>
    <team id="15" rankpts="4">
      <speaker id="0" points="0"/>
      <speaker id="1" points="0"/>
    </team>
  </debate>
  <debate venue="3">
    <team id="12" rankpts="4">
      <speaker id="0" points="0"/>
      <speaker id="1" points="0"/>
    </team>
    <team id="14" rankpts="4">
      <speaker id="0" points="0"/>
      <speaker id="1" points="0"/>
    </team>
    <team id="2" rankpts="4">
      <speaker id="0" points="0"/>
      <speaker id="1" points="0"/>
    </team>
    <team id="9" rankpts="4">
      <speaker id="0" points="0"/>
      <speaker id="1" points="0"/>
    </team>
  </debate>
  <adjudicators>
    <pair adj="2" venue="0"/>
    <pair adj="7" venue="2"/>
    <pair adj="8" venue="1"/>
    <pair adj="11" venue="3"/>
    <pair adj="4" venue="3"/>
    <pair adj="6" venue="1"/>
    <pair adj="10" venue="2"/>
    <pair adj="12" venue="0"/>
    <pair adj="1" venue="0"/>
    <pair adj="5" venue="2"/>
    <pair adj="9" venue="1"/>
    <pair adj="13" venue="3"/>
    <pair adj="0" venue="1"/>
    <pair adj="3" venue="3"/>
    <pair adj="14" venue="2"/>
  </adjudicators>
</deb_round>
';



$p = xml_parser_create();
xml_parse_into_struct($p, $simple, $vals, $index);
xml_parser_free($p);
echo "Index array\n";
print_r($index);
echo "\nVals array\n";
print_r($vals);

die;












define('DATABASE_NAME', 'test');
define('DATABASE_USER', 'root');
define('DATABASE_PASS', 'rvcedebsoc');
define('DATABASE_HOST', '52.76.15.223');

include_once('class.DBPDO.php');
$DB = new DBPDO();
$test = $DB->fetchAll("SELECT * FROM test");
var_dump($test);
die;

?>