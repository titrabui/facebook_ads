<?php
namespace Api;
use FacebookAds\Api;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\AdAccountFields;
use FacebookAds\Object\Campaign;
use FacebookAds\Object\Fields\CampaignFields;

class Controller_Campaigns extends Controller_Base {

	public function before()
	{
		parent::before();
	}

	/**
	 * The campaign creation post.
	 *
	 * @access  public
	 * @return  Http code
	 */
	public function post_create()
	{
		// $account_ids = ['619728524764102', '144135033007233', '102209717222621', '105291676913638', '111306649643951'];
		$account_ids = ['619728524764102'];
		$campaigns = [];

		Api::init(
			\Constants::$facebook_ads_configurations['app_id'],
			\Constants::$facebook_ads_configurations['app_secret'],
			\Constants::$facebook_ads_configurations['access_token']
		);
		try
		{
			foreach ($account_ids as $account_id) {
				$account = (new AdAccount('act_'.$account_id))->read(array(
					AdAccountFields::ID,
					AdAccountFields::NAME,
					AdAccountFields::ACCOUNT_STATUS,
				));

				// Check the account is active
				if($account->{AdAccountFields::ACCOUNT_STATUS} !== 1)
					throw new \Exception('This account is not active');

				$campaign = new Campaign(null, $account->id);
				$campaign->setData(array(
					CampaignFields::NAME => 'KTLV Campaign',
					CampaignFields::OBJECTIVE => 'LINK_CLICKS',
				));

				$campaign->validate()->create(array(
					Campaign::STATUS_PARAM_NAME => Campaign::STATUS_PAUSED,
				));

				array_push($campaigns, $campaign->id);
			}

			return $this->success_response($campaigns);
			// return $this->success_response();
		}
		catch (\Exception $e)
		{
			return $this->error_response($e->getMessage());
		}
	}
}

