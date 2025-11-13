<?php session_start(); ?>
<?php if (isset($_SESSION['user_id'])): ?>
    
<?php 
require_once 'view/asset/header.php';
require_once 'view/asset/nav.php';
?>
  
<main>
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <?php require_once 'view/asset/card.php'; ?>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Student List
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
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
                    <a href="index.php?action=edit&id=<?php echo $row['id'] ?>" class="btn btn-success btn-sm">edit</a>
                </td>
                <td>
                    <a href="index.php?action=delete&id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure?')">delete</a>
                </td>
            </tr>
          <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</main>
<?php 
require_once 'view/asset/footer.php'; 
require_once 'view/asset/script.php'; 
?>
<?php else: ?>
    <a href="index.php?action=login">Login</a>
    <a href="index.php?action=registration">Registration</a>
<?php endif; ?>