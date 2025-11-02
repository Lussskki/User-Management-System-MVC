<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
</head>
<body>
  <h2>Register New User</h2>

  <form method="POST" action="/User-Management-System-MVC/public/register">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Register</button>
  </form>

  <br>
  <a href="/User-Management-System-MVC/public/">⬅️ Back</a>
</body>
</html>
