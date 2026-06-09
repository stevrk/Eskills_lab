@extends('layouts.app')

@section('title', 'Clinical Guidelines')

@section('content')
<div class="fade-in">
    <div class="mb-6">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Clinical Guidelines</h1>
        <p class="text-gray-600">Evidence-based guidelines for clinical practice</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @php
            $guidelines = [
                ['title' => 'Infection Prevention Guidelines', 'summary' => 'Standard precautions, hand hygiene, PPE usage, and environmental controls for preventing healthcare-associated infections.', 'icon' => '🧼', 'color' => 'blue'],
                ['title' => 'Patient Safety Guidelines', 'summary' => 'Protocols for patient identification, medication safety, fall prevention, and communication standards.', 'icon' => '🛡️', 'color' => 'green'],
                ['title' => 'Maternal Health Protocols', 'summary' => 'Guidelines for antenatal care, labor management, postpartum care, and emergency obstetric interventions.', 'icon' => '🤱', 'color' => 'purple'],
                ['title' => 'Emergency Care Guidelines', 'summary' => 'Triage protocols, emergency response procedures, and critical care standards for various emergencies.', 'icon' => '🚨', 'color' => 'red'],
                ['title' => 'Wound Care Standards', 'summary' => 'Evidence-based practices for wound assessment, cleaning, dressing, and monitoring for complications.', 'icon' => '🩹', 'color' => 'orange'],
                ['title' => 'Medication Administration', 'summary' => 'Safe medication practices, dosage calculations, administration routes, and error prevention strategies.', 'icon' => '💊', 'color' => 'indigo'],
            ];
        @endphp
        
        @foreach($guidelines as $guideline)
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden card-hover">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-5xl">{{ $guideline['icon'] }}</div>
                    <button class="text-red-600 hover:text-red-700 font-medium text-sm">View Guideline →</button>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $guideline['title'] }}</h3>
                <p class="text-gray-600 text-sm leading-relaxed">{{ $guideline['summary'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection