// Get a reference to menu elements.
const iconButton = document.getElementById('icon');
const menu = document.getElementById('myTopnav');
const menuItems = document.getElementsByClassName('menu-item');

// Show and hide the top menu by toggling the 'responsive' class.
iconButton.addEventListener('click', () => {
    menu.classList.toggle('responsive');
});

// Hide the menu on menu item click.
for (let i = 0; i < menuItems.length; i++) {
    menuItems[i].addEventListener('click', () => {
        menu.classList.remove('responsive');
    });
}

var elem = document.querySelector('.m-p-g');

document.addEventListener('DOMContentLoaded', function () {
    var gallery = new MaterialPhotoGallery(elem);
});

// Retouch image sliders
const sliders = document.getElementsByClassName('slider');

for (let i = 0; i < sliders.length; i++) {
    sliders[i].addEventListener('input', (e) => {
        const sliderPos = e.target.value;
        e.target.parentElement.querySelector('.foreground-img').style.width = `${sliderPos}%`;
        e.target.parentElement.querySelector('.slider-button').style.left = `calc(${sliderPos}% - 18px)`;
    })
};

