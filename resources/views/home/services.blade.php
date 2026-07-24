@extends('layouts.app')

@section('title', 'Our Services - Freight Fast Cargo')

@push('styles')
<style>
    .services-hero {
        position: relative;
        min-height: 52vh;
        display: flex;
        align-items: flex-end;
        padding-bottom: 4rem;
        overflow: hidden;
    }
    .services-hero img.hero-bg {
        position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; object-position: center;
    }
    .services-hero .overlay {
        position: absolute; inset: 0;
        background: linear-gradient(135deg, rgba(15,23,42,0.96) 0%, rgba(30,58,95,0.88) 55%, rgba(15,23,42,0.65) 100%);
    }
    .services-hero .hero-inner { position: relative; z-index: 2; }
    .eyebrow { display: inline-block; font-size: 0.72rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: #818cf8; margin-bottom: 0.75rem; }
    .section-tag { display: inline-flex; align-items: center; gap: 6px; background: #eef2ff; color: #4f46e5; font-size: 0.72rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; padding: 5px 14px; border-radius: 50px; margin-bottom: 1rem; }
    .gradient-text { background: linear-gradient(135deg, #6366f1, #06b6d4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .service-card { background: #fff; border-radius: 24px; border: 1px solid #f1f5f9; overflow: hidden; transition: all 0.35s ease; position: relative; }
    .service-card:hover { transform: translateY(-6px); box-shadow: 0 20px 48px rgba(79,70,229,0.12); border-color: #e0e7ff; }
    .service-card .img-wrap { position: relative; height: 200px; overflow: hidden; }
    .service-card .img-wrap img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
    .service-card:hover .img-wrap img { transform: scale(1.05); }
    .service-card .img-wrap .badge-overlay { position: absolute; top: 12px; left: 12px; }
    .service-card .body { padding: 1.5rem; }
    .service-icon-card { background: #fff; border-radius: 20px; border: 1px solid #f1f5f9; padding: 2rem 1.75rem; transition: all 0.3s ease; }
    .service-icon-card:hover { transform: translateY(-4px); box-shadow: 0 12px 32px rgba(79,70,229,0.1); border-color: #e0e7ff; }
    .service-icon-wrap { width: 56px; height: 56px; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.25rem; }
    .process-step { display: flex; gap: 1.25rem; align-items: flex-start; }
    .process-num { flex-shrink: 0; width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(135deg, #6366f1, #4f46e5); color: white; font-weight: 800; font-size: 0.9rem; display: flex; align-items: center; justify-content: center; }
    .cta-dark { background: linear-gradient(135deg, #0f172a 0%, #1e3a5f 50%, #0f172a 100%); position: relative; overflow: hidden; }
    .cta-dark::before { content: ''; position: absolute; top: -100px; right: -100px; width: 400px; height: 400px; background: rgba(99,102,241,0.1); border-radius: 50%; }
    @media (max-width: 768px) {
        .services-hero { min-height: 44vh; padding-bottom: 2.5rem; }
        .service-card .img-wrap { height: 160px; }
    }
</style>
@endpush

@section('content')

{{-- HERO --}}
<section class="services-hero">
    <img src="{{ asset('images/air.jpg') }}" alt="Freight Fast Cargo Services" class="hero-bg">
    <div class="overlay"></div>
    <div class="hero-inner container mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <span class="eyebrow">What We Offer</span>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white leading-tight tracking-tight mb-4">
            World-Class <span class="gradient-text">Logistics</span><br class="hidden sm:block"> Services
        </h1>
        <p class="text-slate-300 text-base sm:text-lg max-w-2xl leading-relaxed">
            From air freight to customs clearance — comprehensive solutions tailored to your business needs.
        </p>
    </div>
</section>

{{-- PRIMARY SERVICES --}}
<section class="py-20 md:py-28 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <div class="section-tag mx-auto w-fit"><i data-feather="truck" class="h-3.5 w-3.5"></i> Core Services</div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Our Shipping Solutions</h2>
            <p class="mt-4 text-slate-500 text-base sm:text-lg">Industry-leading services built for reliability, speed, and global reach.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7">
            <div class="service-card">
                <div class="img-wrap">
                    <img src="{{ asset('images/road.jpg') }}" alt="Road Freight">
                    <span class="badge-overlay bg-indigo-600 text-white text-xs font-bold px-3 py-1 rounded-full">Road Freight</span>
                </div>
                <div class="body">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-indigo-100 rounded-xl flex items-center justify-center">
                            <i data-feather="truck" class="h-5 w-5 text-indigo-600"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900">Road Freight</h3>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4">Reliable door-to-door trucking solutions across borders. FTL and LTL options for shipments of every size, with real-time tracking.</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 text-indigo-600 font-semibold text-sm hover:gap-2.5 transition-all">Get a quote <i data-feather="arrow-right" class="h-3.5 w-3.5"></i></a>
                </div>
            </div>
            <div class="service-card">
                <div class="img-wrap">
                    <img src="{{ asset('images/ocean.jpg') }}" alt="Ocean Freight">
                    <span class="badge-overlay bg-cyan-600 text-white text-xs font-bold px-3 py-1 rounded-full">Ocean Freight</span>
                </div>
                <div class="body">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-cyan-100 rounded-xl flex items-center justify-center">
                            <i data-feather="anchor" class="h-5 w-5 text-cyan-600"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900">Ocean Freight</h3>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4">Cost-effective FCL and LCL shipping across major global trade lanes. We handle port-to-port and door-to-door ocean cargo.</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 text-cyan-600 font-semibold text-sm hover:gap-2.5 transition-all">Get a quote <i data-feather="arrow-right" class="h-3.5 w-3.5"></i></a>
                </div>
            </div>
            <div class="service-card">
                <div class="img-wrap">
                    <img src="{{ asset('images/air.jpg') }}" alt="Air Freight">
                    <span class="badge-overlay bg-amber-500 text-white text-xs font-bold px-3 py-1 rounded-full">Air Freight</span>
                </div>
                <div class="body">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-amber-100 rounded-xl flex items-center justify-center">
                            <i data-feather="send" class="h-5 w-5 text-amber-600"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900">Air Freight</h3>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4">Fastest transit times for time-sensitive cargo. Direct and consolidated air freight with priority handling at all major airports.</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 text-amber-600 font-semibold text-sm hover:gap-2.5 transition-all">Get a quote <i data-feather="arrow-right" class="h-3.5 w-3.5"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ADDITIONAL SERVICES --}}
<section class="py-20 md:py-24 bg-slate-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <div class="section-tag mx-auto w-fit"><i data-feather="layers" class="h-3.5 w-3.5"></i> More Services</div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">End-to-End Logistics Support</h2>
            <p class="mt-4 text-slate-500 text-base">Complete logistics management beyond just shipping.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
            $extraServices = [
                ['icon'=>'package','bg'=>'bg-purple-50','text'=>'text-purple-600','title'=>'Warehousing & Storage','desc'=>'Secure, temperature-controlled warehouse facilities with flexible short and long-term storage options. Inventory management and distribution services included.'],
                ['icon'=>'file-text','bg'=>'bg-emerald-50','text'=>'text-emerald-600','title'=>'Customs Clearance','desc'=>'Expert customs brokerage ensuring smooth and compliant cross-border shipments. We handle all documentation, tariffs, and regulatory requirements.'],
                ['icon'=>'refresh-cw','bg'=>'bg-rose-50','text'=>'text-rose-600','title'=>'Supply Chain Management','desc'=>'End-to-end supply chain optimization from sourcing to delivery. We analyze, streamline, and manage your entire logistics process.'],
                ['icon'=>'shield','bg'=>'bg-blue-50','text'=>'text-blue-600','title'=>'Cargo Insurance','desc'=>'Comprehensive cargo insurance protecting your shipments against loss, damage, or theft throughout their entire journey worldwide.'],
                ['icon'=>'map-pin','bg'=>'bg-orange-50','text'=>'text-orange-600','title'=>'Live Tracking','desc'=>'Real-time GPS and satellite tracking for all shipments. Get instant updates on cargo location and estimated delivery time.'],
                ['icon'=>'phone','bg'=>'bg-teal-50','text'=>'text-teal-600','title'=>'24/7 Support','desc'=>'Round-the-clock customer support from our logistics experts. Phone, email, and live chat available for every client at any time.'],
            ];
            @endphp
            @foreach($extraServices as $svc)
            <div class="service-icon-card">
                <div class="service-icon-wrap {{ $svc['bg'] }}">
                    <i data-feather="{{ $svc['icon'] }}" class="h-6 w-6 {{ $svc['text'] }}"></i>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">{{ $svc['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed">{{ $svc['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- HOW IT WORKS --}}
<section class="py-20 md:py-28 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div>
                <div class="section-tag"><i data-feather="list" class="h-3.5 w-3.5"></i> Process</div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-3">
                    How We <span class="gradient-text">Work</span>
                </h2>
                <p class="text-slate-500 mb-10 text-base leading-relaxed">Our streamlined process ensures your shipment is handled with care from start to finish.</p>
                <div class="space-y-8">
                    @php
                    $steps = [
                        ['n'=>'01','title'=>'Request a Quote','desc'=>'Fill out our quick quote form or contact our team. We\'ll provide a competitive, transparent rate within hours.'],
                        ['n'=>'02','title'=>'Booking & Documentation','desc'=>'Confirm your booking and we handle all shipping documentation, customs paperwork, and regulatory requirements.'],
                        ['n'=>'03','title'=>'Pickup & Transport','desc'=>'Our team arranges collection from your location and manages the full transit journey with live updates.'],
                        ['n'=>'04','title'=>'Delivery & Confirmation','desc'=>'Your shipment arrives safely with proof of delivery and a complete summary of the logistics process.'],
                    ];
                    @endphp
                    @foreach($steps as $step)
                    <div class="process-step">
                        <div class="process-num">{{ $step['n'] }}</div>
                        <div>
                            <h4 class="font-bold text-slate-900 mb-1">{{ $step['title'] }}</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="rounded-2xl overflow-hidden shadow-md" style="grid-row: span 2;">
                    <img src="{{ asset('images/ocean.jpg') }}" alt="Ocean shipping" class="w-full h-full object-cover" style="min-height: 340px;">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-md">
                    <img src="{{ asset('images/air.jpg') }}" alt="Air freight" class="w-full h-48 object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-md">
                    <img src="{{ asset('images/road.jpg') }}" alt="Road freight" class="w-full h-48 object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="cta-dark rounded-3xl p-10 sm:p-16 text-center relative">
            <div class="relative z-10">
                <div class="section-tag mx-auto w-fit mb-6" style="background: rgba(99,102,241,0.15); color: #a5b4fc;">
                    <i data-feather="zap" class="h-3.5 w-3.5"></i> Ready to Ship?
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-4 tracking-tight">
                    Get Started with Cheap Express Today
                </h2>
                <p class="text-slate-400 max-w-2xl mx-auto mb-8 text-base sm:text-lg leading-relaxed">
                    Whether shipping locally or globally, we have the expertise and network to deliver. Request a free quote now.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center gap-2 bg-indigo-600 hover:bg-indigo-500 text-white font-bold px-8 py-4 rounded-xl transition-all duration-300 hover:-translate-y-0.5 shadow-lg text-sm sm:text-base">
                        <i data-feather="mail" class="h-4 w-4"></i>
                        Request a Quote
                    </a>
                    <a href="{{ route('track') }}"
                        class="inline-flex items-center justify-center gap-2 border border-slate-600 hover:border-slate-400 text-slate-300 hover:text-white font-semibold px-8 py-4 rounded-xl transition-all duration-300 text-sm sm:text-base">
                        <i data-feather="search" class="h-4 w-4"></i>
                        Track a Shipment
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
