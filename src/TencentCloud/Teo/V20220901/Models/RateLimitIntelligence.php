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
 * Intelligent client filtering
 *
 * @method string getSwitch() Obtain Function switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Function switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method string getAction() Obtain Execution action. Valid values:
<li>monitor: observation;</li>
<li>alg: Challenge.</li>
 * @method void setAction(string $Action) Set Execution action. Valid values:
<li>monitor: observation;</li>
<li>alg: Challenge.</li>
 * @method integer getRuleId() Obtain Rule id, output only.
 * @method void setRuleId(integer $RuleId) Set Rule id, output only.
 */
class RateLimitIntelligence extends AbstractModel
{
    /**
     * @var string Function switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var string Execution action. Valid values:
<li>monitor: observation;</li>
<li>alg: Challenge.</li>
     */
    public $Action;

    /**
     * @var integer Rule id, output only.
     */
    public $RuleId;

    /**
     * @param string $Switch Function switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param string $Action Execution action. Valid values:
<li>monitor: observation;</li>
<li>alg: Challenge.</li>
     * @param integer $RuleId Rule id, output only.
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
