<!--Common JS-->
<?php require_once $alljs; ?>
<script src="https://unpkg.com/lenis@1.3.26/dist/lenis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script>
	if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
		gsap.registerPlugin(ScrollTrigger);
	}

	if (typeof Lenis !== "undefined") {
		window.lenis = new Lenis({
			autoRaf: false,
			duration: 1.2,
			easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
			orientation: 'vertical',
			smoothWheel: true
		});

		if (window.lenis && typeof ScrollTrigger !== "undefined") {
			window.lenis.on('scroll', ScrollTrigger.update);
			gsap.ticker.add((time) => {
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
				document.addEventListener("click", resumePlay, { once: true });
				document.addEventListener("touchstart", resumePlay, { once: true });
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
				once: true
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
	function initAnchorsInteractiveExperience() {
		if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		gsap.registerPlugin(ScrollTrigger);

		// 1. Title Word-Reveal Animation
		const titleWords = document.querySelectorAll(".anchor-word-inner");
		if (titleWords.length) {
			gsap.fromTo(titleWords, {
				y: "115%",
				opacity: 0
			}, {
				y: "0%",
				opacity: 1,
				duration: 0.85,
				stagger: 0.08,
				ease: "power3.out",
				scrollTrigger: {
					trigger: ".js-anchors-title",
					start: "top 88%",
					once: true
				}
			});
		}

		// 2. Counter Cards Stagger Entrance & Animated Number Counting
		const statCards = document.querySelectorAll(".anchor-card-stat");
		if (statCards.length) {
			gsap.fromTo(statCards, {
				y: 35,
				opacity: 0
			}, {
				y: 0,
				opacity: 1,
				duration: 0.75,
				stagger: 0.1,
				ease: "power2.out",
				scrollTrigger: {
					trigger: ".anchors-subgrid-stats",
					start: "top 88%",
					once: true
				}
			});

			statCards.forEach(card => {
				const numEl = card.querySelector(".anchor-stat-count") || card.querySelector(".purecounter");
				if (!numEl) return;
				const target = parseFloat(numEl.getAttribute("data-target") || numEl.getAttribute("data-purecounter-end") || "0");
				const decimals = parseInt(numEl.getAttribute("data-decimals") || numEl.getAttribute("data-purecounter-decimals") || "0");
				const obj = { val: 0 };

				gsap.to(obj, {
					val: target,
					duration: 2.0,
					ease: "power2.out",
					scrollTrigger: {
						trigger: ".anchors-subgrid-stats",
						start: "top 88%",
						once: true
					},
					onUpdate: () => {
						numEl.textContent = decimals > 0 ? obj.val.toFixed(decimals) : Math.round(obj.val);
					}
				});
			});
		}

		// 3. Full-screen Video Pinned until shrunk (Only on screens > 768px)
		const videoWrap = document.querySelector("#anchor-video-pin-wrap");
		const videoScaler = document.querySelector(".anchor-video-scaler");
		if (videoWrap && videoScaler) {
			let mm = gsap.matchMedia();

			mm.add("(min-width: 769px)", () => {
				const videoTl = gsap.timeline({
					scrollTrigger: {
						trigger: videoWrap,
						start: () => (window.innerWidth <= 1024 ? "center center" : "top top"),
						end: () => (window.innerWidth <= 1024 ? "+=85%" : "+=120%"),
						scrub: 0.5,
						pin: true,
						anticipatePin: 1,
						pinSpacing: true,
						invalidateOnRefresh: true
					}
				});

				videoTl.fromTo(videoScaler, {
					width: "100%",
					height: "100%",
					borderRadius: "0px"
				}, {
					width: () => {
						const w = window.innerWidth;
						if (w <= 1024) return "80%";
						if (w <= 1408) return "70%";
						return "62%";
					},
					height: () => {
						const w = window.innerWidth;
						if (w <= 1024) return "58vh";
						if (w <= 1408) return "62vh";
						return "66vh";
					},
					borderRadius: () => {
						const w = window.innerWidth;
						if (w <= 1024) return "16px";
						return "18px";
					},
					ease: "none"
				});
			});
		}

		// 4. 4 Cards Horizontal Slide Entrance on Scroll (Only on desktop > 768px)
		const cardsOuter = document.querySelector(".anchor-cards-horizontal-outer");
		const cardsTrack = document.querySelector(".anchor-cards-horizontal-track");
		if (cardsOuter && cardsTrack) {
			let mmCards = gsap.matchMedia();
			mmCards.add("(min-width: 769px)", () => {
				gsap.fromTo(cardsTrack, {
					x: () => Math.min(window.innerWidth * 0.4, 480),
					opacity: 0.4
				}, {
					x: 0,
					opacity: 1,
					ease: "none",
					scrollTrigger: {
						trigger: cardsOuter,
						start: "top 88%",
						end: "top 30%",
						scrub: 0.8,
						invalidateOnRefresh: true
					}
				});
			});
		}
	}


	function initCapabilitiesAnimation() {
		if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		gsap.registerPlugin(ScrollTrigger);

		const capSection = document.querySelector("#section-capabilities");
		if (!capSection) return;

		// 1. Prepare word masks for cap-tagline if not yet split
		const capTag = capSection.querySelector(".cap-tagline");
		if (capTag && !capTag.classList.contains("split-ready")) {
			capTag.classList.add("split-ready");
			const text = capTag.textContent.trim();
			const words = text.split(/\s+/);
			capTag.innerHTML = words.map(w => `<span class="cap-word-mask"><span class="cap-tag-inner">${w}</span></span>`).join(' ');
		}

		const capWords = capSection.querySelectorAll(".cap-word-inner");
		const tagWords = capSection.querySelectorAll(".cap-tag-inner");
		const capCards = capSection.querySelectorAll(".capability-card");

		const capTl = gsap.timeline({
			scrollTrigger: {
				trigger: capSection,
				start: "top 82%",
				once: true
			}
		});

		// Animate Title words
		if (capWords.length) {
			capTl.fromTo(capWords, {
				y: "115%",
				opacity: 0
			}, {
				y: "0%",
				opacity: 1,
				duration: 0.9,
				stagger: 0.08,
				ease: "power3.out"
			}, 0);
		}

		// Animate Tagline words in sequence
		if (tagWords.length) {
			capTl.fromTo(tagWords, {
				y: "115%",
				opacity: 0
			}, {
				y: "0%",
				opacity: 0.37,
				duration: 0.75,
				stagger: 0.02,
				ease: "power3.out"
			}, 0.18);
		}

		// Animate Cards stagger entrance
		if (capCards.length) {
			capTl.fromTo(capCards, {
				y: 35,
				opacity: 0
			}, {
				y: 0,
				opacity: 1,
				duration: 0.85,
				stagger: 0.08,
				ease: "power2.out"
			}, 0.28);
		}
	}

	/** Explore Extensions 4-Column Showcase GSAP Parallax & Scroll Animation **/
	function initExtensionsShowcase() {
		const extSection = document.querySelector("#section-extensions");
		if (!extSection || typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		gsap.registerPlugin(ScrollTrigger);

		const colItems = extSection.querySelectorAll(".ext-column-item");
		if (!colItems.length) return;

		// 1. Heading word-mask entrance
		const extWords = extSection.querySelectorAll(".ext-word-inner");
		if (extWords.length) {
			gsap.fromTo(extWords, {
				y: "115%",
				opacity: 0
			}, {
				y: "0%",
				opacity: 1,
				duration: 0.85,
				stagger: 0.06,
				ease: "power3.out",
				scrollTrigger: {
					trigger: extSection,
					start: "top 85%",
					once: true
				}
			});
		}

		// 2. Initial entrance animation for columns (per-card/row trigger)
		colItems.forEach(col => {
			gsap.fromTo(col, {
				y: 35,
				opacity: 0
			}, {
				y: 0,
				opacity: 1,
				duration: 0.75,
				ease: "power2.out",
				scrollTrigger: {
					trigger: col,
					start: "top 88%",
					once: true
				}
			});
		});

		// 3. Staggered Downward Scroll Scrub using gsap.matchMedia
		let mm = gsap.matchMedia();
		const landingRatios = [0.88, 0.72, 0.76, 0.84];

		// Mode A: Desktop (> 1216px) - 4 Columns in 1 Row
		mm.add("(min-width: 1217px)", () => {
			const scrubTl = gsap.timeline({
				scrollTrigger: {
					trigger: extSection,
					start: "top 72%",
					end: "bottom 28%",
					scrub: 1.0
				}
			});

			colItems.forEach((col, idx) => {
				const content = col.querySelector(".ext-col-content");
				const bg = col.querySelector(".ext-col-bg");
				if (!content) return;

				const colHeight = col.offsetHeight || 680;
				const contentHeight = content.offsetHeight || 160;
				const maxAvailableTravel = Math.max(160, colHeight - contentHeight - 65);
				const travelDistance = Math.round(maxAvailableTravel * (landingRatios[idx] || 0.76));
				const startTime = idx * 0.10;

				scrubTl.fromTo(content, {
					y: 0
				}, {
					y: travelDistance,
					ease: "none",
					duration: 0.70
				}, startTime);

				if (bg) {
					scrubTl.fromTo(bg, {
						y: -25
					}, {
						y: 25,
						ease: "none",
						duration: 1.0
					}, 0);
				}
			});
		});

		// Mode B: 2-Column Grid (576px to 1216px) - 2 Columns x 2 Rows
		mm.add("(min-width: 576px) and (max-width: 1216px)", () => {
			// Row 1: Cols 0 & 1
			const row1 = [colItems[0], colItems[1]].filter(Boolean);
			if (row1.length) {
				const row1Tl = gsap.timeline({
					scrollTrigger: {
						trigger: row1[0],
						start: "top 78%",
						end: "bottom 25%",
						scrub: 1.0
					}
				});

				row1.forEach((col, i) => {
					const content = col.querySelector(".ext-col-content");
					const bg = col.querySelector(".ext-col-bg");
					if (!content) return;

					const colHeight = col.offsetHeight || 520;
					const contentHeight = content.offsetHeight || 160;
					const travelDistance = Math.round(Math.max(100, colHeight - contentHeight - 50) * (i === 0 ? 0.84 : 0.72));

					row1Tl.fromTo(content, {
						y: 0
					}, {
						y: travelDistance,
						ease: "none",
						duration: 0.75
					}, i * 0.12);

					if (bg) {
						row1Tl.fromTo(bg, {
							y: -20
						}, {
							y: 20,
							ease: "none",
							duration: 1.0
						}, 0);
					}
				});
			}

			// Row 2: Cols 2 & 3
			const row2 = [colItems[2], colItems[3]].filter(Boolean);
			if (row2.length) {
				const row2Tl = gsap.timeline({
					scrollTrigger: {
						trigger: row2[0],
						start: "top 78%",
						end: "bottom 25%",
						scrub: 1.0
					}
				});

				row2.forEach((col, i) => {
					const content = col.querySelector(".ext-col-content");
					const bg = col.querySelector(".ext-col-bg");
					if (!content) return;

					const colHeight = col.offsetHeight || 520;
					const contentHeight = content.offsetHeight || 160;
					const travelDistance = Math.round(Math.max(100, colHeight - contentHeight - 50) * (i === 0 ? 0.72 : 0.84));

					row2Tl.fromTo(content, {
						y: 0
					}, {
						y: travelDistance,
						ease: "none",
						duration: 0.75
					}, i * 0.12);

					if (bg) {
						row2Tl.fromTo(bg, {
							y: -20
						}, {
							y: 20,
							ease: "none",
							duration: 1.0
						}, 0);
					}
				});
			}
		});

		// Mode C: Mobile Stacked (<= 575px) - 1 Column
		mm.add("(max-width: 575px)", () => {
			colItems.forEach(col => {
				const content = col.querySelector(".ext-col-content");
				const bg = col.querySelector(".ext-col-bg");
				if (!content) return;

				const colHeight = col.offsetHeight || 420;
				const contentHeight = content.offsetHeight || 140;
				const travelDistance = Math.round(Math.max(60, colHeight - contentHeight - 45) * 0.76);

				const mobileTl = gsap.timeline({
					scrollTrigger: {
						trigger: col,
						start: "top 80%",
						end: "bottom 30%",
						scrub: 1.0
					}
				});

				mobileTl.fromTo(content, {
					y: 0
				}, {
					y: travelDistance,
					ease: "none"
				});

				if (bg) {
					mobileTl.fromTo(bg, {
						y: -15
					}, {
						y: 15,
						ease: "none"
					}, 0);
				}
			});
		});
	}

	/** Our Legacy Section GSAP Sticky Inner-Scroll & Counter Animation **/
	function initLegacyStickyScrollAnimation() {
		if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
		gsap.registerPlugin(ScrollTrigger);

		const legacySection = document.querySelector("#section-legacy");
		const stickyStage = document.querySelector(".legacy-sticky-stage");
		if (!legacySection || !stickyStage) return;

		const heading = legacySection.querySelector(".section-title h2");
		const titleLayer = legacySection.querySelector(".legacy-title-layer");
		const diagonalTrack = legacySection.querySelector(".legacy-diagonal-track");
		const legacyCards = legacySection.querySelectorAll(".legacy-card");
		const bgImg = legacySection.querySelector(".legacy-bg-img");
		const isMobile = window.innerWidth <= 768;

		// 1. Heading word-mask entrance
		const legacyWords = legacySection.querySelectorAll(".legacy-word-inner");
		if (legacyWords.length) {
			gsap.fromTo(legacyWords, {
				y: "115%",
				opacity: 0
			}, {
				y: "0%",
				opacity: 1,
				duration: 0.85,
				stagger: 0.08,
				ease: "power3.out",
				scrollTrigger: {
					trigger: legacySection,
					start: "top 75%",
					once: true
				}
			});
		}

		// 2. Sticky Pin & Inner Scroll (Desktop)
		if (diagonalTrack && !isMobile) {
			const pinTl = gsap.timeline({
				scrollTrigger: {
					trigger: legacySection,
					start: "top top",
					end: "+=150%",
					pin: stickyStage,
					pinSpacing: true,
					anticipatePin: 1,
					scrub: 0.8,
					invalidateOnRefresh: true,
					onUpdate: (self) => {
						const p = self.progress;
						const stages = legacySection.querySelectorAll(".legacy-pair-stage");
						stages.forEach((stage, idx) => {
							const threshold = idx === 0 ? 0 : (idx === 1 ? 0.20 : 0.50);
							if (p >= threshold) {
								stage.querySelectorAll(".legacy-card").forEach(card => animateCardCounter(card));
							}
						});
					}
				}
			});

			// Title scrolls up and exits screen smoothly
			if (titleLayer) {
				pinTl.to(titleLayer, {
					y: -100,
					opacity: 0,
					ease: "power1.out",
					duration: 0.18
				}, 0);
			}

			// Master track upward scrub: smoothly scrolls to Pair 2, then Pair 3, and holds Pair 3 in full view
			pinTl.fromTo(diagonalTrack, {
				y: 0
			}, {
				y: () => - (2 * (window.innerHeight * 0.52)),
				ease: "none",
				duration: 0.82
			}, 0.08);

			// Clean hold on Pair 3 (last 2 cards) so user can comfortably view them and counters finish
			pinTl.to({}, { duration: 0.10 });
		}

		// Helper function for smooth live counter count-up
		function animateCardCounter(card) {
			const countEl = card.querySelector(".legacy-stat-count");
			if (!countEl || countEl.dataset.counted === "true") return;
			countEl.dataset.counted = "true";
			const targetVal = parseFloat(countEl.getAttribute("data-target") || "0");
			const decimals = parseInt(countEl.getAttribute("data-decimals") || "0");
			const counterObj = { val: 0 };

			gsap.to(counterObj, {
				val: targetVal,
				duration: 1.2,
				ease: "power1.out",
				onUpdate: () => {
					countEl.textContent = decimals > 0 ? counterObj.val.toFixed(decimals) : Math.round(counterObj.val);
				}
			});
		}

		// Counter triggers on arrival (each card on mobile, or Pair 1 on desktop)
		if (isMobile) {
			legacyCards.forEach(card => {
				ScrollTrigger.create({
					trigger: card,
					start: "top 88%",
					once: true,
					onEnter: () => animateCardCounter(card)
				});
			});
		} else {
			ScrollTrigger.create({
				trigger: legacySection,
				start: "top 60%",
				once: true,
				onEnter: () => {
					const firstStage = legacySection.querySelector(".legacy-pair-stage");
					if (firstStage) {
						firstStage.querySelectorAll(".legacy-card").forEach(card => animateCardCounter(card));
					}
				}
			});
		}
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
				once: true
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
					once: true
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
				once: true
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
				once: true
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
				once: true
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
				once: true
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
				once: true
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
				once: true
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
				once: true
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
				once: true
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
					once: true
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
			initCapabilitiesAnimation,
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

		if (typeof ScrollTrigger !== "undefined") {
			setTimeout(() => {
				ScrollTrigger.refresh();
			}, 100);
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
