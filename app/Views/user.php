<!DOCTYPE html>
<html>
<head>
    <title>User</title>
</head>
<body>
    <h1>User ID: <?php echo htmlspecialchars($id ?? 'Unknown'); ?></h1>
    <?php if ($user): ?>
        <p>Name: <?php echo htmlspecialchars($user['name'] ?? 'Unknown'); ?></p>
    <?php else: ?>
        <p>User not found</p>
    <?php endif; ?>
</body>
</html>