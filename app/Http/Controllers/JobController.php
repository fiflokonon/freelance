<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function new_job()
    {
        return view('pages.new_job');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire, y compris les fichiers
        $validatedData = $request->validate([
            'email' => 'required|email',
            'job_title' => 'required|string',
            'location' => 'required|string',
            'job_region' => 'required|string',
            'job_type' => 'required|string',
            'job_description' => 'required|string',
            'company_name' => 'required|string',
            'company_tagline' => 'nullable|string',
            'company_description' => 'nullable|string',
            'company_website' => 'nullable|string',
            'facebook_username' => 'nullable|string',
            'twitter_username' => 'nullable|string',
            'linkedin_username' => 'nullable|string',
            'featured_image' => 'nullable|image|max:2048', // Ajoutez une règle de validation pour l'image
            'logo' => 'nullable|image|max:2048', // Ajoutez une règle de validation pour le logo
        ]);

        // Vérifiez si une image en vedette a été téléchargée
        if ($request->hasFile('featured_image')) {
            // Téléchargez et stockez l'image en vedette
            $validatedData['featured_image'] = $request->file('featured_image')->store('featured_images');
        }

        // Vérifiez si un logo a été téléchargé
        if ($request->hasFile('logo')) {
            // Téléchargez et stockez le logo
            $validatedData['logo'] = $request->file('logo')->store('logos');
        }
        // Créer une nouvelle instance de Job avec les données validées
        $job = Task::create($validatedData);
        // Rediriger vers une page de confirmation ou de succès
        return redirect()->route('confirmation.page'); // Remplacez 'confirmation.page' par le nom de la route de votre choix
    }
}
