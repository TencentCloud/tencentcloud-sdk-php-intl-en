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
 * Security Bot configuration
 *
 * @method string getSwitch() Obtain bot switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set bot switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method BotManagedRule getBotManagedRule() Obtain Common detailed basic rules. If it is null, use the last set configuration by default.
 * @method void setBotManagedRule(BotManagedRule $BotManagedRule) Set Common detailed basic rules. If it is null, use the last set configuration by default.
 * @method BotPortraitRule getBotPortraitRule() Obtain User profiling rule. If it is null, use the last set configuration by default.
 * @method void setBotPortraitRule(BotPortraitRule $BotPortraitRule) Set User profiling rule. If it is null, use the last set configuration by default.
 * @method IntelligenceRule getIntelligenceRule() Obtain Bot intelligent analysis. If it is null, use the last set configuration by default.
 * @method void setIntelligenceRule(IntelligenceRule $IntelligenceRule) Set Bot intelligent analysis. If it is null, use the last set configuration by default.
 * @method array getBotUserRules() Obtain Bot custom rule. If it is null, the last set configuration is used by default.
 * @method void setBotUserRules(array $BotUserRules) Set Bot custom rule. If it is null, the last set configuration is used by default.
 * @method array getAlgDetectRule() Obtain Bot active feature detection rule.
 * @method void setAlgDetectRule(array $AlgDetectRule) Set Bot active feature detection rule.
 * @method array getCustomizes() Obtain Bot managed custom policy. This input parameter is optional and is only used as an output parameter.
 * @method void setCustomizes(array $Customizes) Set Bot managed custom policy. This input parameter is optional and is only used as an output parameter.
 */
class BotConfig extends AbstractModel
{
    /**
     * @var string bot switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var BotManagedRule Common detailed basic rules. If it is null, use the last set configuration by default.
     */
    public $BotManagedRule;

    /**
     * @var BotPortraitRule User profiling rule. If it is null, use the last set configuration by default.
     */
    public $BotPortraitRule;

    /**
     * @var IntelligenceRule Bot intelligent analysis. If it is null, use the last set configuration by default.
     */
    public $IntelligenceRule;

    /**
     * @var array Bot custom rule. If it is null, the last set configuration is used by default.
     */
    public $BotUserRules;

    /**
     * @var array Bot active feature detection rule.
     */
    public $AlgDetectRule;

    /**
     * @var array Bot managed custom policy. This input parameter is optional and is only used as an output parameter.
     */
    public $Customizes;

    /**
     * @param string $Switch bot switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param BotManagedRule $BotManagedRule Common detailed basic rules. If it is null, use the last set configuration by default.
     * @param BotPortraitRule $BotPortraitRule User profiling rule. If it is null, use the last set configuration by default.
     * @param IntelligenceRule $IntelligenceRule Bot intelligent analysis. If it is null, use the last set configuration by default.
     * @param array $BotUserRules Bot custom rule. If it is null, the last set configuration is used by default.
     * @param array $AlgDetectRule Bot active feature detection rule.
     * @param array $Customizes Bot managed custom policy. This input parameter is optional and is only used as an output parameter.
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
