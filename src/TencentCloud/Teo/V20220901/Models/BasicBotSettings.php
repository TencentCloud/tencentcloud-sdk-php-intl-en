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
 * Bot management basic configuration takes effect for all domains with policy association. CustomRules can be used to customize.
 *
 * @method SourceIDC getSourceIDC() Obtain Client IP source IDC configuration, used for handling access requests from client ips in idcs (data centers). such source requests are not directly accessed by mobile terminals or browser-side.
 * @method void setSourceIDC(SourceIDC $SourceIDC) Set Client IP source IDC configuration, used for handling access requests from client ips in idcs (data centers). such source requests are not directly accessed by mobile terminals or browser-side.
 * @method SearchEngineBots getSearchEngineBots() Obtain Search engine crawler configuration, used to handle requests from search engine crawlers. the IP, User-Agent, or rDNS results of such requests match known search engine crawlers.
 * @method void setSearchEngineBots(SearchEngineBots $SearchEngineBots) Set Search engine crawler configuration, used to handle requests from search engine crawlers. the IP, User-Agent, or rDNS results of such requests match known search engine crawlers.
 * @method KnownBotCategories getKnownBotCategories() Obtain Commercial or open-source tool UA feature configuration (original UA feature rule), used to handle access requests from known commercial or open-source tools. the User-Agent header of such requests complies with known commercial or open-source tool features.
 * @method void setKnownBotCategories(KnownBotCategories $KnownBotCategories) Set Commercial or open-source tool UA feature configuration (original UA feature rule), used to handle access requests from known commercial or open-source tools. the User-Agent header of such requests complies with known commercial or open-source tool features.
 * @method IPReputation getIPReputation() Obtain Threat intelligence database (originally client profile analysis) configuration, used for handling client ips with specific risk characteristics in recent access behavior.
 * @method void setIPReputation(IPReputation $IPReputation) Set Threat intelligence database (originally client profile analysis) configuration, used for handling client ips with specific risk characteristics in recent access behavior.
 * @method BotIntelligence getBotIntelligence() Obtain Specifies the configuration for Bot intelligent analysis.
 * @method void setBotIntelligence(BotIntelligence $BotIntelligence) Set Specifies the configuration for Bot intelligent analysis.
 */
class BasicBotSettings extends AbstractModel
{
    /**
     * @var SourceIDC Client IP source IDC configuration, used for handling access requests from client ips in idcs (data centers). such source requests are not directly accessed by mobile terminals or browser-side.
     */
    public $SourceIDC;

    /**
     * @var SearchEngineBots Search engine crawler configuration, used to handle requests from search engine crawlers. the IP, User-Agent, or rDNS results of such requests match known search engine crawlers.
     */
    public $SearchEngineBots;

    /**
     * @var KnownBotCategories Commercial or open-source tool UA feature configuration (original UA feature rule), used to handle access requests from known commercial or open-source tools. the User-Agent header of such requests complies with known commercial or open-source tool features.
     */
    public $KnownBotCategories;

    /**
     * @var IPReputation Threat intelligence database (originally client profile analysis) configuration, used for handling client ips with specific risk characteristics in recent access behavior.
     */
    public $IPReputation;

    /**
     * @var BotIntelligence Specifies the configuration for Bot intelligent analysis.
     */
    public $BotIntelligence;

    /**
     * @param SourceIDC $SourceIDC Client IP source IDC configuration, used for handling access requests from client ips in idcs (data centers). such source requests are not directly accessed by mobile terminals or browser-side.
     * @param SearchEngineBots $SearchEngineBots Search engine crawler configuration, used to handle requests from search engine crawlers. the IP, User-Agent, or rDNS results of such requests match known search engine crawlers.
     * @param KnownBotCategories $KnownBotCategories Commercial or open-source tool UA feature configuration (original UA feature rule), used to handle access requests from known commercial or open-source tools. the User-Agent header of such requests complies with known commercial or open-source tool features.
     * @param IPReputation $IPReputation Threat intelligence database (originally client profile analysis) configuration, used for handling client ips with specific risk characteristics in recent access behavior.
     * @param BotIntelligence $BotIntelligence Specifies the configuration for Bot intelligent analysis.
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
