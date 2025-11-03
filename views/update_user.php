<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update User</title>
</head>
<body>
  <h2>Update User</h2>

  <form method="POST" action="/User-Management-System-MVC/public/update/<?= $user['id'] ?>">
    <label for="name">Name:</label>
    <input
      type="text"
      id="name"
      name="name"
      value="<?= htmlspecialchars($user['name'] ?? '') ?>"
      required
    >

    <label for="email">Email:</label>
    <input
      type="email"
      id="email"
      name="email"
      value="<?= htmlspecialchars($user['email'] ?? '') ?>"
      required
    >

    <label for="password">Password (optional):</label>
    <input type="password" id="password" name="password">

    <button type="submit">Update</button>
  </form>
</body>
</html>
