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
 * @method array getTransManagedIds() Obtain The ID of the rule that applies the "Allow" action.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransManagedIds(array $TransManagedIds) Set The ID of the rule that applies the "Allow" action.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAlgManagedIds() Obtain The ID of the rule that applies the "JavaScript challenge" action.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlgManagedIds(array $AlgManagedIds) Set The ID of the rule that applies the "JavaScript challenge" action.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCapManagedIds() Obtain The ID of the rule that applies the "Managed challenge" action.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCapManagedIds(array $CapManagedIds) Set The ID of the rule that applies the "Managed challenge" action.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getMonManagedIds() Obtain The ID of the rule that applies the "Observe" action.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMonManagedIds(array $MonManagedIds) Set The ID of the rule that applies the "Observe" action.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDropManagedIds() Obtain The ID of the rule that applies the "Block" action.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDropManagedIds(array $DropManagedIds) Set The ID of the rule that applies the "Block" action.
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var array The ID of the rule that applies the "Allow" action.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransManagedIds;

    /**
     * @var array The ID of the rule that applies the "JavaScript challenge" action.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlgManagedIds;

    /**
     * @var array The ID of the rule that applies the "Managed challenge" action.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CapManagedIds;

    /**
     * @var array The ID of the rule that applies the "Observe" action.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MonManagedIds;

    /**
     * @var array The ID of the rule that applies the "Block" action.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DropManagedIds;

    /**
     * @param string $Action The rule action. Values:
<li>`drop`: Block</li>
<li>`trans`: Allow</li>
<li>`alg`: JavaScript challenge</li>
<li>`monitor`: Observe</li>
     * @param integer $RuleID The rule ID, which is only used as an output parameter.
     * @param array $TransManagedIds The ID of the rule that applies the "Allow" action.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AlgManagedIds The ID of the rule that applies the "JavaScript challenge" action.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CapManagedIds The ID of the rule that applies the "Managed challenge" action.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $MonManagedIds The ID of the rule that applies the "Observe" action.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DropManagedIds The ID of the rule that applies the "Block" action.
Note: This field may return null, indicating that no valid values can be obtained.
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
