/**
 * NEXUS MOTION - Interactive Portfolio Engine
 * Video Editing, High-End Image Retouching & 3D Mockup Video Showcase
 */

document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
    initBeforeAfterComparator();
    initPortfolioFiltering();
    initCinemaModal();
    initProjectEstimator();
    initContactForm();
    initSmoothScroll();
});

/* ==========================================================================
   1. NAVBAR & SCROLL SPY
   ========================================================================== */
function initNavbar() {
    const navbar = document.querySelector('.navbar-custom');
    if (!navbar) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Mobile nav auto close
    const navLinks = document.querySelectorAll('.nav-link-custom');
    const navCollapse = document.getElementById('navbarNav');
    if (navCollapse) {
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 992 && bootstrap?.Collapse) {
                    const bsCollapse = bootstrap.Collapse.getInstance(navCollapse);
                    if (bsCollapse) bsCollapse.hide();
                }
            });
        });
    }
}

/* ==========================================================================
   2. INTERACTIVE BEFORE / AFTER RETOUCH COMPARATOR
   ========================================================================== */
function initBeforeAfterComparator() {
    const comparator = document.querySelector('.image-comparator');
    if (!comparator) return;

    const beforeWrapper = comparator.querySelector('.comparator-before-wrapper');
    const handle = comparator.querySelector('.comparator-handle');
    const beforeImg = beforeWrapper.querySelector('img');
    const afterImg = comparator.querySelector('.comparator-after-img');
    let isDragging = false;

    function syncImagesWidth() {
        if (beforeImg && comparator) {
            beforeImg.style.width = `${comparator.offsetWidth}px`;
            beforeImg.style.height = `${comparator.offsetHeight}px`;
        }
    }

    syncImagesWidth();
    window.addEventListener('resize', syncImagesWidth);

    function updateSliderPosition(xCoord) {
        const rect = comparator.getBoundingClientRect();
        let position = ((xCoord - rect.left) / rect.width) * 100;
        
        // Boundaries
        if (position < 4) position = 4;
        if (position > 96) position = 96;

        beforeWrapper.style.width = `${position}%`;
        handle.style.left = `${position}%`;
    }

    // Mouse events
    comparator.addEventListener('mousedown', (e) => {
        isDragging = true;
        updateSliderPosition(e.clientX);
    });

    window.addEventListener('mouseup', () => {
        isDragging = false;
    });

    window.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        updateSliderPosition(e.clientX);
    });

    // Touch events for mobile/tablet
    comparator.addEventListener('touchstart', (e) => {
        isDragging = true;
        if (e.touches[0]) updateSliderPosition(e.touches[0].clientX);
    }, { passive: true });

    window.addEventListener('touchend', () => {
        isDragging = false;
    });

    window.addEventListener('touchmove', (e) => {
        if (!isDragging || !e.touches[0]) return;
        updateSliderPosition(e.touches[0].clientX);
    }, { passive: true });

    // Preset Switcher Tabs
    const presetButtons = document.querySelectorAll('.compare-tab-btn');
    const presets = {
        fashion: {
            before: '/images/portfolio/retouch-before.jpg',
            after: '/images/portfolio/retouch-after.jpg',
            tagRaw: 'RAW 14-BIT LOG CAPTURE',
            tagFinal: 'MAGAZINE RETOUCH & GRADE'
        },
        cyber: {
            before: '/images/portfolio/cinematic-desert-grade.jpg',
            after: '/images/portfolio/video-showreel-speed.jpg',
            tagRaw: 'FLAT CAM PROFILE',
            tagFinal: 'ANAMORPHIC TEAL & ORANGE'
        },
        product: {
            before: '/images/portfolio/mockup-3d-can.jpg',
            after: '/images/portfolio/mockup-cosmetic-splash.jpg',
            tagRaw: 'UNLIT 3D WIREFRAME',
            tagFinal: 'OCTANE 8K COMMERCIAL'
        }
    };

    presetButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            presetButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const presetKey = btn.dataset.preset;
            const data = presets[presetKey];
            if (!data) return;

            beforeImg.src = data.before;
            afterImg.src = data.after;

            const tagRaw = comparator.querySelector('.comparator-tag-raw');
            const tagFinal = comparator.querySelector('.comparator-tag-final');
            if (tagRaw) tagRaw.textContent = data.tagRaw;
            if (tagFinal) tagFinal.textContent = data.tagFinal;

            // Reset position to 50%
            beforeWrapper.style.width = '50%';
            handle.style.left = '50%';
            syncImagesWidth();
        });
    });
}

/* ==========================================================================
   3. PORTFOLIO FILTERING (Video, Image, Mockup)
   ========================================================================== */
function initPortfolioFiltering() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectItems = document.querySelectorAll('.portfolio-grid-item');

    if (!filterBtns.length || !projectItems.length) return;

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filterValue = btn.dataset.filter;

            projectItems.forEach(item => {
                const category = item.dataset.category;
                if (filterValue === 'all' || category === filterValue) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0) scale(1)';
                    }, 50);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px) scale(0.96)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
}

/* ==========================================================================
   4. CINEMA / VIDEO PLAYER LIGHTBOX MODAL
   ========================================================================== */
const projectDataStore = {
    'reel-1': {
        title: 'Cyberpunk Tokyo Drift // Commercial Video Reel',
        category: 'Cinematic Video Editing & VFX',
        image: '/images/portfolio/video-showreel-speed.jpg',
        resolution: '4K ProRes 422HQ • 60 FPS',
        software: 'Adobe Premiere Pro, After Effects, DaVinci Resolve',
        client: 'Velocity Motors International',
        description: 'High-octane commercial reel featuring dynamic speed-ramping, 3D camera tracking graphics, anamorphic lens flares, and aggressive bass-boosted sound design sync.',
        deliverables: '16:9 Cinema Master, 9:16 Vertical Cut, Sound Stems, Project Archive',
        quote: '"Alex delivered this reel in 48 hours. It generated over 1.8M views in the first 5 days!" — Marcus Brody, Marketing VP'
    },
    'mockup-can': {
        title: 'Veonix Ultra Energy // 3D Product Motion Reveal',
        category: '3D Mockup Video & Product Animation',
        image: '/images/portfolio/mockup-3d-can.jpg',
        resolution: '8K Octane Render • 60 FPS',
        software: 'Blender 3D, Cinema 4D, After Effects, Audition',
        client: 'Veonix Beverage Labs',
        description: 'Complete 3D product visualization showcasing metallic texture displacement, illuminated cybernetic neon waves, condensation liquid physics, and dynamic phone screen integration.',
        deliverables: '360 Spin Master, E-commerce Loop, 3D CAD Assets, Instagram Ad 9:16',
        quote: '"The 3D mockup videos made our Kickstarter launch look like an Apple keynote." — Sarah Chen, Founder'
    },
    'retouch-vogue': {
        title: 'Vogue Editorial Fashion Retouching & Color Grading',
        category: 'High-End Image Editing & Retouching',
        image: '/images/portfolio/retouch-after.jpg',
        resolution: '61MP Medium Format RAW • Adobe RGB',
        software: 'Adobe Photoshop, Lightroom Classic, Capture One',
        client: 'Mode International Magazine',
        description: 'Micro-retouching employing non-destructive frequency separation, manual dodge and burn, split-tone cyan/magenta color harmony, and magazine layout design.',
        deliverables: 'CMYK Print Ready TIFF, High-Res Web Assets, Social Crop Bundle',
        quote: '"Natural skin texture preserved with immaculate magazine polish. Outstanding eye for detail!" — Elena Rostova, Art Director'
    },
    'mockup-dashboard': {
        title: 'Fintech Mobile & MacBook Pro Motion Showcase',
        category: 'Mockup Video Editing & UI Animation',
        image: '/images/portfolio/mockup-device-motion.jpg',
        resolution: '4K UHD • 60 FPS Smooth UI',
        software: 'Figma, After Effects, Premiere Pro',
        client: 'AuraPay Global',
        description: 'Animated 3D device mockup choreography featuring dark titanium MacBook Pro and iPhone 16 Pro presenting real-time crypto dashboards and interactive UI micro-animations.',
        deliverables: 'Product Landing Page Video, App Store Video Preview, Transparent WebM Loops',
        quote: '"Our landing page conversion jumped +42% after embedding this device mockup video!" — David Kim, Head of Growth'
    },
    'shortform-viral': {
        title: 'High-Retention Shorts & Reels Editing Engine',
        category: 'Short-Form Video Editing',
        image: '/images/portfolio/shortform-video-viral.jpg',
        resolution: '1080x1920 Native 9:16 • 60 FPS',
        software: 'Premiere Pro, After Effects, CapCut Pro',
        client: 'ZackVlogs (1.2M Subscribers)',
        description: 'Retention-optimized viral video editing packed with word-by-word kinetic captions, sound effects, meme b-roll cutaways, and zoom snaps engineered for 100% viewer retention.',
        deliverables: 'Batch of 15 Reels, SRT Subtitles, Custom Hook Thumbnails',
        quote: '"Every single video edited by this team crossed 200k+ views. Absolute game-changers." — Zack Taylor, Creator'
    },
    'cosmetic-splash': {
        title: 'Luminosité Golden Serum // Liquid Physics Mockup',
        category: '3D Mockup Video & Commercial Retouch',
        image: '/images/portfolio/mockup-cosmetic-splash.jpg',
        resolution: '8K Ultra Commercial',
        software: 'Blender Mantaflow, Photoshop, After Effects',
        client: 'Luminosité Paris Cosmetics',
        description: 'Photorealistic cosmetic glass bottle mockup surrounded by high-speed frozen liquid splash droplets and glowing golden botanical essence particles.',
        deliverables: '4K Commercial Loop, High-Res Billboard Assets, Social Media Ads',
        quote: '"The liquid simulation looks so real you want to reach out and touch it." — Claire DuPont'
    },
    'scifi-grade': {
        title: 'Cyber Desert Nomad // Anamorphic Sci-Fi Color Grade',
        category: 'Cinematic Color Grading & Video Post',
        image: '/images/portfolio/cinematic-desert-grade.jpg',
        resolution: 'Cinema 2.39:1 Anamorphic • DaVinci Color',
        software: 'DaVinci Resolve Studio, Dehancer Film Emulation',
        client: 'Neon Sky Indie Films',
        description: 'Custom LUT pipeline engineered in DaVinci Resolve featuring 35mm film grain, halation, saturation rolloff, and atmospheric teal-orange grade for a futuristic desert short film.',
        deliverables: 'DCI-P3 Master, Rec.709 Web Export, Custom Show LUT Pack',
        quote: '"Turned our indie camera footage into a Hollywood blockbuster aesthetic." — Liam Vance, Director'
    },
    'studio-setup': {
        title: 'Spatial Creative Studio Workstation // 3D Motion Reel',
        category: 'Multi-Device Mockup & Video Editing',
        image: '/images/portfolio/hero-workstation.jpg',
        resolution: '4K 60FPS Surround Master',
        software: 'After Effects, Premiere Pro, Blender',
        client: 'Studio Nexus Creative',
        description: 'Holographic floating screens demonstrating live timeline scrubbing, node color workflows, and mobile application mirroring in an ambient dark studio atmosphere.',
        deliverables: 'Brand Anthem Video, Interactive Web Header, 4K Stills',
        quote: '"Visually captures exactly what modern digital creation feels like." — Alex Vance'
    }
};

function initCinemaModal() {
    const modalBackdrop = document.getElementById('cinemaModal');
    if (!modalBackdrop) return;

    const modalTitle = document.getElementById('modalTitle');
    const modalCategory = document.getElementById('modalCategory');
    const modalImage = document.getElementById('modalImage');
    const modalResolution = document.getElementById('modalResolution');
    const modalSoftware = document.getElementById('modalSoftware');
    const modalClient = document.getElementById('modalClient');
    const modalDescription = document.getElementById('modalDescription');
    const modalDeliverables = document.getElementById('modalDeliverables');
    const modalQuote = document.getElementById('modalQuote');
    const closeBtn = modalBackdrop.querySelector('.modal-close-btn');

    // Simulated player elements
    const playPauseBtn = document.getElementById('modalPlayPauseBtn');
    const playerProgress = document.getElementById('modalPlayerProgress');
    const playerTimeDisplay = document.getElementById('modalPlayerTime');
    let isPlaying = false;
    let playbackTimer = null;
    let playbackSeconds = 14;

    function openModalWithProject(key) {
        const item = projectDataStore[key] || projectDataStore['reel-1'];
        if (modalTitle) modalTitle.textContent = item.title;
        if (modalCategory) modalCategory.textContent = item.category;
        if (modalImage) modalImage.src = item.image;
        if (modalResolution) modalResolution.textContent = item.resolution;
        if (modalSoftware) modalSoftware.textContent = item.software;
        if (modalClient) modalClient.textContent = item.client;
        if (modalDescription) modalDescription.textContent = item.description;
        if (modalDeliverables) modalDeliverables.textContent = item.deliverables;
        if (modalQuote) modalQuote.textContent = item.quote;

        modalBackdrop.classList.add('active');
        document.body.style.overflow = 'hidden';

        // Auto start simulated playback
        startPlayback();
    }

    function closeModal() {
        modalBackdrop.classList.remove('active');
        document.body.style.overflow = '';
        stopPlayback();
    }

    function startPlayback() {
        isPlaying = true;
        if (playPauseBtn) playPauseBtn.innerHTML = '<i class="bi bi-pause-fill"></i>';
        
        clearInterval(playbackTimer);
        playbackTimer = setInterval(() => {
            playbackSeconds = (playbackSeconds + 1) % 90;
            const mins = Math.floor(playbackSeconds / 60);
            const secs = playbackSeconds % 60;
            const formatted = `${mins}:${secs < 10 ? '0' : ''}${secs}`;
            if (playerTimeDisplay) playerTimeDisplay.textContent = `${formatted} / 1:30`;
            if (playerProgress) playerProgress.style.width = `${(playbackSeconds / 90) * 100}%`;
        }, 1000);
    }

    function stopPlayback() {
        isPlaying = false;
        clearInterval(playbackTimer);
        if (playPauseBtn) playPauseBtn.innerHTML = '<i class="bi bi-play-fill"></i>';
    }

    if (playPauseBtn) {
        playPauseBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (isPlaying) {
                stopPlayback();
            } else {
                startPlayback();
            }
        });
    }

    // Attach trigger to all project cards & showreel buttons
    document.querySelectorAll('[data-project-trigger]').forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            e.preventDefault();
            const projectKey = trigger.dataset.projectTrigger;
            openModalWithProject(projectKey);
        });
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }

    modalBackdrop.addEventListener('click', (e) => {
        if (e.target === modalBackdrop) closeModal();
    });

    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modalBackdrop.classList.contains('active')) {
            closeModal();
        }
    });
}

/* ==========================================================================
   5. INTERACTIVE PROJECT COST ESTIMATOR
   ========================================================================== */
function initProjectEstimator() {
    const checkboxes = document.querySelectorAll('.service-checkbox');
    const scopeSelect = document.getElementById('estimatorScope');
    const turnaroundRadios = document.querySelectorAll('input[name="turnaround"]');
    const priceDisplay = document.getElementById('estimatePriceDisplay');
    const timeDisplay = document.getElementById('estimateTimeDisplay');

    if (!priceDisplay) return;

    function calculateEstimate() {
        let baseTotal = 0;
        let selectedCount = 0;

        checkboxes.forEach(cb => {
            if (cb.checked) {
                baseTotal += parseInt(cb.dataset.price || '0', 10);
                selectedCount++;
            }
        });

        // Default if none checked
        if (selectedCount === 0) {
            baseTotal = 250;
        }

        // Scope multiplier
        const scopeMultiplier = parseFloat(scopeSelect ? scopeSelect.value : '1');
        let estimatedPrice = baseTotal * scopeMultiplier;

        // Turnaround multiplier
        let turnaroundDays = '3 - 5 Business Days';
        turnaroundRadios.forEach(radio => {
            if (radio.checked) {
                const multiplier = parseFloat(radio.dataset.multiplier || '1');
                estimatedPrice *= multiplier;
                if (radio.value === 'rush') {
                    turnaroundDays = '⚡ 24 - 48 Hours Rush';
                }
            }
        });

        const finalPrice = Math.round(estimatedPrice);
        priceDisplay.textContent = `$${finalPrice}`;
        if (timeDisplay) timeDisplay.textContent = turnaroundDays;
    }

    checkboxes.forEach(cb => cb.addEventListener('change', calculateEstimate));
    if (scopeSelect) scopeSelect.addEventListener('change', calculateEstimate));
    turnaroundRadios.forEach(r => r.addEventListener('change', calculateEstimate));

    calculateEstimate();
}

/* ==========================================================================
   6. CONTACT FORM WITH LUXURY TOAST NOTIFICATION
   ========================================================================== */
function initContactForm() {
    const contactForm = document.getElementById('portfolioContactForm');
    const toast = document.getElementById('luxuryToast');

    if (!contactForm) return;

    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const originalText = submitBtn ? submitBtn.innerHTML : 'Send';

        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Transmitting Inquiry...';
        }

        setTimeout(() => {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="bi bi-check-circle-fill me-2"></i> Inquiry Dispatched!';
            }

            if (toast) {
                toast.classList.add('show');
                setTimeout(() => {
                    toast.classList.remove('show');
                }, 5500);
            }

            contactForm.reset();

            setTimeout(() => {
                if (submitBtn) submitBtn.innerHTML = originalText;
            }, 3000);
        }, 1200);
    });
}

/* ==========================================================================
   7. SMOOTH SCROLLING
   ========================================================================== */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#' || targetId === '') return;
            const targetEl = document.querySelector(targetId);
            if (targetEl) {
                e.preventDefault();
                targetEl.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}
