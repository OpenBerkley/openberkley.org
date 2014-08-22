<html>
	<head>
		<title>Open|Berkley</title>
	</head>
	<body>
		Git Version
		<br/>
		<?php
			define( "ROOT_DIR", $_SERVER[ 'DOCUMENT_ROOT' ] );
			echo file_get_contents( ROOT_DIR."/gitver" )
		?>
	</body>
</html>
