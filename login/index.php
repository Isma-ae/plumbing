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
    <style>
        body {
            background: linear-gradient(135deg, #e0f7fa 0%, #80deea 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Sarabun', sans-serif;
        }
        .login-card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            background-color: white;
            overflow: hidden;
            max-width: 400px;
            width: 100%;
        }
        .login-header {
            background-color: #0d6efd;
            color: white;
            padding: 2rem 1rem;
            text-align: center;
            border-bottom-left-radius: 50% 20%;
            border-bottom-right-radius: 50% 20%;
            margin-bottom: 2rem;
        }
        .login-icon {
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }
        .btn-primary {
            padding: 0.75rem;
            font-weight: 600;
            border-radius: 0.5rem;
        }
        .form-floating > label {
            padding-left: 1rem;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="login-card">
            <div class="login-header">
                <div class="login-icon">
                    <i class="fa-solid fa-faucet-drip"></i>
                </div>
                <h4 class="fw-bold mb-0">ระบบประปาหมู่บ้าน</h4>
                <small>เข้าสู่ระบบเพื่อจัดการข้อมูล</small>
            </div>
            
            <div class="p-4 pt-0">
                <form>
                    <input type="hidden" id="fn" name="fn" value="login">
                    
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control bg-light border-0" id="admin_username" name="admin_username" placeholder="Username" required>
                        <label for="admin_username"><i class="fa-solid fa-user me-2 text-muted"></i>บัญชีผู้ใช้</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control bg-light border-0" id="admin_password" name="admin_password" placeholder="Password" required>
                        <label for="admin_password"><i class="fa-solid fa-lock me-2 text-muted"></i>รหัสผ่าน</label>
                    </div>
                    
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="rememberMe">
                        <label class="form-check-label text-muted" for="rememberMe">จำรหัสผ่าน</label>
                    </div>
                    
                    <button class="w-100 btn btn-primary btn-lg mb-3 shadow-sm" type="submit">
                        เข้าสู่ระบบ <i class="fa-solid fa-arrow-right-to-bracket ms-2"></i>
                    </button>
                    
                </form>
            </div>
        </div>
    </div>
</body>

</html>