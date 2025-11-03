<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <h2>Student Update Form</h2>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $studentInfo['name']; ?>" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $studentInfo['email']; ?>" required>

    <label for="roll">Roll:</label>
    <input type="text" id="roll" name="roll" value="<?php echo $studentInfo['roll']; ?>" required>
  <br>
    <button type="submit" name="submit">Update</button>
  </form>
  <a href="index.php">Back to Student List</a>
</body>
</html>