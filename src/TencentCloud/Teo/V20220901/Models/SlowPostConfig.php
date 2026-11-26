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
 * Slow attack configuration.
 *
 * @method string getSwitch() Obtain Switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method FirstPartConfig getFirstPartConfig() Obtain First packet configuration.
 * @method void setFirstPartConfig(FirstPartConfig $FirstPartConfig) Set First packet configuration.
 * @method SlowRateConfig getSlowRateConfig() Obtain Basic configuration.
 * @method void setSlowRateConfig(SlowRateConfig $SlowRateConfig) Set Basic configuration.
 * @method string getAction() Obtain Handling action for slow attacks. Valid values:
<li>monitor: observation;</li>
<li>drop: block.</li>
 * @method void setAction(string $Action) Set Handling action for slow attacks. Valid values:
<li>monitor: observation;</li>
<li>drop: block.</li>
 * @method integer getRuleId() Obtain Rule Id.
 * @method void setRuleId(integer $RuleId) Set Rule Id.
 */
class SlowPostConfig extends AbstractModel
{
    /**
     * @var string Switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var FirstPartConfig First packet configuration.
     */
    public $FirstPartConfig;

    /**
     * @var SlowRateConfig Basic configuration.
     */
    public $SlowRateConfig;

    /**
     * @var string Handling action for slow attacks. Valid values:
<li>monitor: observation;</li>
<li>drop: block.</li>
     */
    public $Action;

    /**
     * @var integer Rule Id.
     */
    public $RuleId;

    /**
     * @param string $Switch Switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param FirstPartConfig $FirstPartConfig First packet configuration.
     * @param SlowRateConfig $SlowRateConfig Basic configuration.
     * @param string $Action Handling action for slow attacks. Valid values:
<li>monitor: observation;</li>
<li>drop: block.</li>
     * @param integer $RuleId Rule Id.
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
