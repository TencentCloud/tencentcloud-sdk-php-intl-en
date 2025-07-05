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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyK8sApiAbnormalRuleStatus request structure.
 *
 * @method string getRuleID() Obtain Rule ID
 * @method void setRuleID(string $RuleID) Set Rule ID
 * @method boolean getStatus() Obtain Status of the rule. Values: `true` (Enabled), `false` (Disabled)
 * @method void setStatus(boolean $Status) Set Status of the rule. Values: `true` (Enabled), `false` (Disabled)
 */
class ModifyK8sApiAbnormalRuleStatusRequest extends AbstractModel
{
    /**
     * @var string Rule ID
     */
    public $RuleID;

    /**
     * @var boolean Status of the rule. Values: `true` (Enabled), `false` (Disabled)
     */
    public $Status;

    /**
     * @param string $RuleID Rule ID
     * @param boolean $Status Status of the rule. Values: `true` (Enabled), `false` (Disabled)
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
