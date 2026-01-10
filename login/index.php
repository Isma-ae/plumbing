<?php
    session_start();
    if (isset($_SESSION["admin_id"])) {
        header("Location:../");
    }
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include('../master/head.php');?>
    <script src="script.js"></script>
</head>

<body>
    <div class="container" style="margin-top:20px;">
        <div class="text-center"><h2>เข้าสู่ระบบประปาภายในหมู่บ้าน</h2></div>
        <form class="container mt-5" style="max-width: 400px;">
            <input type="hidden" id="fn" name="fn" value="login">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="admin_username" name="admin_username" placeholder="name@example.com" required>
                <label for="admin_username">บัญชีผู้ใช้</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="admin_password" name="admin_password" placeholder="Password" required>
                <label for="admin_password">รหัสผ่าน</label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">เข้าสู่ระบบ</button>
        </form>
    </div>
</body>

</html>