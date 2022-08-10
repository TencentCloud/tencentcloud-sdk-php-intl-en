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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * WAF configuration
 *
 * @method string getSwitch() Obtain Switch
 * @method void setSwitch(string $Switch) Set Switch
 * @method string getLevel() Obtain Protection level: `loose`, `normal`, `strict`, `stricter`, `custom`
 * @method void setLevel(string $Level) Set Protection level: `loose`, `normal`, `strict`, `stricter`, `custom`
 * @method string getMode() Obtain Mode: `block`, `observe`, `close`
 * @method void setMode(string $Mode) Set Mode: `block`, `observe`, `close`
 * @method WafRule getWafRules() Obtain WAF rule allowlist/blocklist
 * @method void setWafRules(WafRule $WafRules) Set WAF rule allowlist/blocklist
 * @method AiRule getAiRule() Obtain AI rule engine
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAiRule(AiRule $AiRule) Set AI rule engine
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class WafConfig extends AbstractModel
{
    /**
     * @var string Switch
     */
    public $Switch;

    /**
     * @var string Protection level: `loose`, `normal`, `strict`, `stricter`, `custom`
     */
    public $Level;

    /**
     * @var string Mode: `block`, `observe`, `close`
     */
    public $Mode;

    /**
     * @var WafRule WAF rule allowlist/blocklist
     */
    public $WafRules;

    /**
     * @var AiRule AI rule engine
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AiRule;

    /**
     * @param string $Switch Switch
     * @param string $Level Protection level: `loose`, `normal`, `strict`, `stricter`, `custom`
     * @param string $Mode Mode: `block`, `observe`, `close`
     * @param WafRule $WafRules WAF rule allowlist/blocklist
     * @param AiRule $AiRule AI rule engine
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("WafRules",$param) and $param["WafRules"] !== null) {
            $this->WafRules = new WafRule();
            $this->WafRules->deserialize($param["WafRules"]);
        }

        if (array_key_exists("AiRule",$param) and $param["AiRule"] !== null) {
            $this->AiRule = new AiRule();
            $this->AiRule->deserialize($param["AiRule"]);
        }
    }
}
