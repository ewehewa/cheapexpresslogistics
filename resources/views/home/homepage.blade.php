@extends('layouts.app')

@section('title', 'Freight Fast Cargo - Global Logistics, Shipping & Package Tracking')
@section('meta_description', 'Freight Fast Cargo provides fast, secure global shipping and logistics services. Air
freight, ocean freight, road freight, express delivery, warehousing, and real-time package tracking to 150+ countries.
Get a free quote today.')
@section('meta_keywords', 'Freight Fast Cargo, global shipping, international logistics, air freight, ocean
freight, road
freight, express delivery, package tracking, customs clearance, warehousing, freight forwarding, supply chain, shipping
company')

@push('seo')
<script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Freight Fast Cargo",
    "url": "{{ url('/') }}",
    "logo": "{{ asset('images/hero-picture.jpg') }}",
    "description": "Global logistics and shipping company offering air freight, ocean freight, road freight, express delivery, and real-time package tracking to 150+ countries.",
    "email": "info@freightfastcargo.cc",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "123 Logistics St",
        "addressLocality": "City",
        "addressRegion": "State",
        "postalCode": "12345"
    },
    "sameAs": [],
    "contactPoint": {
        "@type": "ContactPoint",
        "email": "info@freightfastcargo.cc",
        "contactType": "customer service",
        "availableLanguage": ["English"]
    }
}
</script>
<script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Freight Fast Cargo",
    "url": "{{ url('/') }}",
    "potentialAction": {
        "@type": "SearchAction",
        "target": "{{ url('/package') }}?search={tracking_number}",
        "query-input": "required name=tracking_number"
    }
}
</script>
<script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How do I track my package with Freight Fast Cargo?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Enter your tracking code in the tracking widget on our homepage or visit our Track page to get real-time location updates for your shipment."
            }
        },
        {
            "@type": "Question",
            "name": "What shipping services does Freight Fast Cargo offer?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We offer air freight, ocean freight, road freight, express delivery, last-mile delivery, international shipping to 150+ countries, warehousing, customs clearance, and specialized handling."
            }
        }
    ]
}
</script>
@endpush

@push('styles')
<style>
    /* Scroll Reveal Animation */
    .reveal {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity 0.7s ease, transform 0.7s ease;
    }
    .reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }
    .reveal-left {
        opacity: 0;
        transform: translateX(-50px);
        transition: opacity 0.7s ease, transform 0.7s ease;
    }
    .reveal-left.visible {
        opacity: 1;
        transform: translateX(0);
    }
    .reveal-right {
        opacity: 0;
        transform: translateX(50px);
        transition: opacity 0.7s ease, transform 0.7s ease;
    }
    .reveal-right.visible {
        opacity: 1;
        transform: translateX(0);
    }
    .reveal-delay-1 { transition-delay: 0.1s; }
    .reveal-delay-2 { transition-delay: 0.2s; }
    .reveal-delay-3 { transition-delay: 0.3s; }
    .reveal-delay-4 { transition-delay: 0.4s; }

    /* Hero gradient text */
    .gradient-text {
        background: linear-gradient(135deg, #6366f1, #06b6d4, #10b981);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Ticker/Marquee */
    @keyframes ticker {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .ticker-track {
        display: flex;
        width: max-content;
        animation: ticker 30s linear infinite;
    }
    .ticker-track:hover {
        animation-play-state: paused;
    }

    /* Gallery hover */
    .gallery-item {
        overflow: hidden;
        position: relative;
    }
    .gallery-item img {
        transition: transform 0.6s ease;
    }
    .gallery-item:hover img {
        transform: scale(1.08);
    }
    .gallery-item .overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(79,70,229,0.7) 0%, transparent 60%);
        opacity: 0;
        transition: opacity 0.4s ease;
        display: flex;
        align-items: flex-end;
        padding: 1.5rem;
    }
    .gallery-item:hover .overlay {
        opacity: 1;
    }

    /* Pulsing dot */
    @keyframes ping-slow {
        0% { transform: scale(1); opacity: 0.8; }
        70% { transform: scale(2.2); opacity: 0; }
        100% { transform: scale(1); opacity: 0; }
    }
    .ping-slow { animation: ping-slow 2.5s cubic-bezier(0, 0, 0.2, 1) infinite; }

    /* Service card image zoom */
    .service-card .card-img {
        transition: transform 0.7s cubic-bezier(0.4,0,0.2,1);
    }
    .service-card:hover .card-img {
        transform: scale(1.06);
    }

    /* Number counter */
    .counter-number {
        font-variant-numeric: tabular-nums;
    }

    /* Partner logos */
    @keyframes scroll-x {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .partners-track {
        display: flex;
        width: max-content;
        animation: scroll-x 20s linear infinite;
        gap: 3rem;
        align-items: center;
    }
</style>
@endpush

@section('content')

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     HERO SECTION
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<header class="relative min-h-screen flex items-center overflow-hidden" role="banner">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/hero-picture.jpg') }}"
            alt="Freight Fast Cargo - Global logistics and international shipping"
            class="w-full h-full object-cover object-center scale-105">
    </div>

    <!-- Dark Gradient Overlay -->
    <div class="absolute inset-0 bg-linear-to-r from-slate-900/95 via-slate-900/80 to-slate-900/40 z-0"></div>
    <div class="absolute inset-0 bg-linear-to-t from-slate-900/60 via-transparent to-transparent z-0"></div>

    <!-- Animated floating orbs -->
    <div class="absolute top-20 right-1/4 w-72 h-72 bg-indigo-600/20 rounded-full blur-[100px] z-0 animate-pulse"></div>
    <div class="absolute bottom-32 right-10 w-96 h-96 bg-cyan-600/15 rounded-full blur-[120px] z-0"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-20 sm:py-28 md:py-32">
        <div class="max-w-3xl">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 sm:gap-2.5 px-3 sm:px-4 py-2 rounded-full bg-white/10 border border-white/20 backdrop-blur-md text-white text-xs sm:text-sm font-semibold mb-6 sm:mb-8 reveal">
                <span class="relative flex h-2.5 w-2.5 shrink-0">
                    <span class="ping-slow absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                </span>
                Next-Generation Global Logistics
            </div>

            <!-- Headline -->
            <h1 class="text-4xl sm:text-5xl md:text-7xl font-extrabold text-white leading-[1.08] sm:leading-[1.05] mb-4 sm:mb-6 tracking-tight reveal reveal-delay-1">
                Global Logistics,<br>
                <span class="gradient-text">Reimagined.</span>
            </h1>

            <!-- Feature Pills -->
            <div class="flex flex-wrap gap-2 sm:gap-3 mb-6 sm:mb-8 reveal reveal-delay-2">
                <span class="inline-flex items-center gap-1 sm:gap-1.5 px-2.5 sm:px-3 py-1 sm:py-1.5 bg-white/10 border border-white/20 rounded-full text-white/90 text-xs sm:text-sm backdrop-blur-sm">
                    <i data-feather="radio" class="h-3 w-3 sm:h-3.5 sm:w-3.5 text-indigo-400"></i> Real-time Tracking
                </span>
                <span class="inline-flex items-center gap-1 sm:gap-1.5 px-2.5 sm:px-3 py-1 sm:py-1.5 bg-white/10 border border-white/20 rounded-full text-white/90 text-xs sm:text-sm backdrop-blur-sm">
                    <i data-feather="shield" class="h-3 w-3 sm:h-3.5 sm:w-3.5 text-cyan-400"></i> Secure Handling
                </span>
                <span class="inline-flex items-center gap-1 sm:gap-1.5 px-2.5 sm:px-3 py-1 sm:py-1.5 bg-white/10 border border-white/20 rounded-full text-white/90 text-xs sm:text-sm backdrop-blur-sm">
                    <i data-feather="globe" class="h-3 w-3 sm:h-3.5 sm:w-3.5 text-emerald-400"></i> 150+ Countries
                </span>
                <span class="inline-flex items-center gap-1 sm:gap-1.5 px-2.5 sm:px-3 py-1 sm:py-1.5 bg-white/10 border border-white/20 rounded-full text-white/90 text-xs sm:text-sm backdrop-blur-sm">
                    <i data-feather="clock" class="h-3 w-3 sm:h-3.5 sm:w-3.5 text-amber-400"></i> 24/7 Support
                </span>
            </div>

            <p class="text-base sm:text-lg md:text-xl text-slate-300 mb-8 sm:mb-10 max-w-2xl leading-relaxed reveal reveal-delay-2">
                Navigating the complexities of global trade with advanced technology, unparalleled speed, and relentless
                reliability. Your business, delivered seamlessly across every corner of the world.
            </p>

            <!-- Hero Tracking Bar -->
            <div class="reveal reveal-delay-3">
                <div class="flex items-center gap-2 mb-3">
                    <span class="relative flex h-2.5 w-2.5 shrink-0">
                        <span class="ping-slow absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                    </span>
                    <span class="text-white/80 text-xs sm:text-sm font-semibold uppercase tracking-wider">Track Your Shipment Instantly</span>
                </div>
                <form action="{{ route('package') }}" method="POST" class="flex flex-col sm:flex-row gap-2 sm:gap-0 bg-white/10 backdrop-blur-md border border-white/25 rounded-2xl p-2 shadow-[0_8px_40px_rgba(0,0,0,0.3)]">
                    @csrf
                    <div class="relative grow">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i data-feather="search" class="h-5 w-5 text-white/50"></i>
                        </div>
                        <input type="text" name="search"
                            placeholder="Enter tracking number..."
                            class="w-full pl-12 pr-4 py-3.5 bg-transparent text-white placeholder-white/50 focus:outline-none text-sm sm:text-base font-medium"
                            required>
                    </div>
                    <button type="submit"
                        class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-500 text-white px-6 sm:px-8 py-3.5 rounded-xl transition-all duration-300 shadow-lg shadow-indigo-900/50 hover:shadow-indigo-500/50 flex items-center justify-center gap-2 font-bold text-sm sm:text-base shrink-0">
                        <i data-feather="arrow-right" class="h-5 w-5"></i>
                        Track Shipment
                    </button>
                </form>
                <p class="text-white/45 text-xs mt-2.5 pl-1">Real-time location updates · 150+ countries covered</p>
            </div>

            <!-- Secondary CTA -->
            <div class="flex flex-col xs:flex-row sm:flex-row gap-3 sm:gap-4 mt-5 sm:mt-6 reveal reveal-delay-4">
                <a href="{{ route('contact') }}#quote-form"
                    class="bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/30 text-white font-semibold px-6 sm:px-7 py-3 rounded-xl transition-all duration-300 hover:-translate-y-0.5 flex items-center justify-center gap-2 text-sm sm:text-base">
                    <i data-feather="file-text" class="h-4 w-4"></i>
                    Get a Free Quote
                </a>
                <a href="{{ route('services') }}"
                    class="text-white/70 hover:text-white font-semibold px-6 sm:px-7 py-3 rounded-xl transition-all duration-300 flex items-center justify-center gap-2 text-sm sm:text-base border border-white/10 hover:border-white/20">
                    <i data-feather="layers" class="h-4 w-4"></i>
                    Our Services
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-2 text-white/60 animate-bounce">
        <span class="text-xs tracking-widest uppercase font-medium">Scroll</span>
        <i data-feather="chevron-down" class="h-5 w-5"></i>
    </div>
</header>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     TICKER STRIP
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<div class="bg-indigo-600 py-3 overflow-hidden">
    <div class="ticker-track">
        @foreach(['Air Freight', 'Ocean Freight', 'Road Freight', 'Express Delivery', 'Package Tracking', 'Customs Clearance', 'Warehousing', 'Last-Mile Delivery', 'International Shipping', 'Specialized Handling'] as $item)
        <span class="inline-flex items-center gap-3 px-8 text-white text-sm font-semibold whitespace-nowrap">
            <span class="w-1.5 h-1.5 rounded-full bg-white/60 inline-block"></span>
            {{ $item }}
        </span>
        @endforeach
        @foreach(['Air Freight', 'Ocean Freight', 'Road Freight', 'Express Delivery', 'Package Tracking', 'Customs Clearance', 'Warehousing', 'Last-Mile Delivery', 'International Shipping', 'Specialized Handling'] as $item)
        <span class="inline-flex items-center gap-3 px-8 text-white text-sm font-semibold whitespace-nowrap">
            <span class="w-1.5 h-1.5 rounded-full bg-white/60 inline-block"></span>
            {{ $item }}
        </span>
        @endforeach
    </div>
</div>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     TRACKING WIDGET
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section class="relative z-20 py-10 bg-slate-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">
        <div class="bg-white rounded-3xl p-8 sm:p-10 shadow-[0_20px_60px_rgba(0,0,0,0.08)] border border-slate-100 relative overflow-hidden reveal">
            <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-50 rounded-full blur-[80px] -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>

            <div class="flex flex-col md:flex-row items-center gap-8 relative z-10">
                <div class="w-full md:w-1/3">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center">
                            <i data-feather="package" class="h-5 w-5 text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 tracking-tight">Track Package</h3>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed">Enter your tracking ID for live location updates on your shipment.</p>
                </div>

                <div class="w-full md:w-2/3">
                    <form action="{{ route('package') }}" method="POST" class="flex flex-col sm:flex-row gap-3 tracking-form w-full">
                        @csrf
                        <div class="relative grow">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i data-feather="search" class="h-5 w-5 text-slate-400"></i>
                            </div>
                            <input type="text" name="search" placeholder="E.g. PRM-123456789"
                                class="w-full pl-12 pr-4 py-4 bg-slate-50 border border-slate-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-slate-900 placeholder-slate-400 transition-all duration-200 text-base grow"
                                required>
                        </div>
                        <button type="submit"
                            class="bg-indigo-600 text-white px-8 py-4 rounded-2xl hover:bg-indigo-700 transition-all duration-300 shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 hover:-translate-y-0.5 flex items-center justify-center gap-2 font-bold text-base whitespace-nowrap">
                            <i data-feather="arrow-right" class="h-5 w-5"></i>
                            Track Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     STATS SECTION
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section class="py-20 bg-slate-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-10">
            <div class="text-center group reveal reveal-delay-1">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-indigo-600 text-white mb-5 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-indigo-500/30">
                    <i data-feather="box" class="h-7 w-7"></i>
                </div>
                <h3 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-1 tracking-tight counter-number" data-target="1200000" data-suffix="M+">1.2M+</h3>
                <p class="text-slate-500 font-medium uppercase tracking-widest text-xs">Parcels Delivered</p>
            </div>
            <div class="text-center group reveal reveal-delay-2">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-cyan-600 text-white mb-5 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-cyan-500/30">
                    <i data-feather="globe" class="h-7 w-7"></i>
                </div>
                <h3 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-1 tracking-tight counter-number" data-target="150" data-suffix="+">150+</h3>
                <p class="text-slate-500 font-medium uppercase tracking-widest text-xs">Countries Reached</p>
            </div>
            <div class="text-center group reveal reveal-delay-3">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-emerald-600 text-white mb-5 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-emerald-500/30">
                    <i data-feather="clock" class="h-7 w-7"></i>
                </div>
                <h3 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-1 tracking-tight counter-number" data-target="99.7" data-suffix="%" data-decimal>99.7%</h3>
                <p class="text-slate-500 font-medium uppercase tracking-widest text-xs">On-Time Delivery</p>
            </div>
            <div class="text-center group reveal reveal-delay-4">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-purple-600 text-white mb-5 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-purple-500/30">
                    <i data-feather="users" class="h-7 w-7"></i>
                </div>
                <h3 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-1 tracking-tight counter-number" data-target="25000" data-suffix="k+">25k+</h3>
                <p class="text-slate-500 font-medium uppercase tracking-widest text-xs">Satisfied Clients</p>
            </div>
        </div>
    </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     CORE SERVICES (Air / Ocean / Road)
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="text-indigo-600 font-bold tracking-widest uppercase text-xs mb-3 block">Our Fleet</span>
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                Premium Freight <span class="gradient-text">Services</span>
            </h2>
            <p class="mt-5 text-slate-500 text-lg leading-relaxed">From the fastest air routes to cost-effective ocean lanes â€” we have the network to move your cargo anywhere.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Air Freight -->
            <div class="service-card bg-white rounded-3xl overflow-hidden shadow-lg shadow-slate-200/60 hover:shadow-2xl hover:shadow-indigo-500/15 transition-all duration-500 hover:-translate-y-2 border border-slate-100 flex flex-col group reveal reveal-delay-1">
                <div class="h-64 overflow-hidden relative">
                    <img src="{{ asset('images/air.jpg') }}"
                        alt="Air Freight - Fast global air shipping in 1-3 days"
                        class="card-img w-full h-full object-cover">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/80 via-slate-900/20 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-indigo-600 rounded-full text-white text-xs font-bold tracking-wider uppercase">Fastest</span>
                    </div>
                    <div class="absolute bottom-5 left-6 right-6">
                        <h3 class="text-3xl font-extrabold text-white tracking-tight">Air Freight</h3>
                    </div>
                </div>
                <div class="p-7 flex-1 flex flex-col">
                    <p class="text-slate-500 mb-6 leading-relaxed flex-1">When time is critical, our global air network provides unmatched speed, priority boarding, and precise tracking to 150+ destinations.</p>
                    <div class="flex items-center justify-between pt-5 border-t border-slate-100">
                        <div class="flex items-center gap-2 text-sm font-bold text-slate-800">
                            <div class="w-8 h-8 rounded-full bg-indigo-50 flex items-center justify-center text-indigo-600">
                                <i data-feather="clock" class="h-4 w-4"></i>
                            </div>
                            1â€“3 Days
                        </div>
                        <a href="{{ route('services') }}" class="w-10 h-10 rounded-full bg-slate-50 group-hover:bg-indigo-600 flex items-center justify-center text-slate-400 group-hover:text-white transition-colors duration-300">
                            <i data-feather="arrow-right" class="h-5 w-5"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Ocean Freight -->
            <div class="service-card bg-white rounded-3xl overflow-hidden shadow-lg shadow-slate-200/60 hover:shadow-2xl hover:shadow-cyan-500/15 transition-all duration-500 hover:-translate-y-2 border border-slate-100 flex flex-col group md:mt-8 reveal reveal-delay-2">
                <div class="h-64 overflow-hidden relative">
                    <img src="{{ asset('images/ocean.jpg') }}"
                        alt="Ocean Freight - Cost-effective international sea shipping"
                        class="card-img w-full h-full object-cover">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/80 via-slate-900/20 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-cyan-600 rounded-full text-white text-xs font-bold tracking-wider uppercase">Economical</span>
                    </div>
                    <div class="absolute bottom-5 left-6 right-6">
                        <h3 class="text-3xl font-extrabold text-white tracking-tight">Ocean Freight</h3>
                    </div>
                </div>
                <div class="p-7 flex-1 flex flex-col">
                    <p class="text-slate-500 mb-6 leading-relaxed flex-1">Cost-effective FCL and LCL ocean freight solutions tailored for large-volume international supply chains and bulk shipments.</p>
                    <div class="flex items-center justify-between pt-5 border-t border-slate-100">
                        <div class="flex items-center gap-2 text-sm font-bold text-slate-800">
                            <div class="w-8 h-8 rounded-full bg-cyan-50 flex items-center justify-center text-cyan-600">
                                <i data-feather="anchor" class="h-4 w-4"></i>
                            </div>
                            15â€“45 Days
                        </div>
                        <a href="{{ route('services') }}" class="w-10 h-10 rounded-full bg-slate-50 group-hover:bg-cyan-600 flex items-center justify-center text-slate-400 group-hover:text-white transition-colors duration-300">
                            <i data-feather="arrow-right" class="h-5 w-5"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Road Freight -->
            <div class="service-card bg-white rounded-3xl overflow-hidden shadow-lg shadow-slate-200/60 hover:shadow-2xl hover:shadow-emerald-500/15 transition-all duration-500 hover:-translate-y-2 border border-slate-100 flex flex-col group reveal reveal-delay-3">
                <div class="h-64 overflow-hidden relative">
                    <img src="{{ asset('images/road.jpg') }}"
                        alt="Road Freight - Reliable domestic and cross-border transport"
                        class="card-img w-full h-full object-cover">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/80 via-slate-900/20 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-emerald-600 rounded-full text-white text-xs font-bold tracking-wider uppercase">Flexible</span>
                    </div>
                    <div class="absolute bottom-5 left-6 right-6">
                        <h3 class="text-3xl font-extrabold text-white tracking-tight">Road Freight</h3>
                    </div>
                </div>
                <div class="p-7 flex-1 flex flex-col">
                    <p class="text-slate-500 mb-6 leading-relaxed flex-1">Highly reliable and fully tracked domestic and cross-border road transport bridging regional hubs directly to your door.</p>
                    <div class="flex items-center justify-between pt-5 border-t border-slate-100">
                        <div class="flex items-center gap-2 text-sm font-bold text-slate-800">
                            <div class="w-8 h-8 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-600">
                                <i data-feather="truck" class="h-4 w-4"></i>
                            </div>
                            1â€“7 Days
                        </div>
                        <a href="{{ route('services') }}" class="w-10 h-10 rounded-full bg-slate-50 group-hover:bg-emerald-600 flex items-center justify-center text-slate-400 group-hover:text-white transition-colors duration-300">
                            <i data-feather="arrow-right" class="h-5 w-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="{{ route('services') }}" class="inline-flex items-center gap-2 bg-slate-100 hover:bg-indigo-600 hover:text-white text-slate-700 px-8 py-4 rounded-2xl font-bold transition-all duration-300 hover:-translate-y-0.5 shadow-sm hover:shadow-lg hover:shadow-indigo-500/30">
                View All Services
                <i data-feather="arrow-right" class="h-4 w-4"></i>
            </a>
        </div>
    </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     PHOTO GALLERY SECTION  (using all local images)
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section class="py-24 bg-slate-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,rgba(99,102,241,0.15)_0%,transparent_60%)] pointer-events-none"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <div class="flex flex-col md:flex-row justify-between items-end gap-6 reveal">
            <div>
                <span class="text-indigo-400 font-bold tracking-widest uppercase text-xs mb-3 block">Our Operations</span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">
                    See Us In Action
                </h2>
                <p class="mt-4 text-slate-400 text-lg max-w-xl">A glimpse into our global operations, warehouses, fleet, and the team that keeps your cargo moving.</p>
            </div>
            <a href="{{ route('services') }}" class="inline-flex items-center gap-2 border border-white/20 hover:border-indigo-500 text-white/70 hover:text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 whitespace-nowrap">
                All Services <i data-feather="arrow-right" class="h-4 w-4"></i>
            </a>
        </div>
    </div>

    <!-- Gallery Grid -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Row 1: 3 columns -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
            <div class="gallery-item rounded-2xl overflow-hidden aspect-4/3 reveal reveal-delay-1">
                <img src="{{ asset('images/image1.jpg') }}" alt="Logistics operations" class="w-full h-full object-cover">
                <div class="overlay">
                    <span class="text-white font-bold text-sm">Warehouse Operations</span>
                </div>
            </div>
            <div class="gallery-item rounded-2xl overflow-hidden aspect-4/3 reveal reveal-delay-2">
                <img src="{{ asset('images/image2.jpg') }}" alt="Shipping operations" class="w-full h-full object-cover">
                <div class="overlay">
                    <span class="text-white font-bold text-sm">Freight Handling</span>
                </div>
            </div>
            <div class="gallery-item rounded-2xl overflow-hidden aspect-4/3 reveal reveal-delay-3">
                <img src="{{ asset('images/image3.jpg') }}" alt="Delivery operations" class="w-full h-full object-cover">
                <div class="overlay">
                    <span class="text-white font-bold text-sm">Global Delivery Network</span>
                </div>
            </div>
        </div>

        <!-- Row 2: 2 wide + 2 small stacked -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
            <div class="gallery-item rounded-2xl overflow-hidden lg:col-span-2 aspect-16/7 reveal reveal-delay-1">
                <img src="{{ asset('images/image4.jpg') }}" alt="Supply chain" class="w-full h-full object-cover">
                <div class="overlay">
                    <span class="text-white font-bold text-sm">Supply Chain Excellence</span>
                </div>
            </div>
            <div class="gallery-item rounded-2xl overflow-hidden aspect-4/3 reveal reveal-delay-2">
                <img src="{{ asset('images/image6.jpg') }}" alt="Express delivery" class="w-full h-full object-cover">
                <div class="overlay">
                    <span class="text-white font-bold text-sm">Express Delivery</span>
                </div>
            </div>
            <div class="gallery-item rounded-2xl overflow-hidden aspect-4/3 reveal reveal-delay-3">
                <img src="{{ asset('images/pic-1.jpg') }}" alt="Logistics hub" class="w-full h-full object-cover">
                <div class="overlay">
                    <span class="text-white font-bold text-sm">Logistics Hub</span>
                </div>
            </div>
        </div>

        <!-- Row 3: 4 equal columns -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="gallery-item rounded-2xl overflow-hidden aspect-square reveal reveal-delay-1">
                <img src="{{ asset('images/pic-2.jpg') }}" alt="Cargo management" class="w-full h-full object-cover">
                <div class="overlay">
                    <span class="text-white font-bold text-sm">Cargo Management</span>
                </div>
            </div>
            <div class="gallery-item rounded-2xl overflow-hidden aspect-square reveal reveal-delay-2">
                <img src="{{ asset('images/imae6.jpg') }}" alt="International shipping" class="w-full h-full object-cover">
                <div class="overlay">
                    <span class="text-white font-bold text-sm">International Shipping</span>
                </div>
            </div>
            <div class="gallery-item rounded-2xl overflow-hidden aspect-square reveal reveal-delay-3">
                <img src="{{ asset('images/image2.jpeg') }}" alt="Fleet operations" class="w-full h-full object-cover">
                <div class="overlay">
                    <span class="text-white font-bold text-sm">Fleet Operations</span>
                </div>
            </div>
            <div class="gallery-item rounded-2xl overflow-hidden aspect-square reveal reveal-delay-4">
                <img src="{{ asset('images/imae5 (3).jpg') }}" alt="Secure handling" class="w-full h-full object-cover">
                <div class="overlay">
                    <span class="text-white font-bold text-sm">Secure Handling</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     HOW IT WORKS
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-20 reveal">
            <span class="text-indigo-600 font-bold tracking-widest uppercase text-xs mb-3 block">Simple Process</span>
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">How It Works</h2>
            <p class="mt-5 text-slate-500 text-lg leading-relaxed">From first quote to final delivery â€” transparent, efficient, and completely stress-free.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
            <!-- Connecting Line -->
            <div class="hidden md:block absolute top-[52px] left-[12%] right-[12%] h-px bg-linear-to-r from-transparent via-indigo-300 to-transparent z-0"></div>

            @foreach([
                ['icon' => 'edit-3', 'step' => '01', 'title' => 'Request a Quote', 'desc' => 'Provide your cargo details and destination. We calculate the best route and price instantly.', 'color' => 'indigo'],
                ['icon' => 'package', 'step' => '02', 'title' => 'Secure Pickup', 'desc' => 'Our local experts handle packing, pickup, and customs clearance with zero hassle on your end.', 'color' => 'cyan'],
                ['icon' => 'activity', 'step' => '03', 'title' => 'Real-Time Transit', 'desc' => 'Monitor your shipment 24/7 across our global network through your dedicated tracking portal.', 'color' => 'emerald'],
                ['icon' => 'check-circle', 'step' => '04', 'title' => 'Safe Delivery', 'desc' => 'Your cargo arrives exactly when promised, signed and secured at its final destination.', 'color' => 'purple'],
            ] as $index => $step)
            <div class="relative z-10 flex flex-col items-center text-center group reveal reveal-delay-{{ $index + 1 }}">
                <div class="relative mb-6">
                    <div class="w-24 h-24 rounded-full bg-white border-4 border-{{ $step['color'] }}-100 shadow-xl flex items-center justify-center group-hover:border-{{ $step['color'] }}-300 group-hover:shadow-{{ $step['color'] }}-200/50 transition-all duration-300 text-{{ $step['color'] }}-600">
                        <i data-feather="{{ $step['icon'] }}" class="h-9 w-9"></i>
                    </div>
                    <div class="absolute -top-2 -right-2 bg-{{ $step['color'] }}-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-black text-xs border-2 border-white shadow-md">
                        {{ $step['step'] }}
                    </div>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">{{ $step['title'] }}</h4>
                <p class="text-slate-500 text-sm leading-relaxed">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     WHAT WE OFFER (Services Grid)
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section class="py-24 bg-slate-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="text-indigo-600 font-bold tracking-widest uppercase text-xs mb-3 block">What We Offer</span>
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                Shipping Solutions <span class="gradient-text">Built for You</span>
            </h2>
            <p class="mt-5 text-slate-500 text-lg leading-relaxed">From local deliveries to international freight â€” end-to-end logistics tailored to your needs.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            @foreach([
                ['emoji' => 'ðŸšš', 'color' => 'indigo', 'title' => 'Last-Mile Delivery', 'desc' => 'Fast and efficient delivery solutions to get your packages to their final destination on time, every time.'],
                ['emoji' => 'ðŸ“¦', 'color' => 'cyan', 'title' => 'Freight & Bulk Shipping', 'desc' => 'Reliable transportation for large shipments across cities, states, and beyond â€” at competitive rates.'],
                ['emoji' => 'âš¡', 'color' => 'amber', 'title' => 'Express Delivery', 'desc' => 'Time-sensitive deliveries handled with priority speed and precision. No delays, no excuses.'],
                ['emoji' => 'ðŸŒ', 'color' => 'emerald', 'title' => 'International Shipping', 'desc' => 'Seamless global logistics connecting your business to over 150 countries worldwide.'],
            ] as $i => $service)
            <div class="group bg-white rounded-3xl p-8 border border-slate-100 hover:border-{{ $service['color'] }}-200 hover:shadow-2xl hover:shadow-{{ $service['color'] }}-500/10 transition-all duration-500 hover:-translate-y-2 reveal reveal-delay-{{ $i + 1 }}">
                <div class="w-14 h-14 rounded-2xl bg-{{ $service['color'] }}-50 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 text-2xl">
                    {{ $service['emoji'] }}
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $service['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-5">{{ $service['desc'] }}</p>
                <div class="flex items-center gap-2 text-{{ $service['color'] }}-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                    <span>Learn more</span>
                    <i data-feather="arrow-right" class="h-4 w-4"></i>
                </div>
            </div>
            @endforeach
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            @foreach([
                ['emoji' => 'ðŸ­', 'color' => 'purple', 'title' => 'Warehousing & Storage', 'desc' => 'Climate-controlled, secure storage facilities strategically located near major ports and transport hubs.'],
                ['emoji' => 'ðŸ“‹', 'color' => 'rose', 'title' => 'Customs Clearance', 'desc' => 'Expert handling of all customs documentation, duties, and regulatory compliance so you don\'t have to.'],
                ['emoji' => 'ðŸ”’', 'color' => 'teal', 'title' => 'Specialized Handling', 'desc' => 'Fragile, hazardous, or high-value items? Our trained specialists ensure safe transport with full insurance.'],
            ] as $i => $service)
            <div class="group bg-white rounded-3xl p-8 border border-slate-100 hover:border-{{ $service['color'] }}-200 hover:shadow-2xl hover:shadow-{{ $service['color'] }}-500/10 transition-all duration-500 hover:-translate-y-2 reveal reveal-delay-{{ $i + 1 }}">
                <div class="w-14 h-14 rounded-2xl bg-{{ $service['color'] }}-50 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 text-2xl">
                    {{ $service['emoji'] }}
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $service['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-5">{{ $service['desc'] }}</p>
                <div class="flex items-center gap-2 text-{{ $service['color'] }}-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                    <span>Learn more</span>
                    <i data-feather="arrow-right" class="h-4 w-4"></i>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     TRUST GUARANTEE BANNER
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section class="py-14 bg-linear-to-r from-indigo-700 via-indigo-600 to-cyan-600 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4yIj48cGF0aCBkPSJNMzYgMThjMC05Ljk0LTguMDYtMTgtMTgtMThTMCA4LjA2IDAgMThzOC4wNiAxOCAxOCAxOCAxOC04LjA2IDE4LTE4Ii8+PC9nPjwvZz48L3N2Zz4=')]"></div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            @foreach([
                ['icon' => 'shield', 'title' => 'Fully Insured', 'sub' => 'All shipments covered'],
                ['icon' => 'clock', 'title' => '24/7 Support', 'sub' => 'Always here for you'],
                ['icon' => 'refresh-cw', 'title' => 'Money-Back Guarantee', 'sub' => 'If we miss the deadline'],
                ['icon' => 'award', 'title' => 'ISO Certified', 'sub' => 'International standards'],
            ] as $trust)
            <div class="flex flex-col items-center gap-3 reveal">
                <div class="w-14 h-14 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center border border-white/25">
                    <i data-feather="{{ $trust['icon'] }}" class="h-6 w-6 text-white"></i>
                </div>
                <div>
                    <p class="text-white font-bold text-sm">{{ $trust['title'] }}</p>
                    <p class="text-indigo-200 text-xs mt-0.5">{{ $trust['sub'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     WHY CHOOSE US (with local image)
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left: Text -->
            <div class="reveal-left">
                <span class="text-indigo-600 font-bold tracking-widest uppercase text-xs mb-3 block">The Advantage</span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight mb-6">
                    Engineered for absolute <span class="gradient-text">reliability.</span>
                </h2>
                <p class="text-slate-500 text-lg leading-relaxed mb-10">
                    We combine advanced security protocols with AI-driven routing to guarantee your shipments are protected, optimized, and delivered on schedule â€” every single time.
                </p>

                <div class="space-y-7">
                    @foreach([
                        ['icon' => 'cpu', 'color' => 'indigo', 'title' => 'Smart Route Optimization', 'desc' => 'Our algorithms analyze weather, traffic, and customs delays to dynamically reroute cargo for maximum speed and minimum cost.'],
                        ['icon' => 'shield', 'color' => 'emerald', 'title' => 'Impenetrable Security', 'desc' => '24/7 monitoring for high-value goods, GPS-tamper alerts, and comprehensive insurance coverage on every shipment.'],
                        ['icon' => 'headphones', 'color' => 'cyan', 'title' => 'Dedicated Concierge Support', 'desc' => 'You get a dedicated logistics expert assigned to your account, available around the clock â€” no bots, just humans.'],
                    ] as $feature)
                    <div class="flex gap-5">
                        <div class="shrink-0 w-14 h-14 rounded-2xl bg-{{ $feature['color'] }}-50 border border-{{ $feature['color'] }}-100 flex items-center justify-center text-{{ $feature['color'] }}-600 shadow-sm">
                            <i data-feather="{{ $feature['icon'] }}" class="h-6 w-6"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-900 mb-1.5">{{ $feature['title'] }}</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">{{ $feature['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Right: Image collage using local images -->
            <div class="relative reveal-right">
                <div class="grid grid-cols-2 gap-4">
                    <div class="rounded-3xl overflow-hidden aspect-3/4">
                        <img src="{{ asset('images/pic-1.jpg') }}" alt="Our operations" class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col gap-4 mt-8">
                        <div class="rounded-3xl overflow-hidden aspect-square">
                            <img src="{{ asset('images/pic-2.jpg') }}" alt="Logistics team" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-3xl overflow-hidden aspect-square">
                            <img src="{{ asset('images/image6.jpg') }}" alt="Warehouse" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Floating badge -->
                <div class="absolute -bottom-4 -left-4 bg-white rounded-2xl shadow-xl border border-slate-100 p-4 flex items-center gap-3">
                    <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center">
                        <i data-feather="check-circle" class="h-6 w-6 text-emerald-600"></i>
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-sm">Fleet Active</p>
                        <p class="text-emerald-600 font-black text-xl">94%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     TESTIMONIALS
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section class="py-24 bg-slate-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 reveal">
            <span class="text-indigo-600 font-bold tracking-widest uppercase text-xs mb-3 block">Testimonials</span>
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">What Our Clients Say</h2>
            <p class="mt-5 text-slate-500 text-lg leading-relaxed">Don't just take our word for it â€” hear from businesses that rely on us every day.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                ['initials' => 'JT', 'color' => 'indigo', 'name' => 'Jared Thompson', 'role' => 'CEO, TechNova Inc.', 'quote' => 'Our shipments always arrive on time. The real-time tracking gives us total visibility and peace of mind. Best logistics partner we\'ve ever worked with.'],
                ['initials' => 'JH', 'color' => 'emerald', 'name' => 'Jordan Harris', 'role' => 'Operations Director, GreenLeaf Co.', 'quote' => 'We switched from our old provider and immediately saw the difference. Customs clearance was handled seamlessly, and our international orders now arrive 40% faster.'],
                ['initials' => 'HC', 'color' => 'cyan', 'name' => 'Hayden Clark', 'role' => 'Logistics Analyst', 'quote' => 'The express delivery service is unreal. We had an emergency shipment that needed to arrive in 24 hours â€” they made it happen with zero stress on our end.'],
            ] as $i => $t)
            <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col reveal reveal-delay-{{ $i + 1 }}">
                <!-- Stars -->
                <div class="flex gap-1 mb-5">
                    @for($s = 0; $s < 5; $s++)
                    <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                </div>
                <!-- Quote mark -->
                <svg class="w-8 h-8 text-{{ $t['color'] }}-100 mb-4 fill-current" viewBox="0 0 32 32">
                    <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/>
                </svg>
                <p class="text-slate-600 leading-relaxed mb-6 flex-1 italic">"{{ $t['quote'] }}"</p>
                <div class="flex items-center gap-4 pt-5 border-t border-slate-100">
                    <div class="w-12 h-12 rounded-full bg-{{ $t['color'] }}-100 flex items-center justify-center text-{{ $t['color'] }}-700 font-black text-sm">
                        {{ $t['initials'] }}
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-sm">{{ $t['name'] }}</p>
                        <p class="text-slate-500 text-xs">{{ $t['role'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     CTA SECTION
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative bg-linear-to-br from-indigo-600 via-indigo-700 to-slate-900 rounded-[2.5rem] overflow-hidden p-10 md:p-16 text-center isolate reveal">
            <!-- Background image -->
            <div class="absolute inset-0 opacity-10">
                <img src="{{ asset('images/hero-picture.jpg') }}" alt="" class="w-full h-full object-cover">
            </div>
            <!-- Glow orbs -->
            <div class="absolute top-0 right-0 w-80 h-80 bg-indigo-500/40 rounded-full blur-3xl -translate-y-1/3 translate-x-1/3 -z-10"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-cyan-500/30 rounded-full blur-3xl translate-y-1/3 -translate-x-1/3 -z-10"></div>

            <div class="max-w-3xl mx-auto relative z-10">
                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-white/15 text-white font-semibold text-sm mb-6 border border-white/25 backdrop-blur-md">
                    <i data-feather="zap" class="h-4 w-4"></i> Fast Onboarding â€” Get Started Today
                </span>
                <h2 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight">
                    Ready to Ship<br>with Confidence?
                </h2>
                <p class="text-xl text-indigo-200 mb-10 leading-relaxed font-light">
                    Join thousands of modern businesses that trust us for fast, secure, and reliable shipping worldwide. Get an instant quote customized for your cargo.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('contact') }}#quote-form"
                        class="bg-white text-indigo-700 font-bold px-8 py-4 rounded-2xl hover:bg-slate-50 transition-all duration-300 shadow-xl hover:-translate-y-1 text-lg flex items-center justify-center gap-2">
                        <i data-feather="file-text" class="h-5 w-5"></i>
                        Get a Free Quote
                    </a>
                    <a href="{{ route('track') }}"
                        class="bg-white/10 backdrop-blur-md border border-white/25 text-white font-bold px-8 py-4 rounded-2xl hover:bg-white/20 transition-all duration-300 hover:-translate-y-1 text-lg flex items-center justify-center gap-2">
                        <i data-feather="compass" class="h-5 w-5"></i>
                        Track Shipment
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    // â”€â”€ Scroll Reveal â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => {
        revealObserver.observe(el);
    });

    // â”€â”€ Animated Counters â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.dataset.counted) {
                entry.target.dataset.counted = 'true';
                const el = entry.target;
                const target = parseFloat(el.dataset.target);
                const suffix = el.dataset.suffix || '';
                const isDecimal = el.hasAttribute('data-decimal');
                const duration = 1800;
                const start = performance.now();
                const initial = 0;

                function updateCounter(now) {
                    const elapsed = now - start;
                    const progress = Math.min(elapsed / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3);
                    const current = initial + (target - initial) * eased;

                    if (target >= 10000) {
                        el.textContent = (current / 1000).toFixed(1).replace('.0', '') + 'k' + suffix.replace('k+', '+');
                    } else if (isDecimal) {
                        el.textContent = current.toFixed(1) + suffix;
                    } else if (target >= 1000000) {
                        el.textContent = (current / 1000000).toFixed(1) + 'M' + suffix.replace('M+', '+');
                    } else {
                        el.textContent = Math.round(current) + suffix;
                    }

                    if (progress < 1) {
                        requestAnimationFrame(updateCounter);
                    }
                }
                requestAnimationFrame(updateCounter);
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('.counter-number').forEach(el => {
        counterObserver.observe(el);
    });

    // â”€â”€ Tracking Form â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
    const trackingForm = document.querySelector('.tracking-form');
    const trackingInput = trackingForm?.querySelector('input[name="search"]');

    if (trackingForm) {
        trackingForm.addEventListener('submit', function (e) {
            const val = trackingInput?.value.trim();
            if (!val) {
                e.preventDefault();
                showTrackingError('Please enter a tracking code.');
                trackingInput?.focus();
                return;
            }
            const btn = this.querySelector('button[type="submit"]');
            if (btn) {
                btn.disabled = true;
                btn.innerHTML = '<i data-feather="loader" class="h-5 w-5 animate-spin"></i><span>Tracking...</span>';
                if (typeof feather !== 'undefined') feather.replace();
            }
        });
        trackingInput?.addEventListener('input', clearTrackingError);
    }

    function showTrackingError(message) {
        clearTrackingError();
        const div = document.createElement('div');
        div.className = 'mt-3 p-3 bg-red-50 border border-red-200 rounded-xl text-sm text-red-600 font-medium flex items-center gap-2 error-msg';
        div.innerHTML = `<i data-feather="alert-circle" class="h-4 w-4"></i>${message}`;
        trackingForm.parentNode.insertBefore(div, trackingForm.nextSibling);
        if (typeof feather !== 'undefined') feather.replace();
    }

    function clearTrackingError() {
        trackingForm?.parentNode.querySelector('.error-msg')?.remove();
    }

    // Ctrl/Cmd+K â†’ focus tracking
    document.addEventListener('keydown', function (e) {
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault();
            trackingInput?.focus();
        }
    });
});
</script>
@endpush
