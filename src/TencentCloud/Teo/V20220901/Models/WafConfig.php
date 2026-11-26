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
 * Waf configuration.
 *
 * @method string getSwitch() Obtain WafConfig switch. Valid values:
<li>on: Enable;</li>
<li> off: disabled.</li>The switch only affects whether the configuration takes effect. Even if it is off, the configuration content can still be modified normally.
 * @method void setSwitch(string $Switch) Set WafConfig switch. Valid values:
<li>on: Enable;</li>
<li> off: disabled.</li>The switch only affects whether the configuration takes effect. Even if it is off, the configuration content can still be modified normally.
 * @method string getLevel() Obtain Protection level set last time. Valid values:
<li> loose: loose;</li>
<li> normal: Normal;</li>
<li> strict: strict;</li>
<li>stricter: ultra-strict;</li>
<li> custom: Custom.</li>
 * @method void setLevel(string $Level) Set Protection level set last time. Valid values:
<li> loose: loose;</li>
<li> normal: Normal;</li>
<li> strict: strict;</li>
<li>stricter: ultra-strict;</li>
<li> custom: Custom.</li>
 * @method string getMode() Obtain Global WAF mode. Valid values:
<li> block: block (global blocking, but you can configure rules to observe);</li>
<li> observe: observation (regardless of the detailed rule configuration, it is always observation).</li>
 * @method void setMode(string $Mode) Set Global WAF mode. Valid values:
<li> block: block (global blocking, but you can configure rules to observe);</li>
<li> observe: observation (regardless of the detailed rule configuration, it is always observation).</li>
 * @method WafRule getWafRule() Obtain Detailed configuration of the managed rule. If null, use the last set configuration by default.
 * @method void setWafRule(WafRule $WafRule) Set Detailed configuration of the managed rule. If null, use the last set configuration by default.
 * @method AiRule getAiRule() Obtain Protection configuration of the AI rule engine. If it is null, use the last set configuration by default.
 * @method void setAiRule(AiRule $AiRule) Set Protection configuration of the AI rule engine. If it is null, use the last set configuration by default.
 */
class WafConfig extends AbstractModel
{
    /**
     * @var string WafConfig switch. Valid values:
<li>on: Enable;</li>
<li> off: disabled.</li>The switch only affects whether the configuration takes effect. Even if it is off, the configuration content can still be modified normally.
     */
    public $Switch;

    /**
     * @var string Protection level set last time. Valid values:
<li> loose: loose;</li>
<li> normal: Normal;</li>
<li> strict: strict;</li>
<li>stricter: ultra-strict;</li>
<li> custom: Custom.</li>
     */
    public $Level;

    /**
     * @var string Global WAF mode. Valid values:
<li> block: block (global blocking, but you can configure rules to observe);</li>
<li> observe: observation (regardless of the detailed rule configuration, it is always observation).</li>
     */
    public $Mode;

    /**
     * @var WafRule Detailed configuration of the managed rule. If null, use the last set configuration by default.
     */
    public $WafRule;

    /**
     * @var AiRule Protection configuration of the AI rule engine. If it is null, use the last set configuration by default.
     */
    public $AiRule;

    /**
     * @param string $Switch WafConfig switch. Valid values:
<li>on: Enable;</li>
<li> off: disabled.</li>The switch only affects whether the configuration takes effect. Even if it is off, the configuration content can still be modified normally.
     * @param string $Level Protection level set last time. Valid values:
<li> loose: loose;</li>
<li> normal: Normal;</li>
<li> strict: strict;</li>
<li>stricter: ultra-strict;</li>
<li> custom: Custom.</li>
     * @param string $Mode Global WAF mode. Valid values:
<li> block: block (global blocking, but you can configure rules to observe);</li>
<li> observe: observation (regardless of the detailed rule configuration, it is always observation).</li>
     * @param WafRule $WafRule Detailed configuration of the managed rule. If null, use the last set configuration by default.
     * @param AiRule $AiRule Protection configuration of the AI rule engine. If it is null, use the last set configuration by default.
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

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("WafRule",$param) and $param["WafRule"] !== null) {
            $this->WafRule = new WafRule();
            $this->WafRule->deserialize($param["WafRule"]);
        }

        if (array_key_exists("AiRule",$param) and $param["AiRule"] !== null) {
            $this->AiRule = new AiRule();
            $this->AiRule->deserialize($param["AiRule"]);
        }
    }
}
