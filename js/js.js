// Get a reference to menu elements.
const iconButton = document.getElementById('icon');
const menu = document.getElementById('menu');
const menuItems=document.getElementsByClassName('menu-item');

// Show and hide the top menu by toggling the 'responsive' class.
iconButton.addEventListener('click',()=>{
    menu.classList.toggle('responsive');
});

// Hide the menu on menu item click.
for(let i=0; i<menuItems.length; i++){
    menuItems[i].addEventListener('click', ()=>{
        menu.classList.remove('responsive');
    });
}