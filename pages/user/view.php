<script src="pages/user/view.js"></script>
<link rel="stylesheet" href="pages/user/view.css">
<div class="container">
        <!-- การ์ดสำหรับตารางผู้ใช้ -->
    <div class="card card-custom mb-4">
        <div class="card-header card-header-custom d-flex justify-content-between align-items-center">
            <h2 class="card-title-custom">
                <i class="fas fa-list me-2"></i>รายชื่อผู้ใช้ทั้งหมด
            </h2>
            <button class="btn btn-success-custom" id="btnAdd">
                <i class="fas fa-user-plus me-2"></i>เพิ่มผู้ใช้ใหม่
            </button>
        </div>
        
        <div class="card-body p-0">
            <!-- ตารางข้อมูลผู้ใช้ -->
            <div class="table-responsive">
                <table class="table table-custom table-hover mb-0">
                    <thead>
                        <tr>
                            <th width="60">#</th>
                            <th>ชื่อ-สกุล</th>
                            <th>บ้านเลขที่</th>
                            <th>เบอร์โทร</th>
                            <th width="140" class="text-center">การจัดการ</th>
                        </tr>
                    </thead>
                    <!-- ส่วนข้อมูลผู้ใช้ -->
                    <tbody id="tbody_user">
                        <!-- ข้อมูลจะถูกเพิ่มด้วย JavaScript -->
                        <tr id="emptyRow" class="d-none">
                            <td colspan="5">
                                <div class="empty-state">
                                    <i class="fas fa-users-slash"></i>
                                    <h5 class="mt-3">ไม่มีข้อมูลผู้ใช้</h5>
                                    <p class="mb-0">คลิกที่ปุ่ม "เพิ่มผู้ใช้ใหม่" เพื่อเพิ่มผู้ใช้คนแรก</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

 <div class="modal fade" id="userModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-content-custom">
            <div class="modal-header modal-header-custom">
                <h5 class="modal-title modal-title-custom">
                    <i class="fas fa-user-edit me-2"></i><span id="modalTitle">เพิ่มผู้ใช้ใหม่</span>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            
            <div class="modal-body modal-body-custom">
                <input type="hidden" id="user_id">
                
                <div class="mb-3">
                    <label class="form-label fw-medium">ชื่อ-สกุล <span class="text-danger">*</span></label>
                    <input type="text" id="user_name" class="form-control form-control-custom" placeholder="กรอกชื่อ-สกุลผู้ใช้">
                    <div class="form-text">ตัวอย่าง: สมชาย ใจดี</div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label fw-medium">บ้านเลขที่ <span class="text-danger">*</span></label>
                    <input type="text" id="user_address" class="form-control form-control-custom" placeholder="กรอกบ้านเลขที่">
                    <div class="form-text">ตัวอย่าง: 123/456 หมู่ 5</div>
                </div>
                
                <div class="mb-4">
                    <label class="form-label fw-medium">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                    <input type="text" id="user_phone" class="form-control form-control-custom" placeholder="กรอกเบอร์โทรศัพท์">
                    <div class="form-text">ตัวอย่าง: 0812345678</div>
                </div>
                
                <div class="alert alert-info d-flex align-items-center" role="alert">
                    <i class="fas fa-info-circle me-2"></i>
                    <div>กรุณากรอกข้อมูลให้ครบถ้วนก่อนบันทึก</div>
                </div>
            </div>
            
            <div class="modal-footer modal-footer-custom">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                <button class="btn btn-primary-custom" id="btnSave">
                    <i class="fas fa-save me-2"></i>บันทึกข้อมูล
                </button>
            </div>
        </div>
    </div>
</div>
