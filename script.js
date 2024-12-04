const navLinks = document.querySelectorAll('.nav-links a');

navLinks.forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

const upArrow = document.querySelector('.icon-up');
window.addEventListener('scroll', () => {
    if (window.scrollY > 500) {
        upArrow.style.opacity = '1';
        upArrow.style.pointerEvents = 'auto';
    } else {
        upArrow.style.opacity = '0';
        upArrow.style.pointerEvents = 'none';
    }
});
window.addEventListener('load', () => {
    alert('Welcome to Majestic Journeys! Let’s explore the incredible India!');
});
