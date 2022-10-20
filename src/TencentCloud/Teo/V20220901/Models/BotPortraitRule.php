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
 * Bot user portrait rules
 *
 * @method string getSwitch() Obtain Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method void setSwitch(string $Switch) Set Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
 * @method integer getRuleID() Obtain The rule ID, which is only used as an output parameter.
 * @method void setRuleID(integer $RuleID) Set The rule ID, which is only used as an output parameter.
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
class BotPortraitRule extends AbstractModel
{
    /**
     * @var string Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     */
    public $Switch;

    /**
     * @var integer The rule ID, which is only used as an output parameter.
     */
    public $RuleID;

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
     * @param string $Switch Switch. Values:
<li>`on`: Enable</li>
<li>`off`: Disable</li>
     * @param integer $RuleID The rule ID, which is only used as an output parameter.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
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
