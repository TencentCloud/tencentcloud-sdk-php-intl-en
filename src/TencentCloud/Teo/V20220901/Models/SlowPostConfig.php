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
 * Slow attack defense configuration.
 *
 * @method string getSwitch() Obtain Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method FirstPartConfig getFirstPartConfig() Obtain First packet configuration.
 * @method void setFirstPartConfig(FirstPartConfig $FirstPartConfig) Set First packet configuration.
 * @method SlowRateConfig getSlowRateConfig() Obtain Specifies the basic configuration.
 * @method void setSlowRateConfig(SlowRateConfig $SlowRateConfig) Set Specifies the basic configuration.
 * @method string getAction() Obtain Handling action for slow attack. valid values:.
<li>`monitor`: observe</li>.
<li>`drop`: block the request.</li>.
 * @method void setAction(string $Action) Set Handling action for slow attack. valid values:.
<li>`monitor`: observe</li>.
<li>`drop`: block the request.</li>.
 * @method integer getRuleId() Obtain Specifies the Id of this rule.
 * @method void setRuleId(integer $RuleId) Set Specifies the Id of this rule.
 */
class SlowPostConfig extends AbstractModel
{
    /**
     * @var string Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @var FirstPartConfig First packet configuration.
     */
    public $FirstPartConfig;

    /**
     * @var SlowRateConfig Specifies the basic configuration.
     */
    public $SlowRateConfig;

    /**
     * @var string Handling action for slow attack. valid values:.
<li>`monitor`: observe</li>.
<li>`drop`: block the request.</li>.
     */
    public $Action;

    /**
     * @var integer Specifies the Id of this rule.
     */
    public $RuleId;

    /**
     * @param string $Switch Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param FirstPartConfig $FirstPartConfig First packet configuration.
     * @param SlowRateConfig $SlowRateConfig Specifies the basic configuration.
     * @param string $Action Handling action for slow attack. valid values:.
<li>`monitor`: observe</li>.
<li>`drop`: block the request.</li>.
     * @param integer $RuleId Specifies the Id of this rule.
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

        if (array_key_exists("FirstPartConfig",$param) and $param["FirstPartConfig"] !== null) {
            $this->FirstPartConfig = new FirstPartConfig();
            $this->FirstPartConfig->deserialize($param["FirstPartConfig"]);
        }

        if (array_key_exists("SlowRateConfig",$param) and $param["SlowRateConfig"] !== null) {
            $this->SlowRateConfig = new SlowRateConfig();
            $this->SlowRateConfig->deserialize($param["SlowRateConfig"]);
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
