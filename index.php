<?php
require_once __DIR__ . "/includes/init.php";
require_once __DIR__ . "/controllers/productoController.php";

$pagina = $_GET["pagina"] ?? "inicio";
switch ($pagina) {
    case "inicio":
        $vista = "inicio";
        break;
    case "catalogo":
        $vista = "catalogo";
        break;
    default:
        $vista = "inicio";
        break;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("includes/head.php") ?>
    <title>Nuvora Tech</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <?php
    include("includes/header.php");

    include __DIR__ . "/views/" . $vista . ".php";

    include("includes/footer.php");
    ?>
</body>
</html>