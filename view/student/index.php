<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student LIst</title>
</head>
<body>
    <?php session_start(); ?>

<div style="margin-bottom: 20px;">
    <?php if (isset($_SESSION['user_id'])): ?>
        <p>
            Welcome, <strong><?= htmlspecialchars($_SESSION['name']); ?></strong> |
            <a href="index.php?action=logout">Logout</a>
        </p>
    <?php else: ?>
        <a href="index.php?action=login">Login</a>
        <a href="index.php?action=registration">Registration</a>
    <?php endif; ?>
</div>
<?php if (isset($_SESSION['user_id'])): ?>
    <a href="index.php?action=create">Add Student</a>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Roll</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $student_data->fetch_assoc()){ ?>
           <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['roll'] ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $row['id'] ?>">edit</a>
                </td>
                <td>
                    <a href="index.php?action=delete&id=<?php echo $row['id'] ?>" onclick="return confirm('Are you Sure?')">delete</a>
                </td>
            </tr>
          <?php  } ?>
            
        </tbody>
    </table>
    <?php endif; ?>
</body>
</html>