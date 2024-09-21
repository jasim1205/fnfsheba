// get
const mobileNavIcon = document.getElementById("mobile-nav-icon");
const mobileNavView = document.getElementById("mobile-nav");
const mobileNavViewIcon = document.getElementById("mobile-nav-cancel-icon");
const mobileSubNav = document.querySelectorAll(".mobile-sub-nav");
const mobileSubNavPoint = document.querySelectorAll(".mobile-sub-nav-point");

// event
mobileNavIcon.addEventListener("click", openMobileNav);
mobileNavViewIcon.addEventListener("click", closeMobileNav);
mobileSubNavPoint.forEach((subNavPoint, index) => {
  subNavPoint.addEventListener("click", () => openMobileSubNav(index));
});

// func
function openMobileNav() {
  mobileNavView.style.display = "block";
  document.body.style.overflow = "hidden";
}

function closeMobileNav() {
  mobileNavView.style.display = "none";
  document.body.style.overflow = "auto";
}

function openMobileSubNav(index) {
  if (mobileSubNav[index].style.display === "block") {
    mobileSubNav[index].style.display = "none";
  } else {
    mobileSubNav[index].style.display = "block";
  }
}
