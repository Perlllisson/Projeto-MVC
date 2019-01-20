<!DOCTYPE html>
<html>
<head>
	<title>{Titulo do Site}</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/estilo.css">
</head>
<body>
	<h1>Topo do site</h1>
	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	<h1>rodapé do meu site</h1>

</body>
</html>