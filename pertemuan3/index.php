<?php
require_once("function/callpage.php");
callpage("header");
callpage("navbar");
if (isset($_GET['page'])) {
    callpage($_GET['page']);
} else {
    callpage("home");
}
callpage("footer");

?>
http://localhost/web2/pertemuan3/?page=home