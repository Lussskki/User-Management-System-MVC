<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Users — List</title>
  <style>
    table { border-collapse: collapse; width: 100%; max-width: 900px; }
    th, td { padding: 8px 10px; border: 1px solid #ddd; text-align: left; }
    th { background: #f4f4f4; }
    a { text-decoration: none; color: blue; }
  </style>
</head>
<body>
  <h2>📋 Registered Users</h2>
  <a href="/User-Management-System-MVC/public/">⟵ Back</a> |
  <a href="/User-Management-System-MVC/public/register">+ Add New</a>
  <br><br>

  <?php if (empty($users)): ?>
    <p>No users found.</p>
  <?php else: ?>
    <table>
      <thead>
        <tr>
          <th>ID</th><th>Name</th><th>Email</th><th>Created At</th><th>Actions</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($users as $u): ?>
        <tr>
          <td><?= htmlspecialchars($u['id']) ?></td>
          <td><?= htmlspecialchars($u['name']) ?></td>
          <td><?= htmlspecialchars($u['email']) ?></td>
          <td><?= htmlspecialchars($u['created_at']) ?></td>
          <td>
            <a href="/User-Management-System-MVC/public/one_user.php/<?= urlencode($u['id']) ?>">View</a> |
            <a href="/User-Management-System-MVC/public/update?id=<?= urlencode($u['id']) ?>">Edit</a> |
            <a href="/User-Management-System-MVC/public/delete?id=<?= urlencode($u['id']) ?>" onclick="return confirm('Delete user?')">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  <?php endif; ?>
</body>
</html>
</html>
