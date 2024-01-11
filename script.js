//* Collapsible FAQ Elements
const coll = document.getElementsByClassName("collapsible");

for (let i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        var activeCollapsible = document.querySelector(".collapsible.active");
        if (activeCollapsible && activeCollapsible !== this) {
            activeCollapsible.classList.toggle("active");
            activeCollapsible.nextElementSibling.style.maxHeight = null;
        }
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
}

// -------------------------------------------------------- //

//* Parallax Hero Section
const image = document.getElementsByClassName('parTest');
new simpleParallax(image, {
	orientation: 'down',
    delay: .6,
	transition: 'cubic-bezier(0,0,0,1)'
});

// -------------------------------------------------------- //

//* MenuBurger
const menuBurger = document.getElementById("menuBurger");
const mobileMenu = document.getElementById("mobileMenu");

menuBurger.addEventListener("click", function() {
    mobileMenu.classList.toggle("show");
    menuBurger.innerHTML = mobileMenu.classList.contains("show") ? "X" : "|||";
});

// TODO: Make menu close when an option is picked

// -------------------------------------------------------- //

//* Logo Slider
document.addEventListener('DOMContentLoaded', function () {
    var slider = document.getElementById('slider');
    var logoSlides = document.querySelectorAll('.logo-slide');
    
    // Create a Draggabilly instance for the slider
    var draggie = new Draggabilly(slider, {
        axis: 'x',
        containment: true
    });

    // Toggle the reverse-animation class when the slider is dragged
    draggie.on('dragMove', function () {
        logoSlides.forEach(function (logoSlide) {
            var direction = draggie.position.x < 0 ? 'reverse-animation' : '';
            logoSlide.classList.toggle('reverse-animation', direction === 'reverse-animation');
        });
    });
});
