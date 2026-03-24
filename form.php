<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Form</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #ffffff, #0f172a);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      color: white;
    }

    .container {
      background: #161616;
      padding: 35px;
      border-radius: 15px;
      width: 350px;
      box-shadow: 0 0 20px rgba(255, 251, 0, 0.49);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      font-size: 14px;
      margin-bottom: 5px;
      display: block;
      color: #cbd5f5;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 12px;
      border: none;
      border-radius: 8px;
      outline: none;
      background: #828791ea;
      color: white;
    }

    input:focus {
      border: 1px solid #22c55e;
    }

    .btn-group {
      justify-content: center;
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      margin-top: 10px;
    }

    button {
      padding: 10px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
      transition: 0.3s;
    }

    .insert { background: #22c55e; }
    .update { background: #3b82f6; }
    .delete { background: #ef4444; }
    .display { background: #f59e0b; }

    button:hover {
      opacity: 0.5;
    }
  </style>
</head>

<body>

  <div class="container">
    <h2>Employee Form</h2>

    <form action="form_op.php" method="post">

      <label for="id">ID</label>
      <input type="number" id="id" name="id">

      <label for="name">Name</label>
      <input type="text" id="name" name="name">

      <label for="age">Age</label>
      <input type="number" id="age" name="age">

      <label for="phone">Phone</label>
      <input type="text" id="phone" name="phone">

      <label for="email">Email</label>
      <input type="email" id="email" name="email">

      <div class="btn-group">
        <button type="submit" name="insert" class="insert">Insert</button>
        <button type="submit" name="update" class="update">Update</button>
        <button type="submit" name="delete" class="delete">Delete</button>
        <button type="submit" name="display" class="display">Display</button>
      </div>

    </form>
  </div>

</body>
</html>