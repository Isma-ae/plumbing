<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="javascript:void(0)">
            <!-- โลโก้ -->
            <img src="image/logo.jpg" height="40px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?php
                        if ($page == 'home') {
                            echo 'active';
                        } else {
                            echo '';
                        }
                    ?>" href="./">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                        if($page == 'user'){
                            echo 'active';
                        } else {
                            echo '';
                        }
                    ?>" href="?page=user">ผู้ใช้น้ำ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php
                        if($page == 'bill') {
                            echo 'active';
                        } else {
                            echo '';
                        }
                    ?>" href="?page=bill">บันทึกการใช้น้ำ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">รายงาน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ผู้ดูแลระบบ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>