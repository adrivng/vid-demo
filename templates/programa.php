<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/vid-cms/config/db.php';

$id_programa = $id_programa ?? 0;

$sql = "SELECT * FROM programas WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $id_programa);
$stmt->execute();

$resultado = $stmt->get_result();

if ($resultado->num_rows <= 0) {
    die("Programa no encontrado");
}

$programa = $resultado->fetch_assoc();

$baseUrl = dirname($_SERVER['SCRIPT_NAME']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title><?= $programa['titulo'] ?></title>

<style>
body{
    font-family: Arial;
    background:#f5f5f5;
    margin:0;
}

.container{
    width:1200px;
    margin:auto;
    padding:40px;
}

.box{
    background:white;
    padding:30px;
    border-radius:10px;
}

.precio{
    font-size:40px;
    color:#0b63ce;
    font-weight:bold;
}

.btn{
    display:inline-block;
    padding:12px 20px;
    background:#0b63ce;
    color:white;
    text-decoration:none;
    border-radius:5px;
    margin-top:10px;
}
</style>

</head>
<body>

<div class="container">

<div class="box">

<h1><?= $programa['titulo'] ?></h1>

<p><?= $programa['subtitulo'] ?></p>

<p><?= $programa['duracion'] ?></p>

<p>
Compra hasta:
<?= $programa['fecha_limite_texto'] ?>
</p>

<div class="precio">
$ <?= $programa['precio'] ?>
</div>

<br>

<a class="btn"
href="<?= $baseUrl ?>/word/programa.docx">
Descargar Word
</a>

<hr>

<img src="<?= $baseUrl ?>/img/in.jpg"
style="width:100%;">

<br><br>

<?php if(file_exists($_SERVER['DOCUMENT_ROOT'] . $baseUrl . '/img/cn.jpg')): ?>

<img src="<?= $baseUrl ?>/img/cn.jpg"
style="width:100%;">

<?php endif; ?>

</div>

</div>

</body>
</html>