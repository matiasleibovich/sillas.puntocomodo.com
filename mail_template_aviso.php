<?php 

$link = 'http://puntocomodo.e-glu.com.ar';

ob_start();
require('pedido_datos_mail.php');
require('pedido_info_mail.php');
$body_content = ob_get_clean();

$body = <<<EOT
<html>
<body>
EOT;

$body .= $body_content;

$body .= <<<EOT

</body>
</html>
EOT;

?>