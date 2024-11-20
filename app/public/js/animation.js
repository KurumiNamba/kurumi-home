const about_header = document.getElementById("about-header");
const values_header = document.getElementById("values-header");

const values1 = document.getElementById("values1");
const values2 = document.getElementById("values2");
const values3 = document.getElementById("values3");

let options1 = { threshold: 0.5 };
let options2 = { threshold: 0.5 };
let options3 = { threshold: 0.5 };
let options4 = { threshold: 0.5 };
let options5 = { threshold: 0.5 };

const observer1 = new IntersectionObserver(callback1, options1);
const observer2 = new IntersectionObserver(callback2, options2);
const observer3 = new IntersectionObserver(callback3, options3);
const observer4 = new IntersectionObserver(callback4, options4);
const observer5 = new IntersectionObserver(callback5, options5);

observer1.observe(about_header);
observer2.observe(values_header);
observer3.observe(values1);
observer4.observe(values2);
observer5.observe(values3);

function callback1(entries) {
    if (entries[0].isIntersecting) {
        about_header.classList.add("header");
    }
}

function callback2(entries) {
    if (entries[0].isIntersecting) {
        values_header.classList.add("header");
    }
}

function callback3(entries) {
    if (entries[0].isIntersecting) {
        values1.classList.add("values1");
    }
}

function callback4(entries) {
    if (entries[0].isIntersecting) {
        values2.classList.add("values2");
    }
}

function callback5(entries) {
    if (entries[0].isIntersecting) {
        values3.classList.add("values3");
    }
}
