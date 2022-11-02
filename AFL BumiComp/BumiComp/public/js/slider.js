const containerss = document.querySelector('.containerss');
document.querySelector('.slider').addEventListener('input', (e) => {
    containerss.style.setProperty('--position', `${e.target.value}%`);
})