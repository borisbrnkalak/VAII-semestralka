class RevealSection {
    constructor(reveals) {
        this.scrollAnimation(reveals);
    }

    scrollAnimation(reveals) {
        window.addEventListener("scroll", function () {
            reveals.forEach((el) => {
                let windowHeight = window.innerHeight;
                let revealTop = el.getBoundingClientRect().top;
                let revealPoint = 150;

                if (revealTop < windowHeight - revealPoint) {
                    el.classList.add("active");
                } else if (el.classList.contains("active")) {
                    el.classList.remove("active");
                }
            });
        });
    }
}

export default RevealSection;
