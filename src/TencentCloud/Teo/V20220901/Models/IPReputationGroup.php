<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP intelligence library (formerly client profile analysis) specific configuration.
 *
 * @method SecurityAction getBaseAction() Obtain Execution action of the IP intelligence library (formerly client profile analysis). SecurityAction Name parameter supports: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Disabled: not enabled, disable specified rule;</li> <li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>.
 * @method void setBaseAction(SecurityAction $BaseAction) Set Execution action of the IP intelligence library (formerly client profile analysis). SecurityAction Name parameter supports: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Disabled: not enabled, disable specified rule;</li> <li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>.
 * @method array getBotManagementActionOverrides() Obtain The specific configuration of the IP intelligence library (originally client profile analysis), used to override the default configuration in BaseAction. among them, the Ids in BotManagementActionOverrides can be filled with: <li>IPREP_WEB_AND_DDOS_ATTACKERS_LOW: network attack - general confidence;</li> <li>IPREP_WEB_AND_DDOS_ATTACKERS_MID: network attack - medium confidence;</li> <li>IPREP_WEB_AND_DDOS_ATTACKERS_HIGH: network attack - HIGH confidence;</li> <li>IPREP_PROXIES_AND_ANONYMIZERS_LOW: network proxy - general confidence;</li> <li>IPREP_PROXIES_AND_ANONYMIZERS_MID: network proxy - medium confidence;</li> <li>IPREP_PROXIES_AND_ANONYMIZERS_HIGH: network proxy - HIGH confidence;</li> <li>IPREP_SCANNING_TOOLS_LOW: scanner - general confidence;</li> <li>IPREP_SCANNING_TOOLS_MID: scanner - medium confidence;</li> <li>IPREP_SCANNING_TOOLS_HIGH: scanner - HIGH confidence;</li> <li>IPREP_ATO_ATTACKERS_LOW: account takeover attack - general confidence;</li> <li>IPREP_ATO_ATTACKERS_MID: account takeover attack - medium confidence;</li> <li>IPREP_ATO_ATTACKERS_HIGH: account takeover attack - HIGH confidence;</li> <li>IPREP_WEB_SCRAPERS_AND_TRAFFIC_BOTS_LOW: malicious BOT - general confidence;</li> <li>IPREP_WEB_SCRAPERS_AND_TRAFFIC_BOTS_MID: malicious BOT - medium confidence;</li> <li>IPREP_WEB_SCRAPERS_AND_TRAFFIC_BOTS_HIGH: malicious BOT - HIGH confidence.</li>.
 * @method void setBotManagementActionOverrides(array $BotManagementActionOverrides) Set The specific configuration of the IP intelligence library (originally client profile analysis), used to override the default configuration in BaseAction. among them, the Ids in BotManagementActionOverrides can be filled with: <li>IPREP_WEB_AND_DDOS_ATTACKERS_LOW: network attack - general confidence;</li> <li>IPREP_WEB_AND_DDOS_ATTACKERS_MID: network attack - medium confidence;</li> <li>IPREP_WEB_AND_DDOS_ATTACKERS_HIGH: network attack - HIGH confidence;</li> <li>IPREP_PROXIES_AND_ANONYMIZERS_LOW: network proxy - general confidence;</li> <li>IPREP_PROXIES_AND_ANONYMIZERS_MID: network proxy - medium confidence;</li> <li>IPREP_PROXIES_AND_ANONYMIZERS_HIGH: network proxy - HIGH confidence;</li> <li>IPREP_SCANNING_TOOLS_LOW: scanner - general confidence;</li> <li>IPREP_SCANNING_TOOLS_MID: scanner - medium confidence;</li> <li>IPREP_SCANNING_TOOLS_HIGH: scanner - HIGH confidence;</li> <li>IPREP_ATO_ATTACKERS_LOW: account takeover attack - general confidence;</li> <li>IPREP_ATO_ATTACKERS_MID: account takeover attack - medium confidence;</li> <li>IPREP_ATO_ATTACKERS_HIGH: account takeover attack - HIGH confidence;</li> <li>IPREP_WEB_SCRAPERS_AND_TRAFFIC_BOTS_LOW: malicious BOT - general confidence;</li> <li>IPREP_WEB_SCRAPERS_AND_TRAFFIC_BOTS_MID: malicious BOT - medium confidence;</li> <li>IPREP_WEB_SCRAPERS_AND_TRAFFIC_BOTS_HIGH: malicious BOT - HIGH confidence.</li>.
 */
class IPReputationGroup extends AbstractModel
{
    /**
     * @var SecurityAction Execution action of the IP intelligence library (formerly client profile analysis). SecurityAction Name parameter supports: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Disabled: not enabled, disable specified rule;</li> <li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>.
     */
    public $BaseAction;

    /**
     * @var array The specific configuration of the IP intelligence library (originally client profile analysis), used to override the default configuration in BaseAction. among them, the Ids in BotManagementActionOverrides can be filled with: <li>IPREP_WEB_AND_DDOS_ATTACKERS_LOW: network attack - general confidence;</li> <li>IPREP_WEB_AND_DDOS_ATTACKERS_MID: network attack - medium confidence;</li> <li>IPREP_WEB_AND_DDOS_ATTACKERS_HIGH: network attack - HIGH confidence;</li> <li>IPREP_PROXIES_AND_ANONYMIZERS_LOW: network proxy - general confidence;</li> <li>IPREP_PROXIES_AND_ANONYMIZERS_MID: network proxy - medium confidence;</li> <li>IPREP_PROXIES_AND_ANONYMIZERS_HIGH: network proxy - HIGH confidence;</li> <li>IPREP_SCANNING_TOOLS_LOW: scanner - general confidence;</li> <li>IPREP_SCANNING_TOOLS_MID: scanner - medium confidence;</li> <li>IPREP_SCANNING_TOOLS_HIGH: scanner - HIGH confidence;</li> <li>IPREP_ATO_ATTACKERS_LOW: account takeover attack - general confidence;</li> <li>IPREP_ATO_ATTACKERS_MID: account takeover attack - medium confidence;</li> <li>IPREP_ATO_ATTACKERS_HIGH: account takeover attack - HIGH confidence;</li> <li>IPREP_WEB_SCRAPERS_AND_TRAFFIC_BOTS_LOW: malicious BOT - general confidence;</li> <li>IPREP_WEB_SCRAPERS_AND_TRAFFIC_BOTS_MID: malicious BOT - medium confidence;</li> <li>IPREP_WEB_SCRAPERS_AND_TRAFFIC_BOTS_HIGH: malicious BOT - HIGH confidence.</li>.
     */
    public $BotManagementActionOverrides;

    /**
     * @param SecurityAction $BaseAction Execution action of the IP intelligence library (formerly client profile analysis). SecurityAction Name parameter supports: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Disabled: not enabled, disable specified rule;</li> <li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>.
     * @param array $BotManagementActionOverrides The specific configuration of the IP intelligence library (originally client profile analysis), used to override the default configuration in BaseAction. among them, the Ids in BotManagementActionOverrides can be filled with: <li>IPREP_WEB_AND_DDOS_ATTACKERS_LOW: network attack - general confidence;</li> <li>IPREP_WEB_AND_DDOS_ATTACKERS_MID: network attack - medium confidence;</li> <li>IPREP_WEB_AND_DDOS_ATTACKERS_HIGH: network attack - HIGH confidence;</li> <li>IPREP_PROXIES_AND_ANONYMIZERS_LOW: network proxy - general confidence;</li> <li>IPREP_PROXIES_AND_ANONYMIZERS_MID: network proxy - medium confidence;</li> <li>IPREP_PROXIES_AND_ANONYMIZERS_HIGH: network proxy - HIGH confidence;</li> <li>IPREP_SCANNING_TOOLS_LOW: scanner - general confidence;</li> <li>IPREP_SCANNING_TOOLS_MID: scanner - medium confidence;</li> <li>IPREP_SCANNING_TOOLS_HIGH: scanner - HIGH confidence;</li> <li>IPREP_ATO_ATTACKERS_LOW: account takeover attack - general confidence;</li> <li>IPREP_ATO_ATTACKERS_MID: account takeover attack - medium confidence;</li> <li>IPREP_ATO_ATTACKERS_HIGH: account takeover attack - HIGH confidence;</li> <li>IPREP_WEB_SCRAPERS_AND_TRAFFIC_BOTS_LOW: malicious BOT - general confidence;</li> <li>IPREP_WEB_SCRAPERS_AND_TRAFFIC_BOTS_MID: malicious BOT - medium confidence;</li> <li>IPREP_WEB_SCRAPERS_AND_TRAFFIC_BOTS_HIGH: malicious BOT - HIGH confidence.</li>.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("BaseAction",$param) and $param["BaseAction"] !== null) {
            $this->BaseAction = new SecurityAction();
            $this->BaseAction->deserialize($param["BaseAction"]);
        }

        if (array_key_exists("BotManagementActionOverrides",$param) and $param["BotManagementActionOverrides"] !== null) {
            $this->BotManagementActionOverrides = [];
            foreach ($param["BotManagementActionOverrides"] as $key => $value){
                $obj = new BotManagementActionOverrides();
                $obj->deserialize($value);
                array_push($this->BotManagementActionOverrides, $obj);
            }
        }
    }
}
