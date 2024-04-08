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
