const container = document.getElementById('marquee-container');
const track = document.getElementById('marquee-track');

let isDragging = false;
let startX, scrollLeft;
let autoScrollInterval;

// Scroll otomatis
function startAutoScroll() {
    clearInterval(autoScrollInterval);
    autoScrollInterval = setInterval(() => {
        container.scrollLeft += 1;

        const scrollEnd = track.scrollWidth - container.clientWidth;

        // Jika scroll sudah sampai paling kanan, ulang dari awal
        if (container.scrollLeft >= scrollEnd) {
            container.scrollLeft = 0;
        }
    }, 20); // Kecepatan scroll
}

// Mulai otomatis
startAutoScroll();

function pauseScroll() {
    clearInterval(autoScrollInterval);
}

function resumeScroll() {
    startAutoScroll();
}

// Mouse events
container.addEventListener('mousedown', (e) => {
    isDragging = true;
    container.classList.add('cursor-grabbing');
    pauseScroll();
    startX = e.pageX;
    scrollLeft = container.scrollLeft;
});

container.addEventListener('mouseup', () => {
    isDragging = false;
    container.classList.remove('cursor-grabbing');
    resumeScroll();
});

container.addEventListener('mouseleave', () => {
    isDragging = false;
    container.classList.remove('cursor-grabbing');
    resumeScroll();
});

container.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    const x = e.pageX;
    const walk = (x - startX) * 1.5;
    container.scrollLeft = scrollLeft - walk;
});

// Touch events
container.addEventListener('touchstart', (e) => {
    isDragging = true;
    pauseScroll();
    startX = e.touches[0].pageX;
    scrollLeft = container.scrollLeft;
});

container.addEventListener('touchend', () => {
    isDragging = false;
    resumeScroll();
});

container.addEventListener('touchmove', (e) => {
    if (!isDragging) return;
    const x = e.touches[0].pageX;
    const walk = (x - startX) * 1.5;
    container.scrollLeft = scrollLeft - walk;
});