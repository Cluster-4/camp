function sidebar_open() {
    var sidebar = document.getElementById("sidebar");
    if (!sidebar.classList.contains("expand")) {
        sidebar.classList.toggle("expand");
    }
}

function sidebar_close() {
    var sidebar = document.getElementById("sidebar");
    if (sidebar.classList.contains("expand")) {
        sidebar.classList.remove("expand");
    }
}

function toggleActive(event) {
    var sidebarItems = document.querySelectorAll('.sidebar-item');
    sidebarItems.forEach(function(item) {
        item.classList.remove('active'); // ลบคลาส active ออกจาก sidebar items ทั้งหมดก่อน
    });
    event.currentTarget.classList.add('active'); // เพิ่มคลาส active ให้กับ sidebar item ที่ถูกคลิก
}
