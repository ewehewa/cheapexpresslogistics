@extends('layouts.app')

@section('title', 'Contact Us - Freight Fast Cargo')

@push('styles')
<style>
    .contact-hero {
        position: relative;
        min-height: 50vh;
        display: flex;
        align-items: flex-end;
        padding-bottom: 4rem;
        overflow: hidden;
    }
    .contact-hero img.hero-bg {
        position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; object-position: center;
    }
    .contact-hero .overlay {
        position: absolute; inset: 0;
        background: linear-gradient(135deg, rgba(79,70,229,0.97) 0%, rgba(30,58,95,0.9) 55%, rgba(15,23,42,0.75) 100%);
    }
    .contact-hero .hero-inner { position: relative; z-index: 2; }
    .eyebrow { display: inline-block; font-size: 0.72rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: #a5b4fc; margin-bottom: 0.75rem; }
    .gradient-text { background: linear-gradient(135deg, #a5b4fc, #67e8f9); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .contact-icon { flex-shrink: 0; width: 52px; height: 52px; border-radius: 16px; display: flex; align-items: center; justify-content: center; transition: all 0.3s; }
    .contact-card { display: flex; align-items: flex-start; gap: 1rem; padding: 1.25rem; border-radius: 16px; border: 1px solid #f1f5f9; transition: all 0.3s; background: #fff; }
    .contact-card:hover { border-color: #e0e7ff; box-shadow: 0 8px 24px rgba(79,70,229,0.08); }
    .form-input { width: 100%; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 0.875rem 1rem; color: #0f172a; font-size: 0.925rem; transition: all 0.2s; outline: none; }
    .form-input:focus { border-color: #6366f1; box-shadow: 0 0 0 3px rgba(99,102,241,0.12); background: #fff; }
    .map-section { height: 420px; }
    @media (max-width: 768px) {
        .contact-hero { min-height: 42vh; padding-bottom: 2.5rem; }
        .map-section { height: 280px; }
    }
    @media (max-width: 480px) {
        .map-section { height: 220px; }
    }
</style>
@endpush

@section('content')

{{-- HERO --}}
<section class="contact-hero">
    <img src="{{ asset('images/hero-picture.jpg') }}" alt="Contact Freight Fast Cargo" class="hero-bg">
    <div class="overlay"></div>
    <div class="hero-inner container mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <span class="eyebrow">Get In Touch</span>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white leading-tight tracking-tight mb-4">
            We're Here <span class="gradient-text">For You</span>
        </h1>
        <p class="text-indigo-100 text-base sm:text-lg max-w-xl leading-relaxed">
            Reach out for a personalized quote, shipment support, or any logistics inquiry. Our team responds fast.
        </p>
    </div>
</section>

{{-- CONTACT INFO + FORM --}}
<section class="py-20 md:py-28 bg-slate-50">
    <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-100/40 rounded-full blur-3xl pointer-events-none"></div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20">

            {{-- Left: Contact Info --}}
            <div class="flex flex-col justify-center">
                <span class="inline-flex items-center gap-1.5 bg-indigo-50 text-indigo-600 text-xs font-bold tracking-widest uppercase px-4 py-1.5 rounded-full mb-4 w-fit">
                    <i data-feather="headphones" class="h-3.5 w-3.5"></i> Support
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-4 tracking-tight">
                    Talk to Our Experts
                </h2>
                <p class="text-slate-500 text-base leading-relaxed mb-10">
                    Our logistics specialists are ready to help you find the right shipping solution. Contact us by phone, email, or visit one of our global hubs.
                </p>

                <div class="space-y-4">
                    <div class="contact-card">
                        <div class="contact-icon bg-indigo-50">
                            <i data-feather="map-pin" class="h-5 w-5 text-indigo-600"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-base mb-0.5">Global Headquarters</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">123 Logic Drive, Innovation District<br>City, State 12345</p>
                        </div>
                    </div>
                    <div class="contact-card">
                        <div class="contact-icon bg-emerald-50">
                            <i data-feather="phone" class="h-5 w-5 text-emerald-600"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-base mb-0.5">Direct Phone</h4>
                            <p class="text-slate-500 text-sm">+1 315 489 3120</p>
                        </div>
                    </div>
                    <div class="contact-card">
                        <div class="contact-icon bg-cyan-50">
                            <i data-feather="mail" class="h-5 w-5 text-cyan-600"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-base mb-0.5">Email Support</h4>
                            <p class="text-slate-500 text-sm">info@freightfastcargo.com</p>
                        </div>
                    </div>
                    <div class="contact-card">
                        <div class="contact-icon bg-amber-50">
                            <i data-feather="clock" class="h-5 w-5 text-amber-600"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-base mb-0.5">Operating Hours</h4>
                            <p class="text-slate-500 text-sm">Mon – Fri: 8:00 AM – 8:00 PM EST<br>24/7 Global Tracking Support</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Contact Form --}}
            <div id="quote-form" class="bg-white p-7 sm:p-10 rounded-3xl shadow-lg shadow-slate-200/60 border border-slate-100">
                <h2 class="text-2xl font-extrabold text-slate-900 mb-1 tracking-tight">Request a Quote</h2>
                <p class="text-slate-500 text-sm mb-7">Fill out the form and we'll get back to you within 24 hours.</p>
                <form action="#" method="POST" class="space-y-5">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-slate-700 mb-1.5">Full Name</label>
                            <input type="text" name="name" id="name" required placeholder="John Doe" class="form-input">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-slate-700 mb-1.5">Email Address</label>
                            <input type="email" name="email" id="email" required placeholder="john@company.com" class="form-input">
                        </div>
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-slate-700 mb-1.5">Phone Number <span class="text-slate-400 font-normal">(optional)</span></label>
                        <input type="tel" name="phone" id="phone" placeholder="+1 (555) 000-0000" class="form-input">
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-semibold text-slate-700 mb-1.5">Subject / Inquiry Type</label>
                        <select name="subject" id="subject" class="form-input">
                            <option value="">Select inquiry type…</option>
                            <option>Air Freight Quote</option>
                            <option>Ocean Freight Quote</option>
                            <option>Road Freight Quote</option>
                            <option>Customs Clearance</option>
                            <option>Warehousing</option>
                            <option>Shipment Tracking Help</option>
                            <option>General Inquiry</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-semibold text-slate-700 mb-1.5">Details (Cargo, Weight, Route)</label>
                        <textarea name="message" id="message" rows="4" required
                            placeholder="Describe your shipment, destination, and any special requirements…"
                            class="form-input resize-none"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold px-8 py-4 rounded-xl transition-all duration-300 hover:-translate-y-0.5 shadow-md shadow-indigo-500/25 flex items-center justify-center gap-2 text-base">
                        <i data-feather="send" class="h-4 w-4"></i>
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- MAP --}}
<section class="map-section w-full relative border-t border-slate-100">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198308.2039149488!2d-84.551069811467!3d39.02980630712952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8841b15f91ebc5d9%3A0x6bba46c5553ab4ec!2sCincinnati%2C%20OH%2C%20USA!5e0!3m2!1sen!2sng!4v1709848123456!5m2!1sen!2sng"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        class="opacity-90 hover:opacity-100 transition-opacity duration-700"></iframe>
    <div class="absolute inset-0 bg-indigo-600/5 pointer-events-none mix-blend-multiply"></div>
</section>

@endsection
