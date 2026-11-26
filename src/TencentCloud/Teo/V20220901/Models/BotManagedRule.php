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
 * Bot Rules. The following rule IDs can be found in the ID information returned by the DescribeBotManagedRules API.
 *
 * @method string getAction() Obtain Handling method after the trigger rule is triggered. Valid values:
<li>drop: block;</li>
<li>trans: pass;</li>
<li>alg: Javascript challenge;</li>
<li>monitor: observation.</li>
 * @method void setAction(string $Action) Set Handling method after the trigger rule is triggered. Valid values:
<li>drop: block;</li>
<li>trans: pass;</li>
<li>alg: Javascript challenge;</li>
<li>monitor: observation.</li>
 * @method integer getRuleID() Obtain Rule ID. Output only.
 * @method void setRuleID(integer $RuleID) Set Rule ID. Output only.
 * @method array getTransManagedIds() Obtain Rule ID to allow. By default, no rule is allowed.
 * @method void setTransManagedIds(array $TransManagedIds) Set Rule ID to allow. By default, no rule is allowed.
 * @method array getAlgManagedIds() Obtain Rule ID of the JS challenge. By default, no JS challenge is configured for all rules.
 * @method void setAlgManagedIds(array $AlgManagedIds) Set Rule ID of the JS challenge. By default, no JS challenge is configured for all rules.
 * @method array getCapManagedIds() Obtain Rule ID of the digit verification code. By default, no digit verification code is configured for all rules.
 * @method void setCapManagedIds(array $CapManagedIds) Set Rule ID of the digit verification code. By default, no digit verification code is configured for all rules.
 * @method array getMonManagedIds() Obtain Rule ID to observe. By default, no rule is configured for observation.
 * @method void setMonManagedIds(array $MonManagedIds) Set Rule ID to observe. By default, no rule is configured for observation.
 * @method array getDropManagedIds() Obtain Rule ID to intercept. By default, no rule is intercepted.
 * @method void setDropManagedIds(array $DropManagedIds) Set Rule ID to intercept. By default, no rule is intercepted.
 */
class BotManagedRule extends AbstractModel
{
    /**
     * @var string Handling method after the trigger rule is triggered. Valid values:
<li>drop: block;</li>
<li>trans: pass;</li>
<li>alg: Javascript challenge;</li>
<li>monitor: observation.</li>
     */
    public $Action;

    /**
     * @var integer Rule ID. Output only.
     */
    public $RuleID;

    /**
     * @var array Rule ID to allow. By default, no rule is allowed.
     */
    public $TransManagedIds;

    /**
     * @var array Rule ID of the JS challenge. By default, no JS challenge is configured for all rules.
     */
    public $AlgManagedIds;

    /**
     * @var array Rule ID of the digit verification code. By default, no digit verification code is configured for all rules.
     */
    public $CapManagedIds;

    /**
     * @var array Rule ID to observe. By default, no rule is configured for observation.
     */
    public $MonManagedIds;

    /**
     * @var array Rule ID to intercept. By default, no rule is intercepted.
     */
    public $DropManagedIds;

    /**
     * @param string $Action Handling method after the trigger rule is triggered. Valid values:
<li>drop: block;</li>
<li>trans: pass;</li>
<li>alg: Javascript challenge;</li>
<li>monitor: observation.</li>
     * @param integer $RuleID Rule ID. Output only.
     * @param array $TransManagedIds Rule ID to allow. By default, no rule is allowed.
     * @param array $AlgManagedIds Rule ID of the JS challenge. By default, no JS challenge is configured for all rules.
     * @param array $CapManagedIds Rule ID of the digit verification code. By default, no digit verification code is configured for all rules.
     * @param array $MonManagedIds Rule ID to observe. By default, no rule is configured for observation.
     * @param array $DropManagedIds Rule ID to intercept. By default, no rule is intercepted.
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
