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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on the ignored baseline check item
 *
 * @method string getRuleName() Obtain Baseline check item name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleName(string $RuleName) Set Baseline check item name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleId() Obtain Baseline check item ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleId(integer $RuleId) Set Baseline check item ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFix() Obtain Fixing suggestions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFix(string $Fix) Set Fixing suggestions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEffectHostCount() Obtain Number of affected hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEffectHostCount(integer $EffectHostCount) Set Number of affected hosts
Note: This field may return null, indicating that no valid values can be obtained.
 */
class IgnoreBaselineRule extends AbstractModel
{
    /**
     * @var string Baseline check item name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleName;

    /**
     * @var integer Baseline check item ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleId;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModifyTime;

    /**
     * @var string Fixing suggestions
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Fix;

    /**
     * @var integer Number of affected hosts
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EffectHostCount;

    /**
     * @param string $RuleName Baseline check item name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleId Baseline check item ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Fix Fixing suggestions
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EffectHostCount Number of affected hosts
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
        }

        if (array_key_exists("EffectHostCount",$param) and $param["EffectHostCount"] !== null) {
            $this->EffectHostCount = $param["EffectHostCount"];
        }
    }
}
