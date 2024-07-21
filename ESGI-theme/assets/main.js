window.onload = () => {
	ajaxifyPaginateLinks();
	initMenu();
};

function ajaxifyPaginateLinks() {
	document.querySelectorAll(".page-numbers").forEach((elem) => {
		elem.onclick = (e) => {
			e.preventDefault(); // annule le comportement par défaut

			const current = Number(
				document.querySelector(".page-numbers.current").innerHTML
			);
			var target;
			if (elem.classList.contains("next")) {
				target = current + 1;
			} else if (elem.classList.contains("prev")) {
				target = current - 1;
			} else {
				target = Number(elem.innerHTML);
			}
			fetchPage(target);
		};
	});
}

function fetchPage(page) {
	// fetch vers l'url admin-ajax...// avec des param GET action, page et base (de l'URL)

	fetch(
		esgi.ajaxURL +
			"?action=load_posts&page=" +
			page +
			"&base=" +
			esgi.basePagination
	).then((response) => {
		response.text().then((text) => {
			document.getElementById("list-wrapper").innerHTML = text;
			ajaxifyPaginateLinks();
		});
	});
}

	function initMenu() {
		var burgerMenu = document.getElementById('burger-menu');
    var headerContent = document.getElementById('header-content');
    var navMenu = document.getElementById('nav-menu');
    var closeMenu = document.getElementById('close-menu');

    burgerMenu.addEventListener('click', function () {
      headerContent.style.display = 'none';
      navMenu.classList.add('open');
    });

    closeMenu.addEventListener('click', function () {
      headerContent.style.display = 'flex';
      navMenu.classList.remove('open');
    });
	};



