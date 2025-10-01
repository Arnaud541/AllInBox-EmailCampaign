<?php

namespace App\Services;

use Brevo\Client\Api\EmailCampaignsApi;
use Brevo\Client\Configuration;
use Brevo\Client\Model\CreateEmailCampaign;
use Exception;
use GuzzleHttp\Client;

class BrevoService
{
    private $apiInstance;

    public function __construct()
    {
        // Initialisation du client Brevo avec la clé API
        $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', env('BREVO_API_KEY'));

        $this->apiInstance = new EmailCampaignsApi(new Client(), $config);
    }

    /**
     * Crée une campagne email via l'API Brevo
     * @param array $emailCampaignData
     * @param string $senderEmail
     * @param string $senderName
     * @return mixed|null
     */
    public function createEmailCampaign($emailCampaignData, $senderEmail = "aymane.allinbox+brevo+sde@gmail.com", $senderName = "AllInBox")
    {

        $createCampaign = new CreateEmailCampaign();
        $createCampaign->setSender(['name' => $senderName, 'email' => $senderEmail]);
        $createCampaign->setSubject($emailCampaignData['subject']);
        $createCampaign->setHtmlContent($emailCampaignData['content']);
        $createCampaign->setName($emailCampaignData['title']);

        try {
            $result = $this->apiInstance->createEmailCampaign($createCampaign);
            return $result;
        } catch (Exception $e) {
            throw new Exception('Erreur lors de la création de la campagne email');
        }
    }

    /**
     * Récupère toutes les campagnes email via l'API Brevo
     * @return mixed|null
     */
    public function getEmailCampaigns()
    {
        try {
            $result = $this->apiInstance->getEmailCampaigns();
            return $result;
        } catch (Exception $e) {
            throw new Exception('Erreur lors de la récupération des campagnes email');
        }
    }
}
