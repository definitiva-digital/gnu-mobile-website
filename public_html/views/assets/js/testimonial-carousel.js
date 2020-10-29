var testimonials = ["testimonial-1", "testimonial-2", "testimonial-3"]
var curTestimonial = 0
var maxTestimonial = testimonials.length
var testimonial = document.getElementById(testimonials[curTestimonial])
var testimonialPrev = document.getElementById('testimonial-prev')
var testimonialNext = document.getElementById('testimonial-next')
var testimonialTime = 7000

initTestimonial()
var testimonialTimer = changeTestimonial()

testimonialPrev.onclick = function () {
    changeTestimonialByButtom(-1)
    clearInterval(testimonialTimer)
    testimonialTimer = changeTestimonial()
}

testimonialNext.onclick = function () {
    changeTestimonialByButtom(1)
    clearInterval(testimonialTimer)
    testimonialTimer = changeTestimonial()
}

function initTestimonial() {
    testimonial.classList.remove('slide-hide')
    testimonial.classList.add('slide-show')

}

function changeTestimonial() {
    return setInterval(() => {
        testimonial.classList.remove('slide-show')
        testimonial.classList.add('slide-hide')
        curTestimonial++
        if (curTestimonial >= maxTestimonial) {
            curTestimonial = 0
        }
        testimonial = document.getElementById(testimonials[curTestimonial])
        testimonial.classList.remove('slide-hide')
        testimonial.classList.add('slide-show')
    }, testimonialTime)
}

function changeTestimonialByButtom(buttom) {
    testimonial.classList.remove('slide-show')
    testimonial.classList.add('slide-hide')
    curTestimonial += buttom
    if (curTestimonial >= maxTestimonial) {
        curTestimonial = 0
    }
    if (curTestimonial < 0) {
        curTestimonial = 1
    }
    testimonial = document.getElementById(testimonials[curTestimonial])
    testimonial.classList.remove('slide-hide')
    testimonial.classList.add('slide-show')
}