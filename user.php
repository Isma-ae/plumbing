<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบประปาหมู่บ้าน</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">ระบบประปาหมู่บ้าน</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">หน้าหลัก</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">ผู้ใช้น้ำ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">บันทึกการใช้น้ำ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">รายงาน</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addUserModal"> <i
                class="fas fa-plus"></i> เพิ่มผู้ใช้น้ำ </button><!-- ปุ่มเพิ่ม -->

        <!-- ตาราง -->
        <table class="table table-striped table-hover">
            <!-- ส่วนหัว -->
            <thead>
                <tr>
                    <th>#</th>
                    <th>ชื่อ-สกุล</th>
                    <th>บ้านเลขที่</th>
                    <th>เบอร์โทร</th>
                    <th>การจัดการ</th>
                </tr>
            </thead>
            <!-- ส่วนตัว -->
            <tbody>
                <tr>
                    <td>1</td>
                    <td>นายสมชาย ใจดี</td>
                    <td>15/2</td>
                    <td>084-123-4567</td>
                    <td>
                        <button class="btn btn-sm btn-warning">แก้ไข</button>
                        <button class="btn btn-sm btn-danger">ลบ</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>นายสมหมาย ใจร้าย</td>
                    <td>15/3</td>
                    <td>084-123-4567</td>
                    <td>
                        <button class="btn btn-sm btn-warning">แก้ไข</button>
                        <button class="btn btn-sm btn-danger">ลบ</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>นายหญิง ใจน้อย</td>
                    <td>15/4</td>
                    <td>084-123-4567</td>
                    <td>
                        <button class="btn btn-sm btn-warning">แก้ไข</button>
                        <button class="btn btn-sm btn-danger">ลบ</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Modal Header -->
    <div class="modal fade" id="addUserModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">เพิ่มผู้ใช้น้ำ</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <!-- แบบฟอร์มกรอกผู้ใช้น้ำ -->
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">ผู้ใช้น้ำ</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">บ้านเลขที่</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">หมายเลขโทรศัพท์</label>
                            <input type="text" class="form-control">
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
                    <button type="button" class="btn btn-success">เพิ่ม</button>
                </div>

            </div>
        </div>
    </div>

</body>

</html>