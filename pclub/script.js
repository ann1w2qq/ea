document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.lev');
    const nextBtn = document.querySelector('.prav');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.style.display = 'block';
            } else {
                slide.style.display = 'none';
            }
        });
    }

    function nextSlide() {
        currentSlide++;
        if (currentSlide >= slides.length) {
            currentSlide = 0;
        }
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide--;
        if (currentSlide < 0) {
            currentSlide = slides.length - 1;
        }
        showSlide(currentSlide);
    }

    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);
});


document.querySelectorAll('.nav > li').forEach(item => {
    item.addEventListener('click', function(event) {
        event.preventDefault(); 
        const submenu = this.querySelector('.submenu'); 

        if (submenu) { 
            closeOtherSubmenus(this); 
            
            
            submenu.classList.toggle('show-submenu'); 
            this.classList.toggle('active'); 
        }
    });
});


function closeOtherSubmenus(currentItem) {
    document.querySelectorAll('.nav > li').forEach(item => {
        if (item !== currentItem) { 
            item.querySelector('.submenu')?.classList.remove('show-submenu'); 
            item.classList.remove('active');
        }
    });
}

