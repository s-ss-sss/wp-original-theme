const header = document.querySelector(".l-header");
const fv = document.querySelector(".p-fv");
const menu = document.querySelector(".l-header__menu");

/**
 * FV通過時のヘッダー制御
 */
if (header && fv) {
	const observer = new IntersectionObserver(
		([entry]) => {
			header.classList.toggle(
				"is-fv-passed",
				!entry.isIntersecting
			);
		},
		{
			rootMargin: `-${header.offsetHeight}px 0px 0px 0px`
		}
	);
	observer.observe(fv);
}

/**
 * 横スクロール時のヘッダー追従
 */
if (header) {
	window.addEventListener("scroll", () => {
		header.style.left = `${-window.scrollX}px`;
	});
}

/**
 * ハンバーガーメニュー
 */
if (menu) {
	menu.addEventListener("click", () => {
		document.body.classList.toggle("is-drawer-open");
	});
	document.querySelectorAll(".l-drawer a").forEach((link) => {
		link.addEventListener("click", () => {
			document.body.classList.remove("is-drawer-open");
		});
	});
}

/**
 * 料金プラン選択時のフォーム連携
 */
document.querySelectorAll(".p-price__button").forEach((button) => {
	button.addEventListener("click", () => {
		const plan = button.dataset.plan;
		if (!plan) return;
		const radio = document.querySelector(`input[name="plan"][value="${plan}"]`);
		if (!radio) return;
		radio.checked = true;
		radio.dispatchEvent(new Event("change", {
			bubbles: true
		}));
	});
});

/**
 * CF7送信完了後のサンクスページ遷移
 */
document.addEventListener("wpcf7mailsent", event => {
	if (event.detail.contactFormId !== 7) return;
	window.location.href = themeData.thanksUrl;
});

/**
 * Particles
 */
document.addEventListener("DOMContentLoaded", async () => {
	const particles = document.querySelector("#fv-particles");
	if (!particles || typeof tsParticles === "undefined" || typeof loadSlim !== "function") return;
	await loadSlim(tsParticles);
	await tsParticles.load({
		id: "fv-particles",
		options: {
			fullScreen: {
				enable: false,
			},
			particles: {
				number: {
					value: 50,
					density: {
						enable: true,
						width: 1000,
						height: 1000,
					},
				},
				color: {
					value: ["#2c97d0", "#37b5d8", "#4a7085"],
				},
				links: {
					enable: true,
					color: "#6fb9d2",
					distance: 145,
					opacity: 0.36,
					width: 1,
				},
				move: {
					enable: true,
					speed: 0.85,
					direction: "none",
					random: true,
					straight: false,
					outModes: {
						default: "out",
					},
				},
				opacity: {
					value: {
						min: 0.5,
						max: 0.85,
					},
				},
				size: {
					value: {
						min: 1.8,
						max: 4,
					},
				},
			},
			interactivity: {
				events: {
					onHover: {
						enable: true,
						mode: "grab",
					},
				},
				modes: {
					grab: {
						distance: 190,
						links: {
							opacity: 0.7,
						},
					},
				},
			},
			detectRetina: true,
		},
	});
});

/**
 * Swiper
 */
document.addEventListener("DOMContentLoaded", () => {
	const worksSlider = document.querySelector(".js-works-slider");
	if (!worksSlider) return;
	const slideCount = worksSlider.querySelectorAll(".swiper-slide").length;
	if (slideCount <= 1) return;
	new Swiper(worksSlider, {
		loop: slideCount >= 4,
		centeredSlides: true,
		slidesPerView: "auto",
		speed: 1000,
		autoplay: {
			delay: 3000,
			disableOnInteraction: false,
		},
		pagination: {
			el: ".p-works__pagination",
			clickable: true,
			renderBullet(index, className) {
				return `
					<span class="${className}">
						<span class="p-works__pagination-bar"></span>
					</span>
				`;
			},
		},
		breakpoints: {
			0: {
				spaceBetween: 0,
			},
			769: {
				spaceBetween: 30,
			},
		},
	});
});
