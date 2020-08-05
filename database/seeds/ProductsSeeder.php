<?php

use App\Products;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1=[
            'name'=>'Laravel 7 Learn A to Z | Best PHP Framework',
            'price'=>'1500',
            'image'=>'products/laravel.jpg',
            'discription'=>'You Can Learn Everything About These DetailsThis Book Contents:* PrologueRelease NotesUpgrade GuideContribution Guide* Getting StartedInstallationConfigurationDirectory StructureHomesteadValetDeployment* Architecture ConceptsRequest LifecycleService ContainerService ProvidersFacadesContracts* The BasicsRoutingMiddlewareCSRF ProtectionControllersRequestsResponsesViewsURL GenerationSessionValidationError HandlingLogging* FrontendBlade TemplatesLocalizationFrontend ScaffoldingCompiling AssetsGet Your Copy No'
        ];
        $p2=[
            'name'=>' The Complete Angular Course: Beginner to Advanced',
            'price'=>'1800',
            'image'=>'products/angular.png',
            'discription'=>'A great course by Mosh Hamedani to master Angular and the JavaScript concepts behind it, design custom directives, and build a single page application.
                            \If you are a beginner in both JavaScript and Angular then you can take this course to start your journey in the beautiful world of web development.'
        ];
        $p3=[
            'name'=>'Node.js in action, Second edition',
            'price'=>'2100',
            'discription'=>'The first edition of “Node.js in action” became a bestseller (which is automatically added at no cost when you purchase the second edition). It is based on examples and guides you from setting-up a Node development environment \to building a full-fledged Node application. In the second edition, authors have focused on the non-blocking I/O, state management, and event-driven programming.'
        ];
        $p4=[
            'name'=>'Django Standalone Apps',
            'price'=>'1600',
            'image'=>'products/django.jpg',
            'discription'=>'Develop standalone Django apps to serve as the reusable building blocks for larger Django projects. This book explores best practices for publishing these apps, with special considerations for testing Django apps, and strategies for extracting existing functionality into a separate package. This jumpstart reference is divided into four distinct and sequential sections, all containing short, engaging chapters that can be read in a modular fashion, depending on your level of experience. The first section covers the structure and scope of standalone Django apps.'
        ];

        Products::create($p1);
        Products::create($p2);
        Products::create($p3);
        Products::create($p4);
        
        
    }
}
