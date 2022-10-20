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
 * WAF configuration.
 *
 * @method string getSwitch() Obtain Whether to enable WAF configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>The configuration can be modified even when it is disabled.
 * @method void setSwitch(string $Switch) Set Whether to enable WAF configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>The configuration can be modified even when it is disabled.
 * @method string getLevel() Obtain The protection level. Values:
<li>`loose`: Loose</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`stricter`: Super strict</li>
<li>`custom`: Custom</li>
 * @method void setLevel(string $Level) Set The protection level. Values:
<li>`loose`: Loose</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`stricter`: Super strict</li>
<li>`custom`: Custom</li>
 * @method string getMode() Obtain The WAF global mode. Values:
<li>`block`: Block globally</li>
<li>`observe`: Observe globally</li>
 * @method void setMode(string $Mode) Set The WAF global mode. Values:
<li>`block`: Block globally</li>
<li>`observe`: Observe globally</li>
 * @method WafRule getWafRule() Obtain The settings of the managed rule. If it is null, the settings that were last configured will be used.
 * @method void setWafRule(WafRule $WafRule) Set The settings of the managed rule. If it is null, the settings that were last configured will be used.
 * @method AiRule getAiRule() Obtain The setting of the AI rule engine. If it is null, the setting that was last configured will be used.
 * @method void setAiRule(AiRule $AiRule) Set The setting of the AI rule engine. If it is null, the setting that was last configured will be used.
 */
class WafConfig extends AbstractModel
{
    /**
     * @var string Whether to enable WAF configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>The configuration can be modified even when it is disabled.
     */
    public $Switch;

    /**
     * @var string The protection level. Values:
<li>`loose`: Loose</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`stricter`: Super strict</li>
<li>`custom`: Custom</li>
     */
    public $Level;

    /**
     * @var string The WAF global mode. Values:
<li>`block`: Block globally</li>
<li>`observe`: Observe globally</li>
     */
    public $Mode;

    /**
     * @var WafRule The settings of the managed rule. If it is null, the settings that were last configured will be used.
     */
    public $WafRule;

    /**
     * @var AiRule The setting of the AI rule engine. If it is null, the setting that was last configured will be used.
     */
    public $AiRule;

    /**
     * @param string $Switch Whether to enable WAF configuration. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>The configuration can be modified even when it is disabled.
     * @param string $Level The protection level. Values:
<li>`loose`: Loose</li>
<li>`normal`: Moderate</li>
<li>`strict`: Strict</li>
<li>`stricter`: Super strict</li>
<li>`custom`: Custom</li>
     * @param string $Mode The WAF global mode. Values:
<li>`block`: Block globally</li>
<li>`observe`: Observe globally</li>
     * @param WafRule $WafRule The settings of the managed rule. If it is null, the settings that were last configured will be used.
     * @param AiRule $AiRule The setting of the AI rule engine. If it is null, the setting that was last configured will be used.
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
