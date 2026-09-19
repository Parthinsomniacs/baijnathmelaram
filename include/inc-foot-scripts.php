<!--Common JS-->
<?php require_once $alljs; ?>
<script src="https://unpkg.com/lenis@1.3.26/dist/lenis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script>
	// 1. Track and preserve scroll position across page refresh
	var savedScrollPos = 0;
	try {
		savedScrollPos = parseFloat(sessionStorage.getItem('bm_scroll_pos') || '0');
	} catch (e) {}

	window.addEventListener('scroll', function() {
		try {
			var pos = window.scrollY || window.pageYOffset || 0;
			sessionStorage.setItem('bm_scroll_pos', pos.toString());
		} catch (e) {}
	}, { passive: true });

	window.addEventListener('beforeunload', function() {
		try {
			var pos = window.scrollY || window.pageYOffset || 0;
			sessionStorage.setItem('bm_scroll_pos', pos.toString());
		} catch (e) {}
	});

	// 2. GSAP & ScrollTrigger setup
	if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
		gsap.registerPlugin(ScrollTrigger);
		ScrollTrigger.config({
			autoRefreshEvents: "visibilitychange,DOMContentLoaded,load,resize",
			ignoreMobileResize: true
		});
	}

	// 3. Lenis Smooth Scroll Integration
	if (typeof Lenis !== "undefined") {
		window.lenis = new Lenis({
			autoRaf: false,
			duration: 1.2,
			easing: function(t) { return Math.min(1, 1.001 - Math.pow(2, -10 * t)); },
			orientation: 'vertical',
			smoothWheel: true,
			touchMultiplier: 1.5,
			infinite: false
		});

		// Restore scroll position ONCE on page load
		if (savedScrollPos > 0) {
			window.scrollTo(0, savedScrollPos);
			window.lenis.scroll = savedScrollPos;
			window.lenis.targetScroll = savedScrollPos;
		}

		if (window.lenis && typeof ScrollTrigger !== "undefined") {
			window.lenis.on('scroll', ScrollTrigger.update);
			gsap.ticker.add(function(time) {
				window.lenis.raf(time * 1000);
			});
			gsap.ticker.lagSmoothing(0);
		}
	}
</script>
<!--Common JS-->
<script>
	/** Zero-Jerk Seamless Dual-Video Crossfade Loop using GSAP **/
	function initSeamlessBannerVideoLoop() {
		const v1 = document.getElementById("banner-video-1");
		const v2 = document.getElementById("banner-video-2");
		if (!v1 || !v2) return;

		let currentVid = v1;
		let nextVid = v2;
		let isTransitioning = false;
		const crossfadeTime = 1.0; // Start crossfade 1.0s before end to prevent any jerk

		v1.muted = true;
		v2.muted = true;
		v1.playsInline = true;
		v2.playsInline = true;

		const startPlay = v1.play();
		if (startPlay !== undefined) {
			startPlay.catch(() => {
				const resumePlay = () => {
					v1.play().catch(() => {});
					document.removeEventListener("click", resumePlay);
					document.removeEventListener("touchstart", resumePlay);
				};
				document.addEventListener("click", resumePlay, { toggleActions: "play none none none" });
				document.addEventListener("touchstart", resumePlay, { toggleActions: "play none none none" });
			});
		}

		function checkLoop() {
			if (currentVid && currentVid.duration && !isTransitioning) {
				const timeLeft = currentVid.duration - currentVid.currentTime;
				if (timeLeft <= crossfadeTime && timeLeft > 0) {
					isTransitioning = true;
					nextVid.currentTime = 0;
					const p = nextVid.play();
					if (p !== undefined) {
						p.catch(() => {});
					}

					if (typeof gsap !== "undefined") {
						gsap.to(currentVid, {
							opacity: 0,
							duration: crossfadeTime,
							ease: "power1.inOut"
						});
						gsap.to(nextVid, {
							opacity: 1,
							duration: crossfadeTime,
							ease: "power1.inOut",
							onComplete: () => {
								currentVid.pause();
								currentVid.currentTime = 0;
								const temp = currentVid;
								currentVid = nextVid;
								nextVid = temp;
								isTransitioning = false;
							}
						});
					} else {
						nextVid.style.opacity = "1";
						currentVid.style.opacity = "0";
						currentVid.pause();
						currentVid.currentTime = 0;
						const temp = currentVid;
						currentVid = nextVid;
						nextVid = temp;
						isTransitioning = false;
					}
				}
			}
			requestAnimationFrame(checkLoop);
		}

		requestAnimationFrame(checkLoop);
	}

	/** Hero Banner Animation on Load **/
	function initHeroBannerAnimation() {
		if (typeof gsap === "undefined") return;

		const wordInners = document.querySelectorAll("#section-banner .banner-word-inner");
		const divider = document.querySelector(".banner-ref-divider");
		const scrollLabel = document.querySelector(".banner-scroll-label");
		const refDesc = document.querySelector(".banner-ref-desc");
		const refBtn = document.querySelector(".banner-ref-btn");

		const heroTl = gsap.timeline({
			delay: 0.15
		});

		// 1. Title words reveal with mask stagger
		if (wordInners.length) {
			heroTl.fromTo(wordInners, {
				y: "115%",
				opacity: 0
			}, {
				y: "0%",
				opacity: 1,
				duration: 0.95,
				stagger: 0.08,
				ease: "power3.out"
			});
		}

		// 2. Horizontal divider scales out smoothly
		if (divider) {
			heroTl.fromTo(divider, {
				scaleX: 0,
				transformOrigin: "left center"
			}, {
				scaleX: 1,
				duration: 0.8,
				ease: "power2.out"
			}, "-=0.4");
		}

		// 3. Scroll Down label fades in
		if (scrollLabel) {
			heroTl.fromTo(scrollLabel, {
				y: 15,
				opacity: 0
			}, {
				y: 0,
				opacity: 1,
				duration: 0.6,
				ease: "power2.out"
			}, "-=0.5");
		}

		// 4. Description text reveals smoothly with upward slide & fade
		if (refDesc) {
			heroTl.fromTo(refDesc, {
				y: 20,
				opacity: 0
			}, {
				y: 0,
				opacity: 1,
				duration: 0.75,
				ease: "power2.out"
			}, "-=0.45");
		}

		// 5. CTA Button pops in with gentle spring
		if (refBtn) {
			heroTl.fromTo(refBtn, {
				y: 18,
				opacity: 0,
				scale: 0.95
			}, {
				y: 0,
				opacity: 1,
				scale: 1,
				duration: 0.65,
				ease: "back.out(1.5)"
			}, "-=0.35");
		}

		// If page is refreshed while scrolled down, immediately show banner elements
		const currentScroll = window.scrollY || window.pageYOffset || 0;
		if (currentScroll > 80) {
			heroTl.progress(1);
		}
	}

	/** About Section Animation **/
	function initAboutSectionAnimation() {
		if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		const section = document.querySelector("#section-about-us");
		if (!section) return;

		const leftShip = document.querySelector(".about-col-ship");
		const contentBlock = document.querySelector(".about-col-content");
		const badges = document.querySelectorAll(".about-badge-card");

		const tl = gsap.timeline({
			scrollTrigger: {
				trigger: section,
				start: "top 75%",
				toggleActions: "play none none none"
			}
		});

		if (leftShip) {
			tl.fromTo(leftShip, {
				x: -60,
				opacity: 0,
				scale: 0.94
			}, {
				x: 0,
				opacity: 1,
				scale: 1,
				duration: 1.0,
				ease: "power3.out",
				clearProps: "transform,opacity"
			}, 0);
		}

		if (contentBlock) {
			tl.fromTo(contentBlock, {
				y: 35,
				opacity: 0
			}, {
				y: 0,
				opacity: 1,
				duration: 0.9,
				ease: "power2.out",
				clearProps: "transform,opacity"
			}, 0.15);
		}

		if (badges.length) {
			tl.fromTo(badges, {
				y: 20,
				opacity: 0,
				scale: 0.9
			}, {
				y: 0,
				opacity: 1,
				scale: 1,
				duration: 0.55,
				stagger: 0.08,
				ease: "back.out(1.5)",
				clearProps: "transform,opacity"
			}, 0.35);
		}
	}

	/** Anchors Section Complete Interaction:
	 * 1. Title text reveal animation (Our Anchors).
	 * 2. Counter cards stagger fade-up & animated number count.
	 * 3. Video sticky shrink on scroll.
	 * 4. 4 Cards slide in horizontally from right to left 0 strictly inside theme-padding.
	 **/
	/** Anchors Section Animation with Word Reveal **/
	/** Anchors Section: Title Word-Reveal & Center Fan-Out Scroll Animation **/
	function initAnchorsInteractiveExperience() {
		if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		gsap.registerPlugin(ScrollTrigger);

		const anchorSec = document.querySelector("#section-anchors");
		if (!anchorSec) return;

		// 1. Title Word-Reveal Animation
		const titleWords = anchorSec.querySelectorAll(".word-inner, .anchor-word-inner");
		if (titleWords.length) {
			gsap.fromTo(titleWords, {
				y: "115%",
				opacity: 0
			}, {
				y: "0%",
				opacity: 1,
				duration: 0.85,
				stagger: 0.06,
				ease: "power3.out",
				scrollTrigger: {
				trigger: anchorSec.querySelector(".js-anchors-title") || anchorSec,
				start: "top 85%",
				toggleActions: "play none none none"
			}
			});
		}

		// 2. Center Gather & Fan Out to Left and Right on Scroll
		const fanWrap = document.querySelector("#anchor-cards-scroll-wrap");
		const fanColumns = document.querySelector(".anchor-cards-fan-columns");
		const fanCols = document.querySelectorAll(".anchor-fan-col");

		if (fanWrap && fanColumns && fanCols.length === 4) {
			let mmCards = gsap.matchMedia();

			mmCards.add("(min-width: 1025px)", () => {
				const calculateOffsets = () => {
					const gridRect = fanColumns.getBoundingClientRect();
					const gridCenterX = gridRect.left + gridRect.width / 2;

					return Array.from(fanCols).map(col => {
						const colRect = col.getBoundingClientRect();
						const colCenterX = colRect.left + colRect.width / 2;
						return gridCenterX - colCenterX;
					});
				};

				const initialOffsets = calculateOffsets();
				const rotations = [-6, -2, 2, 6];
				const scales = [1, 0.97, 0.95, 0.92];
				const zIndexes = [4, 3, 2, 1];

				fanCols.forEach((col, i) => {
					const card = col.querySelector(".anchor-fan-card") || col;
					gsap.set(card, {
						x: initialOffsets[i],
						rotation: rotations[i],
						scale: scales[i],
						zIndex: zIndexes[i],
						boxShadow: "0 20px 45px rgba(0, 0, 0, 0.12)"
					});
				});

				const fanCards = Array.from(fanCols).map(col => col.querySelector(".anchor-fan-card") || col);

				const fanTl = gsap.timeline({
					scrollTrigger: {
						trigger: fanWrap,
						start: "top 75%",
						end: "center center",
						scrub: 0.8,
						invalidateOnRefresh: true
					}
				});

				// Smooth Fan Out to Left and Right positions as user scrolls
				fanTl.to(fanCards, {
					x: 0,
					rotation: 0,
					scale: 1,
					boxShadow: "0 10px 30px rgba(0, 0, 0, 0.04)",
					duration: 1.5,
					ease: "power2.out",
					stagger: 0.03
				});
			});

			mmCards.add("(max-width: 1024px)", () => {
				// Mobile & Tablet: Clean Stagger Reveal
				gsap.fromTo(fanCols, {
					y: 40,
					opacity: 0
				}, {
					y: 0,
					opacity: 1,
					stagger: 0.12,
					duration: 0.8,
					ease: "power2.out",
					scrollTrigger: {
				trigger: fanWrap,
				start: "top 85%",
				toggleActions: "play none none none"
			}
				});
			});
		}
	}

	/** React Bits TiltedCard 3D Tilt Physics Implementation (Vanilla JS) **/
	function initTiltedCards() {
		const cards = document.querySelectorAll(".js-tilted-card");
		if (!cards.length) return;

		const rotateAmplitude = 14;
		const scaleOnHover = 1.04;

		cards.forEach(card => {
			let rafId = null;
			let targetRotX = 0;
			let targetRotY = 0;
			let currentRotX = 0;
			let currentRotY = 0;
			let currentScale = 1;
			let targetScale = 1;
			let isHovered = false;

			const tooltip = card.querySelector(".anchor-tilt-tooltip");

			function updateSpring() {
				currentRotX += (targetRotX - currentRotX) * 0.12;
				currentRotY += (targetRotY - currentRotY) * 0.12;
				currentScale += (targetScale - currentScale) * 0.12;

				card.style.transform = `rotateX(${currentRotX.toFixed(2)}deg) rotateY(${currentRotY.toFixed(2)}deg) scale3d(${currentScale.toFixed(3)}, ${currentScale.toFixed(3)}, ${currentScale.toFixed(3)})`;

				if (isHovered || Math.abs(targetRotX - currentRotX) > 0.05 || Math.abs(targetRotY - currentRotY) > 0.05 || Math.abs(targetScale - currentScale) > 0.005) {
					rafId = requestAnimationFrame(updateSpring);
				} else {
					card.style.transform = "";
					rafId = null;
				}
			}

			card.addEventListener("mouseenter", () => {
				isHovered = true;
				targetScale = scaleOnHover;
				if (tooltip) tooltip.style.opacity = "1";
				if (!rafId) rafId = requestAnimationFrame(updateSpring);
			});

			card.addEventListener("mousemove", (e) => {
				const rect = card.getBoundingClientRect();
				const offsetX = e.clientX - rect.left - rect.width / 2;
				const offsetY = e.clientY - rect.top - rect.height / 2;

				targetRotX = (offsetY / (rect.height / 2)) * -rotateAmplitude;
				targetRotY = (offsetX / (rect.width / 2)) * rotateAmplitude;

				if (tooltip) {
					const tooltipX = e.clientX - rect.left + 12;
					const tooltipY = e.clientY - rect.top + 12;
					tooltip.style.transform = `translate3d(${tooltipX}px, ${tooltipY}px, 40px)`;
				}

				if (!rafId) rafId = requestAnimationFrame(updateSpring);
			});

			card.addEventListener("mouseleave", () => {
				isHovered = false;
				targetRotX = 0;
				targetRotY = 0;
				targetScale = 1;
				if (tooltip) tooltip.style.opacity = "0";
			});
		});
	}


	/** Capabilities Sticky Stacking Cards Scroll Animation **/
	/** Stats Section Parallax & Counter Animation **/
	/** Stats Section Parallax, Word-Reveal & Counter Animation **/
	function initStatsParallaxAnimation() {
		if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		const statsSec = document.querySelector("#section-stats");
		if (!statsSec) return;

		const bg = statsSec.querySelector(".stats-bg-parallax, .stats-parallax-img");
		if (bg) {
			gsap.fromTo(bg, 
				{ y: "-15%" }, 
				{
					y: "15%",
					ease: "none",
					scrollTrigger: {
						trigger: statsSec,
						start: "top bottom",
						end: "bottom top",
						scrub: true
					}
				}
			);
		}

		// Title Word-Reveal Animation
		const titleWords = statsSec.querySelectorAll(".word-inner, .stats-word-inner");
		if (titleWords.length) {
			gsap.fromTo(titleWords, {
				y: "115%",
				opacity: 0
			}, {
				y: "0%",
				opacity: 1,
				duration: 0.85,
				stagger: 0.06,
				ease: "power3.out",
				scrollTrigger: {
				trigger: statsSec.querySelector(".js-stats-title") || statsSec,
				start: "top 85%",
				toggleActions: "play none none none"
			}
			});
		}

		// Reveal stat glass cards & run number counters
		const glassCards = statsSec.querySelectorAll(".stats-glass-card");
		if (glassCards.length > 0) {
			gsap.fromTo(glassCards, {
				y: 40,
				opacity: 0,
				scale: 0.95
			}, {
				y: 0,
				opacity: 1,
				scale: 1,
				stagger: 0.1,
				duration: 0.85,
				ease: "back.out(1.4)",
				scrollTrigger: {
					trigger: statsSec.querySelector(".stats-columns-grid") || statsSec,
					start: "top 80%",
					toggleActions: "play none none none",
					onEnter: () => {
						const counters = statsSec.querySelectorAll(".stats-stat-count");
						counters.forEach(counter => {
							const target = parseFloat(counter.getAttribute("data-target") || "0");
							const decimals = parseInt(counter.getAttribute("data-decimals") || "0", 10);
							if (target > 0) {
								const obj = { val: 0 };
								gsap.to(obj, {
									val: target,
									duration: 2.2,
									ease: "power2.out",
									onUpdate: () => {
										counter.textContent = decimals > 0 ? obj.val.toFixed(decimals) : Math.floor(obj.val).toLocaleString();
									}
								});
							}
						});
					}
				}
			});
		}
	}

	/** Capabilities Sticky Stacking Cards & Word-Reveal Animation **/
	/** Capabilities Sticky Full-Height Stacking Cards & Word-Reveal Animation **/
	/** Capabilities Sticky Full-Height Stacking Cards & Word-Reveal Animation **/
	/** Capabilities Sticky Stacking Cards, GSAP Text Reveal & Robust Resize Handling **/
	

					/** Ship Showcase Sticky Scroll, Smooth Width Scrub & Stat Counter Animation **/
	function initShipShowcaseAnimation() {
		const section = document.querySelector("#section-ship-showcase");
		if (!section || typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		gsap.registerPlugin(ScrollTrigger);

		const rightCol = section.querySelector(".ship-showcase-right-col");
		const leftCol = section.querySelector(".ship-showcase-left-col");
		const eyebrow = section.querySelector(".ship-eyebrow");
		const words = section.querySelectorAll(".ship-word-inner");
		const desc = section.querySelector(".ship-showcase-desc");
		const statCards = section.querySelectorAll(".ship-stat-card");
		const counterEls = section.querySelectorAll(".ship-stat-count");

		if (!rightCol) return;

		let countersAnimated = false;
		function animateShipCounters() {
			if (countersAnimated) return;
			countersAnimated = true;

			counterEls.forEach((counter) => {
				const target = parseFloat(counter.getAttribute("data-target")) || 0;
				const decimals = parseInt(counter.getAttribute("data-decimals"), 10) || 0;
				const obj = { val: 0 };

				gsap.to(obj, {
					val: target,
					duration: 1.8,
					ease: "power2.out",
					onUpdate: () => {
						counter.textContent = decimals > 0 ? obj.val.toFixed(decimals) : Math.round(obj.val);
					}
				});
			});
		}

		function resetShipCounters() {
			countersAnimated = false;
			counterEls.forEach((counter) => {
				counter.textContent = "0";
			});
		}

		const mm = gsap.matchMedia();

		// Desktop & Tablet (> 1024px)
		mm.add("(min-width: 1025px)", () => {
			gsap.set(rightCol, { width: "100%" });
			if (eyebrow) gsap.set(eyebrow, { opacity: 0, y: 25 });
			if (words.length) gsap.set(words, { y: "115%", opacity: 0 });
			if (desc) gsap.set(desc, { opacity: 0, y: 25 });
			if (statCards.length) gsap.set(statCards, { opacity: 0, y: 30 });

			let textHasPlayed = false;

			const textAutoTl = gsap.timeline({ paused: true });

			if (eyebrow) {
				textAutoTl.to(eyebrow, { opacity: 1, y: 0, duration: 0.55, ease: "power2.out" }, 0);
			}

			if (words.length) {
				textAutoTl.to(words, {
					y: "0%",
					opacity: 1,
					duration: 0.8,
					stagger: 0.045,
					ease: "power3.out"
				}, 0.1);
			}

			if (desc) {
				textAutoTl.to(desc, { opacity: 1, y: 0, duration: 0.65, ease: "power2.out" }, 0.4);
			}

			if (statCards.length) {
				textAutoTl.to(statCards, {
					opacity: 1,
					y: 0,
					duration: 0.65,
					stagger: 0.09,
					ease: "power2.out",
					onStart: animateShipCounters
				}, 0.5);
			}

			const showcaseTl = gsap.timeline({
				scrollTrigger: {
					trigger: section,
					start: "top top",
					end: "bottom bottom",
					scrub: 0.8,
					invalidateOnRefresh: true,
					onUpdate: (self) => {
						if (self.progress >= 0.40 && !textHasPlayed) {
							textHasPlayed = true;
							textAutoTl.play();
						}
					},
					onLeaveBack: () => {
						textHasPlayed = false;
						textAutoTl.reverse();
						resetShipCounters();
					}
				}
			});

			showcaseTl.to({}, { duration: 0.05 });

			showcaseTl.fromTo(rightCol, {
				width: "100%"
			}, {
				width: "54%",
				ease: "power1.out",
				duration: 0.65
			}, 0.05);

			showcaseTl.to({}, { duration: 0.30 });
		});

		mm.add("(max-width: 1024px)", () => {
			if (counterEls.length) {
				ScrollTrigger.create({
					trigger: section,
					start: "top 75%",
					onEnter: animateShipCounters,
					once: true
				});
			}
		});
	}

									/** Our Capabilities Telha Clarke Style Pinned Scroll Showcase **/
	function initCapabilitiesHover() {
		const capSection = document.querySelector("#section-capabilities");
		if (!capSection) return;

		const wrapper = capSection.querySelector(".cap-three-col-wrapper") || capSection;
		const items = capSection.querySelectorAll(".cap-item");
		const images = capSection.querySelectorAll(".cap-visual-img");

		if (!items.length || !images.length) return;

		let currentActiveIdx = -1;

		function setActiveCapability(idx) {
			if (idx < 0 || idx >= items.length) return;
			if (currentActiveIdx === idx && items[idx].classList.contains("is-active")) return;
			currentActiveIdx = idx;

			items.forEach((item, i) => {
				if (i === idx) {
					item.classList.add("is-active");
				} else {
					item.classList.remove("is-active");
				}
			});

			images.forEach((img, i) => {
				if (i === idx) {
					img.classList.add("is-active");
				} else {
					img.classList.remove("is-active");
				}
			});
		}

		// Initial activation (first item active by default)
		setActiveCapability(0);

		// GSAP ScrollTrigger
		if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
			gsap.registerPlugin(ScrollTrigger);

			// 1. Top Statement Quote Reveal
			const stmtWords = capSection.querySelectorAll(".cap-stmt-word-inner");
			const firstQuote = capSection.querySelector(".cap-quote-mark:first-child");
			const lastQuote = capSection.querySelector(".cap-quote-mark:last-child");

			if (stmtWords.length) {
				const stmtTl = gsap.timeline({
					scrollTrigger: {
						trigger: capSection.querySelector(".cap-statement-wrapper") || capSection,
						start: "top 82%",
						toggleActions: "play none none none"
					}
				});

				if (firstQuote) {
					stmtTl.fromTo(firstQuote, { opacity: 0, y: "100%" }, { opacity: 1, y: "0%", duration: 0.75, ease: "power3.out" }, 0);
				}

				stmtTl.to(stmtWords, {
					y: "0%",
					opacity: 1,
					duration: 0.85,
					stagger: 0.035,
					ease: "power3.out"
				}, 0.04);

				if (lastQuote) {
					stmtTl.fromTo(lastQuote, { opacity: 0, y: "100%" }, { opacity: 1, y: "0%", duration: 0.75, ease: "power3.out" }, 0.65);
				}
			}

			// 2. Desktop Pinned Scroll
			const mm = gsap.matchMedia();
			mm.add("(min-width: 1025px)", () => {
				ScrollTrigger.create({
					trigger: wrapper,
					start: "top 110px",
					end: "+=260%",
					pin: true,
					pinSpacing: true,
					scrub: 0.3,
					anticipatePin: 1,
					invalidateOnRefresh: true,
					onUpdate: (self) => {
						const total = items.length;
						const idx = Math.min(total - 1, Math.max(0, Math.floor(self.progress * total)));
						setActiveCapability(idx);
					}
				});
			});

			// Mobile fallback
			mm.add("(max-width: 1024px)", () => {
				items.forEach((item, i) => {
					ScrollTrigger.create({
						trigger: item,
						start: "top 55%",
						end: "bottom 55%",
						onEnter: () => setActiveCapability(i),
						onEnterBack: () => setActiveCapability(i)
					});
				});
			});
		}
	}

	function initExtensionsShowcase() {
		const extSection = document.querySelector("#section-extensions");
		if (!extSection || typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		gsap.registerPlugin(ScrollTrigger);

		// 1. Section Header: Eyebrow + Heading Word-Mask Scroll Animation
		const eyebrow = extSection.querySelector(".about-ref-eyebrow");
		const extWords = extSection.querySelectorAll(".ext-word-inner");
		
		const headTl = gsap.timeline({
			scrollTrigger: {
				trigger: extSection,
				start: "top 85%",
				toggleActions: "play none none none"
			}
		});

		if (eyebrow) {
			headTl.fromTo(eyebrow, {
				y: 25,
				opacity: 0
			}, {
				y: 0,
				opacity: 1,
				duration: 0.65,
				ease: "power2.out"
			}, 0);
		}

		if (extWords.length) {
			headTl.fromTo(extWords, {
				y: "115%",
				opacity: 0
			}, {
				y: "0%",
				opacity: 1,
				duration: 0.85,
				stagger: 0.05,
				ease: "power3.out"
			}, 0.1);
		}

		// 2. Individual Rows Scroll-Driven GSAP Word-Mask Reveal & Image Sweep
		const rows = extSection.querySelectorAll(".ext-row-item");
		rows.forEach((row) => {
			const curtain = row.querySelector(".ext-image-curtain");
			const img = row.querySelector(".ext-card-img");
			const accentLine = row.querySelector(".ext-info-accent-line");
			const titleWords = row.querySelectorAll(".ext-title-word-inner");
			const infoDesc = row.querySelector(".ext-item-desc");
			const compass = row.querySelector(".ext-info-compass");
			const btnWrap = row.querySelector(".ext-item-btn-wrap");
			const isReversed = row.classList.contains("is-reversed");

			const rowTl = gsap.timeline({
				scrollTrigger: {
					trigger: row,
					start: "top 78%",
					toggleActions: "play none none none"
				}
			});

			// A. Image #000 Black Shutter Sweep
			if (curtain) {
				const targetX = isReversed ? -101 : 101;
				rowTl.fromTo(curtain, {
					xPercent: 0
				}, {
					xPercent: targetX,
					duration: 1.25,
					ease: "expo.inOut"
				}, 0);
			}

			if (img) {
				const startShift = isReversed ? 8 : -8;
				rowTl.fromTo(img, {
					scale: 1.18,
					xPercent: startShift
				}, {
					scale: 1.0,
					xPercent: 0,
					duration: 1.35,
					ease: "expo.out"
				}, 0.1);
			}

			// B. Accent Line Draw
			if (accentLine) {
				rowTl.fromTo(accentLine, {
					scaleX: 0,
					transformOrigin: "left center"
				}, {
					scaleX: 1,
					duration: 0.65,
					ease: "power3.out"
				}, 0.15);
			}

			// C. Title Word-Mask Roll Up (GSAP Text Reveal)
			if (titleWords.length) {
				rowTl.fromTo(titleWords, {
					y: "115%",
					opacity: 0
				}, {
					y: "0%",
					opacity: 1,
					duration: 0.75,
					stagger: 0.04,
					ease: "power3.out"
				}, 0.22);
			}

			// D. Description Text Entrance
			if (infoDesc) {
				rowTl.fromTo(infoDesc, {
					y: 22,
					opacity: 0
				}, {
					y: 0,
					opacity: 1,
					duration: 0.8,
					ease: "power2.out"
				}, 0.38);
			}

			// E. Visit Button Entrance
			if (btnWrap) {
				rowTl.fromTo(btnWrap, {
					y: 18,
					opacity: 0
				}, {
					y: 0,
					opacity: 1,
					duration: 0.7,
					ease: "power2.out"
				}, 0.48);
			}

			// F. Nautical Compass Watermark
			if (compass) {
				rowTl.fromTo(compass, {
					scale: 0.85,
					opacity: 0
				}, {
					scale: 1,
					opacity: 0.85,
					duration: 1.0,
					ease: "power2.out"
				}, 0.2);
			}
		});
	}

	/** Our Legacy Section GSAP Sticky Inner-Scroll & Counter Animation **/
	function initLegacyStickyScrollAnimation() {
		if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		gsap.registerPlugin(ScrollTrigger);

		const legacySection = document.querySelector("#section-legacy");
		if (!legacySection) return;

		// 1. Heading & Narrative entrance
		const eyebrow = legacySection.querySelector(".about-ref-eyebrow");
		const legacyWords = legacySection.querySelectorAll(".legacy-word-inner");
		const legacyDesc = legacySection.querySelector(".legacy-desc");
		const compass = legacySection.querySelector(".legacy-left-compass");

		const leftTl = gsap.timeline({
			scrollTrigger: {
				trigger: legacySection,
				start: "top 80%",
				toggleActions: "play none none none"
			}
		});

		if (eyebrow) {
			leftTl.fromTo(eyebrow, { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.6, ease: "power2.out" }, 0);
		}

		if (legacyWords.length) {
			leftTl.fromTo(legacyWords, { y: "115%", opacity: 0 }, { y: "0%", opacity: 1, duration: 0.85, stagger: 0.05, ease: "power3.out" }, 0.1);
		}

		if (legacyDesc) {
			leftTl.fromTo(legacyDesc, { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.75, ease: "power2.out" }, 0.3);
		}

		if (compass) {
			leftTl.fromTo(compass, { scale: 0.88, opacity: 0 }, { scale: 1, opacity: 0.75, duration: 1.0, ease: "power2.out" }, 0.2);
		}

		// 2. Right Stack Cards Scroll Trigger (Stagger Fade-In + Animated Bar & Counters)
		const cards = legacySection.querySelectorAll(".legacy-stack-card");
		cards.forEach((card) => {
			const counter = card.querySelector(".legacy-stat-count");
			const bar = card.querySelector(".legacy-card-bar-fill");

			const cardTl = gsap.timeline({
				scrollTrigger: {
					trigger: card,
					start: "top 85%",
					toggleActions: "play none none none",
					onEnter: () => {
						if (counter && !counter.dataset.animated) {
							counter.dataset.animated = "true";
							const target = parseFloat(counter.getAttribute("data-target")) || 0;
							const decimals = parseInt(counter.getAttribute("data-decimals"), 10) || 0;
							const obj = { val: 0 };
							gsap.to(obj, {
								val: target,
								duration: 1.8,
								ease: "power2.out",
								onUpdate: () => {
									counter.textContent = decimals > 0 ? obj.val.toFixed(decimals) : Math.round(obj.val);
								}
							});
						}
					}
				}
			});

			cardTl.fromTo(card, {
				y: 35,
				opacity: 0
			}, {
				y: 0,
				opacity: 1,
				duration: 0.8,
				ease: "power2.out"
			});

			if (bar) {
				cardTl.fromTo(bar, {
					scaleX: 0
				}, {
					scaleX: 1,
					duration: 1.1,
					ease: "power3.out"
				}, 0.2);
			}
		});
	}

	/** Our Impact Section: Horizontal Scroll Entrance from Right to Left **/
	function initImpactHorizontalScrollAnimation() {
		if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		gsap.registerPlugin(ScrollTrigger);

		const impactSection = document.querySelector("#section-impact");
		const impactTrack = document.querySelector(".impact-cards-track");
		const impactCards = document.querySelectorAll(".impact-card");
		if (!impactSection || !impactTrack) return;

		// 1. Heading & Tagline word-mask entrance
		const impactTag = impactSection.querySelector(".impact-tagline");
		if (impactTag && !impactTag.classList.contains("split-ready")) {
			impactTag.classList.add("split-ready");
			const text = impactTag.textContent.trim();
			const words = text.split(/\s+/);
			impactTag.innerHTML = words.map(w => `<span class="impact-word-mask"><span class="impact-tag-inner">${w}</span></span>`).join(' ');
		}

		const impactWords = impactSection.querySelectorAll(".impact-word-inner");
		const tagWords = impactSection.querySelectorAll(".impact-tag-inner");

		const impactTl = gsap.timeline({
			scrollTrigger: {
				trigger: impactSection,
				start: "top 85%",
				toggleActions: "play none none none"
			}
		});

		if (impactWords.length) {
			impactTl.fromTo(impactWords, {
				y: "115%",
				opacity: 0
			}, {
				y: "0%",
				opacity: 1,
				duration: 0.85,
				stagger: 0.08,
				ease: "power3.out"
			}, 0);
		}

		if (tagWords.length) {
			impactTl.fromTo(tagWords, {
				y: "115%",
				opacity: 0
			}, {
				y: "0%",
				opacity: 1,
				duration: 0.75,
				stagger: 0.02,
				ease: "power3.out"
			}, 0.18);
		}

		// 2. Horizontal slide entrance from Right to Left on scroll (Replicating exact upper section effect)
		gsap.fromTo(impactTrack, {
			x: () => (window.innerWidth <= 768 ? 120 : Math.min(window.innerWidth * 0.4, 460)),
			opacity: 0.35
		}, {
			x: 0,
			opacity: 1,
			ease: "none",
			scrollTrigger: {
				trigger: impactSection,
				start: "top 88%",
				end: "top 30%",
				scrub: 0.8,
				invalidateOnRefresh: true
			}
		});

		// 3. Counter live count-up animation
		impactCards.forEach(card => {
			const countEl = card.querySelector(".impact-stat-count");
			if (!countEl) return;
			const targetVal = parseFloat(countEl.getAttribute("data-target") || "0");
			const decimals = parseInt(countEl.getAttribute("data-decimals") || "0");
			const counterObj = { val: 0 };

			gsap.to(counterObj, {
				val: targetVal,
				duration: 2.0,
				ease: "power2.out",
				scrollTrigger: {
				trigger: impactSection,
				start: "top 80%",
				toggleActions: "play none none none"
			},
				onUpdate: () => {
					countEl.textContent = decimals > 0 ? counterObj.val.toFixed(decimals) : Math.round(counterObj.val);
				}
			});
		});
	}

	/** Our Partners Section Word-Reveal & Slider entrance **/
	function initPartnersAnimation() {
		const partnerSection = document.querySelector("#section-partners");
		if (!partnerSection || typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		gsap.registerPlugin(ScrollTrigger);

		const tagWords = partnerSection.querySelectorAll(".partner-tag-inner");
		const partnerWords = partnerSection.querySelectorAll(".partner-word-inner");
		const subWords = partnerSection.querySelectorAll(".partner-sub-inner");
		const partnerSlider = partnerSection.querySelector("#partners-slider");
		const dashes = partnerSection.querySelectorAll(".pre-tag-dash");

		const partnerTl = gsap.timeline({
			scrollTrigger: {
				trigger: partnerSection,
				start: "top 95%",
				toggleActions: "play none none none"
			}
		});

		if (tagWords.length) {
			partnerTl.fromTo(tagWords, {
				yPercent: 115,
				opacity: 0
			}, {
				yPercent: 0,
				opacity: 1,
				duration: 0.65,
				stagger: 0.06,
				ease: "power3.out"
			}, 0);
		}

		if (dashes.length) {
			partnerTl.fromTo(dashes, {
				scale: 0,
				opacity: 0
			}, {
				scale: 1,
				opacity: 1,
				duration: 0.5,
				stagger: 0.08,
				ease: "back.out(2)"
			}, 0);
		}

		if (partnerWords.length) {
			partnerTl.fromTo(partnerWords, {
				yPercent: 115,
				opacity: 0
			}, {
				yPercent: 0,
				opacity: 1,
				duration: 0.85,
				stagger: 0.08,
				ease: "power3.out"
			}, tagWords.length ? "-=0.35" : 0);
		}

		if (subWords.length) {
			partnerTl.fromTo(subWords, {
				yPercent: 115,
				opacity: 0
			}, {
				yPercent: 0,
				opacity: 1,
				duration: 0.65,
				stagger: 0.02,
				ease: "power2.out"
			}, "-=0.5");
		}

		if (partnerSlider) {
			partnerTl.fromTo(partnerSlider, {
				y: 35,
				opacity: 0
			}, {
				y: 0,
				opacity: 1,
				duration: 0.85,
				ease: "power2.out"
			}, "-=0.35");
		}
	}

	/** Milestones Achieved & Certificates Section Animation **/
	function initMilestonesAnimation() {
		const msSection = document.querySelector("#section-milestones");
		if (!msSection || typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		gsap.registerPlugin(ScrollTrigger);

		const msWords = msSection.querySelectorAll(".ms-word-inner");
		const tagPill = msSection.querySelector(".milestones-tag-pill");
		const subtitle = msSection.querySelector(".milestones-subtitle");
		const glassCard = msSection.querySelector(".milestones-glass-card");
		const certRows = msSection.querySelectorAll(".cert-item-row");

		const msTl = gsap.timeline({
			scrollTrigger: {
				trigger: msSection,
				start: "top 80%",
				toggleActions: "play none none none"
			}
		});

		// 1. Tag pill entrance
		if (tagPill) {
			msTl.fromTo(tagPill, {
				y: 20,
				opacity: 0
			}, {
				y: 0,
				opacity: 1,
				duration: 0.6,
				ease: "power2.out"
			}, 0);
		}

		// 2. Title word-reveal
		if (msWords.length) {
			msTl.fromTo(msWords, {
				y: "115%",
				opacity: 0
			}, {
				y: "0%",
				opacity: 1,
				duration: 0.85,
				stagger: 0.08,
				ease: "power3.out"
			}, 0.1);
		}

		// 3. Subtitle
		if (subtitle) {
			msTl.fromTo(subtitle, {
				y: 25,
				opacity: 0
			}, {
				y: 0,
				opacity: 1,
				duration: 0.7,
				ease: "power2.out"
			}, 0.25);
		}

		// 4. Glass Card Entrance
		if (glassCard) {
			msTl.fromTo(glassCard, {
				y: 40,
				opacity: 0,
				scale: 0.98
			}, {
				y: 0,
				opacity: 1,
				scale: 1,
				duration: 0.9,
				ease: "power3.out"
			}, 0.2);
		}

		// 5. Staggered Certificate Rows
		if (certRows.length) {
			msTl.fromTo(certRows, {
				x: 20,
				opacity: 0
			}, {
				x: 0,
				opacity: 1,
				duration: 0.6,
				stagger: 0.07,
				ease: "power2.out"
			}, 0.4);
		}

		// 6. GSAP Background Parallax on Scroll
		const bgImg = msSection.querySelector(".milestones-bg-img");
		const crosshairs = msSection.querySelector(".milestones-crosshair-grid");

		if (bgImg) {
			gsap.fromTo(bgImg, {
				yPercent: -15
			}, {
				yPercent: 15,
				ease: "none",
				scrollTrigger: {
					trigger: msSection,
					start: "top bottom",
					end: "bottom top",
					scrub: true
				}
			});
		}

		if (crosshairs) {
			gsap.fromTo(crosshairs, {
				yPercent: -8
			}, {
				yPercent: 8,
				ease: "none",
				scrollTrigger: {
					trigger: msSection,
					start: "top bottom",
					end: "bottom top",
					scrub: true
				}
			});
		}
	}

	/** Greenship Recycling: Environment Section Animation **/
	function initEnvironmentSectionAnimation() {
		const envSection = document.querySelector("#section-environment");
		if (!envSection || typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		gsap.registerPlugin(ScrollTrigger);

		const words = envSection.querySelectorAll(".env-word-inner");
		const leadDesc = envSection.querySelector(".env-lead-desc");
		const featureCards = envSection.querySelectorAll(".env-feature-card");
		const parallaxImg = envSection.querySelector(".env-parallax-img");

		// Entrance animation on scroll into view
		const envTl = gsap.timeline({
			scrollTrigger: {
				trigger: envSection,
				start: "top 75%",
				toggleActions: "play none none none"
			}
		});

		if (words.length) {
			envTl.to(words, { y: "0%", opacity: 1, duration: 0.85, stagger: 0.07, ease: "power3.out" }, 0);
		}

		if (leadDesc) {
			envTl.fromTo(leadDesc, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.7, ease: "power2.out" }, 0.18);
		}

		if (featureCards.length) {
			envTl.fromTo(featureCards, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.65, stagger: 0.08, ease: "power2.out" }, 0.3);
		}

		// Full-view Image Parallax on Scroll
		if (parallaxImg) {
			gsap.fromTo(parallaxImg, {
				yPercent: -15
			}, {
				yPercent: 15,
				ease: "none",
				scrollTrigger: {
					trigger: envSection.querySelector(".env-full-image-wrap") || envSection,
					start: "top bottom",
					end: "bottom top",
					scrub: true
				}
			});
		}
	}

	/** Greenship Recycling: Worker's Welfare Section Animation **/
	function initWelfareSectionAnimation() {
		const welfareSection = document.querySelector("#section-welfare");
		if (!welfareSection || typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		gsap.registerPlugin(ScrollTrigger);

		const words = welfareSection.querySelectorAll(".welfare-word-inner");
		const leadDesc = welfareSection.querySelector(".welfare-lead-desc");
		const featureCards = welfareSection.querySelectorAll(".welfare-feature-card");
		const parallaxImg = welfareSection.querySelector(".welfare-parallax-img");

		// Entrance animation on scroll into view
		const welfareTl = gsap.timeline({
			scrollTrigger: {
				trigger: welfareSection,
				start: "top 75%",
				toggleActions: "play none none none"
			}
		});

		if (words.length) {
			welfareTl.to(words, { y: "0%", opacity: 1, duration: 0.85, stagger: 0.07, ease: "power3.out" }, 0);
		}

		if (leadDesc) {
			welfareTl.fromTo(leadDesc, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.7, ease: "power2.out" }, 0.18);
		}

		if (featureCards.length) {
			welfareTl.fromTo(featureCards, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.65, stagger: 0.08, ease: "power2.out" }, 0.3);
		}

		// Full-view Image Parallax on Scroll
		if (parallaxImg) {
			gsap.fromTo(parallaxImg, {
				yPercent: -15
			}, {
				yPercent: 15,
				ease: "none",
				scrollTrigger: {
					trigger: welfareSection.querySelector(".welfare-full-image-wrap") || welfareSection,
					start: "top bottom",
					end: "bottom top",
					scrub: true
				}
			});
		}
	}

	/** Greenship Recycling: Safety Section Animation **/
	function initSafetySectionAnimation() {
		const safetySection = document.querySelector("#section-safety");
		if (!safetySection || typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		gsap.registerPlugin(ScrollTrigger);

		const words = safetySection.querySelectorAll(".safety-word-inner");
		const leadDesc = safetySection.querySelector(".safety-lead-desc");
		const featureCards = safetySection.querySelectorAll(".safety-feature-card");
		const parallaxImg = safetySection.querySelector(".safety-parallax-img");

		// Entrance animation on scroll into view
		const safetyTl = gsap.timeline({
			scrollTrigger: {
				trigger: safetySection,
				start: "top 75%",
				toggleActions: "play none none none"
			}
		});

		if (words.length) {
			safetyTl.to(words, { y: "0%", opacity: 1, duration: 0.85, stagger: 0.07, ease: "power3.out" }, 0);
		}

		if (leadDesc) {
			safetyTl.fromTo(leadDesc, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.7, ease: "power2.out" }, 0.18);
		}

		if (featureCards.length) {
			safetyTl.fromTo(featureCards, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.65, stagger: 0.08, ease: "power2.out" }, 0.3);
		}

		// Full-view Image Parallax on Scroll
		if (parallaxImg) {
			gsap.fromTo(parallaxImg, {
				yPercent: -15
			}, {
				yPercent: 15,
				ease: "none",
				scrollTrigger: {
					trigger: safetySection.querySelector(".safety-full-image-wrap") || safetySection,
					start: "top bottom",
					end: "bottom top",
					scrub: true
				}
			});
		}
	}

	/** Greenship Recycling: Policy & Training Section Animation **/
	function initPolicySectionAnimation() {
		const policySection = document.querySelector("#section-policy");
		if (!policySection || typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		gsap.registerPlugin(ScrollTrigger);

		const words = policySection.querySelectorAll(".policy-word-inner");
		const leadDesc = policySection.querySelector(".policy-lead-desc");
		const heroCard = policySection.querySelector(".policy-hero-card");
		const heroImg = policySection.querySelector(".policy-hero-img");
		const policyCards = policySection.querySelectorAll(".policy-card");

		// Entrance animation on scroll into view
		const policyTl = gsap.timeline({
			scrollTrigger: {
				trigger: policySection,
				start: "top 75%",
				toggleActions: "play none none none"
			}
		});

		if (words.length) {
			policyTl.to(words, { y: "0%", opacity: 1, duration: 0.85, stagger: 0.07, ease: "power3.out" }, 0);
		}

		if (leadDesc) {
			policyTl.fromTo(leadDesc, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.7, ease: "power2.out" }, 0.18);
		}

		if (heroCard) {
			policyTl.fromTo(heroCard, { y: 35, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, ease: "power2.out" }, 0.28);
		}

		if (policyCards.length) {
			policyTl.fromTo(policyCards, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.65, stagger: 0.08, ease: "power2.out" }, 0.4);
		}

		// Hero Image Parallax on Scroll
		if (heroImg) {
			gsap.fromTo(heroImg, {
				yPercent: -12
			}, {
				yPercent: 12,
				ease: "none",
				scrollTrigger: {
					trigger: heroCard || policySection,
					start: "top bottom",
					end: "bottom top",
					scrub: true
				}
			});
		}
	}

	/** Greenship Recycling: Our Yard Section Animation **/
	function initYardSectionAnimation() {
		const yardSection = document.querySelector("#section-yard");
		if (!yardSection || typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		gsap.registerPlugin(ScrollTrigger);

		const words = yardSection.querySelectorAll(".yard-word-inner");
		const leadDesc = yardSection.querySelector(".yard-lead-desc");
		const topImageCard = yardSection.querySelector(".yard-top-image-card");
		const parallaxImg = yardSection.querySelector(".yard-parallax-img");
		const detailCards = yardSection.querySelectorAll(".yard-detail-card");

		// Entrance animation on scroll into view
		const yardTl = gsap.timeline({
			scrollTrigger: {
				trigger: yardSection,
				start: "top 75%",
				toggleActions: "play none none none"
			}
		});

		if (words.length) {
			yardTl.to(words, { y: "0%", opacity: 1, duration: 0.85, stagger: 0.07, ease: "power3.out" }, 0);
		}

		if (leadDesc) {
			yardTl.fromTo(leadDesc, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.7, ease: "power2.out" }, 0.18);
		}

		if (topImageCard) {
			yardTl.fromTo(topImageCard, { y: 35, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, ease: "power2.out" }, 0.28);
		}

		if (detailCards.length) {
			yardTl.fromTo(detailCards, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.65, stagger: 0.08, ease: "power2.out" }, 0.4);
		}

		// Top Image Parallax on Scroll
		if (parallaxImg) {
			gsap.fromTo(parallaxImg, {
				yPercent: -15
			}, {
				yPercent: 15,
				ease: "none",
				scrollTrigger: {
					trigger: topImageCard || yardSection,
					start: "top bottom",
					end: "bottom top",
					scrub: true
				}
			});
		}
	}

	/** Alloy Manufacturing: Timeline Scroll Animation **/
	function initTimelineSectionAnimation() {
		const timelineSection = document.querySelector("#section-timeline");
		if (!timelineSection || typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		gsap.registerPlugin(ScrollTrigger);

		const words = timelineSection.querySelectorAll(".timeline-word-inner");
		const leadDesc = timelineSection.querySelector(".timeline-lead-desc");
		const spineFill = timelineSection.querySelector(".timeline-spine-fill");
		const timelineRows = timelineSection.querySelectorAll(".timeline-row");

		// Header entrance animation
		const headerTl = gsap.timeline({
			scrollTrigger: {
				trigger: timelineSection,
				start: "top 78%",
				toggleActions: "play none none none"
			}
		});

		if (words.length) {
			headerTl.to(words, { y: "0%", opacity: 1, duration: 0.85, stagger: 0.07, ease: "power3.out" }, 0);
		}

		if (leadDesc) {
			headerTl.fromTo(leadDesc, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.7, ease: "power2.out" }, 0.18);
		}

		// Spine Fill Progress Line Scrub
		if (spineFill) {
			gsap.fromTo(spineFill, {
				height: "0%"
			}, {
				height: "100%",
				ease: "none",
				scrollTrigger: {
					trigger: timelineSection.querySelector(".timeline-track-wrap") || timelineSection,
					start: "top 65%",
					end: "bottom 65%",
					scrub: true
				}
			});
		}

		// Individual Row Reveal on Scroll
		timelineRows.forEach((row) => {
			ScrollTrigger.create({
				trigger: row,
				start: "top 68%",
				end: "bottom 30%",
				onEnter: () => row.classList.add("is-active"),
				onLeaveBack: () => row.classList.remove("is-active")
			});
		});
	}

	/** Alloy Manufacturing: Quality Assurance Auto Slider & Animation **/
	function initQASectionAnimation() {
		const qaSection = document.querySelector("#section-qa");
		if (!qaSection) return;

		// Splide Carousel Initialization (Smooth Auto Slider Loop)
		const qaSliderEl = document.querySelector("#qa-slider");
		if (qaSliderEl && typeof Splide !== "undefined") {
			const qaSplide = new Splide("#qa-slider", {
				type: "loop",
				autoplay: true,
				interval: 4000,
				speed: 1200,
				easing: "cubic-bezier(0.25, 1, 0.5, 1)",
				pauseOnHover: true,
				pauseOnFocus: true,
				resetProgress: false,
				padding: {
					left: "140px",
					right: "140px"
				},
				perPage: 3,
				perMove: 1,
				gap: "24px",
				arrows: false,
				pagination: false,
				breakpoints: {
					1400: {
						perPage: 3,
						padding: {
							left: "60px",
							right: "60px"
						},
						gap: "20px"
					},
					1100: {
						perPage: 2,
						padding: {
							left: "40px",
							right: "40px"
						},
						gap: "18px"
					},
					768: {
						perPage: 1,
						padding: {
							left: "24px",
							right: "24px"
						},
						gap: "14px"
					}
				}
			});

			const prevBtn = qaSection.querySelector(".qa-arrow--prev");
			const nextBtn = qaSection.querySelector(".qa-arrow--next");

			qaSplide.mount();

			if (prevBtn) {
				prevBtn.addEventListener("click", () => qaSplide.go("<"));
			}
			if (nextBtn) {
				nextBtn.addEventListener("click", () => qaSplide.go(">"));
			}
		}

		// Header entrance animation
		if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
			gsap.registerPlugin(ScrollTrigger);

			const words = qaSection.querySelectorAll(".qa-word-inner");
			const leadDesc = qaSection.querySelector(".qa-lead-desc");
			const sliderContainer = qaSection.querySelector(".qa-slider-container");

			const qaTl = gsap.timeline({
				scrollTrigger: {
				trigger: qaSection,
				start: "top 78%",
				toggleActions: "play none none none"
			}
			});

			if (words.length) {
				qaTl.to(words, { y: "0%", opacity: 1, duration: 0.85, stagger: 0.07, ease: "power3.out" }, 0);
			}

			if (leadDesc) {
				qaTl.fromTo(leadDesc, { y: 30, opacity: 0 }, { y: 0, opacity: 1, duration: 0.7, ease: "power2.out" }, 0.18);
			}

			if (sliderContainer) {
				qaTl.fromTo(sliderContainer, { y: 35, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, ease: "power2.out" }, 0.28);
			}
		}
	}

	
	

	function initAllAnimations() {
		if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
			gsap.registerPlugin(ScrollTrigger);
		}

		const funcs = [
			initSeamlessBannerVideoLoop,
			initHeroBannerAnimation,
			initAboutSectionAnimation,
			initAnchorsInteractiveExperience,
			initTiltedCards,
			initStatsParallaxAnimation,
			initShipShowcaseAnimation,
			initCapabilitiesHover,
			initExtensionsShowcase,
			initPartnersAnimation,
			initLegacyStickyScrollAnimation,
			initImpactHorizontalScrollAnimation,
			initMilestonesAnimation,
			initEnvironmentSectionAnimation,
			initWelfareSectionAnimation,
			initSafetySectionAnimation,
			initPolicySectionAnimation,
			initYardSectionAnimation,
			initTimelineSectionAnimation,
			initQASectionAnimation
		];

		funcs.forEach(fn => {
			if (typeof fn === "function") {
				try {
					fn();
				} catch (err) {
					console.warn("Animation init error:", err);
				}
			}
		});

		// Debounced resize handler for DevTools/Inspect opening stability
		let resizeDebounceTimer;
		window.addEventListener("resize", () => {
			clearTimeout(resizeDebounceTimer);
			resizeDebounceTimer = setTimeout(() => {
				if (typeof ScrollTrigger !== "undefined") {
					ScrollTrigger.refresh();
				}
			}, 150);
		});

		if (typeof ScrollTrigger !== "undefined") {
			ScrollTrigger.refresh();

			// When fonts are loaded
			if (document.fonts && document.fonts.ready) {
				document.fonts.ready.then(() => {
					ScrollTrigger.refresh();
				});
			}

			setTimeout(() => {
				ScrollTrigger.refresh();
			}, 200);
		}
	}

	if (document.readyState === "loading") {
		document.addEventListener("DOMContentLoaded", initAllAnimations);
	} else {
		initAllAnimations();
	}

	window.addEventListener("load", () => {
		if (typeof ScrollTrigger !== "undefined") {
			ScrollTrigger.refresh();
		}
	});

	/** Fleet GSAP Menu Animation (Replicating exact Webflow a-247 & a-248 interactions) **/
	let isMenuOpen = false;
	let menuTl = null;

	function getDrawerElements() {
		return {
			root: document.getElementById("home") || document.body,
			drawer: document.querySelector(".fleet-menu-drawer"),
			links: document.querySelectorAll(".fleet-nav-link-wrap"),
			topSec: document.querySelector(".fleet-menu-top"),
			divider: document.querySelector(".fleet-menu-divider"),
			bottomSec: document.querySelector(".fleet-menu-bottom"),
			bars: document.querySelector("#menu-trigger")
		};
	}

	function openFleetMenu() {
		const el = getDrawerElements();
		if (!el.drawer) return;
		isMenuOpen = true;
		el.root.classList.add("insomenu-active");
		document.documentElement.classList.add("insomenu-active");

		// Stop smooth scroll (Lenis) and lock body scroll completely
		if (window.lenis) {
			window.lenis.stop();
		}
		document.body.style.overflow = "hidden";
		document.documentElement.style.overflow = "hidden";

		if (menuTl) menuTl.kill();
		menuTl = gsap.timeline();

		// Immediately visible & interactive
		gsap.set(el.drawer, {
			display: "flex",
			visibility: "visible",
			pointerEvents: "all",
			opacity: 1
		});

		// Drawer slides down with graceful, relaxed pacing (0.95s)
		menuTl.fromTo(el.drawer, {
				y: "-100%"
			}, {
				y: "0%",
				duration: 0.95,
				ease: "power3.out"
			},
			0
		);

		// Header labels, divider & bottom fade/slide up
		if (el.topSec) {
			menuTl.fromTo([el.topSec, el.divider, el.bottomSec], {
					y: 15,
					opacity: 0
				}, {
					y: 0,
					opacity: 1,
					duration: 0.65,
					ease: "power2.out",
					stagger: 0.1
				},
				0.25
			);
		}

		// Nav links slide up cleanly
		if (el.links.length) {
			menuTl.fromTo(el.links, {
					y: "100%"
				}, {
					y: "0%",
					duration: 0.8,
					ease: "power3.out",
					stagger: 0.05
				},
				0.3
			);
		}
	}

	function closeFleetMenu() {
		const el = getDrawerElements();
		if (!el.drawer) return;
		isMenuOpen = false;
		el.root.classList.remove("insomenu-active");
		document.documentElement.classList.remove("insomenu-active");

		// Resume smooth scroll (Lenis) and unlock body scroll
		if (window.lenis) {
			window.lenis.start();
		}
		document.body.style.overflow = "";
		document.documentElement.style.overflow = "";

		if (menuTl) menuTl.kill();
		menuTl = gsap.timeline({
			onComplete: () => {
				gsap.set(el.drawer, {
					visibility: "hidden",
					pointerEvents: "none",
					y: "-100%"
				});
				// Reset link wraps for next open
				if (el.links.length) gsap.set(el.links, {
					y: "100%"
				});
			}
		});

		// Links and content slide down together smoothly
		if (el.links.length) {
			menuTl.to(el.links, {
				y: "100%",
				duration: 0.45,
				ease: "power2.in",
				stagger: 0.025
			}, 0);
		}

		// Content fades subtly
		if (el.topSec) {
			menuTl.to([el.topSec, el.divider, el.bottomSec], {
				opacity: 0,
				duration: 0.35,
				ease: "power2.in"
			}, 0);
		}

		// Drawer smoothly glides all the way up with relaxed, natural speed (0.8s)
		menuTl.to(el.drawer, {
			y: "-100%",
			duration: 0.8,
			ease: "power3.inOut"
		}, 0.1);
	}

	function menuresponsive() {
		if (!isMenuOpen) {
			openFleetMenu();
		} else {
			closeFleetMenu();
		}
	}

	function menuresponsiveclose() {
		if (isMenuOpen) {
			closeFleetMenu();
		}
	}

	// Ensure mousewheel and trackpad scroll smoothly inside fleet menu drawer
	document.addEventListener("DOMContentLoaded", function() {
		const fleetDrawer = document.querySelector(".fleet-menu-drawer");
		if (fleetDrawer) {
			fleetDrawer.addEventListener("wheel", function(e) {
				e.stopPropagation();
			}, { passive: true });
		}
	});
	/**End Menu Toggle**/


	<?php if ($page != "thankyou") { ?>
		/* Back To Top Js Start */
		var scrollToTopBtn = document.querySelector(".scroll-to-top")
		var rootElement = document.documentElement

		function handleScroll() {
			var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight
			if ((rootElement.scrollTop / scrollTotal) > 0.01) {
				scrollToTopBtn.classList.add("showBtn")

			} else {
				scrollToTopBtn.classList.remove("showBtn")
			}
		}

		function scrollToTop() {
			rootElement.scrollTo({
				top: 0,
				behavior: "smooth"
			})
		}
		scrollToTopBtn.addEventListener("click", scrollToTop);
		document.addEventListener("scroll", handleScroll);
		/* Back To Top Js End */
	<?php } ?>

	/***Form Toggle***/
	let myForm = document.getElementById('inquiry');
	let errors = document.querySelectorAll(".error-msg1");

	function opencForm() {
		var myButtonClasses = document.getElementById("sticky-bottom-form").classList;
		if (myButtonClasses.contains("open")) {
			myButtonClasses.remove("open");
		} else {
			myButtonClasses.add("open");
		}
	}

	function closecForm() {
		var myButtonClasses = document.getElementById("sticky-bottom-form").classList;
		if (myButtonClasses.contains("open")) {
			myButtonClasses.remove("open");
		} else {
			myButtonClasses.add("open");
		}
	}

	function openForm(formtyp) {
		const body = document.querySelector('html');
		body.classList.add('is-active');
		var myButtonClasses = document.getElementById("register-modal").classList;
		var formtype = document.getElementById("formtype");
		if (myButtonClasses.contains("is-active")) {
			myButtonClasses.remove("is-active");
			formtype.value = '';
			if (formtype.value == "brochure") {
				document.getElementById("leadmodaltitle").innerHTML = "Download Brochure";
			} else {
				document.getElementById("leadmodaltitle").innerHTML = "Enquire Now";
			}
		} else {
			myButtonClasses.add("is-active");
			formtype.value = formtyp;
			if (formtype.value == "brochure") {
				document.getElementById("leadmodaltitle").innerHTML = "Download Brochure";
			} else {
				document.getElementById("leadmodaltitle").innerHTML = "Enquire Now";
			}
		}
	}

	function closeForm() {
		const body = document.querySelector('html');
		body.classList.remove('is-active');
		var myButtonClasses = document.getElementById("register-modal").classList;
		if (myButtonClasses.contains("is-active")) {
			myButtonClasses.remove("is-active");
		} else {
			myButtonClasses.add("is-active");
		}

		document.getElementById('inquiry-submit').disabled = false;

		myForm.reset();

		errors.forEach(e => {
			e.textContent = '';
		})
	}
	/***End Form Toggle***/

	/**Modal**/
	function closeModel(modelid) {
		let model = document.querySelector('#' + modelid);
		model.classList.remove('is-active');
		let html = document.querySelector('html');
		html.classList.remove('is-active-1');
	}

	function openModel(modelid) {
		let model = document.querySelector('#' + modelid);
		model.classList.add('is-active');
		let html = document.querySelector('html');
		html.classList.add('is-active-1');
	}

	<?php if ($page == "home") { ?>
		// setTimeout(function() {
		// 	var element = document.getElementById("register-modal");
		// 	element.classList.add("is-active");
		// 	const body = document.querySelector('html');
		// 	body.classList.add('is-active');
		// }, 7000);
	<?php } ?>
	/**End Modal**/
</script>


<script type="text/javascript">
	/*Form Validation */
	function alphanumeric(data) {
		let letters = /^[0-9a-zA-Z]+$/;
		if (letters.test(data)) {
			return true;
		}
		return false;
	}

	function checkname(name) {
		let input = document.getElementById(name).value;
		let res = /^[a-zA-Z ]*$/.test(input);
		return !(res);
	}

	function setMsgID(ele, msg) {
		document.getElementById(ele).textContent = msg;
	}

	function validateEmail(data) {
		let testData = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if (testData.test(data)) {
			return true;
		}
		return false;
	}

	function phonenumber(inputtxt) {
		var phoneno = /^\(?([6-9]{1})\)?([0-9]{9})$/;
		if (inputtxt.match(phoneno)) {
			return true;
		} else {
			return false;
		}
	}

	function getvalue(obj, val) {
		console.log(obj + "--" + val);
		if (val == "") {
			console.log("if");
			setMsgID(obj + "formerror-5", "Enter Valid Captcha Code.");
			document.getElementById(obj + '-submit').disabled = true;
		} else {
			if (document.getElementById(obj + '-captcha').value != document.getElementById(obj + '-query_result').value) {
				console.log("if-else-if");
				setMsgID(obj + "formerror-5", "Enter Valid Captcha.");
				document.getElementById(obj + '-submit').disabled = true;
			} else {
				console.log("if-else-else");
				document.getElementById(obj + '-submit').disabled = false;
				setMsgID(obj + "formerror-5", "");
			}
		}
	}

	function disableButton() {
		document.getElementById('inquiry-submit').disabled = true;
		document.getElementById('inquiry-submit').innerHTML = 'Submitting...';
		document.getElementById('inquiry1-submit').disabled = true;
		document.getElementById('inquiry1-submit').innerHTML = 'Submitting...';
	}

	function validateInquiryForm(obj) {
		let inp = 0;

		if (document.getElementById(obj + '-fname').value == "") {
			setMsgID(obj + "formerror-1", "Enter Valid First Name");
			inp = 1;
		} else if (checkname(obj + '-fname')) {
			setMsgID(obj + "formerror-1", "Numeric Name Not Allowed");
			inp = 1;
		} else if (document.getElementById(obj + '-fname').value.includes(" ")) {
			setMsgID(obj + "formerror-1", "Spaces are not allowed");
			inp = 1;
		} else {
			setMsgID(obj + "formerror-1", "");
		}

		// Full Name Validation Start

		// if (document.getElementById(obj + '-fname').value === "") {
		// 	setMsgID(obj + "formerror-1", "Enter Valid Full Name");
		// 	inp = 1;
		// } else if (checkname(obj + '-fname')) {
		// 	setMsgID(obj + "formerror-1", "Numeric Name Not Allowed");
		// 	inp = 1;
		// } else if (document.getElementById(obj + '-fname').value.charAt(0) === " ") {
		// 	setMsgID(obj + "formerror-1", "First character is not a space");
		// 	inp = 1;
		// } else {
		// 	setMsgID(obj + "formerror-1", "");
		// }

		// Full Name Validation End

		if (document.getElementById(obj + '-lname').value == "") {
			setMsgID(obj + "formerror-2", "Enter Valid Last Name");
			inp = 1;
		} else if (checkname(obj + '-lname')) {
			setMsgID(obj + "formerror-2", "Numeric Name Not Allowed");
			inp = 1;
		} else if (document.getElementById(obj + '-lname').value.includes(" ")) {
			setMsgID(obj + "formerror-2", "Spaces are not allowed");
			inp = 1;
		} else {
			setMsgID(obj + "formerror-2", "");
		}


		if (!phonenumber(document.getElementById(obj + '-phone').value)) {
			setMsgID(obj + "formerror-3", "Enter Valid Mobile Number");
			inp = 1;
		} else {
			setMsgID(obj + "formerror-3", "");
		}

		if (!validateEmail(document.getElementById(obj + '-email').value)) {
			setMsgID(obj + "formerror-4", "Enter Valid Email Address");
			inp = 1;
		} else {
			setMsgID(obj + "formerror-4", "");
		}
		<?php if ($captcha) { ?>
			if (document.getElementById(obj + '-captcha').value == "") {
				setMsgID(obj + "formerror-5", "Enter Valid Captcha Code");
				inp = 1;
			} else {
				if (document.getElementById(obj + '-captcha').value != document.getElementById(obj + '-query_result').value) {
					setMsgID(obj + "formerror-5", "Enter Valid Captcha");
					inp = 1;
				} else {
					setMsgID(obj + "formerror-5", "");
				}
			}
		<?php } ?>
		if (inp == 1) {
			document.getElementById(obj + '-submit').disabled = true;
			inp = false;
		} else {
			document.getElementById(obj + '-submit').disabled = false;
			inp = true;
		}
		return inp;
	}

	<?php if ($page == "home") { ?>

		// document.getElementById('inquiry-submit').onclick = function() {
		// 	validateInquiryForm('inquiry');
		// };
		// document.getElementById('inquiry-fname').oninput = function() {
		// 	validateInquiryForm('inquiry');
		// };
		// document.getElementById('inquiry-lname').oninput = function() {
		// 	validateInquiryForm('inquiry');
		// };
		// document.getElementById('inquiry-phone').oninput = function() {
		// 	validateInquiryForm('inquiry');
		// };
		// document.getElementById('inquiry-email').oninput = function() {
		// 	validateInquiryForm('inquiry');
		// };

		// document.getElementById('inquiry1-submit').onclick = function() {
		// 	validateInquiryForm('inquiry1');
		// };
		// document.getElementById('inquiry1-fname').oninput = function() {
		// 	validateInquiryForm('inquiry1');
		// };
		// document.getElementById('inquiry1-lname').oninput = function() {
		// 	validateInquiryForm('inquiry1');
		// };
		// document.getElementById('inquiry1-phone').oninput = function() {
		// 	validateInquiryForm('inquiry1');
		// };
		// document.getElementById('inquiry1-email').oninput = function() {
		// 	validateInquiryForm('inquiry1');
		// };
	<?php } ?>
</script>
