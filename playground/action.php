<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    こんにちは、<?php echo htmlspecialchars($_POST['name']); ?>さん。
    あなたは、<?php echo (int)$_POST['age']; ?> 歳です。
</body>

</html>