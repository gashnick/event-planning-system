// side bar toggle

var sideBarOpen = false;
var sidebar = document.getElementById("sidebar");

function openSideBar() {
    if (!sideBarOpen) {
        sidebar.classList.add("sidebar-responsive");
        sideBarOpen = true;
    }
}

function closeSidebar() {
    if (sideBarOpen) {
        sidebar.classList.add("sidebar-responsive");
        sideBarOpen = false;
    }
}
