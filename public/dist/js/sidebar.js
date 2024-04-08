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
    var text = event.currentTarget.querySelector('.sidebar-link span').textContent; // ดึงข้อความของ sidebar item ที่ถูกคลิก
    var icon = event.currentTarget.querySelector('.sidebar-link i').cloneNode(true); // คัดลอกไอคอนของ sidebar item ที่ถูกคลิก
    icon.removeAttribute('style'); // ลบ style
    updateSidebarTitle(text, icon); // เรียกใช้ฟังก์ชัน updateSidebarTitle() เพื่อปรับเปลี่ยนข้อความและไอคอนใน sidebar title
}

function updateSidebarTitle(text, icon) {
    var sidebarTitle = document.querySelector('.sidebar-title');
    sidebarTitle.innerHTML = ''; // ล้างเนื้อหาเดิมใน sidebar title
    icon.classList.add('me-4'); // เพิ่มคลาส me-4 เข้าไปในไอคอน
    sidebarTitle.appendChild(icon); // เพิ่มไอคอนใน sidebar title
    sidebarTitle.innerHTML += `${text}`; // เพิ่มข้อความใน sidebar title
}

