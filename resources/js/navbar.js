const sidebar = document.getElementById('sidebar');

function openSide() {
    sidebar.classList.replace('-translate-x-full', 'translate-x-0')
}

function closeSide() {
    sidebar.classList.replace('translate-x-0', '-translate-x-full')
}

window.openSide = openSide;
window.closeSide = closeSide;