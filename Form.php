<!DOCTYPE html>
<html>
<head>
  <title>User Form</title>
  <style>
    /* CSS styles for the form */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      font-weight: bold;
      margin-top: 10px;
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    select {
      height: 40px;
    }

    input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h1>User Form</h1>
  <form action="Formconection.php" method="POST">
    <label for="user_id">User ID:</label>
    <input type="text" id="user_id" name="uid" required>

    <label for="user_name">User Name:</label>
    <input type="text" id="user_name" name="uname" required>

    <label for="user_status">User Status:</label>
    <select id="user_status" name="ustatus" required>
      <option value="">Select status</option>
      <option value="Active">Active</option>
      <option value="Inactive">Inactive</option>
    </select>

    <label for="contact_no">Contact Number:</label>
    <input type="text" id="contact_no" name="uno" required>

    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
