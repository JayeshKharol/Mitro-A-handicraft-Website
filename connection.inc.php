<?php
session_start();
$con=mysqli_connect("localhost","root","","handweb");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/new1/handweb/');
define('SITE_PATH','http://127.0.0.1/new1/handweb/');

define('INSTAMOJO_REDIRECT',SITE_PATH.'payment_complete.php');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');

define('PRODUCT_MULTIPLE_IMAGE_SERVER_PATH',SERVER_PATH.'media/product_images/');
define('PRODUCT_MULTIPLE_IMAGE_SITE_PATH',SITE_PATH.'media/product_images/');

define('BANNER_SERVER_PATH',SERVER_PATH.'media/banner/');
define('BANNER_SITE_PATH',SITE_PATH.'media/banner/');

define('INSTAMOJO_KEY','key');
define('INSTAMOJO_TOKEN','token');
//https://www.youtube.com/watch?v=zWLKQ_loJqI&list=PLWCLxMult9xfYlDRir2OGRZFK397f3Yeb&index=24


define('SMTP_EMAIL','proj111000@gmail.com');
define('SMTP_PASSWORD','11AA22BB33CC');
//https://www.youtube.com/watch?v=aBbmo1pi5B0&list=PLWCLxMult9xfY_dsYicKGcCLhlZ6YXFMh&index=1


define('SMS_KEY','VSlvci7BjdJZGLywxPE8rX3s5MegT2AzF0pmfaHtYkNnbKWOUDy0E4TUKCeA9aDbMtOcwR1fhLBs6pkF');
//https://www.youtube.com/watch?v=_XaaIJlkNV4&list=PLWCLxMult9xfYlDRir2OGRZFK397f3Yeb&index=27
?>