let x = document.querySelector(".x");
let district = document.querySelector(".district");
let requestLink = document.querySelector(".request__link");
let popup = document.querySelector("#popup");

requestLink.addEventListener("click", () => {
    popup.style.display = "block";
});

x.addEventListener("click", popupHide);
district.addEventListener("click", popupHide);

function popupHide() {
    popup.style.display = "none";
}