<div class="row g-4 mb-4">
    <div class="col-12">
        <h3 class="border-start border-5 border-primary ps-3 mb-4 fw-bold">ภาพรวมระบบ</h3>
    </div>

    <!-- Users Card -->
    <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="card shadow-sm border-0 h-100 rounded-3">
            <div class="card-body d-flex align-items-center justify-content-between p-4">
                <div>
                    <h6 class="text-muted fw-normal mb-1">ผู้ใช้น้ำทั้งหมด</h6>
                    <h2 class="mb-0 fw-bold text-primary">287</h2>
                </div>
                <div class="icon-shape bg-primary bg-opacity-10 text-primary p-3 rounded-circle">
                    <i class="fa-solid fa-users fa-2x"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Overdue Card -->
    <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="card shadow-sm border-0 h-100 rounded-3">
            <div class="card-body d-flex align-items-center justify-content-between p-4">
                <div>
                    <h6 class="text-muted fw-normal mb-1">ค่าน้ำค้างชำระ</h6>
                    <h2 class="mb-0 fw-bold text-danger">15,420</h2>
                </div>
                <div class="icon-shape bg-danger bg-opacity-10 text-danger p-3 rounded-circle">
                    <i class="fa-solid fa-file-invoice-dollar fa-2x"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Water Tank Level Card -->
    <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="card shadow-sm border-0 h-100 rounded-3">
            <div class="card-body d-flex align-items-center justify-content-between p-4">
                <div>
                    <h6 class="text-muted fw-normal mb-1">ปริมาณน้ำในถัง</h6>
                    <h2 class="mb-0 fw-bold text-info">75%</h2>
                </div>
                <div class="icon-shape bg-info bg-opacity-10 text-info p-3 rounded-circle">
                    <i class="fa-solid fa-water fa-2x"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Broken Meters Card -->
    <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="card shadow-sm border-0 h-100 rounded-3">
            <div class="card-body d-flex align-items-center justify-content-between p-4">
                <div>
                    <h6 class="text-muted fw-normal mb-1">มิเตอร์ที่ชำรุด</h6>
                    <h2 class="mb-0 fw-bold text-warning">3</h2>
                </div>
                <div class="icon-shape bg-warning bg-opacity-10 text-warning p-3 rounded-circle">
                    <i class="fa-solid fa-wrench fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .icon-shape {
        width: 64px;
        height: 64px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .card {
        transition: transform 0.2s ease-in-out;
    }
    .card:hover {
        transform: translateY(-5px);
    }
</style>