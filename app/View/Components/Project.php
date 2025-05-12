<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Project extends Component
{
    public array $projects;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->projects = $projects = [
            [
                "category" => "Profile Website",
                "title" => "Santorini Beach Resort",
                "description" => "A comprehensive profile website for Santorini Beach Resort, built with Filament Laravel CMS to provide an easily manageable and informative online presence",
                "image" => "img/projects/santorini.png",
                "tags" => ["Laravel", "MySQL", "Tailwind", "CMS"],
                "link" => "https://santorinibeachresort.com/"
            ],
            [
                "category" => "Profile Website",
                "title" => "Cosphar Pacific Manufactur",
                "description" => "A professional profile website for Cosphar Pacific Manufactur, developed using Filament Laravel CMS to showcase the company's capabilities and online brand presence",
                "image" => "img/projects/cosphar.png",
                "tags" => ["Laravel", "MySQL", "Tailwind", "CMS"],
                "link" => ""
            ],
            [
                "category" => "Profile Website",
                "title" => "AKKMI",
                "description" => "An official website for the Indonesian Cosmetic Manufacturing Contract Association, designed to facilitate member registration and provide a comprehensive online profile for the organization",
                "image" => "img/projects/akkmi.png",
                "tags" => ["Laravel", "MySQL", "Tailwind", "CMS"],
                "link" => ""
            ],
            [
                "category" => "ERP",
                "title" => "Admin Nose",
                "description" => "A comprehensive ERP solution featuring modules for recruitment requests and meeting management, aimed at improving operational efficiency and enhancing data accuracy",
                "image" => "img/projects/admin-nose.png",
                "tags" => ["Laravel", "MySQL", "Bootstrap"],
                "link" => ""
            ],
            [
                "category" => "ERP",
                "title" => "Assets Booking System",
                "description" => "A streamlined digital platform for managing and booking organizational assets, designed to optimize resource allocation and tracking",
                "image" => "img/projects/booking-system.png",
                "tags" => ["Laravel", "MySQL", "Tailwind"],
                "link" => ""
            ],
            [
                "category" => "ERP",
                "title" => "Business Travel Management System",
                "description" => "A comprehensive system for managing and tracking business travel logistics, designed to streamline travel planning, expense tracking, and approval processes",
                "image" => "img/projects/perjadin.png",
                "tags" => ["Laravel", "MySQL", "Tailwind"],
                "link" => ""
            ],
            [
                "category" => "REST API",
                "title" => "Multibank UNJ API",
                "description" => "A versatile API solution for Universitas Negeri Jakarta that facilitates seamless integration with multiple banking institutions, optimizing financial operations and data management",
                "image" => "img/projects/multibank-unj.png",
                "tags" => ["Laravel", "MySQL", "JWT"],
                "link" => ""
            ],
            [
                "category" => "REST API",
                "title" => "LSPP1-UNJ API",
                "description" => "A powerful API that enables LSP UNJ to integrate with external systems, streamlining certification processes and administrative workflows with enhanced efficiency",
                "image" => "img/projects/lspp1-unj.png",
                "tags" => ["Laravel", "MySQL", "JWT"],
                "link" => ""
            ],
            [
                "category" => "REST API",
                "title" => "New Siakad UNJ API",
                "description" => "An advanced academic administration API for Universitas Negeri Jakarta, designed to improve student data management and enhance the overall academic experience",
                "image" => "img/projects/siakad-unj.png",
                "tags" => ["NodeJs", "MySQL", "JWT"],
                "link" => ""
            ],
        ];        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.project', [
            'projects' => $this->projects
        ]);
    }
}
