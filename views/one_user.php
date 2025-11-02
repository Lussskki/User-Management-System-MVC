<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f8;
            margin: 0;
            padding: 40px;
        }
        .container {
            background-color: white;
            width: 400px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #222;
        }
        .field {
            margin: 10px 0;
        }
        .label {
            font-weight: bold;
            display: inline-block;
            width: 120px;
        }
        .value {
            color: #555;
        }
        .back {
            text-align: center;
            margin-top: 20px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>User Details</h2>

    <?php if (!empty($one)): ?>
        <div class="field">
            <span class="label">ID:</span>
            <span class="value"><?= htmlspecialchars($one['id']) ?></span>
        </div>
        <div class="field">
            <span class="label">Name:</span>
            <span class="value"><?= htmlspecialchars($one['name']) ?></span>
        </div>
        <div class="field">
            <span class="label">Email:</span>
            <span class="value"><?= htmlspecialchars($one['email']) ?></span>
        </div>
        <div class="field">
            <span class="label">Created:</span>
            <span class="value"><?= htmlspecialchars($one['created_at']) ?></span>
        </div>
    <?php else: ?>
        <p style="text-align:center; color:#999;">User not found.</p>
    <?php endif; ?>

    <div class="back">
        <a href="/User-Management-System-MVC/public/users">← Back</a>
    </div>
</div>

</body>
</html>
