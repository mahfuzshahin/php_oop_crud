<?php session_start(); ?>
<?php if (isset($_SESSION['user_id'])): ?>
    
<?php 
require_once 'view/asset/header.php';
require_once 'view/asset/nav.php';
?>
  
<main>
<div class="container-fluid px-4">
    <h1 class="mt-4">Student</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Update Student</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Update Student 
        </div>
        <div class="card-body">
            <form method="post">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $studentInfo['name']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $studentInfo['email']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="roll" class="form-label">Roll</label>
                <input type="text" class="form-control" name="roll" id="roll" value="<?php echo $studentInfo['roll']; ?>" required>
              </div>
              <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-success">Update</button>
              </div>
            </form>
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