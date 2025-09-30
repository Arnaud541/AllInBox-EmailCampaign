<?php

namespace App\Http\Controllers;

use App\Services\BrevoService;
use Exception;
use Illuminate\Http\Request;

class EmailCampaignController extends Controller
{
    private $brevoService;

    public function __construct(BrevoService $brevoService)
    {
        $this->brevoService = $brevoService;
    }

    /**
     * Afficher la liste des campagnes email
     * @return \Illuminate\View\View
     */
    public function index()
    {
        try {
            $result = $this->brevoService->getEmailCampaigns();
            $emailsCampaigns = $result ? $result->getCampaigns() : [];
            return view('email-campaign.index', compact('emailsCampaigns'));
        } catch (Exception $e) {
            return back()->with('error', 'Erreur lors de la récupération des campagnes email');
        }
    }

    /**
     * Afficher le formulaire de création d'une campagne email
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('email-campaign.create');
    }

    /**
     * Stocker une nouvelle campagne email
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validation des données
        $emailCampaignValidated = $request->validate([
            'title' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'content' => 'required|string|min:10',
        ]);

        try {
            // Création de la campagne email via le service Brevo
            $this->brevoService->createEmailCampaign($emailCampaignValidated);

            // Redirection avec un message de succès
            return redirect()->route('email-campaign.index')->with('success', 'Campagne email créée avec succès!');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Erreur lors de la création de la campagne email');
        }
    }
}
