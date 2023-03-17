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
 * Slow attack defense configuration.
 *
 * @method string getSwitch() Obtain Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method FirstPartConfig getFirstPartConfig() Obtain Detect slow attacks by the transfer period of the first 8 KB of requests
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setFirstPartConfig(FirstPartConfig $FirstPartConfig) Set Detect slow attacks by the transfer period of the first 8 KB of requests
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method SlowRateConfig getSlowRateConfig() Obtain Detect slow attacks by the data rate of the main body (excluding the first 8 KB) of requests
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSlowRateConfig(SlowRateConfig $SlowRateConfig) Set Detect slow attacks by the data rate of the main body (excluding the first 8 KB) of requests
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getAction() Obtain The action to taken when a slow attack is detected. Values:
<li>`monitor`: Observe</li>
<li>`drop`: Block the request</li>
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAction(string $Action) Set The action to taken when a slow attack is detected. Values:
<li>`monitor`: Observe</li>
<li>`drop`: Block the request</li>
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getRuleId() Obtain ID of the rule
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRuleId(integer $RuleId) Set ID of the rule
Note: This field may return `null`, indicating that no valid value can be obtained.
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
     * @var FirstPartConfig Detect slow attacks by the transfer period of the first 8 KB of requests
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $FirstPartConfig;

    /**
     * @var SlowRateConfig Detect slow attacks by the data rate of the main body (excluding the first 8 KB) of requests
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SlowRateConfig;

    /**
     * @var string The action to taken when a slow attack is detected. Values:
<li>`monitor`: Observe</li>
<li>`drop`: Block the request</li>
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Action;

    /**
     * @var integer ID of the rule
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RuleId;

    /**
     * @param string $Switch Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param FirstPartConfig $FirstPartConfig Detect slow attacks by the transfer period of the first 8 KB of requests
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param SlowRateConfig $SlowRateConfig Detect slow attacks by the data rate of the main body (excluding the first 8 KB) of requests
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Action The action to taken when a slow attack is detected. Values:
<li>`monitor`: Observe</li>
<li>`drop`: Block the request</li>
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $RuleId ID of the rule
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
