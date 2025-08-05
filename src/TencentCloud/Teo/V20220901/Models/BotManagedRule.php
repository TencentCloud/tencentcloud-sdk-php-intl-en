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
 * Bot managed rules. The rule IDs can be obtained from the output of DescribeBotManagedRules.
 *
 * @method string getAction() Obtain The rule action. Values:
<li>`drop`: Block</li>
<li>`trans`: Allow</li>
<li>`alg`: JavaScript challenge</li>
<li>`monitor`: Observe</li>
 * @method void setAction(string $Action) Set The rule action. Values:
<li>`drop`: Block</li>
<li>`trans`: Allow</li>
<li>`alg`: JavaScript challenge</li>
<li>`monitor`: Observe</li>
 * @method integer getRuleID() Obtain The rule ID, which is only used as an output parameter.
 * @method void setRuleID(integer $RuleID) Set The rule ID, which is only used as an output parameter.
 * @method array getTransManagedIds() Obtain Rule ID to allow. defaults to no rules configured for allowance.
 * @method void setTransManagedIds(array $TransManagedIds) Set Rule ID to allow. defaults to no rules configured for allowance.
 * @method array getAlgManagedIds() Obtain Rule ID of the JS challenge. default is all rules without configuring the JS challenge.
 * @method void setAlgManagedIds(array $AlgManagedIds) Set Rule ID of the JS challenge. default is all rules without configuring the JS challenge.
 * @method array getCapManagedIds() Obtain The rule ID for digit verification code. by default, all rules do not configure digit verification code.
 * @method void setCapManagedIds(array $CapManagedIds) Set The rule ID for digit verification code. by default, all rules do not configure digit verification code.
 * @method array getMonManagedIds() Obtain Rule ID for observation. by default, observation is not configured for all rules.
 * @method void setMonManagedIds(array $MonManagedIds) Set Rule ID for observation. by default, observation is not configured for all rules.
 * @method array getDropManagedIds() Obtain Rule ID for interception. by default, all rules have no configuration interception.
 * @method void setDropManagedIds(array $DropManagedIds) Set Rule ID for interception. by default, all rules have no configuration interception.
 */
class BotManagedRule extends AbstractModel
{
    /**
     * @var string The rule action. Values:
<li>`drop`: Block</li>
<li>`trans`: Allow</li>
<li>`alg`: JavaScript challenge</li>
<li>`monitor`: Observe</li>
     */
    public $Action;

    /**
     * @var integer The rule ID, which is only used as an output parameter.
     */
    public $RuleID;

    /**
     * @var array Rule ID to allow. defaults to no rules configured for allowance.
     */
    public $TransManagedIds;

    /**
     * @var array Rule ID of the JS challenge. default is all rules without configuring the JS challenge.
     */
    public $AlgManagedIds;

    /**
     * @var array The rule ID for digit verification code. by default, all rules do not configure digit verification code.
     */
    public $CapManagedIds;

    /**
     * @var array Rule ID for observation. by default, observation is not configured for all rules.
     */
    public $MonManagedIds;

    /**
     * @var array Rule ID for interception. by default, all rules have no configuration interception.
     */
    public $DropManagedIds;

    /**
     * @param string $Action The rule action. Values:
<li>`drop`: Block</li>
<li>`trans`: Allow</li>
<li>`alg`: JavaScript challenge</li>
<li>`monitor`: Observe</li>
     * @param integer $RuleID The rule ID, which is only used as an output parameter.
     * @param array $TransManagedIds Rule ID to allow. defaults to no rules configured for allowance.
     * @param array $AlgManagedIds Rule ID of the JS challenge. default is all rules without configuring the JS challenge.
     * @param array $CapManagedIds The rule ID for digit verification code. by default, all rules do not configure digit verification code.
     * @param array $MonManagedIds Rule ID for observation. by default, observation is not configured for all rules.
     * @param array $DropManagedIds Rule ID for interception. by default, all rules have no configuration interception.
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("TransManagedIds",$param) and $param["TransManagedIds"] !== null) {
            $this->TransManagedIds = $param["TransManagedIds"];
        }

        if (array_key_exists("AlgManagedIds",$param) and $param["AlgManagedIds"] !== null) {
            $this->AlgManagedIds = $param["AlgManagedIds"];
        }

        if (array_key_exists("CapManagedIds",$param) and $param["CapManagedIds"] !== null) {
            $this->CapManagedIds = $param["CapManagedIds"];
        }

        if (array_key_exists("MonManagedIds",$param) and $param["MonManagedIds"] !== null) {
            $this->MonManagedIds = $param["MonManagedIds"];
        }

        if (array_key_exists("DropManagedIds",$param) and $param["DropManagedIds"] !== null) {
            $this->DropManagedIds = $param["DropManagedIds"];
        }
    }
}
