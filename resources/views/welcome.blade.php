<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>NEXUS MOTION // Alex Vance — Video Editor, Image Retoucher & 3D Mockup Specialist</title>
    <meta name="description" content="Portfolio of Alex Vance — Specializing in high-retention video editing, magazine-grade photo retouching, and photorealistic 3D mockup video animations.">
    <meta name="keywords" content="Video Editor, Image Retouching, Mockup Video Editing, 3D Product Mockup, DaVinci Resolve, After Effects, Premiere Pro, Photoshop">
    <meta name="author" content="Alex Vance">

    <!-- Open Graph / Social Sharing -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="NEXUS MOTION — Video Editing, Image Retouching & 3D Mockups">
    <meta property="og:description" content="Explore high-impact video reels, interactive before/after retouching comparisons, and 3D device mockup motion.">
    <meta property="og:image" content="{{ asset('images/portfolio/hero-workstation.jpg') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom Portfolio Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>

    <!-- Ambient Glowing Blobs -->
    <div class="ambient-glow ambient-glow-1"></div>
    <div class="ambient-glow ambient-glow-2"></div>
    <div class="ambient-glow ambient-glow-3"></div>

    <!-- Top Availability Banner -->
    <div class="py-2 text-center" style="background: rgba(14, 16, 26, 0.9); border-bottom: 1px solid var(--border-subtle); font-size: 0.82rem; position: relative; z-index: 1001;">
        <div class="container d-flex align-items-center justify-content-center gap-3 flex-wrap">
            <span class="status-pill">
                <span class="status-dot"></span> AVAILABLE FOR NEW PROJECTS & MONTHLY RETAINERS
            </span>
            <span class="text-muted d-none d-md-inline">•</span>
            <span class="text-white d-none d-md-inline"><i class="bi bi-lightning-charge-fill text-warning me-1"></i> Average Turnaround: 24h - 48h</span>
            <span class="text-muted d-none d-md-inline">•</span>
            <a href="#estimator" class="text-info text-decoration-none fw-semibold">Calculate Project Estimate &rarr;</a>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container">
            <a class="brand-logo" href="#">
                <span class="brand-dot"></span>
                <span>NEXUS<span class="text-gradient">MOTION</span></span>
            </a>

            <button class="navbar-toggler border-0 text-white shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
                <i class="bi bi-list fs-2"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#showreel"><i class="bi bi-film me-1"></i> Showreel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#comparator"><i class="bi bi-sliders me-1"></i> Before/After</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#mockup-stage"><i class="bi bi-laptop me-1"></i> 3D Mockups</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#portfolio"><i class="bi bi-grid-fill me-1"></i> Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#services"><i class="bi bi-layers-fill me-1"></i> Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#process"><i class="bi bi-cpu me-1"></i> Process</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-2">
                    <a href="#estimator" class="btn-glow-primary btn-sm-custom">
                        <i class="bi bi-calendar-check-fill"></i> Book Project
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- ==========================================================================
       HERO SECTION
       ========================================================================== -->
    <section id="hero" class="hero-section">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-7 z-2">
                    <div class="d-inline-flex align-items-center gap-2 mb-3">
                        <span class="glass-pill px-3 py-1 text-white" style="font-size: 0.85rem; font-weight: 600;">
                            <i class="bi bi-award-fill text-warning me-1"></i> Alex Vance // Digital Visual Craftsman
                        </span>
                    </div>

                    <h1 class="hero-title">
                        Cinematic <span class="text-gradient">Video Editing</span>, High-End Retouching & <span class="text-gradient-cyan">3D Mockup Motion</span>
                    </h1>

                    <p class="hero-subtitle">
                        I empower top YouTube creators, direct-to-consumer brands, and digital agencies with broadcast-grade post-production, magazine-level image retouching, and photorealistic animated 3D mockups that command attention and convert.
                    </p>

                    <div class="d-flex align-items-center gap-3 hero-cta-btns flex-wrap mb-5">
                        <button type="button" class="btn-glow-primary" data-project-trigger="reel-1">
                            <i class="bi bi-play-circle-fill fs-5"></i> Watch 2026 Showreel
                        </button>
                        <a href="#portfolio" class="btn-glow-secondary">
                            <i class="bi bi-grid"></i> Explore Works
                        </a>
                        <a href="#comparator" class="btn-glow-secondary d-none d-sm-inline-flex">
                            <i class="bi bi-eye"></i> Before / After Lab
                        </a>
                    </div>

                    <!-- Trust & Metrics Bar -->
                    <div class="row g-3">
                        <div class="col-6 col-sm-3">
                            <div class="hero-stat-card">
                                <span class="hero-stat-number text-gradient">150+</span>
                                <span class="hero-stat-label">Delivered Projects</span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="hero-stat-card">
                                <span class="hero-stat-number text-gradient-cyan">85M+</span>
                                <span class="hero-stat-label">Video Views</span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="hero-stat-card">
                                <span class="hero-stat-number text-gradient-fire">99.6%</span>
                                <span class="hero-stat-label">Client Approval</span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="hero-stat-card">
                                <span class="hero-stat-number text-white">24-48h</span>
                                <span class="hero-stat-label">Rush Turnaround</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Visual Workspace Showcase -->
                <div class="col-lg-5 z-2">
                    <div class="hero-visual-wrapper">
                        <!-- Floating Badge 1 -->
                        <div class="hero-floating-badge hero-badge-1">
                            <div class="badge-icon-box badge-icon-violet">
                                <i class="bi bi-camera-reels-fill"></i>
                            </div>
                            <div>
                                <strong class="d-block text-white" style="font-size: 0.88rem;">4K 60FPS Native Workflow</strong>
                                <small class="text-muted" style="font-size: 0.75rem;">ProRes 422HQ & DaVinci Color</small>
                            </div>
                        </div>

                        <!-- Main Workstation Image -->
                        <div class="hero-visual-card">
                            <img src="{{ asset('images/portfolio/hero-workstation.jpg') }}" class="hero-visual-img" alt="Digital Creator Workstation">
                        </div>

                        <!-- Floating Badge 2 -->
                        <div class="hero-floating-badge hero-badge-2">
                            <div class="badge-icon-box badge-icon-cyan">
                                <i class="bi bi-box-fill"></i>
                            </div>
                            <div>
                                <strong class="d-block text-white" style="font-size: 0.88rem;">3D Motion & Mockups</strong>
                                <small class="text-muted" style="font-size: 0.75rem;">Blender • Octane • After Effects</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
       FEATURED SHOWREEL SPOTLIGHT
       ========================================================================== -->
    <section id="showreel" class="showreel-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i class="bi bi-disc-fill me-1"></i> Cinematic Master Reel</span>
                <h2 class="section-title">2026 Production <span class="text-gradient">Showreel</span></h2>
                <p class="section-description">A curated 90-second montage of high-velocity automotive commercials, kinetic viral shorts, and 3D device motion reveals.</p>
            </div>

            <div class="showreel-theater">
                <!-- Topbar Info -->
                <div class="showreel-topbar">
                    <div class="d-flex align-items-center">
                        <span class="showreel-topbar-dot" style="background: #ef4444;"></span>
                        <span class="showreel-topbar-dot" style="background: #f59e0b;"></span>
                        <span class="showreel-topbar-dot" style="background: #10b981;"></span>
                        <span class="ms-2 fw-semibold text-white">NEXUS_SHOWREEL_2026_MASTER.mov</span>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <span class="badge bg-danger text-uppercase"><i class="bi bi-record-circle me-1"></i> 4K UHD</span>
                        <span class="text-muted d-none d-sm-inline">ProRes 422HQ • 60 FPS</span>
                        <span class="text-white font-monospace">00:04:28:12</span>
                    </div>
                </div>

                <!-- Stage with Poster & Play Button -->
                <div class="showreel-media-stage" data-project-trigger="reel-1">
                    <img src="{{ asset('images/portfolio/video-showreel-speed.jpg') }}" class="showreel-poster-img" alt="Video Editing Showreel">
                    <div class="showreel-overlay">
                        <button type="button" class="play-radar-btn" aria-label="Play Showreel">
                            <i class="bi bi-play-fill ms-1"></i>
                        </button>
                        <h4 class="mt-4 text-white fw-bold">Click to Play Reel in High Definition</h4>
                        <p class="text-muted" style="font-size: 0.9rem;">With Full Sound Design & Spatial Audio</p>
                    </div>
                </div>

                <!-- Bottom Meta Strip -->
                <div class="showreel-meta-strip">
                    <div class="d-flex align-items-center gap-3">
                        <div class="waveform-animator">
                            <span class="waveform-bar"></span>
                            <span class="waveform-bar"></span>
                            <span class="waveform-bar"></span>
                            <span class="waveform-bar"></span>
                            <span class="waveform-bar"></span>
                            <span class="waveform-bar"></span>
                            <span class="waveform-bar"></span>
                            <span class="waveform-bar"></span>
                        </div>
                        <div>
                            <strong class="d-block text-white" style="font-size: 0.95rem;">Tokyo Nocturne // Automotive Commercial Reel</strong>
                            <small class="text-muted">DaVinci Resolve Studio Color • Sound FX Mastering by Alex Vance</small>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <span class="meta-pill"><i class="bi bi-film me-1"></i> Premiere Pro</span>
                        <span class="meta-pill"><i class="bi bi-bezier2 me-1"></i> After Effects</span>
                        <span class="meta-pill"><i class="bi bi-palette-fill me-1"></i> DaVinci</span>
                        <button type="button" class="btn-glow-primary btn-sm-custom ms-2" data-project-trigger="reel-1">
                            <i class="bi bi-arrows-fullscreen"></i> Fullscreen
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
       INTERACTIVE BEFORE / AFTER RETOUCH COMPARATOR
       ========================================================================== */ -->
    <section id="comparator" class="retouch-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i class="bi bi-sliders me-1"></i> Precision Image Editing</span>
                <h2 class="section-title">Interactive <span class="text-gradient">Before & After</span> Retouch Lab</h2>
                <p class="section-description">
                    Drag the interactive handle across the frame to inspect non-destructive frequency separation, dodge & burn sculpting, and dual-tone cyan/magenta color grading.
                </p>
            </div>

            <div class="compare-card-container">
                <!-- Top Nav Switcher -->
                <div class="compare-top-nav">
                    <div class="d-flex align-items-center gap-2">
                        <span class="text-white fw-bold"><i class="bi bi-eye-fill text-info me-2"></i> Retouch Inspector:</span>
                        <span class="text-muted small">Drag slider left/right</span>
                    </div>

                    <div class="compare-pill-nav">
                        <button class="compare-tab-btn active" data-preset="fashion">
                            <i class="bi bi-person-bounding-box me-1"></i> High-Fashion Beauty
                        </button>
                        <button class="compare-tab-btn" data-preset="cyber">
                            <i class="bi bi-camera-fill me-1"></i> Cyberpunk Color Grade
                        </button>
                        <button class="compare-tab-btn" data-preset="product">
                            <i class="bi bi-box me-1"></i> 3D Product & Liquid
                        </button>
                    </div>
                </div>

                <!-- Interactive Comparison Stage -->
                <div class="image-comparator" id="mainComparator">
                    <!-- Final Retouched (Bottom Layer) -->
                    <div class="comparator-img-wrapper">
                        <img src="{{ asset('images/portfolio/retouch-after.jpg') }}" class="comparator-after-img" alt="Retouched Master">
                    </div>

                    <!-- RAW Before (Top Clipped Layer) -->
                    <div class="comparator-before-wrapper">
                        <img src="{{ asset('images/portfolio/retouch-before.jpg') }}" alt="RAW Unedited Capture">
                    </div>

                    <!-- Drag Handle -->
                    <div class="comparator-handle">
                        <div class="handle-circle">
                            <i class="bi bi-chevron-left"></i>
                            <i class="bi bi-chevron-right"></i>
                        </div>
                    </div>

                    <!-- Floating Badges -->
                    <div class="comparator-tag comparator-tag-raw">
                        <i class="bi bi-circle-fill text-danger me-1"></i> RAW 14-BIT LOG CAPTURE
                    </div>
                    <div class="comparator-tag comparator-tag-final">
                        <i class="bi bi-check-circle-fill text-success me-1"></i> MAGAZINE RETOUCH & GRADE
                    </div>
                </div>

                <!-- Retouch Techniques Checklist -->
                <div class="p-4" style="background: rgba(14, 16, 26, 0.95); border-top: 1px solid var(--border-subtle);">
                    <div class="row g-3">
                        <div class="col-md-3 col-sm-6">
                            <div class="retouch-feature-badge">
                                <i class="bi bi-magic"></i>
                                <div>
                                    <strong class="d-block text-white" style="font-size: 0.9rem;">Frequency Separation</strong>
                                    <small class="text-muted" style="font-size: 0.78rem;">Pore texture preserved 100%</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="retouch-feature-badge">
                                <i class="bi bi-sun-fill text-warning"></i>
                                <div>
                                    <strong class="d-block text-white" style="font-size: 0.9rem;">Dodge & Burn 16-Bit</strong>
                                    <small class="text-muted" style="font-size: 0.78rem;">Facial bone structure sculpted</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="retouch-feature-badge">
                                <i class="bi bi-palette2 text-primary"></i>
                                <div>
                                    <strong class="d-block text-white" style="font-size: 0.9rem;">Cyan & Magenta Grade</strong>
                                    <small class="text-muted" style="font-size: 0.78rem;">Dual-tone color separation</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="retouch-feature-badge">
                                <i class="bi bi-type-h1 text-success"></i>
                                <div>
                                    <strong class="d-block text-white" style="font-size: 0.9rem;">Vogue Editorial Layout</strong>
                                    <small class="text-muted" style="font-size: 0.78rem;">CMYK Print & Digital Master</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
       MOCKUP VIDEO & 3D MOTION STAGE
       ========================================================================== -->
    <section id="mockup-stage" class="mockup-stage-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i class="bi bi-box-seam-fill me-1"></i> Dynamic 3D Presentation</span>
                <h2 class="section-title">Mockup Video & <span class="text-gradient-cyan">3D Motion Stage</span></h2>
                <p class="section-description">
                    How will your client's digital product or brand look in reality? I animate photorealistic hardware mockups, UI screen recordings, and 3D product commercial reveals.
                </p>
            </div>

            <div class="row g-4">
                <!-- Device 1: MacBook Pro & iPhone Motion -->
                <div class="col-lg-4 col-md-6">
                    <div class="mockup-device-card" data-project-trigger="mockup-dashboard">
                        <div class="mockup-device-preview">
                            <img src="{{ asset('images/portfolio/mockup-device-motion.jpg') }}" class="mockup-device-img" alt="MacBook and iPhone Mockup">
                            <div class="mockup-device-overlay">
                                <button type="button" class="btn-glow-primary btn-sm-custom">
                                    <i class="bi bi-play-circle-fill"></i> Watch Screen Motion
                                </button>
                            </div>
                        </div>
                        <div class="mockup-device-content">
                            <div class="device-badge-row">
                                <span class="device-badge badge-video">UI Walkthrough</span>
                                <span class="device-badge badge-3d">Titanium Mockup</span>
                                <span class="device-badge badge-fps">60 FPS</span>
                            </div>
                            <h4 class="text-white mb-2" style="font-size: 1.25rem;">Fintech Dashboard & Mobile Motion</h4>
                            <p class="text-muted small mb-3">
                                Isometric 3D camera pan across dark titanium MacBook Pro and iPhone 16 Pro with dynamic crypto charts and live UI interactions.
                            </p>
                            <div class="mt-auto d-flex align-items-center justify-content-between text-muted small pt-2 border-top border-secondary border-opacity-25">
                                <span><i class="bi bi-laptop me-1"></i> Multi-Screen</span>
                                <span class="text-info fw-semibold">View Case Study &rarr;</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Device 2: 3D Energy Drink Can Motion Reveal -->
                <div class="col-lg-4 col-md-6">
                    <div class="mockup-device-card" data-project-trigger="mockup-can">
                        <div class="mockup-device-preview">
                            <img src="{{ asset('images/portfolio/mockup-3d-can.jpg') }}" class="mockup-device-img" alt="3D Energy Drink Mockup">
                            <div class="mockup-device-overlay">
                                <button type="button" class="btn-glow-primary btn-sm-custom">
                                    <i class="bi bi-play-circle-fill"></i> Watch 3D Product Spin
                                </button>
                            </div>
                        </div>
                        <div class="mockup-device-content">
                            <div class="device-badge-row">
                                <span class="device-badge badge-3d">Octane 3D</span>
                                <span class="device-badge badge-video">Liquid Physics</span>
                                <span class="device-badge badge-fps">Commercial Ad</span>
                            </div>
                            <h4 class="text-white mb-2" style="font-size: 1.25rem;">Veonix Energy 3D Motion Reveal</h4>
                            <p class="text-muted small mb-3">
                                360-degree rotating beverage can with micro-condensation drops, volumetric purple smoke, and illuminated smartphone app sync.
                            </p>
                            <div class="mt-auto d-flex align-items-center justify-content-between text-muted small pt-2 border-top border-secondary border-opacity-25">
                                <span><i class="bi bi-droplet-half me-1"></i> Real Simulation</span>
                                <span class="text-info fw-semibold">View Case Study &rarr;</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Device 3: Luxury Cosmetic Dropper Liquid Splash -->
                <div class="col-lg-4 col-md-6">
                    <div class="mockup-device-card" data-project-trigger="cosmetic-splash">
                        <div class="mockup-device-preview">
                            <img src="{{ asset('images/portfolio/mockup-cosmetic-splash.jpg') }}" class="mockup-device-img" alt="3D Cosmetic Mockup">
                            <div class="mockup-device-overlay">
                                <button type="button" class="btn-glow-primary btn-sm-custom">
                                    <i class="bi bi-play-circle-fill"></i> Watch Liquid Ad
                                </button>
                            </div>
                        </div>
                        <div class="mockup-device-content">
                            <div class="device-badge-row">
                                <span class="device-badge badge-3d">Mantaflow Liquid</span>
                                <span class="device-badge badge-video">Cosmetic Mockup</span>
                                <span class="device-badge badge-fps">8K Stills</span>
                            </div>
                            <h4 class="text-white mb-2" style="font-size: 1.25rem;">Luminosité Golden Serum Reveal</h4>
                            <p class="text-muted small mb-3">
                                Photorealistic glass dropper bottle with frozen high-speed water splashes, golden serum droplets, and studio rim lighting.
                            </p>
                            <div class="mt-auto d-flex align-items-center justify-content-between text-muted small pt-2 border-top border-secondary border-opacity-25">
                                <span><i class="bi bi-stars me-1"></i> Luxury Beauty</span>
                                <span class="text-info fw-semibold">View Case Study &rarr;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
       PORTFOLIO GALLERY WITH FILTER TABS
       ========================================================================== -->
    <section id="portfolio" class="portfolio-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i class="bi bi-grid-3x3-gap-fill me-1"></i> Selected Works</span>
                <h2 class="section-title">The Curated <span class="text-gradient">Portfolio</span></h2>
                <p class="section-description">
                    Filter by discipline to examine video editing reels, before/after retouched imagery, and 3D mockup animations.
                </p>
            </div>

            <!-- Filter Navigation Tabs -->
            <div class="filter-nav-wrapper">
                <button class="filter-btn active" data-filter="all">
                    <i class="bi bi-collection-fill"></i> All Projects (8)
                </button>
                <button class="filter-btn" data-filter="video">
                    <i class="bi bi-camera-reels-fill text-primary"></i> 🎬 Video Editing
                </button>
                <button class="filter-btn" data-filter="image">
                    <i class="bi bi-palette-fill text-info"></i> 🎨 Image Retouching
                </button>
                <button class="filter-btn" data-filter="mockup">
                    <i class="bi bi-phone-fill text-warning"></i> 📱 Mockup Videos & 3D
                </button>
            </div>

            <!-- Projects Grid -->
            <div class="row g-4" id="portfolioGrid">
                <!-- Item 1: Tokyo Nocturne Drift (Video) -->
                <div class="col-lg-4 col-md-6 portfolio-grid-item" data-category="video">
                    <div class="project-card" data-project-trigger="reel-1">
                        <div class="project-thumb-box">
                            <img src="{{ asset('images/portfolio/video-showreel-speed.jpg') }}" class="project-thumb-img" alt="Tokyo Drift Reel">
                            <div class="project-overlay">
                                <div>
                                    <span class="badge bg-danger mb-2">4K 60FPS REEL</span>
                                    <h4 class="text-white fw-bold mb-1">Tokyo Nocturne Commercial</h4>
                                    <p class="text-dim small mb-0">Speed Ramping • Anamorphic Flares • 1.8M Views</p>
                                </div>
                            </div>
                        </div>
                        <div class="project-info-box">
                            <div class="project-category-tag">Video Editing // Commercial</div>
                            <h3 class="project-title">Tokyo Nocturne Drift Reel</h3>
                            <div class="project-meta-pills">
                                <span class="meta-pill">Premiere Pro</span>
                                <span class="meta-pill">After Effects</span>
                                <span class="meta-pill">DaVinci Color</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2: Veonix Energy Drink (Mockup Video) -->
                <div class="col-lg-4 col-md-6 portfolio-grid-item" data-category="mockup">
                    <div class="project-card" data-project-trigger="mockup-can">
                        <div class="project-thumb-box">
                            <img src="{{ asset('images/portfolio/mockup-3d-can.jpg') }}" class="project-thumb-img" alt="Veonix 3D Mockup">
                            <div class="project-overlay">
                                <div>
                                    <span class="badge bg-info text-dark mb-2">3D PRODUCT MOTION</span>
                                    <h4 class="text-white fw-bold mb-1">Veonix 360 Can Motion</h4>
                                    <p class="text-dim small mb-0">Octane Render • Liquid Drops • Sound Design</p>
                                </div>
                            </div>
                        </div>
                        <div class="project-info-box">
                            <div class="project-category-tag">Mockup Video // 3D Product</div>
                            <h3 class="project-title">Veonix 3D Can Motion Reveal</h3>
                            <div class="project-meta-pills">
                                <span class="meta-pill">Blender 3D</span>
                                <span class="meta-pill">Octane</span>
                                <span class="meta-pill">After Effects</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Vogue Editorial Retouch (Image Editing) -->
                <div class="col-lg-4 col-md-6 portfolio-grid-item" data-category="image">
                    <div class="project-card" data-project-trigger="retouch-vogue">
                        <div class="project-thumb-box">
                            <img src="{{ asset('images/portfolio/retouch-after.jpg') }}" class="project-thumb-img" alt="Vogue Retouch">
                            <div class="project-overlay">
                                <div>
                                    <span class="badge bg-primary mb-2">MAGAZINE COVER</span>
                                    <h4 class="text-white fw-bold mb-1">Vogue Editorial Retouching</h4>
                                    <p class="text-dim small mb-0">Frequency Separation • 16-Bit Dodge & Burn</p>
                                </div>
                            </div>
                        </div>
                        <div class="project-info-box">
                            <div class="project-category-tag">Image Editing // High-Fashion</div>
                            <h3 class="project-title">Vogue Beauty Skin Retouch</h3>
                            <div class="project-meta-pills">
                                <span class="meta-pill">Photoshop</span>
                                <span class="meta-pill">Lightroom</span>
                                <span class="meta-pill">Capture One</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 4: Fintech App & MacBook Motion (Mockup Video) -->
                <div class="col-lg-4 col-md-6 portfolio-grid-item" data-category="mockup">
                    <div class="project-card" data-project-trigger="mockup-dashboard">
                        <div class="project-thumb-box">
                            <img src="{{ asset('images/portfolio/mockup-device-motion.jpg') }}" class="project-thumb-img" alt="Fintech Mockup">
                            <div class="project-overlay">
                                <div>
                                    <span class="badge bg-warning text-dark mb-2">UI PROMO VIDEO</span>
                                    <h4 class="text-white fw-bold mb-1">Fintech Titanium Showcase</h4>
                                    <p class="text-dim small mb-0">MacBook Pro & iPhone 16 Animation • 60 FPS</p>
                                </div>
                            </div>
                        </div>
                        <div class="project-info-box">
                            <div class="project-category-tag">Mockup Video // UI Animation</div>
                            <h3 class="project-title">Fintech Multi-Device Motion</h3>
                            <div class="project-meta-pills">
                                <span class="meta-pill">Figma</span>
                                <span class="meta-pill">After Effects</span>
                                <span class="meta-pill">Premiere Pro</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 5: Viral Shorts & YouTube Retention (Video Editing) -->
                <div class="col-lg-4 col-md-6 portfolio-grid-item" data-category="video">
                    <div class="project-card" data-project-trigger="shortform-viral">
                        <div class="project-thumb-box">
                            <img src="{{ asset('images/portfolio/shortform-video-viral.jpg') }}" class="project-thumb-img" alt="Viral Shorts Edit">
                            <div class="project-overlay">
                                <div>
                                    <span class="badge bg-danger mb-2">+500K VIEWS REEL</span>
                                    <h4 class="text-white fw-bold mb-1">Viral YouTube Shorts Engine</h4>
                                    <p class="text-dim small mb-0">Dynamic Word Captions • SFX • Hook Optimization</p>
                                </div>
                            </div>
                        </div>
                        <div class="project-info-box">
                            <div class="project-category-tag">Video Editing // Short-Form</div>
                            <h3 class="project-title">Viral Retention Shorts System</h3>
                            <div class="project-meta-pills">
                                <span class="meta-pill">Premiere Pro</span>
                                <span class="meta-pill">CapCut Pro</span>
                                <span class="meta-pill">Sound FX</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 6: Luminosité Cosmetic Dropper (Mockup Video) -->
                <div class="col-lg-4 col-md-6 portfolio-grid-item" data-category="mockup">
                    <div class="project-card" data-project-trigger="cosmetic-splash">
                        <div class="project-thumb-box">
                            <img src="{{ asset('images/portfolio/mockup-cosmetic-splash.jpg') }}" class="project-thumb-img" alt="Cosmetic Dropper Mockup">
                            <div class="project-overlay">
                                <div>
                                    <span class="badge bg-info text-dark mb-2">LIQUID SIMULATION</span>
                                    <h4 class="text-white fw-bold mb-1">Luminosité Liquid Splash</h4>
                                    <p class="text-dim small mb-0">Photorealistic Glass & Droplets Physics</p>
                                </div>
                            </div>
                        </div>
                        <div class="project-info-box">
                            <div class="project-category-tag">Mockup Video // Luxury Commercial</div>
                            <h3 class="project-title">Luminosité Liquid Physics Ad</h3>
                            <div class="project-meta-pills">
                                <span class="meta-pill">Blender Mantaflow</span>
                                <span class="meta-pill">Photoshop</span>
                                <span class="meta-pill">After Effects</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 7: Cyber Desert Nomad Color Grade (Video Editing) -->
                <div class="col-lg-4 col-md-6 portfolio-grid-item" data-category="video">
                    <div class="project-card" data-project-trigger="scifi-grade">
                        <div class="project-thumb-box">
                            <img src="{{ asset('images/portfolio/cinematic-desert-grade.jpg') }}" class="project-thumb-img" alt="Sci-Fi Color Grading">
                            <div class="project-overlay">
                                <div>
                                    <span class="badge bg-secondary mb-2">ANAMORPHIC GRADE</span>
                                    <h4 class="text-white fw-bold mb-1">Cyber Desert Nomad</h4>
                                    <p class="text-dim small mb-0">Teal & Orange Harmony • Film Grain Halation</p>
                                </div>
                            </div>
                        </div>
                        <div class="project-info-box">
                            <div class="project-category-tag">Video Editing // Color Grading</div>
                            <h3 class="project-title">Anamorphic Sci-Fi Movie Grade</h3>
                            <div class="project-meta-pills">
                                <span class="meta-pill">DaVinci Resolve</span>
                                <span class="meta-pill">Dehancer</span>
                                <span class="meta-pill">35mm Film LUT</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 8: Spatial Creative Studio Workstation (Video / Mockup) -->
                <div class="col-lg-4 col-md-6 portfolio-grid-item" data-category="video">
                    <div class="project-card" data-project-trigger="studio-setup">
                        <div class="project-thumb-box">
                            <img src="{{ asset('images/portfolio/hero-workstation.jpg') }}" class="project-thumb-img" alt="Creator Workstation">
                            <div class="project-overlay">
                                <div>
                                    <span class="badge bg-primary mb-2">STUDIO MOTION</span>
                                    <h4 class="text-white fw-bold mb-1">Spatial Creative Workflow</h4>
                                    <p class="text-dim small mb-0">Node Timeline Scrubbing & Mobile Mirroring</p>
                                </div>
                            </div>
                        </div>
                        <div class="project-info-box">
                            <div class="project-category-tag">Video Editing & Mockup // Brand Anthem</div>
                            <h3 class="project-title">Spatial Studio Workflow Reel</h3>
                            <div class="project-meta-pills">
                                <span class="meta-pill">Premiere Pro</span>
                                <span class="meta-pill">After Effects</span>
                                <span class="meta-pill">Blender</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
       SERVICES & SPECIALIZATION PACKAGES
       ========================================================================== -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i class="bi bi-stack me-1"></i> Core Offerings</span>
                <h2 class="section-title">Specialized <span class="text-gradient">Services</span></h2>
                <p class="section-description">
                    Tailored solutions designed for creators, commercial brands, and advertising agencies who need top-tier visual execution without compromise.
                </p>
            </div>

            <div class="row g-4">
                <!-- Service 1: Video Editing -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-luxury">
                        <div class="service-icon-box icon-box-purple">
                            <i class="bi bi-camera-reels"></i>
                        </div>
                        <h3 class="text-white fw-bold mb-2">Video Editing & Post</h3>
                        <p class="text-muted small">
                            From retention-driven YouTube shorts to high-octane commercial brand reels and cinematic documentaries.
                        </p>

                        <ul class="service-deliverables-list">
                            <li><i class="bi bi-check2-circle"></i> High-retention cuts & pacing hooks</li>
                            <li><i class="bi bi-check2-circle"></i> Kinetic word captions & sound effects (SFX)</li>
                            <li><i class="bi bi-check2-circle"></i> DaVinci Resolve color grading & LUTs</li>
                            <li><i class="bi bi-check2-circle"></i> 2D/3D Motion graphics & title reveals</li>
                            <li><i class="bi bi-check2-circle"></i> Multi-aspect exports (16:9, 9:16, 1:1)</li>
                        </ul>

                        <div class="pt-3 border-top border-secondary border-opacity-25 d-flex align-items-center justify-content-between">
                            <span class="text-muted small">Starting at <strong>$250</strong> / project</span>
                            <a href="#estimator" class="btn-glow-secondary btn-sm-custom">Inquire</a>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Image Retouching (Featured) -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-luxury service-card-featured">
                        <span class="featured-ribbon">Most Popular</span>
                        <div class="service-icon-box icon-box-cyan">
                            <i class="bi bi-palette2"></i>
                        </div>
                        <h3 class="text-white fw-bold mb-2">High-End Image Retouch</h3>
                        <p class="text-muted small">
                            Magazine-grade beauty retouching, commercial e-commerce enhancement, and high-CTR YouTube thumbnails.
                        </p>

                        <ul class="service-deliverables-list">
                            <li><i class="bi bi-check2-circle"></i> Non-destructive frequency separation</li>
                            <li><i class="bi bi-check2-circle"></i> Micro-contrast 16-bit dodge & burn</li>
                            <li><i class="bi bi-check2-circle"></i> Background cleanup & realistic shadows</li>
                            <li><i class="bi bi-check2-circle"></i> Viral YouTube thumbnail composition</li>
                            <li><i class="bi bi-check2-circle"></i> Print CMYK & web-ready Adobe RGB assets</li>
                        </ul>

                        <div class="pt-3 border-top border-secondary border-opacity-25 d-flex align-items-center justify-content-between">
                            <span class="text-muted small">Starting at <strong>$120</strong> / image</span>
                            <a href="#estimator" class="btn-glow-primary btn-sm-custom">Inquire</a>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Mockup Videos & 3D Motion -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-luxury">
                        <div class="service-icon-box icon-box-amber">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h3 class="text-white fw-bold mb-2">3D Mockup Video Editing</h3>
                        <p class="text-muted small">
                            Photorealistic device mockups, UI screen recordings brought to life, and 3D product commercial animations.
                        </p>

                        <ul class="service-deliverables-list">
                            <li><i class="bi bi-check2-circle"></i> 3D iPhone 16 Pro & MacBook animations</li>
                            <li><i class="bi bi-check2-circle"></i> Animated SaaS landing page videos</li>
                            <li><i class="bi bi-check2-circle"></i> 360-degree rotating product packaging</li>
                            <li><i class="bi bi-check2-circle"></i> Octane / Blender liquid & lighting physics</li>
                            <li><i class="bi bi-check2-circle"></i> Transparent WebM & Alpha MP4 loops</li>
                        </ul>

                        <div class="pt-3 border-top border-secondary border-opacity-25 d-flex align-items-center justify-content-between">
                            <span class="text-muted small">Starting at <strong>$350</strong> / animation</span>
                            <a href="#estimator" class="btn-glow-secondary btn-sm-custom">Inquire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
       PRODUCTION WORKFLOW
       ========================================================================== -->
    <section id="process" class="process-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i class="bi bi-diagram-3-fill me-1"></i> Transparent Process</span>
                <h2 class="section-title">The 5-Step <span class="text-gradient">Production Pipeline</span></h2>
                <p class="section-description">How we collaborate from the initial creative brief to the final broadcast-ready delivery.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg col-md-6">
                    <div class="process-step-card">
                        <span class="process-step-number">01</span>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-primary">STEP 1</span>
                        </div>
                        <h4 class="text-white fw-bold mb-2">Brief & Assets</h4>
                        <p class="text-muted small mb-0">We align on visual references, moodboards, project goals, and transfer raw footage or 3D assets securely via Google Drive or Frame.io.</p>
                    </div>
                </div>

                <div class="col-lg col-md-6">
                    <div class="process-step-card">
                        <span class="process-step-number">02</span>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-info text-dark">STEP 2</span>
                        </div>
                        <h4 class="text-white fw-bold mb-2">Assembly Cut</h4>
                        <p class="text-muted small mb-0">Building the narrative spine, selecting top camera takes, timing the music track, and establishing optimal viewer retention pacing.</p>
                    </div>
                </div>

                <div class="col-lg col-md-6">
                    <div class="process-step-card">
                        <span class="process-step-number">03</span>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-warning text-dark">STEP 3</span>
                        </div>
                        <h4 class="text-white fw-bold mb-2">Motion & Mockups</h4>
                        <p class="text-muted small mb-0">Integrating 3D device mockups, kinetic typography, b-roll graphics, speed-ramps, and frequency separation skin polish.</p>
                    </div>
                </div>

                <div class="col-lg col-md-6">
                    <div class="process-step-card">
                        <span class="process-step-number">04</span>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-danger">STEP 4</span>
                        </div>
                        <h4 class="text-white fw-bold mb-2">Color & Sound</h4>
                        <p class="text-muted small mb-0">DaVinci Resolve color grading, custom film LUT emulation, sound effects layering, voice EQ cleanup, and audio mastering.</p>
                    </div>
                </div>

                <div class="col-lg col-md-6">
                    <div class="process-step-card">
                        <span class="process-step-number">05</span>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-success">STEP 5</span>
                        </div>
                        <h4 class="text-white fw-bold mb-2">Master Delivery</h4>
                        <p class="text-muted small mb-0">Exports across all needed aspect ratios (16:9, 9:16, 1:1), ProRes master archives, project files, and unlimited minor revisions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
       SOFTWARE & TECHNOLOGY MARQUEE
       ========================================================================== -->
    <section class="software-marquee-section">
        <div class="marquee-track">
            <!-- Set 1 -->
            <div class="marquee-item"><i class="bi bi-camera-reels-fill text-danger"></i> Adobe Premiere Pro</div>
            <div class="marquee-item"><i class="bi bi-bezier2 text-primary"></i> Adobe After Effects</div>
            <div class="marquee-item"><i class="bi bi-palette-fill text-warning"></i> DaVinci Resolve Studio</div>
            <div class="marquee-item"><i class="bi bi-image-fill text-info"></i> Adobe Photoshop</div>
            <div class="marquee-item"><i class="bi bi-sliders text-success"></i> Adobe Lightroom Classic</div>
            <div class="marquee-item"><i class="bi bi-box-fill text-warning"></i> Blender 3D</div>
            <div class="marquee-item"><i class="bi bi-gpu-card text-danger"></i> Octane Render</div>
            <div class="marquee-item"><i class="bi bi-figma text-primary"></i> Figma UI Motion</div>
            <div class="marquee-item"><i class="bi bi-cpu-fill text-info"></i> Topaz Video AI</div>
            <!-- Set 2 (Duplicate for continuous loop) -->
            <div class="marquee-item"><i class="bi bi-camera-reels-fill text-danger"></i> Adobe Premiere Pro</div>
            <div class="marquee-item"><i class="bi bi-bezier2 text-primary"></i> Adobe After Effects</div>
            <div class="marquee-item"><i class="bi bi-palette-fill text-warning"></i> DaVinci Resolve Studio</div>
            <div class="marquee-item"><i class="bi bi-image-fill text-info"></i> Adobe Photoshop</div>
            <div class="marquee-item"><i class="bi bi-sliders text-success"></i> Adobe Lightroom Classic</div>
            <div class="marquee-item"><i class="bi bi-box-fill text-warning"></i> Blender 3D</div>
            <div class="marquee-item"><i class="bi bi-gpu-card text-danger"></i> Octane Render</div>
            <div class="marquee-item"><i class="bi bi-figma text-primary"></i> Figma UI Motion</div>
            <div class="marquee-item"><i class="bi bi-cpu-fill text-info"></i> Topaz Video AI</div>
        </div>
    </section>

    <!-- ==========================================================================
       CLIENT TESTIMONIALS / SOCIAL PROOF
       ========================================================================== -->
    <section class="py-5 my-4">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i class="bi bi-chat-quote-fill me-1"></i> Client Praise</span>
                <h2 class="section-title">Endorsed by <span class="text-gradient">Top Creators & Brands</span></h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="glass-panel p-4 h-100 d-flex flex-direction-column">
                        <div class="d-flex align-items-center gap-1 text-warning mb-3">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="text-dim small mb-4 flex-grow-1">
                            "Alex transformed our YouTube retention curve. Average watch time spiked by +48% after his dynamic sound design and zoom cuts. Easily the best editor we have ever hired."
                        </p>
                        <div class="d-flex align-items-center gap-3 pt-3 border-top border-secondary border-opacity-25">
                            <div class="badge-icon-box badge-icon-violet"><i class="bi bi-youtube"></i></div>
                            <div>
                                <strong class="d-block text-white" style="font-size: 0.95rem;">Zack Taylor</strong>
                                <small class="text-muted">Tech Creator • 1.2M Subscribers</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="glass-panel p-4 h-100 d-flex flex-direction-column">
                        <div class="d-flex align-items-center gap-1 text-warning mb-3">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="text-dim small mb-4 flex-grow-1">
                            "The 3D mockup videos of our software app on the MacBook and iPhone looked like an official Apple announcement. Our SaaS landing page conversion rate immediately jumped +42%."
                        </p>
                        <div class="d-flex align-items-center gap-3 pt-3 border-top border-secondary border-opacity-25">
                            <div class="badge-icon-box badge-icon-cyan"><i class="bi bi-laptop-fill"></i></div>
                            <div>
                                <strong class="d-block text-white" style="font-size: 0.95rem;">David Kim</strong>
                                <small class="text-muted">Head of Product, AuraPay Global</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="glass-panel p-4 h-100 d-flex flex-direction-column">
                        <div class="d-flex align-items-center gap-1 text-warning mb-3">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="text-dim small mb-4 flex-grow-1">
                            "His fashion editorial retouching is second to none. He kept the real skin texture intact while delivering that high-end glossy magazine polish our agency clients demand."
                        </p>
                        <div class="d-flex align-items-center gap-3 pt-3 border-top border-secondary border-opacity-25">
                            <div class="badge-icon-box badge-icon-violet"><i class="bi bi-camera-fill"></i></div>
                            <div>
                                <strong class="d-block text-white" style="font-size: 0.95rem;">Elena Rostova</strong>
                                <small class="text-muted">Art Director, Mode International</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
       INTERACTIVE PROJECT COST ESTIMATOR & CONTACT FORM
       ========================================================================== -->
    <section id="estimator" class="estimator-section">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i class="bi bi-calculator-fill me-1"></i> Instant Pricing</span>
                <h2 class="section-title">Calculate Estimate & <span class="text-gradient">Book A Project</span></h2>
                <p class="section-description">
                    Select your required services below for an instant budget calculation, or send a custom project brief directly.
                </p>
            </div>

            <div class="estimator-box">
                <div class="row g-5">
                    <!-- Left Column: Estimator Options & Form -->
                    <div class="col-lg-7">
                        <form id="portfolioContactForm">
                            <h4 class="text-white fw-bold mb-3"><i class="bi bi-check2-square text-info me-2"></i> 1. Select Needed Services:</h4>
                            
                            <div class="option-pill-group mb-4">
                                <div>
                                    <input type="checkbox" id="srvVideo" class="option-checkbox-input service-checkbox" data-price="250" checked>
                                    <label for="srvVideo" class="option-checkbox-label">
                                        <i class="bi bi-camera-reels-fill text-primary"></i> Video Editing & Reels ($250)
                                    </label>
                                </div>
                                <div>
                                    <input type="checkbox" id="srvImage" class="option-checkbox-input service-checkbox" data-price="120" checked>
                                    <label for="srvImage" class="option-checkbox-label">
                                        <i class="bi bi-palette-fill text-info"></i> High-End Retouching ($120)
                                    </label>
                                </div>
                                <div>
                                    <input type="checkbox" id="srvMockup" class="option-checkbox-input service-checkbox" data-price="350">
                                    <label for="srvMockup" class="option-checkbox-label">
                                        <i class="bi bi-laptop text-warning"></i> 3D Mockup Video ($350)
                                    </label>
                                </div>
                                <div>
                                    <input type="checkbox" id="srvGrade" class="option-checkbox-input service-checkbox" data-price="150">
                                    <label for="srvGrade" class="option-checkbox-label">
                                        <i class="bi bi-disc text-danger"></i> DaVinci Color Grade ($150)
                                    </label>
                                </div>
                            </div>

                            <h4 class="text-white fw-bold mb-3"><i class="bi bi-calendar3 text-info me-2"></i> 2. Project Scope & Volume:</h4>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label text-muted small">Project Volume</label>
                                    <select id="estimatorScope" class="form-select input-luxury">
                                        <option value="1">Single Video / Hero Project (1x)</option>
                                        <option value="2.5">Batch Bundle (3 - 5 Videos or Assets)</option>
                                        <option value="4.5">Monthly Creator Retainer (12+ Assets)</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-muted small">Turnaround Priority</label>
                                    <div class="d-flex gap-2">
                                        <div class="flex-grow-1">
                                            <input type="radio" name="turnaround" id="speedStandard" value="standard" class="option-checkbox-input" data-multiplier="1" checked>
                                            <label for="speedStandard" class="option-checkbox-label w-100 text-center">
                                                Standard (3-5d)
                                            </label>
                                        </div>
                                        <div class="flex-grow-1">
                                            <input type="radio" name="turnaround" id="speedRush" value="rush" class="option-checkbox-input" data-multiplier="1.3">
                                            <label for="speedRush" class="option-checkbox-label w-100 text-center text-warning">
                                                ⚡ 24-48h Rush
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h4 class="text-white fw-bold mb-3"><i class="bi bi-envelope-paper-fill text-info me-2"></i> 3. Your Contact Details:</h4>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <input type="text" class="form-control input-luxury" placeholder="Your Name or Brand" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control input-luxury" placeholder="Your Email Address" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control input-luxury" placeholder="WhatsApp / Telegram Handle (Optional)">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control input-luxury" rows="3" placeholder="Tell me about your project, footage details, or reference links..." required></textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn-glow-primary w-100 py-3 fw-bold" style="font-size: 1.05rem;">
                                <i class="bi bi-send-fill me-2"></i> Send Project Inquiry & Lock Availability
                            </button>
                        </form>
                    </div>

                    <!-- Right Column: Live Estimate Card & Direct Channels -->
                    <div class="col-lg-5">
                        <div class="estimate-summary-panel">
                            <div>
                                <span class="badge bg-primary text-uppercase mb-2">Live Price Calculation</span>
                                <h3 class="text-white fw-bold">Estimated Investment</h3>
                                <p class="text-muted small">Based on selected editing disciplines and volume:</p>
                                
                                <div class="price-estimate-display text-gradient" id="estimatePriceDisplay">
                                    $370
                                </div>
                                
                                <div class="d-flex align-items-center gap-2 mb-4">
                                    <span class="badge bg-dark border border-secondary text-info" id="estimateTimeDisplay">
                                        3 - 5 Business Days
                                    </span>
                                    <span class="text-muted small">Includes 2 Free Revisions</span>
                                </div>

                                <ul class="list-unstyled text-muted small mb-4">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Source project files upon request</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Royalty-free licensed music & sound FX</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Master exports in 4K ProRes & 1080p</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Dedicated Frame.io private review link</li>
                                </ul>
                            </div>

                            <div class="p-3 rounded-3" style="background: rgba(0,0,0,0.4); border: 1px solid var(--border-subtle);">
                                <strong class="d-block text-white mb-2" style="font-size: 0.9rem;">Prefer Direct Message?</strong>
                                <div class="d-flex gap-2">
                                    <a href="https://wa.me/" target="_blank" class="btn btn-sm btn-outline-success flex-grow-1">
                                        <i class="bi bi-whatsapp me-1"></i> WhatsApp
                                    </a>
                                    <a href="https://t.me/" target="_blank" class="btn btn-sm btn-outline-info flex-grow-1">
                                        <i class="bi bi-telegram me-1"></i> Telegram
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
       CINEMA / VIDEO PLAYER LIGHTBOX MODAL
       ========================================================================== -->
    <div class="modal-custom-backdrop" id="cinemaModal">
        <div class="modal-cinema-box">
            <button type="button" class="modal-close-btn" aria-label="Close modal">
                <i class="bi bi-x-lg"></i>
            </button>

            <!-- Video Player Frame -->
            <div class="simulated-player-frame">
                <img id="modalImage" src="{{ asset('images/portfolio/video-showreel-speed.jpg') }}" class="simulated-player-img" alt="Video Preview">
                
                <!-- Player Controls -->
                <div class="player-controls-bar">
                    <button type="button" class="btn text-white p-0 border-0 me-2" id="modalPlayPauseBtn">
                        <i class="bi bi-pause-fill fs-4"></i>
                    </button>
                    
                    <span class="small font-monospace" id="modalPlayerTime">0:14 / 1:30</span>

                    <div class="player-scrubber">
                        <div class="player-scrubber-progress" id="modalPlayerProgress"></div>
                    </div>

                    <span class="badge bg-danger text-uppercase font-monospace" id="modalResolution">4K ProRes</span>
                    <button type="button" class="btn text-white p-0 border-0 ms-2">
                        <i class="bi bi-volume-up-fill fs-5"></i>
                    </button>
                </div>
            </div>

            <!-- Project Details Container -->
            <div class="p-4">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                    <span class="badge bg-primary text-uppercase" id="modalCategory">Video Editing & VFX</span>
                    <span class="text-muted small" id="modalSoftware">Adobe Premiere Pro, After Effects, DaVinci</span>
                </div>

                <h3 class="text-white fw-bold mb-2" id="modalTitle">Cyberpunk Tokyo Drift // Commercial Video Reel</h3>
                <p class="text-dim mb-4" id="modalDescription">High-octane commercial reel featuring dynamic speed-ramping and bass-boosted sound design.</p>

                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid var(--border-subtle);">
                            <span class="text-muted small d-block">Client / Channel</span>
                            <strong class="text-white" id="modalClient">Velocity Motors International</strong>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid var(--border-subtle);">
                            <span class="text-muted small d-block">Deliverables</span>
                            <strong class="text-white" id="modalDeliverables">16:9 Cinema Master, 9:16 Vertical, Sound Stems</strong>
                        </div>
                    </div>
                </div>

                <div class="p-3 rounded-3 mb-4" style="background: rgba(139, 92, 246, 0.1); border-left: 3px solid var(--primary);">
                    <p class="text-dim small fst-italic mb-0" id="modalQuote">
                        "Alex delivered this reel in 48 hours. Generated over 1.8M views in 5 days!"
                    </p>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="#estimator" class="btn-glow-primary btn-sm-custom">
                        <i class="bi bi-envelope-fill me-1"></i> Request Similar Project
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Luxury Toast Notification -->
    <div class="toast-luxury" id="luxuryToast">
        <i class="bi bi-check-circle-fill text-success fs-3"></i>
        <div>
            <strong class="d-block text-white" style="font-size: 0.95rem;">Inquiry Sent Successfully!</strong>
            <small class="text-muted">Alex Vance will reply via Email or WhatsApp within 2-4 hours.</small>
        </div>
    </div>

    <!-- ==========================================================================
       FOOTER
       ========================================================================== -->
    <footer class="footer-custom">
        <div class="container">
            <div class="row gy-4 align-items-center mb-5">
                <div class="col-lg-5">
                    <a class="brand-logo mb-3" href="#">
                        <span class="brand-dot"></span>
                        <span>NEXUS<span class="text-gradient">MOTION</span></span>
                    </a>
                    <p class="text-muted small pe-lg-4">
                        Elite post-production, high-fashion retouching, and 3D mockup video animations engineered for forward-thinking creators and visionary brands worldwide.
                    </p>
                </div>

                <div class="col-lg-7 text-lg-end">
                    <div class="d-flex align-items-center justify-content-lg-end gap-2 flex-wrap mb-3">
                        <a href="https://behance.net" target="_blank" class="social-circle-btn" aria-label="Behance"><i class="bi bi-behance"></i></a>
                        <a href="https://dribbble.com" target="_blank" class="social-circle-btn" aria-label="Dribbble"><i class="bi bi-dribbble"></i></a>
                        <a href="https://instagram.com" target="_blank" class="social-circle-btn" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://youtube.com" target="_blank" class="social-circle-btn" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                        <a href="https://linkedin.com" target="_blank" class="social-circle-btn" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="mailto:alex@nexusmotion.design" class="social-circle-btn" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
                    </div>
                    <span class="text-muted small">Operating natively in UTC-5 & Worldwide Remote • Mon - Sat</span>
                </div>
            </div>

            <div class="pt-4 border-top border-secondary border-opacity-25 d-flex align-items-center justify-content-between flex-wrap gap-3">
                <p class="text-muted small mb-0">&copy; {{ date('Y') }} NEXUS MOTION by Alex Vance. All Rights Reserved.</p>
                <a href="#hero" class="text-muted small text-decoration-none">
                    Back to Top <i class="bi bi-arrow-up ms-1"></i>
                </a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Interactive Portfolio Logic -->
    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>
