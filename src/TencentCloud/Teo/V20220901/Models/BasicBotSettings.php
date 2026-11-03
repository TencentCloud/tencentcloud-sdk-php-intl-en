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
 * Basic configuration of Bot management, which takes effect for all domain names associated with the policy. Fine-grained customization can be done through CustomRules.
 *
 * @method SourceIDC getSourceIDC() Obtain Source IDC configuration of the client IP, used for handling access requests from client IPs in IDCs (data centers). This type of source request is not directly accessed from a mobile terminal or browser side.
 * @method void setSourceIDC(SourceIDC $SourceIDC) Set Source IDC configuration of the client IP, used for handling access requests from client IPs in IDCs (data centers). This type of source request is not directly accessed from a mobile terminal or browser side.
 * @method SearchEngineBots getSearchEngineBots() Obtain Search engine crawler configuration, used for handling requests from search engine crawlers. The IP, User-Agent, or rDNS results of such requests match known search engine crawlers.
 * @method void setSearchEngineBots(SearchEngineBots $SearchEngineBots) Set Search engine crawler configuration, used for handling requests from search engine crawlers. The IP, User-Agent, or rDNS results of such requests match known search engine crawlers.
 * @method KnownBotCategories getKnownBotCategories() Obtain UA feature configuration for commercial or open-source tools (formerly UA feature rules), used for handling access requests from known commercial or open-source tools. The User-Agent header of such requests matches the features of known commercial or open-source tools.
 * @method void setKnownBotCategories(KnownBotCategories $KnownBotCategories) Set UA feature configuration for commercial or open-source tools (formerly UA feature rules), used for handling access requests from known commercial or open-source tools. The User-Agent header of such requests matches the features of known commercial or open-source tools.
 * @method IPReputation getIPReputation() Obtain IP threat intelligence database (formerly client profile analysis) configuration, used for handling client IP addresses with specific risk characteristics in recent access behavior.
 * @method void setIPReputation(IPReputation $IPReputation) Set IP threat intelligence database (formerly client profile analysis) configuration, used for handling client IP addresses with specific risk characteristics in recent access behavior.
 * @method BotIntelligence getBotIntelligence() Obtain Specific configuration for Bot intelligent analysis.
 * @method void setBotIntelligence(BotIntelligence $BotIntelligence) Set Specific configuration for Bot intelligent analysis.
 */
class BasicBotSettings extends AbstractModel
{
    /**
     * @var SourceIDC Source IDC configuration of the client IP, used for handling access requests from client IPs in IDCs (data centers). This type of source request is not directly accessed from a mobile terminal or browser side.
     */
    public $SourceIDC;

    /**
     * @var SearchEngineBots Search engine crawler configuration, used for handling requests from search engine crawlers. The IP, User-Agent, or rDNS results of such requests match known search engine crawlers.
     */
    public $SearchEngineBots;

    /**
     * @var KnownBotCategories UA feature configuration for commercial or open-source tools (formerly UA feature rules), used for handling access requests from known commercial or open-source tools. The User-Agent header of such requests matches the features of known commercial or open-source tools.
     */
    public $KnownBotCategories;

    /**
     * @var IPReputation IP threat intelligence database (formerly client profile analysis) configuration, used for handling client IP addresses with specific risk characteristics in recent access behavior.
     */
    public $IPReputation;

    /**
     * @var BotIntelligence Specific configuration for Bot intelligent analysis.
     */
    public $BotIntelligence;

    /**
     * @param SourceIDC $SourceIDC Source IDC configuration of the client IP, used for handling access requests from client IPs in IDCs (data centers). This type of source request is not directly accessed from a mobile terminal or browser side.
     * @param SearchEngineBots $SearchEngineBots Search engine crawler configuration, used for handling requests from search engine crawlers. The IP, User-Agent, or rDNS results of such requests match known search engine crawlers.
     * @param KnownBotCategories $KnownBotCategories UA feature configuration for commercial or open-source tools (formerly UA feature rules), used for handling access requests from known commercial or open-source tools. The User-Agent header of such requests matches the features of known commercial or open-source tools.
     * @param IPReputation $IPReputation IP threat intelligence database (formerly client profile analysis) configuration, used for handling client IP addresses with specific risk characteristics in recent access behavior.
     * @param BotIntelligence $BotIntelligence Specific configuration for Bot intelligent analysis.
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
        if (array_key_exists("SourceIDC",$param) and $param["SourceIDC"] !== null) {
            $this->SourceIDC = new SourceIDC();
            $this->SourceIDC->deserialize($param["SourceIDC"]);
        }

        if (array_key_exists("SearchEngineBots",$param) and $param["SearchEngineBots"] !== null) {
            $this->SearchEngineBots = new SearchEngineBots();
            $this->SearchEngineBots->deserialize($param["SearchEngineBots"]);
        }

        if (array_key_exists("KnownBotCategories",$param) and $param["KnownBotCategories"] !== null) {
            $this->KnownBotCategories = new KnownBotCategories();
            $this->KnownBotCategories->deserialize($param["KnownBotCategories"]);
        }

        if (array_key_exists("IPReputation",$param) and $param["IPReputation"] !== null) {
            $this->IPReputation = new IPReputation();
            $this->IPReputation->deserialize($param["IPReputation"]);
        }

        if (array_key_exists("BotIntelligence",$param) and $param["BotIntelligence"] !== null) {
            $this->BotIntelligence = new BotIntelligence();
            $this->BotIntelligence->deserialize($param["BotIntelligence"]);
        }
    }
}
