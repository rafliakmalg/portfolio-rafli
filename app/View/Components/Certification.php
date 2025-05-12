<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Certification extends Component
{
    public array $certifications;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->certifications = [
            [
                'title' => 'Cybersecurity</br>Specialization',
                'image' => 'google-cybersecurity.png',
                'year' => '2024',
                'issued_by' => 'Google',
            ],
            [
                'title' => 'Cybersecurity</br>Practitioner',
                'image' => 'ibm-cybersecurity.png',
                'year' => '2023',
                'issued_by' => 'IBM',
            ],
            [
                'title' => 'Artificial Intelligence Practitioner',
                'image' => 'ibm-ai.png',
                'year' => '2023',
                'issued_by' => 'IBM',
            ],
            [
                'title' => 'Enterprise Design Thinking Practitioner',
                'image' => 'design-thinking.png',
                'year' => '2023',
                'issued_by' => 'IBM',
            ],
            [
                'title' => 'Red Hat Certified System Administrator',
                'image' => 'rhcsa.png',
                'year' => '2023',
                'issued_by' => 'Red Hat',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.certification', [
            'certifications' => $this->certifications
        ]);
    }
}
