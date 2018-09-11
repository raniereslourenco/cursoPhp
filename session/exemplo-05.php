<?php 

require_once "config.php";

echo session_save_path();
echo "<BR>";
var_dump(session_status());
echo "<BR>";
switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "As sessões estão desabilitadas!";
		break;

	case PHP_SESSION_NONE:
		echo "as sessões estão habilitadas, mas nenhuma existe!";
		break;
	
	case PHP_SESSION_ACTIVE:
		echo "as sessões estão habilitadas, e uma existe!";
		break;
}

 ?>