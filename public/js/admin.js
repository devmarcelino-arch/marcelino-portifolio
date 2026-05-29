const menuToggle = document.getElementById("menu-toggle");
const sidebar = document.getElementById("sidebar");

menuToggle.onclick = () => {
    sidebar.classList.toggle("active");
}