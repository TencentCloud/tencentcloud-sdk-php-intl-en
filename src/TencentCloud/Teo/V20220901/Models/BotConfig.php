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
 * Bot security configuration
 *
 * @method string getSwitch() Obtain Whether to enable bot security. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Whether to enable bot security. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method BotManagedRule getBotManagedRule() Obtain The settings of the bot managed rule. If it is null, the settings that were last configured will be used.
 * @method void setBotManagedRule(BotManagedRule $BotManagedRule) Set The settings of the bot managed rule. If it is null, the settings that were last configured will be used.
 * @method BotPortraitRule getBotPortraitRule() Obtain The settings of the client reputation rule. If it is null, the settings that were last configured will be used.
 * @method void setBotPortraitRule(BotPortraitRule $BotPortraitRule) Set The settings of the client reputation rule. If it is null, the settings that were last configured will be used.
 * @method IntelligenceRule getIntelligenceRule() Obtain The bot intelligence settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntelligenceRule(IntelligenceRule $IntelligenceRule) Set The bot intelligence settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBotUserRules() Obtain Settings of the custom bot rule. If it is null, the settings that were last configured will be used.
 * @method void setBotUserRules(array $BotUserRules) Set Settings of the custom bot rule. If it is null, the settings that were last configured will be used.
 * @method array getAlgDetectRule() Obtain Active bot detection rule.
 * @method void setAlgDetectRule(array $AlgDetectRule) Set Active bot detection rule.
 * @method array getCustomizes() Obtain Settings of the bot managed rule. It is only used for output.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCustomizes(array $Customizes) Set Settings of the bot managed rule. It is only used for output.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class BotConfig extends AbstractModel
{
    /**
     * @var string Whether to enable bot security. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @var BotManagedRule The settings of the bot managed rule. If it is null, the settings that were last configured will be used.
     */
    public $BotManagedRule;

    /**
     * @var BotPortraitRule The settings of the client reputation rule. If it is null, the settings that were last configured will be used.
     */
    public $BotPortraitRule;

    /**
     * @var IntelligenceRule The bot intelligence settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IntelligenceRule;

    /**
     * @var array Settings of the custom bot rule. If it is null, the settings that were last configured will be used.
     */
    public $BotUserRules;

    /**
     * @var array Active bot detection rule.
     */
    public $AlgDetectRule;

    /**
     * @var array Settings of the bot managed rule. It is only used for output.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Customizes;

    /**
     * @param string $Switch Whether to enable bot security. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param BotManagedRule $BotManagedRule The settings of the bot managed rule. If it is null, the settings that were last configured will be used.
     * @param BotPortraitRule $BotPortraitRule The settings of the client reputation rule. If it is null, the settings that were last configured will be used.
     * @param IntelligenceRule $IntelligenceRule The bot intelligence settings. If it is null, the settings that were last configured will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $BotUserRules Settings of the custom bot rule. If it is null, the settings that were last configured will be used.
     * @param array $AlgDetectRule Active bot detection rule.
     * @param array $Customizes Settings of the bot managed rule. It is only used for output.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("BotManagedRule",$param) and $param["BotManagedRule"] !== null) {
            $this->BotManagedRule = new BotManagedRule();
            $this->BotManagedRule->deserialize($param["BotManagedRule"]);
        }

        if (array_key_exists("BotPortraitRule",$param) and $param["BotPortraitRule"] !== null) {
            $this->BotPortraitRule = new BotPortraitRule();
            $this->BotPortraitRule->deserialize($param["BotPortraitRule"]);
        }

        if (array_key_exists("IntelligenceRule",$param) and $param["IntelligenceRule"] !== null) {
            $this->IntelligenceRule = new IntelligenceRule();
            $this->IntelligenceRule->deserialize($param["IntelligenceRule"]);
        }

        if (array_key_exists("BotUserRules",$param) and $param["BotUserRules"] !== null) {
            $this->BotUserRules = [];
            foreach ($param["BotUserRules"] as $key => $value){
                $obj = new BotUserRule();
                $obj->deserialize($value);
                array_push($this->BotUserRules, $obj);
            }
        }

        if (array_key_exists("AlgDetectRule",$param) and $param["AlgDetectRule"] !== null) {
            $this->AlgDetectRule = [];
            foreach ($param["AlgDetectRule"] as $key => $value){
                $obj = new AlgDetectRule();
                $obj->deserialize($value);
                array_push($this->AlgDetectRule, $obj);
            }
        }

        if (array_key_exists("Customizes",$param) and $param["Customizes"] !== null) {
            $this->Customizes = [];
            foreach ($param["Customizes"] as $key => $value){
                $obj = new BotUserRule();
                $obj->deserialize($value);
                array_push($this->Customizes, $obj);
            }
        }
    }
}
