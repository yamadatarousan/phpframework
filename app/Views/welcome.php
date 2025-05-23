<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Hello, <?php echo htmlspecialchars($name ?? 'World'); ?>!</h1>
</body>
</html>