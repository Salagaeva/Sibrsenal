document.addEventListener("DOMContentLoaded", function () {
    const menuItems = document.querySelectorAll('.Product ul li'); 
    const contentItems = document.querySelectorAll('.content-item');

    menuItems.forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault();
            console.log('Клик по вкладке:', this.dataset.target);

            menuItems.forEach(item => item.classList.remove('active'));
            contentItems.forEach(item => item.classList.remove('active'));

            this.classList.add('active');

            const targetId = this.dataset.target;
            const contentToShow = document.getElementById(targetId);
            if(contentToShow){
                contentToShow.classList.add('active');
            }
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
        const cards = document.querySelectorAll(".clickable-card");
        cards.forEach(card => {
            card.addEventListener("click", () => {
                const href = card.getAttribute("data-href");
                if (href) {
                    window.location.href = href;
                }
            });
        });
    });

