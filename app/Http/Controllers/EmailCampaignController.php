<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailCampaignController extends Controller
{
    public function index()
    {
        // Logic to list email campaigns would go here
    }

    public function create()
    {
        return view('email-campaign.create');
    }

    public function store(Request $request)
    {
        $emailCampaignValidated = $request->validate([
            'title' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        return redirect()->route('email-campaign.index')->with('success', 'Campagne email créée avec succès!');
    }
}
