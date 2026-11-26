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
 * bot user profiling rules
 *
 * @method string getSwitch() Obtain Feature switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setSwitch(string $Switch) Set Feature switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method integer getRuleID() Obtain Rule ID. Output only.
 * @method void setRuleID(integer $RuleID) Set Rule ID. Output only.
 * @method array getAlgManagedIds() Obtain Rule ID of the JS challenge. All rules have no JS challenge configured by default.
 * @method void setAlgManagedIds(array $AlgManagedIds) Set Rule ID of the JS challenge. All rules have no JS challenge configured by default.
 * @method array getCapManagedIds() Obtain Rule ID of the digit verification code. By default, no digit verification code is configured for all rules.
 * @method void setCapManagedIds(array $CapManagedIds) Set Rule ID of the digit verification code. By default, no digit verification code is configured for all rules.
 * @method array getMonManagedIds() Obtain Rule ID for observation. By default, no rule is configured for observation.
 * @method void setMonManagedIds(array $MonManagedIds) Set Rule ID for observation. By default, no rule is configured for observation.
 * @method array getDropManagedIds() Obtain Rule ID for interception. By default, no interception is configured for all rules.
 * @method void setDropManagedIds(array $DropManagedIds) Set Rule ID for interception. By default, no interception is configured for all rules.
 */
class BotPortraitRule extends AbstractModel
{
    /**
     * @var string Feature switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Switch;

    /**
     * @var integer Rule ID. Output only.
     */
    public $RuleID;

    /**
     * @var array Rule ID of the JS challenge. All rules have no JS challenge configured by default.
     */
    public $AlgManagedIds;

    /**
     * @var array Rule ID of the digit verification code. By default, no digit verification code is configured for all rules.
     */
    public $CapManagedIds;

    /**
     * @var array Rule ID for observation. By default, no rule is configured for observation.
     */
    public $MonManagedIds;

    /**
     * @var array Rule ID for interception. By default, no interception is configured for all rules.
     */
    public $DropManagedIds;

    /**
     * @param string $Switch Feature switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param integer $RuleID Rule ID. Output only.
     * @param array $AlgManagedIds Rule ID of the JS challenge. All rules have no JS challenge configured by default.
     * @param array $CapManagedIds Rule ID of the digit verification code. By default, no digit verification code is configured for all rules.
     * @param array $MonManagedIds Rule ID for observation. By default, no rule is configured for observation.
     * @param array $DropManagedIds Rule ID for interception. By default, no interception is configured for all rules.
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
