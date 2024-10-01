<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Add new user
$_id = NULL;
$errors = []; // Mảng để chứa lỗi
function encrypt_id($id) {
    return base64_encode($id);
}
if (!empty($_GET['id'])) {
    $_id = base64_decode ($_GET['id']);
    $user = $userModel->findUserById($_id); // Update existing user
}

if (!empty($_POST['submit'])) {
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);
    
    // Validate name
    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (!preg_match('/^[A-Za-z0-9]{5,15}$/', $name)) {
        $errors[] = "Name must be 5 to 15 characters and contain only letters and numbers.";
    }

    // Validate password
    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/', $password)) {
        $errors[] = "Password must be 5 to 10 characters long and include at least one lowercase letter, one uppercase letter, one number, and one special character.";
    }

    // Nếu không có lỗi, thực hiện thêm hoặc cập nhật người dùng
    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php' ?>
    <div class="container">

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>

            <?php
            // Hiển thị lỗi nếu có
            if (!empty($errors)) {
                echo '<div class="alert alert-danger" role="alert">';
                foreach ($errors as $error) {
                    echo htmlspecialchars($error) . '<br>';
                }
                echo '</div>';
            }
            ?>
            
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($_id); ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo htmlspecialchars($user[0]['name']); ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>