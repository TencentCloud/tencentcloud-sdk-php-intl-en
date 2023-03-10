<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * The hit rule information
 *
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method integer getRuleId() Obtain The rule ID.
 * @method void setRuleId(integer $RuleId) Set The rule ID.
 * @method string getRuleTypeName() Obtain The rule type.
 * @method void setRuleTypeName(string $RuleTypeName) Set The rule type.
 * @method integer getHitTime() Obtain The hit time recorded in seconds using UNIX timestamp.
 * @method void setHitTime(integer $HitTime) Set The hit time recorded in seconds using UNIX timestamp.
 * @method integer getRequestNum() Obtain The number of requests.
 * @method void setRequestNum(integer $RequestNum) Set The number of requests.
 * @method string getDescription() Obtain The rule description.
 * @method void setDescription(string $Description) Set The rule description.
 * @method string getDomain() Obtain The subdomain name.
 * @method void setDomain(string $Domain) Set The subdomain name.
 * @method string getAction() Obtain Action. Values:
<li>`trans`: Allow;</li>
<li>`alg`: Algorithm challenge;</li>
<li>`drop`: Discard;</li>
<li>`ban`: Block the source IP;</li>
<li>`redirect`: Redirect;</li>
<li>`page`: Return to the specified page;</li>
<li>`monitor`: Observe.</li>
 * @method void setAction(string $Action) Set Action. Values:
<li>`trans`: Allow;</li>
<li>`alg`: Algorithm challenge;</li>
<li>`drop`: Discard;</li>
<li>`ban`: Block the source IP;</li>
<li>`redirect`: Redirect;</li>
<li>`page`: Return to the specified page;</li>
<li>`monitor`: Observe.</li>
 * @method string getBotLabel() Obtain The bot tag. Values:
<li>`evil_bot`: Malicious bot</li>
<li>`suspect_bot`: Suspected bot</li>
<li>`good_bot`: Good bot</li>
<li>`normal`: Normal request</li>
<li>`none`: Uncategorized</li>
 * @method void setBotLabel(string $BotLabel) Set The bot tag. Values:
<li>`evil_bot`: Malicious bot</li>
<li>`suspect_bot`: Suspected bot</li>
<li>`good_bot`: Good bot</li>
<li>`normal`: Normal request</li>
<li>`none`: Uncategorized</li>
 * @method boolean getRuleEnabled() Obtain Whether to enable the rule
 * @method void setRuleEnabled(boolean $RuleEnabled) Set Whether to enable the rule
 * @method boolean getAlarmEnabled() Obtain Whether to enable alerting for this rule
 * @method void setAlarmEnabled(boolean $AlarmEnabled) Set Whether to enable alerting for this rule
 * @method boolean getRuleDeleted() Obtain Whether the rule is deleted. Values: 
<li>`true`: The rule has been deleted (does not exist).</li>
<li>`false`: The rule is not deleted (exists).</li>
 * @method void setRuleDeleted(boolean $RuleDeleted) Set Whether the rule is deleted. Values: 
<li>`true`: The rule has been deleted (does not exist).</li>
<li>`false`: The rule is not deleted (exists).</li>
 */
class SecHitRuleInfo extends AbstractModel
{
    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var integer The rule ID.
     */
    public $RuleId;

    /**
     * @var string The rule type.
     */
    public $RuleTypeName;

    /**
     * @var integer The hit time recorded in seconds using UNIX timestamp.
     */
    public $HitTime;

    /**
     * @var integer The number of requests.
     */
    public $RequestNum;

    /**
     * @var string The rule description.
     */
    public $Description;

    /**
     * @var string The subdomain name.
     */
    public $Domain;

    /**
     * @var string Action. Values:
<li>`trans`: Allow;</li>
<li>`alg`: Algorithm challenge;</li>
<li>`drop`: Discard;</li>
<li>`ban`: Block the source IP;</li>
<li>`redirect`: Redirect;</li>
<li>`page`: Return to the specified page;</li>
<li>`monitor`: Observe.</li>
     */
    public $Action;

    /**
     * @var string The bot tag. Values:
<li>`evil_bot`: Malicious bot</li>
<li>`suspect_bot`: Suspected bot</li>
<li>`good_bot`: Good bot</li>
<li>`normal`: Normal request</li>
<li>`none`: Uncategorized</li>
     */
    public $BotLabel;

    /**
     * @var boolean Whether to enable the rule
     */
    public $RuleEnabled;

    /**
     * @var boolean Whether to enable alerting for this rule
     */
    public $AlarmEnabled;

    /**
     * @var boolean Whether the rule is deleted. Values: 
<li>`true`: The rule has been deleted (does not exist).</li>
<li>`false`: The rule is not deleted (exists).</li>
     */
    public $RuleDeleted;

    /**
     * @param string $ZoneId The site ID.
     * @param integer $RuleId The rule ID.
     * @param string $RuleTypeName The rule type.
     * @param integer $HitTime The hit time recorded in seconds using UNIX timestamp.
     * @param integer $RequestNum The number of requests.
     * @param string $Description The rule description.
     * @param string $Domain The subdomain name.
     * @param string $Action Action. Values:
<li>`trans`: Allow;</li>
<li>`alg`: Algorithm challenge;</li>
<li>`drop`: Discard;</li>
<li>`ban`: Block the source IP;</li>
<li>`redirect`: Redirect;</li>
<li>`page`: Return to the specified page;</li>
<li>`monitor`: Observe.</li>
     * @param string $BotLabel The bot tag. Values:
<li>`evil_bot`: Malicious bot</li>
<li>`suspect_bot`: Suspected bot</li>
<li>`good_bot`: Good bot</li>
<li>`normal`: Normal request</li>
<li>`none`: Uncategorized</li>
     * @param boolean $RuleEnabled Whether to enable the rule
     * @param boolean $AlarmEnabled Whether to enable alerting for this rule
     * @param boolean $RuleDeleted Whether the rule is deleted. Values: 
<li>`true`: The rule has been deleted (does not exist).</li>
<li>`false`: The rule is not deleted (exists).</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleTypeName",$param) and $param["RuleTypeName"] !== null) {
            $this->RuleTypeName = $param["RuleTypeName"];
        }

        if (array_key_exists("HitTime",$param) and $param["HitTime"] !== null) {
            $this->HitTime = $param["HitTime"];
        }

        if (array_key_exists("RequestNum",$param) and $param["RequestNum"] !== null) {
            $this->RequestNum = $param["RequestNum"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("BotLabel",$param) and $param["BotLabel"] !== null) {
            $this->BotLabel = $param["BotLabel"];
        }

        if (array_key_exists("RuleEnabled",$param) and $param["RuleEnabled"] !== null) {
            $this->RuleEnabled = $param["RuleEnabled"];
        }

        if (array_key_exists("AlarmEnabled",$param) and $param["AlarmEnabled"] !== null) {
            $this->AlarmEnabled = $param["AlarmEnabled"];
        }

        if (array_key_exists("RuleDeleted",$param) and $param["RuleDeleted"] !== null) {
            $this->RuleDeleted = $param["RuleDeleted"];
        }
    }
}
