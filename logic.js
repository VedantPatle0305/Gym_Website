const bars = document.getElementById('open');
const menu = document.getElementById('list-container');
const close = document.getElementById('close');
window.onresize = function() {
    if (window.innerWidth > 600) {
        menu.style.width = '70%';
    } else {
        menu.style.width = '0%';
    }
}
bars.addEventListener('click', function() {
    menu.style.width = '100%';
});

close.addEventListener('click', function() {
    menu.style.width = "0%";
})