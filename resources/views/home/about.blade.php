@extends('layouts.app')

@section('title', 'About Us - Freight Fast Cargo')

@push('styles')
<style>
    .about-hero {
        position: relative;
        min-height: 52vh;
        display: flex;
        align-items: flex-end;
        padding-bottom: 4rem;
        overflow: hidden;
    }
    .about-hero img.hero-bg {
        position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; object-position: center;
    }
    .about-hero .overlay {
        position: absolute; inset: 0;
        background: linear-gradient(135deg, rgba(15,23,42,0.95) 0%, rgba(30,58,95,0.85) 60%, rgba(15,23,42,0.6) 100%);
    }
    .about-hero .hero-inner { position: relative; z-index: 2; }
    .eyebrow { display: inline-block; font-size: 0.72rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: #818cf8; margin-bottom: 0.75rem; }
    .section-tag { display: inline-flex; align-items: center; gap: 6px; background: #eef2ff; color: #4f46e5; font-size: 0.72rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; padding: 5px 14px; border-radius: 50px; margin-bottom: 1rem; }
    .gradient-text { background: linear-gradient(135deg, #6366f1, #06b6d4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .stat-card { text-align: center; padding: 2rem 1.5rem; }
    .stat-card .num { font-size: 2.75rem; font-weight: 800; color: #1e293b; line-height: 1; margin-bottom: 0.25rem; }
    .stat-card .lbl { font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.08em; color: #64748b; font-weight: 600; }
    .value-icon { width: 56px; height: 56px; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.25rem; }
    .team-card { background: #fff; border-radius: 20px; overflow: hidden; border: 1px solid #f1f5f9; transition: all 0.3s ease; }
    .team-card:hover { transform: translateY(-4px); box-shadow: 0 16px 40px rgba(79,70,229,0.12); }
    .team-card img { width: 100%; height: 220px; object-fit: cover; object-position: top; }
    .cta-gradient { background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 50%, #2563eb 100%); position: relative; overflow: hidden; }
    .cta-gradient::before { content: ''; position: absolute; top: -80px; right: -80px; width: 300px; height: 300px; background: rgba(255,255,255,0.07); border-radius: 50%; }
    @media (max-width: 768px) {
        .about-hero { min-height: 44vh; padding-bottom: 2.5rem; }
        .stat-card .num { font-size: 2rem; }
        .team-card img { height: 180px; }
    }
</style>
@endpush

@section('content')

{{-- ── HERO ─────────────────────────────────────── --}}
<section class="about-hero">
    <img src="{{ asset('images/hero-picture.jpg') }}" alt="Freight Fast Cargo" class="hero-bg">
    <div class="overlay"></div>
    <div class="hero-inner container mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <span class="eyebrow">Who We Are</span>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white leading-tight tracking-tight mb-4">
            About <span class="gradient-text">Cheap Express</span><br class="hidden sm:block"> Logistics
        </h1>
        <p class="text-slate-300 text-base sm:text-lg max-w-2xl leading-relaxed">
            Connecting businesses to the world with passion, precision, and partnership since 2010.
        </p>
    </div>
</section>

{{-- ── STATS STRIP ──────────────────────────────── --}}
<section class="bg-white border-b border-slate-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 divide-x divide-y md:divide-y-0 divide-slate-100">
            <div class="stat-card">
                <div class="num">15+</div>
                <div class="lbl">Years of Experience</div>
            </div>
            <div class="stat-card">
                <div class="num">150+</div>
                <div class="lbl">Countries Served</div>
            </div>
            <div class="stat-card">
                <div class="num">1.2M+</div>
                <div class="lbl">Deliveries Completed</div>
            </div>
            <div class="stat-card">
                <div class="num">99.7%</div>
                <div class="lbl">On-Time Rate</div>
            </div>
        </div>
    </div>
</section>

{{-- ── OUR STORY ─────────────────────────────────── --}}
<section class="py-20 md:py-28 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div>
                <div class="section-tag"><i data-feather="book-open" class="h-3.5 w-3.5"></i> Our Story</div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight mb-6">
                    Built on Trust,<br><span class="gradient-text">Driven by Results</span>
                </h2>
                <p class="text-slate-600 text-base sm:text-lg leading-relaxed mb-5">
                    Founded in 2010, Freight Fast Cargo began with a simple mission: to make global logistics
                    accessible and stress-free for businesses of all sizes. From a small team with a single warehouse,
                    we've grown into a trusted international logistics partner, powered by technology and a relentless
                    commitment to our clients.
                </p>
                <p class="text-slate-600 text-base sm:text-lg leading-relaxed mb-8">
                    We believe that in today's interconnected world, a reliable supply chain is the backbone of any
                    successful enterprise. That's why we've invested in a robust global network, a team of seasoned
                    experts, and a culture of continuous innovation.
                </p>
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-7 py-3.5 rounded-xl transition-all duration-300 hover:-translate-y-0.5 shadow-md shadow-indigo-500/25 text-sm sm:text-base">
                    <i data-feather="message-circle" class="h-4 w-4"></i>
                    Partner With Us
                </a>
            </div>
            <div class="relative">
                <div class="rounded-3xl overflow-hidden shadow-2xl shadow-slate-200/80">
                    <img src="{{ asset('images/road.jpg') }}" alt="Logistics operations" class="w-full h-72 sm:h-96 object-cover">
                </div>
                <div class="absolute -bottom-5 -left-5 bg-indigo-600 text-white rounded-2xl p-5 shadow-xl hidden sm:block">
                    <div class="text-2xl font-extrabold">15+</div>
                    <div class="text-xs font-semibold opacity-80 uppercase tracking-wide">Years in Business</div>
                </div>
                <div class="absolute -top-4 -right-4 bg-white border border-slate-100 rounded-2xl p-4 shadow-lg hidden sm:block">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center text-emerald-600">
                            <i data-feather="trending-up" class="h-4 w-4"></i>
                        </div>
                        <div>
                            <div class="text-xs font-bold text-slate-900">On-Time Delivery</div>
                            <div class="text-sm font-extrabold text-emerald-600">99.7%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── MISSION + VISION ─────────────────────────── --}}
<section class="py-20 md:py-28 bg-slate-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <div class="section-tag mx-auto w-fit"><i data-feather="compass" class="h-3.5 w-3.5"></i> What Drives Us</div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Our Mission & Vision</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-3xl p-8 sm:p-10 shadow-sm border border-slate-100 hover:shadow-lg hover:border-indigo-100 transition-all duration-300">
                <div class="w-14 h-14 bg-indigo-100 rounded-2xl flex items-center justify-center mb-6">
                    <i data-feather="crosshair" class="h-7 w-7 text-indigo-600"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-4">Our Mission</h3>
                <p class="text-slate-600 leading-relaxed">
                    To provide seamless, intelligent, and reliable logistics solutions that empower our clients to thrive
                    in the global marketplace — fostering growth and connectivity through exceptional service and
                    innovative technology.
                </p>
            </div>
            <div class="bg-white rounded-3xl p-8 sm:p-10 shadow-sm border border-slate-100 hover:shadow-lg hover:border-indigo-100 transition-all duration-300">
                <div class="w-14 h-14 bg-cyan-100 rounded-2xl flex items-center justify-center mb-6">
                    <i data-feather="eye" class="h-7 w-7 text-cyan-600"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-4">Our Vision</h3>
                <p class="text-slate-600 leading-relaxed">
                    To be the world's most client-centric logistics company, setting new standards for transparency,
                    efficiency, and sustainability in the global supply chain industry.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- ── CORE VALUES ──────────────────────────────── --}}
<section class="py-20 md:py-28 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <div class="section-tag mx-auto w-fit"><i data-feather="star" class="h-3.5 w-3.5"></i> Core Values</div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">What We Stand For</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['icon'=>'shield','color'=>'indigo','bg'=>'bg-indigo-50','text'=>'text-indigo-600','title'=>'Integrity','desc'=>'We operate with complete transparency and honesty in every interaction, building lasting trust with clients and partners.'],
                ['icon'=>'zap','color'=>'amber','bg'=>'bg-amber-50','text'=>'text-amber-600','title'=>'Speed','desc'=>'We move with urgency because we understand that time is a critical asset in global logistics and trade.'],
                ['icon'=>'globe','color'=>'cyan','bg'=>'bg-cyan-50','text'=>'text-cyan-600','title'=>'Global Reach','desc'=>'With operations in 150+ countries, we bring true worldwide connectivity to every client we serve.'],
                ['icon'=>'cpu','color'=>'purple','bg'=>'bg-purple-50','text'=>'text-purple-600','title'=>'Innovation','desc'=>'We continuously invest in technology to give our clients real-time visibility and smarter logistics decisions.'],
                ['icon'=>'users','color'=>'emerald','bg'=>'bg-emerald-50','text'=>'text-emerald-600','title'=>'Client Focus','desc'=>'Every decision we make is guided by one question: what is best for our clients and their businesses?'],
                ['icon'=>'leaf','color'=>'green','bg'=>'bg-green-50','text'=>'text-green-600','title'=>'Sustainability','desc'=>'We are committed to reducing our environmental footprint and building a greener supply chain for the future.'],
            ] as $val)
            <div class="bg-slate-50 hover:bg-white rounded-2xl p-7 border border-slate-100 hover:border-indigo-100 hover:shadow-lg transition-all duration-300 group">
                <div class="value-icon {{ $val['bg'] }}">
                    <i data-feather="{{ $val['icon'] }}" class="h-6 w-6 {{ $val['text'] }}"></i>
                </div>
                <h4 class="text-lg font-bold text-slate-900 mb-2">{{ $val['title'] }}</h4>
                <p class="text-slate-600 text-sm leading-relaxed">{{ $val['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── TEAM ─────────────────────────────────────── --}}
<section class="py-20 md:py-28 bg-slate-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <div class="section-tag mx-auto w-fit"><i data-feather="users" class="h-3.5 w-3.5"></i> Leadership</div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Meet Our Team</h2>
            <p class="mt-4 text-slate-500 text-base sm:text-lg">The driving force behind our success — passionate, experienced professionals dedicated to your growth.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['img'=>'https://images.pexels.com/photos/532220/pexels-photo-532220.jpeg?auto=compress&cs=tinysrgb&w=600','name'=>'Patrick David','role'=>'Founder & CEO','color'=>'bg-indigo-600'],
                ['img'=>'https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=600','name'=>'Jane Smith','role'=>'Chief Operations Officer','color'=>'bg-cyan-600'],
                ['img'=>'https://images.pexels.com/photos/1516680/pexels-photo-1516680.jpeg?auto=compress&cs=tinysrgb&w=600','name'=>'Samuel Chen','role'=>'Chief Financial Officer','color'=>'bg-emerald-600'],
                ['img'=>'https://images.pexels.com/photos/3775164/pexels-photo-3775164.jpeg?auto=compress&cs=tinysrgb&w=600','name'=>'Amina Okoro','role'=>'Chief Technology Officer','color'=>'bg-purple-600'],
            ] as $member)
            <div class="team-card">
                <div class="relative overflow-hidden">
                    <img src="{{ $member['img'] }}" alt="{{ $member['name'] }}">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-900/60 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="p-5">
                    <h4 class="text-base font-bold text-slate-900">{{ $member['name'] }}</h4>
                    <p class="text-sm text-indigo-600 font-semibold mt-0.5">{{ $member['role'] }}</p>
                    <div class="flex gap-2 mt-3">
                        <a href="#" class="w-7 h-7 rounded-lg bg-slate-100 hover:bg-indigo-100 hover:text-indigo-600 flex items-center justify-center text-slate-500 transition-colors duration-200">
                            <i data-feather="linkedin" class="h-3.5 w-3.5"></i>
                        </a>
                        <a href="#" class="w-7 h-7 rounded-lg bg-slate-100 hover:bg-indigo-100 hover:text-indigo-600 flex items-center justify-center text-slate-500 transition-colors duration-200">
                            <i data-feather="mail" class="h-3.5 w-3.5"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── CTA ───────────────────────────────────────── --}}
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="cta-gradient rounded-3xl p-10 sm:p-16 text-center relative">
            <div class="relative z-10">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-4 tracking-tight">Join Our Growing List of Partners</h2>
                <p class="text-indigo-200 max-w-2xl mx-auto mb-8 text-base sm:text-lg leading-relaxed">
                    Experience the Freight Fast Cargo difference. Let's build a more efficient and resilient supply chain for your business.
                </p>
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 bg-white text-indigo-600 font-bold px-8 py-4 rounded-xl hover:bg-indigo-50 transition-all duration-300 hover:-translate-y-0.5 shadow-lg text-sm sm:text-base">
                    <i data-feather="arrow-right" class="h-4 w-4"></i>
                    Become a Partner
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
