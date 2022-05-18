document.addEventListener("DOMContentLoaded", function () {
	el_autohide = document.querySelector(".autohide");

	// add padding-top to bady (if necessary)
	navbar_height = document.querySelector(".navbar").offsetHeight;
	// document.body.style.paddingTop = navbar_height + "px";

	if (el_autohide) {
		var last_scroll_top = 0;
		window.addEventListener("scroll", function () {
			let scroll_top = window.scrollY;
			if (scroll_top > 100) {
				if (scroll_top < last_scroll_top) {
					el_autohide.classList.remove("scrolled-down");
					el_autohide.classList.add("scrolled-up");
				} else {
					el_autohide.classList.remove("scrolled-up");
					el_autohide.classList.add("scrolled-down");
				}
				last_scroll_top = scroll_top;
			}
		});
		// window.addEventListener
	}
	// if
});
// DOMContentLoaded  end

// Menentukan current nav

let navs = document.querySelectorAll(".nav-link");
let currentHref = window.location.href;
navs.forEach((e) => {
	if (e.href == currentHref) {
		e.classList.add("fw-bold", "active");
	}
});

// Navbar transparent
let navbar = document.querySelector(".navbar");
let navButton = document.querySelector(".navbar-toggler");
let minusHeight;
let navPrimary;

if (currentHref == navs[0].href) {
	if (innerWidth >= 992) {
		if (window.scrollY >= window.innerHeight - 50) {
			navbar.classList.add("bg-primary");
		}
	} else {
		if (window.scrollY >= window.innerHeight - 375) {
			navbar.classList.add("bg-primary");
		}
		navButton.addEventListener("click", function () {
			if (navButton.classList.contains("collapsed")) {
				// When nav item unshow
				if (!navPrimary) {
					navbar.classList.remove("bg-primary");
				}
			} else {
				// When nav item show
				if (navbar.classList.contains("bg-primary")) {
					navPrimary = true;
				} else {
					navPrimary = false;
				}
				navbar.classList.add("bg-primary");
			}
		});
	}

	window.addEventListener("scroll", function () {
		if (window.innerWidth >= 992) {
			minusHeight = 325;
		} else {
			minusHeight = 0;
		}
		if (window.scrollY >= 275 + minusHeight) {
			navbar.classList.add("bg-primary");
		} else {
			navbar.classList.remove("bg-primary");
		}
	});
} else {
	navbar.classList.add("bg-primary");
}

// Sidebar di page sekolah details ...
let sidebar = document.querySelector(".sidebar");

window.addEventListener("scroll", function () {
	if (navbar.classList.contains("scrolled-up")) {
		sidebar.style.top = "75px";
	} else {
		sidebar.style.top = "10px";
	}
});

// Navigator
let deskripsi = document.querySelector("#deskripsi");
let desButton = document.querySelector("#des-button");
let transportasi = document.querySelector("#transportasi");
let transButton = document.querySelector("#trans-button");

desButton.addEventListener("click", function () {
	transportasi.classList.remove("d-block");
	transportasi.classList.add("d-none");
	deskripsi.classList.remove("d-none");
	deskripsi.classList.add("d-block");
});

transButton.addEventListener("click", function () {
	deskripsi.classList.remove("d-block");
	deskripsi.classList.add("d-none");
	transportasi.classList.remove("d-none", "pt-5");
	transportasi.classList.add("d-block");
});

// Get user location
var userLoc;
var options = {
	enableHighAccuracy: true,
	timeout: 5000,
	maximumAge: 0,
};

function success(pos) {
	return (userLoc = pos.coords);
}

function error(err) {
	console.warn(`ERROR(${err.code}): ${err.message}`);
}

function getLocation() {
	navigator.geolocation.getCurrentPosition(success, error, options);
}

if (currentHref.includes("details")) {
	window.addEventListener("load", getLocation());
}
