class Slider {
    constructor(elements, leftBtn, rightBtn) {
        this.elements = elements;
        this.curSlide = 0;
        this.maxSlide = elements.length;
        this.goToSlide(this.curSlide);
        this.createListenerBtn(leftBtn, "left");
        this.createListenerBtn(rightBtn, "right");
    }
    goToSlide(slide) {
        this.elements.forEach(
            (s, i) => (s.style.transform = `translateX(${100 * (i - slide)}%)`)
        );
    }
    createListenerBtn(btn, direction) {
        switch (direction) {
            case "left":
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    this.goToLeft();
                });
                break;
            case "right":
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    this.goToRight();
                });
                break;

            default:
                break;
        }
    }
    goToLeft() {
        if (this.curSlide === 0) {
            this.curSlide = this.maxSlide - 1;
        } else {
            this.curSlide--;
        }
        this.goToSlide(this.curSlide);
    }

    goToRight() {
        if (this.curSlide === this.maxSlide - 1) {
            this.curSlide = 0;
        } else {
            this.curSlide++;
        }
        this.goToSlide(this.curSlide);
    }
}

export default Slider;
