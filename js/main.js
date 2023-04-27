const expand = document.querySelector(".menu-toggle");
const hiddenHeading = document.querySelector(".top-of-page-banner-text");

const Click = () => {
    console.log("hi");
    hiddenHeading.classList.toggle("clicked");
};

expand.addEventListener("click", Click);

const accordionItems = document.querySelectorAll(".accordion-item");

accordionItems.forEach((item) => {
    const header = item.querySelector(".accordion-header");

    header.addEventListener("click", () => {
        item.classList.toggle("accordion-active");
        headerActive.classList.toggle("active");
    });
});

var accordionHeaders = document.querySelectorAll(".accordion-header");
accordionHeaders.forEach(function (header) {
    header.addEventListener("click", function () {
        this.parentNode.classList.toggle("active");
    });
});
