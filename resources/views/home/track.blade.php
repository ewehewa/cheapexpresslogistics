@extends('layouts.app')

@section('title', 'Track Shipment - Freight Fast Cargo')

@push('styles')
<style>
    .track-hero {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        overflow: hidden;
    }
    .track-hero img.hero-bg {
        position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; object-position: center;
    }
    .track-hero .overlay {
        position: absolute; inset: 0;
        background: linear-gradient(160deg, rgba(15,23,42,0.97) 0%, rgba(30,58,95,0.92) 55%, rgba(79,70,229,0.6) 100%);
    }
    .track-hero .hero-inner { position: relative; z-index: 2; }
    .eyebrow { display: inline-block; font-size: 0.72rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: #818cf8; margin-bottom: 0.75rem; }
    .gradient-text { background: linear-gradient(135deg, #6366f1, #06b6d4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .track-form-wrap { background: rgba(255,255,255,0.06); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.1); border-radius: 24px; padding: 2rem; max-width: 600px; }
    .track-input { width: 100%; background: rgba(255,255,255,0.09); border: 1.5px solid rgba(255,255,255,0.15); border-radius: 12px; padding: 1rem 1.25rem; color: #fff; font-size: 1.1rem; letter-spacing: 0.08em; text-align: center; outline: none; transition: all 0.25s; }
    .track-input::placeholder { color: rgba(255,255,255,0.35); font-size: 0.95rem; letter-spacing: 0.03em; }
    .track-input:focus { border-color: #6366f1; background: rgba(99,102,241,0.12); box-shadow: 0 0 0 3px rgba(99,102,241,0.2); }
    .faq-item { background: #fff; border: 1px solid #f1f5f9; border-radius: 16px; overflow: hidden; transition: all 0.3s; }
    .faq-item:hover { border-color: #e0e7ff; box-shadow: 0 4px 16px rgba(79,70,229,0.08); }
    .faq-btn { width: 100%; display: flex; align-items: center; justify-content: space-between; padding: 1.25rem 1.5rem; background: none; border: none; cursor: pointer; text-align: left; }
    .faq-answer { padding: 0 1.5rem 1.25rem; }
    .result-status-badge { display: inline-flex; align-items: center; gap: 8px; padding: 6px 16px; border-radius: 50px; font-size: 0.82rem; font-weight: 700; }
    @media (max-width: 768px) {
        .track-hero { min-height: 85vh; }
        .track-form-wrap { padding: 1.5rem; }
    }
</style>
@endpush

@section('content')

{{-- HERO WITH TRACKING FORM --}}
<section class="track-hero">
    <img src="{{ asset('images/hero-picture.jpg') }}" alt="Track Your Shipment" class="hero-bg">
    <div class="overlay"></div>
    <div class="hero-inner container mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="max-w-2xl">
            <span class="eyebrow">Shipment Tracking</span>
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white leading-tight tracking-tight mb-4">
                Track Your <span class="gradient-text">Package</span>
            </h1>
            <p class="text-slate-300 text-base sm:text-lg mb-10 leading-relaxed">
                Enter your tracking number to get real-time updates on your shipment's location and delivery status.
            </p>
            <div class="track-form-wrap">
                <form action="{{ route('package') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="search" class="block text-xs font-bold uppercase tracking-widest text-slate-400 mb-2.5">
                            Tracking Number
                        </label>
                        <input type="text" name="search" id="search" value="{{ old('search') }}"
                            placeholder="e.g., CEL-123456789"
                            required autofocus
                            class="track-input @error('search') border-red-400 @enderror">
                        @error('search')
                        <p class="text-red-300 text-xs mt-1.5 text-center">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-bold px-8 py-3.5 rounded-xl transition-all duration-300 hover:-translate-y-0.5 shadow-lg shadow-indigo-900/40 flex items-center justify-center gap-2 text-base">
                        <i data-feather="search" class="h-5 w-5"></i>
                        Track Shipment
                    </button>
                </form>
                <div class="mt-5 flex items-start gap-3 bg-white/5 rounded-xl p-3.5">
                    <i data-feather="info" class="h-4 w-4 text-indigo-400 shrink-0 mt-0.5"></i>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Your tracking code is in your confirmation email and on your shipping receipt. Format: <span class="text-indigo-300 font-mono">CEL-XXXXXXXXX</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- TRACKING RESULT (when package found) --}}
@if(isset($package) && $package)
<section class="py-16 bg-slate-50" id="tracking-result">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">

            {{-- Header Card --}}
            <div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden mb-5">
                <div class="bg-linear-to-r from-slate-900 to-indigo-900 px-7 py-6">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div>
                            <div class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-1">Tracking Number</div>
                            <div class="font-mono text-xl sm:text-2xl font-extrabold text-white tracking-wider">{{ $package->tracking_number }}</div>
                        </div>
                        @php
                            $statusMap = [
                                'delivered'  => ['bg'=>'bg-emerald-500/20','text'=>'text-emerald-300','icon'=>'check-circle'],
                                'in_transit' => ['bg'=>'bg-blue-500/20','text'=>'text-blue-300','icon'=>'truck'],
                                'pending'    => ['bg'=>'bg-amber-500/20','text'=>'text-amber-300','icon'=>'clock'],
                            ];
                            $st = $statusMap[$package->status ?? ''] ?? ['bg'=>'bg-indigo-500/20','text'=>'text-indigo-300','icon'=>'package'];
                        @endphp
                        <div class="result-status-badge {{ $st['bg'] }} {{ $st['text'] }}">
                            <i data-feather="{{ $st['icon'] }}" class="h-4 w-4"></i>
                            {{ ucfirst(str_replace('_', ' ', $package->status ?? 'In Transit')) }}
                        </div>
                    </div>
                    @if($package->estimated_delivery)
                    <div class="mt-3 text-sm text-slate-400">
                        Estimated Delivery:
                        <span class="text-white font-semibold">{{ \Carbon\Carbon::parse($package->estimated_delivery)->format('M d, Y') }}</span>
                    </div>
                    @endif
                </div>

                {{-- Sender / Receiver --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 divide-y sm:divide-y-0 sm:divide-x divide-slate-100">
                    <div class="px-7 py-5">
                        <div class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">From</div>
                        <div class="font-semibold text-slate-900 text-sm">{{ $package->sender_name ?? 'N/A' }}</div>
                        <div class="text-slate-500 text-xs mt-0.5">{{ $package->sender_address ?? '' }}</div>
                    </div>
                    <div class="px-7 py-5">
                        <div class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">To</div>
                        <div class="font-semibold text-slate-900 text-sm">{{ $package->receiver_name ?? 'N/A' }}</div>
                        <div class="text-slate-500 text-xs mt-0.5">{{ $package->receiver_address ?? '' }}</div>
                    </div>
                </div>
            </div>

            {{-- Tracking Timeline --}}
            <div class="bg-white rounded-3xl shadow-sm border border-slate-100 px-7 py-7">
                <h3 class="text-lg font-bold text-slate-900 mb-6 flex items-center gap-2">
                    <i data-feather="map-pin" class="h-5 w-5 text-indigo-600"></i>
                    Tracking History
                </h3>
                @if($package->trackingLocations && $package->trackingLocations->count() > 0)
                <div class="relative pl-6">
                    <div class="absolute left-2 top-2 bottom-2 w-0.5 bg-slate-100 rounded-full"></div>
                    <div class="space-y-8">
                        @foreach($package->trackingLocations as $index => $location)
                        <div class="relative flex items-start gap-4">
                            <div class="absolute -left-6 top-1 flex items-center justify-center">
                                @if($location->is_current)
                                <div class="w-4 h-4 rounded-full bg-emerald-500 ring-4 ring-emerald-100 flex items-center justify-center">
                                    <div class="w-1.5 h-1.5 rounded-full bg-white animate-ping"></div>
                                </div>
                                @else
                                <div class="w-3 h-3 rounded-full {{ $index === 0 ? 'bg-slate-400' : 'bg-indigo-500' }}"></div>
                                @endif
                            </div>
                            <div>
                                <div class="font-semibold text-slate-900 text-sm">{{ $location->location_name }}</div>
                                <div class="text-slate-500 text-xs mt-0.5">{{ $location->description ?? 'Package processed' }}</div>
                                <div class="text-slate-400 text-xs mt-1">
                                    {{ \Carbon\Carbon::parse($location->arrival_time)->format('M d, Y · h:i A') }}
                                </div>
                                @if($location->is_current)
                                <span class="inline-block mt-1.5 px-2.5 py-0.5 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded-full border border-emerald-100">
                                    Current Location
                                </span>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @else
                <div class="text-center py-10">
                    <div class="w-12 h-12 bg-slate-100 rounded-2xl flex items-center justify-center mx-auto mb-3">
                        <i data-feather="map-pin" class="h-6 w-6 text-slate-400"></i>
                    </div>
                    <p class="text-slate-500 text-sm">No tracking history available yet.</p>
                </div>
                @endif
            </div>

            <div class="mt-5 text-center">
                <a href="{{ route('package.view', $package->tracking_number) }}"
                    class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white font-bold px-7 py-3 rounded-xl transition-all duration-300 text-sm shadow-md shadow-indigo-500/25">
                    <i data-feather="external-link" class="h-4 w-4"></i>
                    View Full Tracking Page
                </a>
            </div>
        </div>
    </div>
</section>
@endif

{{-- FAQ SECTION --}}
<section class="py-20 md:py-28 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-1.5 bg-indigo-50 text-indigo-600 text-xs font-bold tracking-widest uppercase px-4 py-1.5 rounded-full mb-4">
                    <i data-feather="help-circle" class="h-3.5 w-3.5"></i> FAQ
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Tracking FAQs</h2>
                <p class="mt-3 text-slate-500 text-base">Answers to common shipment tracking questions.</p>
            </div>
            <div class="space-y-3" id="faq-list">
                @php
                $faqs = [
                    ['q'=>'Where can I find my tracking code?','a'=>'Your tracking code is provided in your booking confirmation email and on the shipping receipt issued when you booked the shipment. It follows the format CEL-XXXXXXXXX.'],
                    ['q'=>'How often is tracking information updated?','a'=>'Tracking information is updated in real-time as your shipment moves through our network. Major status changes — pickups, arrivals, customs clearance — are updated immediately.'],
                    ['q'=>'My tracking hasn\'t updated in a while — what should I do?','a'=>'If tracking hasn\'t updated for more than 48 hours, please contact our customer service team via phone or the contact form. We\'ll investigate and provide a status update within hours.'],
                    ['q'=>'Can I track multiple shipments at once?','a'=>'Currently each tracking lookup is done individually. For bulk tracking or API access, please contact our enterprise team through the Contact page.'],
                    ['q'=>'What does each status mean?','a'=>'"Pending" means your shipment has been booked. "In Transit" means it\'s moving through our network. "Delivered" means it has reached the destination and been signed for.'],
                ];
                @endphp
                @foreach($faqs as $i => $faq)
                <div class="faq-item">
                    <button class="faq-btn" onclick="toggleFaq({{ $i }})">
                        <span class="font-semibold text-slate-900 text-sm pr-4">{{ $faq['q'] }}</span>
                        <span id="faq-icon-{{ $i }}" class="shrink-0 w-7 h-7 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 transition-all">
                            <i data-feather="chevron-down" class="h-4 w-4"></i>
                        </span>
                    </button>
                    <div class="faq-answer hidden" id="faq-answer-{{ $i }}">
                        <p class="text-slate-500 text-sm leading-relaxed">{{ $faq['a'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mt-10 text-center text-slate-500 text-sm">
                Still have questions?
                <a href="{{ route('contact') }}" class="text-indigo-600 font-semibold hover:underline">Contact our support team →</a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    function toggleFaq(i) {
        const answer = document.getElementById('faq-answer-' + i);
        const icon = document.getElementById('faq-icon-' + i);
        const isOpen = !answer.classList.contains('hidden');
        answer.classList.toggle('hidden', isOpen);
        icon.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';
        icon.style.background = isOpen ? '' : '#eef2ff';
        icon.style.color = isOpen ? '' : '#4f46e5';
    }

    @if(isset($package) && $package)
    document.addEventListener('DOMContentLoaded', function () {
        const result = document.getElementById('tracking-result');
        if (result) setTimeout(() => result.scrollIntoView({ behavior: 'smooth', block: 'start' }), 400);
    });
    @endif
</script>
@endpush
